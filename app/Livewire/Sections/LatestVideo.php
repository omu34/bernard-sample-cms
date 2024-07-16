<?php

namespace App\Livewire\Sections;

use App\Models\Sections\LatestVideo as SectionsLatestVideo;
use Livewire\Component;
use Livewire\WithFileUploads;

class LatestVideo extends Component
{
    use WithFileUploads;

    public $videos;
    public $videosFile;
    public $likes;
    public $description;
    public $link;
    public $views;
    public $button_text;
    public $title;

    protected $listeners = ['refreshVideos' => '$refresh'];

    public function mount()
    {
        $this->videos = SectionsLatestVideo::latest()->take(4)->get();
    }

    public function toggleFeatured($videosId)
    {
        $videos = SectionsLatestVideo::find($videosId);
        $videos->is_featured = !$videos->is_featured;
        $videos->save();

        $this->videos = SectionsLatestVideo::latest()->take(4)->get();
        $this->emit('refreshvideos');
    }

    public function savevideos()
    {
        $this->validate([
            'videosFile' => 'required|mimes:mp4,mpeg,ogg,quicktime,webm,wmv,avi,mp3,png,jpeg,gif,pdf,doc,docx,ppt,pptx,xls,xlsx,zip,csv|max:20480',
            'likes' => 'required|integer|max:2000',
            'views' => 'required|integer|max:2000',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'button_text' => 'nullable|string',
            'title' => 'nullable|string',
        ]);

        $filePath = $this->videosFile->store('videos', 'public');

        SectionsLatestVideo::create([
            'description' => $this->description,
            'file_path' => $filePath,
            'link' => $this->link,
            'views' => $this->views,
            'likes' => $this->likes,
            'is_featured' => false,
            'button_text' => $this->button_text,
            'title' => $this->title,
        ]);

        $this->videos = SectionsLatestVideo::latest()->take(4)->get();
        $this->emit('refreshvideos');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->videosFile = null;
        $this->likes = null;
        $this->views = null;
        $this->description = null;
        $this->link = null;
        $this->button_text = null;
        $this->title = null;
    }

    public function render()
    {
        return view('livewire.sections.latest-video', [
            'videos' => $this->videos,
        ]);
    }
}
