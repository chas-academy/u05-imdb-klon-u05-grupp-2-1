<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css'])
    <script src="https://kit.fontawesome.com/a0315d2788.js" crossorigin="anonymous"></script>
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased bg-sky-950">
    @include('layouts.nav')
        
<x-guest-layout>
    <div class="bg-sky-700/50">
        <!-- <div class="md:flex"> -->
        <div class="md:grid ms:grid-cols-2">
            @foreach($randomContent as $randomItem)
            <div id="contentToUpdate">

        
                <!-- Here is where the content will be displayed --> 

            </div>
                

            <!-- buttons for add to watchlist, create new list, rating, share movie, Cast and Find more movies like this -->
            <div class="w-1/2">
                    <div class="flex ml-2 mt-2 md:justify-center 2xl:-ml-2">
                        <x-primary-button class="mb-2">
                            <a href="{{ route('login') }}">Watchlist +</a>
                        </x-primary-button>
                        <x-primary-button>List +</x-primary-button>
                        <x-primary-button> 
                            <a href="">
                                <img class="h-6 w-auto md:h-12 md:w-auto" src="{{ asset('/images/astro-like-removebg.png') }}" alt="Rating logo">
                            </a>
                       </x-primary-button>
                    </div>
            </div>
            @break
            @endforeach
        </div>


        <!-- Hidden movies on smaller screen -->
        <div class="hidden md:contents">
            <div class="md:flex md:justify-center md:items-center">

                <div class="md:mt-2 md:w-4/5">
                    <div class="rounded-lg flex ml-2 mr-2 mb-4">
                        @foreach($randomContent as $randomItem)
                                <img src="{{$randomItem->poster}}" alt="{{$randomItem->name}}" class="rounded-l-lg w-[200px] h-[300px]] ml-4">

                            <div class="bg-sky-700 rounded-r-lg">

                                <p class="text-sky-50 text-center md:text-base 2xl:text-xl">{{$randomItem->name}}</span></p>    

                                    <p class="text-sky-50 text-center font-inter p-2 md:text-sm 2xl:text-base">
                                        {{$randomItem->description}}</p>
                                <!-- Genre, Time, Year and Rating -->
                                <div class="flex justify-center">
                                    <div class="text-sm text-sky-50 font-inter mt-2">{{$randomItem->release}} | {{$randomItem->runtime}} | 9.0/10</div>
                                    <img class="h-4 w-auto md:h-8" src="{{ asset('/images/astro-like-removebg.png') }}" alt="Rating logo">
                                </div> 
                                @foreach($randomItem->genres as $genre)
                                    <div class="text-center text-sm text-sky-50 font-inter mb-2 flex flex-row flex-wrap justify-center">
                                        {{$genre['name']}}
                                    </div>
                                @endforeach
                                <div class="flex ml-2 mt-2 md:justify-center">
                                    <x-button-dark>
                                        <a href="{{ route('movie.show', ['id' => $randomItem->id]) }}">Watch</a>
                                    </x-button-dark>
                                    <x-button-dark>
                                        <a href=" {{ route('login') }}">Watchlist +</a>
                                    </x-button-dark>
                                    <x-button-dark><img class="md:h-8 md:w-auto 2xl:h-12 2xl:w-auto" src="{{ asset('/images/astro-like-removebg.png') }}" alt="Rating logo"></x-button-dark>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Buttons for add watchlist, see all, only movies, only series -->

        <div class="hidden md:contents">
            <div class="flex justify-center m-8">
                <x-primary-btn>
                    <a href=" {{ route('login') }}">Watchlist +</a>
                </x-primary-btn>
                <x-primary-btn class="ml-8">
                    <a href="{{ route('welcome') }}">All</a>
                </x-primary-btn>
                <x-primary-btn class="ml-8">
                    <a href="{{ route('genres.series') }}">Series</a>
                </x-primary-btn>
                <x-primary-btn class="ml-8"> 
                    <a href="{{ route('genres.movies') }}">Movies</a>
                </x-primary-btn>
            </div>
        </div>

        

        <!-- Movie / serie content -->
        <div class="md:mx-20">
        @foreach($latestInGenre as $genre)
            <div class="bg-sky-700 mb-8 mt-8 border-solid border-y-4 border-sky-800/50 md:rounded-lg">
                    
                        
                    <a href="{{ route('genres.show', ['id' => $genre['id']]) }}">
                        <h2 class="text-sky-50 ml-2 font-medium pt-2 md:text-2xl">{{ $genre['name'] }}</h2>
                    </a>
                        <!-- Unique IDs for genre container and carousel -->
                        <div id="genreContainer_{{ $genre['id'] }}" class="relative" data-carousel="slide">
                            <div id="genreCarousel_{{ $genre['id'] }}" class="overflow-x-hidden whitespace-nowrap mb-4 max-w-full relative">
                                <div class="flex">
                                    @foreach($genre['items'] as $item)
                                        <div class="inline-block w-[50%] md:w-[25%] lg:w-[20%] xl:w-[15%] h-auto p-4 mx-1.5">
                                            <div class="relative h-[250px] w-[175px]">
                                            <img class="w-[175px] h-[250px] rounded-lg border-solid border-4 border-sky-800/50 object-fit" src="{{ $item->poster }}" alt="{{ $item->name }}">
                                                <button type="submit" class="absolute flex items-center justify-center w[30px inset-x-0 top-0 h-8 bg-blue-950 rounded hover:bg-blue-800 m-1 bg-opacity-75">
                                                    <a href="{{ route('login') }}" class="material-symbols-outlined text-sky-50">bookmark_add</span>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
