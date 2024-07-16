<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pages\PageSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageSections = [
            // Home page
            ['page_id' => 1, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 1, 'section_id' => 2, 'order' => 2,],
            ['page_id' => 1, 'section_id' => 3, 'order' => 3,],
            ['page_id' => 1, 'section_id' => 4, 'order' => 4,],
            ['page_id' => 1, 'section_id' => 5, 'order' => 5,],

            // About Us page
            ['page_id' => 2, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 2, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 2, 'section_id' => 7, 'order' => 3,],
            ['page_id' => 2, 'section_id' => 8, 'order' => 4,],
            ['page_id' => 2, 'section_id' => 9, 'order' => 5,],

            // Classes page
            ['page_id' => 3, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 3, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 3, 'section_id' => 10, 'order' => 3,],
            ['page_id' => 3, 'section_id' => 11, 'order' => 4,],
            ['page_id' => 3, 'section_id' => 3, 'order' => 5,],
            ['page_id' => 3, 'section_id' => 4, 'order' => 6,],

            // Articles & Resources page
            ['page_id' => 4, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 4, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 4, 'section_id' => 12, 'order' => 3,],
            ['page_id' => 4, 'section_id' => 13, 'order' => 4,],
            ['page_id' => 4, 'section_id' => 14, 'order' => 5,],

            // Events
            ['page_id' => 5, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 5, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 5, 'section_id' => 15, 'order' => 3,],

            // Contact Us
            ['page_id' => 6, 'section_id' => 1, 'order' => 1,],
            ['page_id' => 6, 'section_id' => 6, 'order' => 2,],
            ['page_id' => 6, 'section_id' => 16, 'order' => 3,],
            ['page_id' => 6, 'section_id' => 17, 'order' => 4,],
        ];

        foreach ($pageSections as $pageSection) {
            PageSection::create([
                'page_id' => $pageSection['page_id'],
                'section_id' => $pageSection['section_id'],
                'order' => $pageSection['order'],
            ]);
        }
    }
}
