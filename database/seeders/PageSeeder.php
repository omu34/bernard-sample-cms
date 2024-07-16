<?php

namespace Database\Seeders;

use App\Models\Pages\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'name' => 'Home',
            'slug' => 'home',
            'order' => 1,
            'in_top_nav' => false,
            'description' => 'This is the home page.',
            'keywords' => 'home, page, description',
            'meta' => 'This is the home page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'About Us',
            'slug' => 'about-us',
            'order' => 2,
            'in_top_nav' => true,
            'description' => 'This is the about us page.',
            'keywords' => 'about, page, description',
            'meta' => 'This is the about page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Classes',
            'slug' => 'classes',
            'order' => 3,
            'in_top_nav' => true,
            'description' => 'This is the classes page.',
            'keywords' => 'classes, page, description',
            'meta' => 'This is the classes page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Articles & Resources',
            'slug' => 'articles-resources',
            'order' => 4,
            'in_top_nav' => true,
            'description' => 'This is the articles & resources page.',
            'keywords' => 'articles, resources, page, description',
            'meta' => 'This is the articles & resources page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Events',
            'slug' => 'events',
            'order' => 5,
            'in_top_nav' => true,
            'description' => 'This is the events page.',
            'keywords' => 'events, page, description',
            'meta' => 'This is the events page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Contact Us',
            'slug' => 'contact-us',
            'order' => 6,
            'in_top_nav' => true,
            'description' => 'This is the contact us page.',
            'keywords' => 'contact, page, description',
            'meta' => 'This is the contact page.',
            'thumbnail' => 'placeholder.png',
        ]);
    }
}
