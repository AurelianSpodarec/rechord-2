<div class="card flex flex-col rounded-lg shadow-lg overflow-hidden bg-white px-8 py-10">

    <div class="bg-primary-300 px-5 py-1 inline-block w-auto text-white mb-6">
    {!! $category !!}
    </div>

    @if($rawImage) 
    <div class="mb-8">
        {!! $rawImage !!}
    </div>
    @endif
     
    @if($title)
    <h3 class="text-lg font-semibold text-gray-900">
        {!! $title !!}
    </h3>
    @endif

    @if($content)
        {!! $content !!}
    @endif
 
    <a style="font-size: 9px;" class="font-bold uppercase text-primary-300" href="{{ $permalink }}">Read More</a>
      
</div>
