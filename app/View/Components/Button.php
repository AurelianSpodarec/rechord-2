<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{


    // TODO: Add error handling
    // TODO: Add Icon Support
    // TODO: Ass 'href'


    public $buttonVariant;
    public $buttonKind;
    public $buttonRadius;
    public $buttonSize;
    
    public $disabled;

    public $message;


    public $variant = [
        'primary'   => 'button-primary',
        'secondary' => 'button-secondary',
        'teritary'  => 'button-teritary',
        'success'   => 'button-success',
        'warning'   => 'button-warning',
        'danger'    => 'button-danger',
        'info'      => 'button-info',
        'white'     => 'button-white',
    ];

    public $kind = [
        'solid'   => 'button-solid',
        'outline' => 'button-outline',
        'clear'   => 'button-clear',
    ];

    public $radius = [
        'none'   => '',
        'sm'  => '',
        'md' => '',
        'lg'  => '',
        'full'   => '',
    ];

    public $size = [
        'xs'     => 'button-xs',
        'sm'     => 'button-sm',
        'md'     => 'button-medium',
        'lg'     => 'button-large',
    ];



    public function __construct(
        $variant = 'primary', 
        $kind = 'solid', 
        $radius = 'none',
        $size = 'md',
        $message = null
    )
    {
        $this->buttonVariant = $this->variant[$variant] ?? $this->variant['default'];
        $this->buttonKind = $this->kind[$kind] ?? $this->kind['default'];
        $this->buttonRadius = $this->radius[$radius] ?? $this->radius['md'];
        $this->buttonSize = $this->size[$size] ?? $this->size['md'];
        $this->buttonDisabled = $disabled ?? 'disabled';

        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.button');
    }
}