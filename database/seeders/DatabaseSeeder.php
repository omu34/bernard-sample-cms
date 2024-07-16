<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\PageComponent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(PageSectionSeeder::class);
        // $this->call(BannerSeeder::class);
        // $this->call(IntroVideoTextSeeder::class);
        // $this->call(ApplianceSectionSeeder::class);
        // $this->call(ApplianceSeeder::class);
        // $this->call(DemonstrationClassSeeder::class);
        // $this->call(TestimonialSeeder::class);
        // $this->call(TestimonialSectionSeeder::class);
        // $this->call(BreadcrumbsSeeder::class);
        // $this->call(ImageLeftTextRightSeeder::class);
        // $this->call(WhyUsSeeder::class);
        // $this->call(BenefitsSeeder::class);
        // $this->call(OurPartnersSeeder::class);
        // $this->call(PartnersSeeder::class);
        // $this->call(CookingStatsSeeder::class);
        // $this->call(StatsSeeder::class);
        // $this->call(LatestVideosSeeder::class);
        // $this->call(VideosSeeder::class);
        // $this->call(ArticlesSectionSeeder::class);
        // $this->call(ArticlesSeeder::class);
        // $this->call(ResourcesSectionSeeder::class);
        // $this->call(ResourcesSeeder::class);
        // $this->call(ShopsSectionSeeder::class);
        // $this->call(ShopsSeeder::class);
        // $this->call(EventSectionSeeder::class);
        // $this->call(EventSeeder::class);
        // $this->call(EventImageSeeder::class);
        // $this->call(ContactSubBannerSeeder::class);
        // $this->call(ContactFormSeeder::class);
        // $this->call(ContactSeeder::class);
        // $this->call(SocialSeeder::class);
        // $this->call(FooterPageSeeder::class);
        // $this->call(FooterLinkSeeder::class);
        // $this->call(QuickLinkSeeder::class);
    }
}