</x-guest-layout>

@include('layouts.footer')

    </body>
</html>


<script>

    document.addEventListener('DOMContentLoaded', function() {
        // Fetch all genre containers
        const genreContainers = document.querySelectorAll('[id^="genreContainer_"]');
        
        genreContainers.forEach(genreContainer => {
            const genreCarouselId = genreContainer.getAttribute('id').replace('genreContainer_', 'genreCarousel_');
            const genreCarousel = document.getElementById(genreCarouselId);
            
            // Check if carousel exists
            if (genreCarousel) {
                // Create and append buttons
                const prevButton = createButton('&#10094;', -1, genreCarouselId);
                const nextButton = createButton('&#10095;', 1, genreCarouselId);
                
                genreContainer.appendChild(prevButton);
                genreContainer.appendChild(nextButton);
            }
        });

        // Add event listener to buttons
        document.querySelectorAll('.carousel-button').forEach(button => {
            button.addEventListener('click', function() {
                const carouselId = this.getAttribute('data-carousel');
                const direction = parseInt(this.getAttribute('data-direction'), 10);
                scrollCarousel(carouselId, direction);
            });
        });
    });

    function createButton(text, direction, carouselId) {
        const button = document.createElement('button');
        button.className = 'carousel-button absolute px-4 cursor-pointer bg-sky-950 bg-opacity-85 text-white shadow-lg rounded-lg hover:bg-sky-600';
        button.style.left = direction === -1 ? '4px' : 'auto';
        button.style.right = direction === 1 ? '4px' : 'auto';
        button.style.transform = 'translate(-50%, -50%)';
        button.style.top = '50%';
        button.style.transform = 'translateY(-50%)';
        button.innerHTML = text;
        button.setAttribute('data-direction', direction);
        button.setAttribute('data-carousel', carouselId);
        return button;
    }

    function scrollCarousel(carouselId, direction) {
        let container = document.getElementById(carouselId);
        let scrollAmount = container.clientWidth / 2 * direction;
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }

</script>





<script>
    // Define an array to hold the random content
    var randomContent = @json($randomContent);
    
    // Function to fetch and update random content
    function fetchAndUpdateRandomContent() {
        // Randomly select one of the three data points
        var randomIndex = Math.floor(Math.random() * 3);
        var randomItem = randomContent[randomIndex];

        // Update the specific content with the fetched data
        document.getElementById('contentToUpdate').innerHTML = `
            <div class="flex pt-2 md:flex md:justify-center md:items-center">
                

                <!-- Img for movie -->
                <div class="w-1/2 md:ml-2 md:w-1/3 md:pl-32 2xl:pl-48">
                    <img class="h-[130px] w-auto rounded-lg ml-6 md:h-[400px] md:w-auto md:ml-0" src="{{ $randomItem->poster }}" alt="{{$randomItem->name}}">
                    <div class="grid grid-cols-3 gap-2 p-2">
                        @foreach($randomItem->genres as $genre)
                            <div class="text-sm text-sky-50 font-inter mb-2 flex flex-row flex-wrap ml-4">
                                {{$genre['name']}}
                            </div>
                        @endforeach
                    </div>
                        <div class="flex">
                            <div class="text-xs text-sky-50 font-inter font-light mt-1 ml-4 md:text-lg md:font-light md:ml-4">{{$randomItem->release}} | {{$randomItem->runtime }}| {{$randomItem->rating}}</div>
                            <img class="h-6 w-auto md:h-8" src="{{ asset('/images/astro-like-removebg.png') }}" alt="Rating logo">
                        </div>
                </div>
    
                <!-- Trailer for movie -->
                <div class="basis-1/2 md:basis-none flex justify-center">
                    <iframe class="h-[185px] w-2/3 rounded-lg border-solid border-2 border-sky-600 md:ml-2 md:h-[500px] md:w-auto md:border-4 md:ml-6" src="{{$randomItem->trailer}}" alt="{{$randomItem->name}}" data-id="{{$randomItem->id}}"></iframe>
                </div>
                
            </div>
        `;
    }

    // Function to fetch and update random content initially
    fetchAndUpdateRandomContent();

    // Set interval to fetch and update random content every 5 minutes (300,000 milliseconds)
    setInterval(fetchAndUpdateRandomContent, 300000); // 300000 milliseconds = 5 minutes

    // Function to fetch and update random content every 24 hours (86,400,000 milliseconds)
    setInterval(fetchAndUpdateRandomContent, 86400000); // 86400000 milliseconds = 24 hours
</script>