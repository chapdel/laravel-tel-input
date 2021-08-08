<?php

namespace Victorybiz\LaravelTelInput;

class LaravelTelInput
{
    public $id;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $id, string $name = 'phone')
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('laravel-tel-input::components.laravel-tel-input');
    }
}
