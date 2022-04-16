@extends('layouts.app')
@section('content')

    @php($count = 0)

    @if ( have_rows( 'flexible_content' ) ) 
        @while ( have_rows( 'flexible_content' ) ) @php(the_row())

            <section>
            @if ( have_rows( 'row' ) )
            @while ( have_rows( 'row' ) ) @php(the_row())
        
                @php($layoutConverted = str_replace( '_', '-', get_row_layout()))
                @include('blocks.' . $layoutConverted)

            @endwhile
            @endif
            </section>
            

            @php($count++)

        @endwhile
    @else
        @php(the_content())
    @endif


@endsection