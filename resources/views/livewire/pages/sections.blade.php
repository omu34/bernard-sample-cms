<div>
    @if($section->id == 1)
        <livewire:sections.banner :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 2)
        <livewire:sections.intro-video-text :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 3)
        <livewire:sections.appliances :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 4)
        <livewire:sections.demonstration-classes :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 5)
        <livewire:sections.testimonials :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 6)
        <livewire:sections.breadcrumbs :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 7)
        <livewire:sections.image-left-text-right :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 8)
        <livewire:sections.why-us :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 9)
        <livewire:sections.our-partners :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 10)
        <livewire:sections.cooking-stats :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 11)
        <livewire:sections.latest-videos :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 12)
        <livewire:sections.article-resources :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 13)
        <livewire:sections.resources :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 14)
        <livewire:sections.shops :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 15)
        <livewire:sections.events :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 16)
        <livewire:sections.contact-sub-banner :section="$section" :sectiondata="$sectiondata"/>
    @elseif($section->id == 17)
        <livewire:sections.contact-form :section="$section" :sectiondata="$sectiondata"/>
    @endif
</div>
