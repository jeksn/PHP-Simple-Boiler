<section class="relative w-full px-8 text-gray-700 bg-white">
    <div class="flex flex-row items-center justify-between py-5 mx-auto max-w-7xl">
        <a href="/" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">psb.</a>
       
        <!-- Desktop Nav -->
       
        <nav class="top-0 left-0 z-0 items-center justify-center hidden w-full h-full py-5 -ml-0 space-x-5 text-base md:flex md:-ml-5 md:py-0">
            <a href="/" class="<?= urlIs('/') ? 'underline underline-offset-4' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                Home
            </a>
            <a href="/about " class="<?= urlIs('/about') ? 'underline underline-offset-4 under' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                About
            </a>
        </nav>

        <div class="relative z-10 items-center hidden space-x-3 md:inline-flex md:ml-5 lg:justify-end">
            <a href="https://github.com/jeksn" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none" data-rounded="rounded-md">
                Github
            </a>
        </div>
        
        <!-- Mobile Nav -->

        <div class="block md:hidden" x-data="{ open: false }">
            <button x-on:click="open = ! open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="{ 'hidden': open, 'block': !open }">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="{ 'hidden': !open, 'block': open }">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        
            <div x-show="open" class="absolute left-0 z-50 w-full pb-12 bg-white border-b border-neutral-200" x-transition>
                <nav class="flex flex-col items-center justify-center w-full h-full gap-2 py-5 -ml-0 text-base md:py-0">
                    <a href="/" class="<?= urlIs('/') ? 'underline underline-offset-4' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                        Home
                    </a>
                    <a href="/about" class="<?= urlIs('/about') ? 'underline underline-offset-4 under' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                        About
                    </a>
                </nav>
                <div class="relative z-10 inline-flex items-center justify-center w-full space-x-3">
                    <a href="https://github.com/jeksn" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none" data-rounded="rounded-md">
                        Github
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
