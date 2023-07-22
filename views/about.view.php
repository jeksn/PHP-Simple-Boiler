<?php 

require('partials/head.php');
require('partials/nav.php');

?>

<section class="flex items-center justify-center py-10 text-white bg-white sm:py-16 md:py-24 lg:py-32">
    <div class="relative max-w-3xl px-10 text-center text-white auto lg:px-0">
        <div class="flex flex-col w-full md:flex-row">

            <!-- Top Text -->
            <div class="flex justify-between">
                <h1 class="relative flex flex-col text-6xl font-extrabold text-left text-black">
                    <span class="text-teal-500"><?= $page_heading; ?></span>
                    <span>Page</span>
                </h1>
            </div>
        </div>

        <!-- Separator -->
        <div class="my-4 border-b border-gray-300 lg:my-12"></div>

        <!-- Bottom Text -->
        <p class="text-left text-gray-500 xl:text-xl">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima aspernatur, ipsa optio iusto commodi tempore perspiciatis maxime vel odio porro fugiat ipsum, eveniet unde maiores praesentium culpa rerum voluptatem.
            <br>
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint obcaecati quos veniam sed officia cumque blanditiis aliquid ipsa, ipsum ut voluptatum voluptas nulla laborum alias officiis. Consequuntur illum possimus quo!
            <br>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam dolores expedita, quaerat modi quia facere assumenda necessitatibus laboriosam nobis itaque vero quo veritatis at inventore porro odit, animi beatae aperiam!
        </p>
    </div>
</section>

   
<?php require ('partials/footer.php'); ?>