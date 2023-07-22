<footer>
   <section class="relative max-w-screen-xl px-8 mx-auto text-gray-700 bg-white">
      <div class="flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row">
         <a href="/" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">psb.</a>

         <div class="top-0 left-0 z-0 flex flex-col items-center justify-center w-full h-full py-5 -ml-0 text-base md:items-end md:-ml-5 md:py-0 md:absolute">
               <a href="/" class="<?= urlIs('/') ? 'underline underline-offset-4' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                  Home
               </a>
               <a href="/about " class="<?= urlIs('/about') ? 'underline underline-offset-4 under' : '' ?> ease-in-out font-medium leading-6 text-gray-600 transition duration-150 hover:text-gray-900">
                  About
               </a>
               <a href="https://github.com/jeksn " class="font-medium leading-6 text-gray-600 transition duration-150 ease-in-out hover:text-gray-900">
                  Github
               </a>
         </div>
      </div>
   </section>
</footer>
</main>
</body>
</html>