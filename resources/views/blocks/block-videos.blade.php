<x-section class="bg-black relative">
<x-container>
    

    <div class="text-center mb-32">
        <h2 class="text-3xl tracking-tight font-extrabold text-white sm:text-4xl mb-10">
            Videos
        </h2>
        <p class="mt-3 max-w-2xl mx-auto text-sm text-white sm:mt-4">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
        </p>
    </div>

    <div class="relative z-20 space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
    <?php if ( have_rows( 'videos' ) ) : ?>
    <?php while ( have_rows( 'videos' ) ) : the_row(); ?>

        <?php if ( $video_url = get_sub_field( 'video_url' ) ) : ?>
            <iframe 
                class="w-full"
                src="<?php echo esc_html( $video_url ); ?>"  
                height="230" 
                frameborder="0" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen
            >
            </iframe> 
        <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>
    </div>



    <div class="absolute left-0 right-0 bottom-0 z-10">
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