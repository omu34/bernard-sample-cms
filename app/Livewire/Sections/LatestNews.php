<?php
namespace App\Livewire\Sections;

use App\Models\Sections\LatestNews as SectionsLatestNews;
use Livewire\Component;
use Livewire\WithFileUploads;

class LatestNews extends Component
{
    use WithFileUploads;

    public $news;
    public $newsFile;
    public $likes;
    public $description;
    public $link;
    public $views;
    public $button_text;
    public $title;

    protected $listeners = ['refreshNews' => '$refresh'];

    public function mount()
    {
        $this->news = SectionsLatestNews::latest()->take(4)->get();
    }

    public function toggleFeatured($newsId)
    {
        $news = SectionsLatestNews::find($newsId);
        $news->is_featured = !$news->is_featured;
        $news->save();

        $this->news = SectionsLatestNews::latest()->take(4)->get();
        $this->emit('refreshNews');
    }

    public function saveNews()
    {
        $this->validate([
            'NewsFile' => 'required|mimes:mp4,mpeg,ogg,quicktime,webm,wmv,avi,mp3,png,jpeg,gif,pdf,doc,docx,ppt,pptx,xls,xlsx,zip,csv|max:20480',
            'likes' => 'required|integer|max:2000',
            'views' => 'required|integer|max:2000',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'button_text' => 'nullable|string',
            'title' => 'nullable|string',
        ]);

        $filePath = $this->NewsFile->store('News', 'public');

        SectionsLatestNews::create([
            'description' => $this->description,
            'file_path' => $filePath,
            'link' => $this->link,
            'views' => $this->views,
            'likes' => $this->likes,
            'is_featured' => false,
            'button_text' => $this->button_text,
            'title' => $this->title,
        ]);

        $this->news = SectionsLatestNews::latest()->take(4)->get();
        $this->emit('refreshNews');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->newsFile = null;
        $this->likes = null;
        $this->views = null;
        $this->description = null;
        $this->link = null;
        $this->button_text = null;
        $this->title = null;
    }

    public function render()
    {
        return view('livewire.sections.latest-News', [
            'news' => $this->news,
        ]);
    }
}









