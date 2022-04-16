 



@extends('layouts.app')
@section('content')

    <x-section>
    <x-container>

        
        <div>
            <img class="w-full h-max-[650px]" src="{{ get_the_post_thumbnail_url() }}" />
        </div>

        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">

            <div>
                <h1>{{ get_the_title() }}</h1>
                <div class="article-prose">

                    @if(have_posts())
                        @while(have_posts()) @php(the_post())

                        {{-- {!! the_title() !!} --}}
                        {!! the_content() !!}

                        @endwhile
                    @endif

                </div>
            </div>

            <div>
   sidebar
            </div>
        </div>
        

    </x-container>
    </x-section>
 
    
@endsection