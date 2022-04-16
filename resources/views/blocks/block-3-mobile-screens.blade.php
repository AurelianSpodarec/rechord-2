<x-section class="bg-black">
<x-container>

    <div class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
    <?php if ( have_rows( 'mobile' ) ) : ?>
    <?php while ( have_rows( 'mobile' ) ) : the_row(); ?>
        
        
        <div class="text-center text-white">
            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <span class="font-bold text-5xl mb-12 block"><?php echo esc_html( $title ); ?></span>
            <?php endif; ?>

            <?php if ( $content = get_sub_field( 'content' ) ) : ?>
            <div class="mb-12">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>

            <?php
            $image = get_sub_field( 'image' );
            if ( $image ) : ?>
                <img class="mt-auto mx-auto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <?php endif; ?>

        </div>


    <?php endwhile; ?>
    <?php endif; ?>
    </div>

</x-section>
</x-container>