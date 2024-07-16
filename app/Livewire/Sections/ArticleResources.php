<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Content\Article;

class ArticleResources extends Component
{
    use WithPagination;

    public $sectiondata;
    public $search = '';

    public function searchArticle()
    {
        $this->validate([
            'search' => 'required|min:3',
        ]);

        $this->resetPage();
    }

    public function render()
    {
        $articles = Article::query();

        if ($this->search) {
            $articles->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            });
        }

        return view('livewire.sections.article-resources', [
            'sectiondata' => $this->sectiondata,
            'articles' => $articles->paginate(8)
        ]);
    }
}
