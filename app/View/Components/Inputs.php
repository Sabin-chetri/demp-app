<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Inputs extends Component
{
    public $name;
    public $type;
    public $label;
    public $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$type,$label,$placeholder)
    {
        $this->name=$name;
        $this->type=$type;
        $this->label=$label;
        $this->placeholder=$placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs');
    }
}
