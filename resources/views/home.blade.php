@php
    $args = ([
        'post_type' => 'post',
        'posts_per_page' => 9,
        // 'paged' => ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1
    ]);

    $query = new WP_Query( $args );
@endphp


@extends('layouts.app')
@section('content')




    <x-section>
    <x-container>

        <div class="text-center">
            <h1 style="color: #616161;" class="font-bold lg:text-7xl">Rechord Blog</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-24">
        @while( $query->have_posts() ) @php( $query->the_post() )

            <x-card 
                title="{!! get_the_title() !!}"
                permalink="{!! get_the_permalink() !!}"
                rawImage="{!! get_the_post_thumbnail() !!}" 
            />

        @endwhile
        </div>
    

    </x-container>
    </x-section>
 
    
@endsection