<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Card extends Component
{

    public $message;
    public $class;
    public $style;

    public $as;
    public $title;
    public $content;
    public $permalink;
    public $rawImage;
    public $date;
    public $category;


    public function __construct(
        $message = null,
        $class = null,
        $style = null,

        $as = null,
        $title = null,
        $content = null,
        $permalink = null,
        $rawImage = null,
        $date = null,
        $category = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        
        $this->as = $as;
        $this->title = $title;
        $this->content = $content;
        $this->permalink = $permalink;
        $this->rawImage = $rawImage;
        $this->category = $category;
        $this->date = $date;
    }

    public function render()
    {
        return $this->view('components.card');
    }
}