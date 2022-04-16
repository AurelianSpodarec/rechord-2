<?php

    $background_image = get_sub_field( 'background_image' );
    $bg = $background_image ? $background_image['url'] : "";

?> 

<x-section class="bg-black bg-cover relative" style="background-image: url('<?php echo esc_url( $bg ); ?>')">
<x-container>

   
 

    <div class="lg:grid lg:grid-cols-2 lg:gap-8 z-10 relative">


        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
        <div class="lg:py-24">
            
            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                    <span class="block"><?php echo $title; ?></span>
                <?php endif; ?>
                <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-cyan-400 sm:pb-5">ship web apps</span>
            </h1>

            <div class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                <?php if ( $sub_title = get_sub_field( 'sub-title' ) ) : ?>
                    <?php echo $sub_title; ?>
                <?php endif; ?>
            </div>
            
        </div>
        </div>

        <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
             </div>
        </div>


            

    </div><!-- /grid -->


    {{-- right --}}
    <div class="absolute left-0 right-0 bottom-0">
        <svg class="w-full h-auto" xmlns="http://www.w3.org/2000/svg" height="729" viewBox="0 0 1440 729" fill="none">
            <mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-106" y="0" width="1546" height="729">
                <path transform="matrix(-1 0 0 1 1440 0)" fill="#000" d="M0 0h1546v729H0z"/>
            </mask>
            <g mask="url(#a)">
                <path d="M-105.537 682.662 1458 196v675.368H-105.537V682.662z" fill="url(#b)"/>
            </g>
            <defs>
                <linearGradient id="b" x1="890.661" y1="738.281" x2="924.781" y2="479.326" gradientUnits="userSpaceOnUse">
                    <stop/>
                    <stop offset="1" stop-color="#260731"/>
                </linearGradient>
            </defs>
        </svg>
    </div>
 

</x-container>
</x-section>

