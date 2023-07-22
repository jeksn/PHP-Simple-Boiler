<!-- <nav class="my-4">
<a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
<a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
</nav> -->




<section class="relative w-full px-8 text-gray-700 bg-white">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <a href="/" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">psb.</a>

        <nav class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
            <a href="/" class="<?= urlIs('/') ? 'underline underline-offset-4' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                Home
            </a>
            <a href="/about " class="<?= urlIs('/about') ? 'underline underline-offset-4 under' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                About
            </a>
        </nav>

        <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
            <a href="https://github.com/jeksn" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none" data-rounded="rounded-md">
                Github
            </a>
        </div>
    </div>
</section>
