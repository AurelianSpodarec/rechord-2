<x-section class="bg-black">
<x-container>


    <div>

        <div class="text-white">
            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <?php echo esc_html( $title ); ?>
            <?php endif; ?>

            <?php if ( $content = get_sub_field( 'content' ) ) : ?>
                <?php echo $content; ?>
            <?php endif; ?>
        </div>

        <div>
            <?php if ( $video_url = get_sub_field( 'video_url' ) ) : ?>
                <?php echo esc_html( $video_url ); ?>
            <?php endif; ?>
        </div>

    </div>

    

</x-container>
</x-section>