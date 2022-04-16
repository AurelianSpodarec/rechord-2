<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Typography extends Component
{


    // TODO: Add error handling


    public $style;
    public $class;
    public $message;

    public $type = [
        'h1'    => 'h1',
        'h2'    => 'h2',
        'h3'    => 'h3',
        'h4'    => 'h4',
        'h5'    => 'h5',
        'h6'    => 'h6',
        'p'     => 'p'
    ];

    public $variant = [
        'h1'         => '',
        'h2'         => '',
        'h3'         => '',
        'h4'         => '',
        'h5'         => '',
        'h6'         => '',
        'subtitle1'  => '',
        'subtitle2'  => '',
        'body1'      => '',
        'body2'      => ''
    ];


    public function __construct(
        $variant = 'body1',
        $type = 'p',

        $style = null,
        $class = null,
        $message = null
    )
    {
        $this->variant = $this->variant[$variant] ?? $this->variant['body1'];
        $this->type = $this->type[$type] ?? $this->type['p'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.typography');
    }
}