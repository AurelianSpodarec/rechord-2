<button 
    type="button" 
    {{ $attributes->merge(['class' => 
        "button w-full md:w-auto" . " " . 
        $buttonVariant . " " . 
        $buttonKind . " " . 
        $buttonRadius . " " . 
        $buttonSize  
    ]) }}>

        {!! $message ?? $slot !!}


</button>