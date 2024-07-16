<?php
namespace App\Livewire\Sections;

use App\Models\Sections\LatestGallery as SectionsLatestGallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class LatestGallery extends Component
{
    use WithFileUploads;

    public $gallery;
    public $galleryFile;
    public $likes;
    public $description;
    public $link;
    public $views;
    public $button_text;
    public $title;

    protected $listeners = ['refreshGallery' => '$refresh'];

    public function mount()
    {
        $this->gallery = SectionsLatestGallery::latest()->take(4)->get();
    }

    public function toggleFeatured($galleryId)
    {
        $gallery = SectionsLatestGallery::find($galleryId);
        $gallery->is_featured = !$gallery->is_featured;
        $gallery->save();

        $this->gallery = SectionsLatestGallery::latest()->take(4)->get();
        $this->emit('refreshGallery');
    }

    public function saveGallery()
    {
        $this->validate([
            'galleryFile' => 'required|mimes:mp4,mpeg,ogg,quicktime,webm,wmv,avi,mp3,png,jpeg,gif,pdf,doc,docx,ppt,pptx,xls,xlsx,zip,csv|max:20480',
            'likes' => 'required|integer|max:2000',
            'views' => 'required|integer|max:2000',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'button_text' => 'nullable|string',
            'title' => 'nullable|string',
        ]);

        $filePath = $this->galleryFile->store('gallery', 'public');

        SectionsLatestGallery::create([
            'description' => $this->description,
            'file_path' => $filePath,
            'link' => $this->link,
            'views' => $this->views,
            'likes' => $this->likes,
            'is_featured' => false,
            'button_text' => $this->button_text,
            'title' => $this->title,
        ]);

        $this->gallery = SectionsLatestGallery::latest()->take(4)->get();
        $this->emit('refreshGallery');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->galleryFile = null;
        $this->likes = null;
        $this->views = null;
        $this->description = null;
        $this->link = null;
        $this->button_text = null;
        $this->title = null;
    }

    public function render()
    {
        return view('livewire.sections.latest-gallery', [
            'gallery' => $this->gallery,
        ]);
    }
}
