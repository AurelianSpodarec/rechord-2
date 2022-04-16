@php

    $args = array( 
        'post_type' => 'post',
        'posts_per_page' => 3,
    );
    $query = new WP_Query( $args );


@endphp


<x-section class="bg-black">
<x-container>

 


    <div class="grid md:grid-cols-3 gap-8">    
    @if($query->have_posts())


        @while($query->have_posts()) @php($query->the_post())
        <x-card 
            rawImage="{!! get_the_post_thumbnail() !!}"
            title="{!! get_the_title() !!}"
            content="{!! get_the_excerpt() !!}"
            permalink="{!! get_the_permalink() !!}"
            category="{!! get_the_category_list() !!}"
        />
        @endwhile


    @endif
    @php(wp_reset_postdata())
    </div>

 
</x-container>
</x-section>