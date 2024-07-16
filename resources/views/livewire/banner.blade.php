<div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-40">
        {{-- navigation here--}}
         @livewire('sections.header-navigation')
    </header>
    <div class="relative isolate overflow-hidden pt-14 lg:px-0 px-10">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="/test5.jpg" alt="" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </div>

        <!-- Content Container -->
        <div class="relative mx-auto max-w-7xl py-16 sm:py-24 lg:pt-44">
            <!-- Newsroom Heading -->
            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                <time datetime="2020-03-16" class="text-white mr-6">Mar 16, 2020</time>
                <div class="-ml-4 flex items-center gap-x-2">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex text-white">
                        345 Views
                    </div>
                    <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="ml-2  flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-gray-300">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9844 5.03574L11.985 5.03637C13.101 6.1464 13.1001 7.94721 11.9856 9.04973L11.9844 9.051L9.05833 11.977C9.05816 11.9772 9.05799 11.9774 9.05782 11.9775C7.94079 13.088 6.13841 13.087 5.0291 11.9777L2.0091 8.95766C1.44305 8.39161 1.14398 7.60986 1.17971 6.80879C1.17972 6.80862 1.17972 6.80845 1.17973 6.80828L1.33964 3.47676C1.33965 3.47664 1.33966 3.47652 1.33966 3.47639C1.39791 2.32107 2.32059 1.39861 3.48172 1.34636L3.48271 1.34632L6.81605 1.18632L6.81745 1.18625C7.6152 1.14457 8.39691 1.44829 8.96436 2.01574L11.9844 5.03574ZM3.08007 5.33337C3.08007 6.57746 4.0893 7.5867 5.3334 7.5867C6.57749 7.5867 7.58673 6.57746 7.58673 5.33337C7.58673 4.08927 6.57749 3.08003 5.3334 3.08003C4.0893 3.08003 3.08007 4.08927 3.08007 5.33337Z" fill="#FAFAFA" stroke="#FAFAFA" stroke-width="0.666667"/>
                            </svg>

                        <div class="ml-1 flex items-center gap-x-2">

                            <div class="flex text-white gap-x-2">
                                Innovation
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 data-aos="fade-left" data-aos-duration="1500" class="text-4xl max-w-5xl my-6 font-bold text-white lg:py-0 py-5">Information House Set to Invest Kshs.208 Million Towards the Promotion of Credibility</h1>

            <p class="text-white max-w-3xl pb-5">Information House  will invest up to KShs.200 million in the next  years to drive the uptake of informational services.</p>

            <div class="flex items-center justify-start gap-x-12 mt-6">
                <!-- Button: Share This -->
                <button class="flex items-center px-4 py-2 text-base font-medium leading-5 bg-white uppercase text-blue-900 border border-transparent rounded-xl shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Share
                    <!-- Chevron Icon -->
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>


                <!-- Horizontal Stack of Icons -->
                <div class="flex items-center space-x-12">
                    <!-- Icon: Twitter -->
                    <a href="https://twitter.com/intent/tweet?url=https://your-article-url.com" target="_blank" rel="noopener noreferrer">


                        <svg class="h-6 w-6" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.5 0.51642H6.41516L11.8827 7.87074L18.6884 0.3479L20.3055 0.375987L12.6889 8.92871L20.5 19.4335H14.5872L9.42665 12.5801L3.12245 19.6021H1.53117L8.6439 11.5783L0.5 0.51642ZM5.8574 1.60248H2.73342L15.2317 18.3194H18.2994L5.8574 1.60248Z"
                                    fill="#Ffffff"></path>
                            </svg>
                    </a>

                    <!-- Icon: Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://your-article-url.com" target="_blank" rel="noopener noreferrer">
                        <svg width="21" class="h-7 w-7" height="20" viewBox="0 0 21 20" class="w-6 h-6 text-blue-900" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.2856 10C20.2856 4.48 15.8056 0 10.2856 0C4.76564 0 0.285645 4.48 0.285645 10C0.285645 14.84 3.72564 18.87 8.28564 19.8V13H6.28564V10H8.28564V7.5C8.28564 5.57 9.85564 4 11.7856 4H14.2856V7H12.2856C11.7356 7 11.2856 7.45 11.2856 8V10H14.2856V13H11.2856V19.95C16.3356 19.45 20.2856 15.19 20.2856 10Z" fill="#Ffffff"/>
                            </svg>
                    </a>

                    <!-- Icon: LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://your-article-url.com" target="_blank" rel="noopener noreferrer">
                        <svg width="17" class="h-7 w-7" height="18" viewBox="0 0 17 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9167 0.725098C15.4029 0.725098 15.8692 0.918252 16.213 1.26207C16.5568 1.60589 16.75 2.0722 16.75 2.55843V15.3918C16.75 15.878 16.5568 16.3443 16.213 16.6881C15.8692 17.0319 15.4029 17.2251 14.9167 17.2251H2.08333C1.5971 17.2251 1.13079 17.0319 0.786971 16.6881C0.443154 16.3443 0.25 15.878 0.25 15.3918V2.55843C0.25 2.0722 0.443154 1.60589 0.786971 1.26207C1.13079 0.918252 1.5971 0.725098 2.08333 0.725098H14.9167ZM14.4583 14.9334V10.0751C14.4583 9.28254 14.1435 8.52245 13.5831 7.96203C13.0226 7.40161 12.2626 7.08676 11.47 7.08676C10.6908 7.08676 9.78333 7.56343 9.34333 8.27843V7.26093H6.78583V14.9334H9.34333V10.4143C9.34333 9.70843 9.91167 9.13093 10.6175 9.13093C10.9579 9.13093 11.2843 9.26614 11.525 9.50681C11.7656 9.74748 11.9008 10.0739 11.9008 10.4143V14.9334H14.4583ZM3.80667 5.82176C4.2151 5.82176 4.60681 5.65952 4.89561 5.37071C5.18442 5.0819 5.34667 4.6902 5.34667 4.28176C5.34667 3.42926 4.65917 2.7326 3.80667 2.7326C3.3958 2.7326 3.00177 2.89581 2.71124 3.18634C2.42072 3.47686 2.2575 3.8709 2.2575 4.28176C2.2575 5.13426 2.95417 5.82176 3.80667 5.82176ZM5.08083 14.9334V7.26093H2.54167V14.9334H5.08083Z"
                            fill="#ffffff"></path>
                    </svg>
                    </a>
                </div>
            </div>



        </div>
    </div>
</div>















