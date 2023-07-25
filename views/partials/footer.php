<footer>
   <section class="relative max-w-screen-xl px-8 mx-auto text-gray-700">
      <div class="flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row">
         <a href="/" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none dark:text-white">psb.</a>
         <div class="flex flex-col items-center justify-center w-full h-full py-5 text-base md:items-end md:py-0">
               <a href="/" class="<?= urlIs('/') ? 'underline underline-offset-4' : '' ?> ease-in-out font-medium leading-6 text-gray-600 dark:text-white transition duration-150 hover:text-gray-900">
                  Home
               </a>
               <a href="/about" class="<?= urlIs('/about') ? 'underline underline-offset-4' : '' ?> ease-in-out font-medium leading-6 text-gray-600 dark:text-white transition duration-150 hover:text-gray-900">
                  About
               </a>
               <a href="https://github.com/jeksn" class="font-medium leading-6 text-gray-600 transition duration-150 ease-in-out dark:text-white hover:text-gray-900">
                  Github
               </a>
         </div>
      </div>
   </section>
</footer>
</main>
</body>
</html>