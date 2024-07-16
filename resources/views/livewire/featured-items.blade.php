<div class="bg-white bg-center py-12 sm:py-16">
    <div class="mx-auto lg:px-0 px-10 max-w-5xl">
        <div class="mx-auto flex flex-col items-center sm:flex-row sm:justify-between ">
            <h2 class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-gray-900 sm:text-3xl">Featured</h2>
        </div>

        <div
            class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-2 nextItems">
            @foreach ($currentItems as $currentItem)
                <article data-aos="fade-up" data-aos-duration="1500"
                    class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-44 sm:pt-60 lg:pt-48">

                    @php
                        $mimeType = Storage::disk('public')->mimeType($currentItem->file_path);
                        echo '<!-- File Path: '. Storage::url($currentItem->file_path) .' -->';
                        echo '<!-- MIME Type: '. $mimeType .' -->';
<script>
    document.addEventListener('livewire:load', function() {
        setInterval(function() {
            console.log('Calling nextItems method'); // Debugging line
            @this.call('nextItems');
        }, 10000); // 10 seconds
    });
</script>
