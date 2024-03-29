<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UploadFile extends Component
{
    public $title, $name, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $name, $value)
    {
        $this->title = $title;
        $this->name = $name;
        $this->value = $value;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.upload-file');
    }
}
