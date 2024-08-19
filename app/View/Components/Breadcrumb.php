<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $title;
    public $item;
    public $itemActive;
    public $itemMethod;
    public $itemIcon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($breadCrumb)
    {
        $this->title = $breadCrumb['title'];
        $this->item = $breadCrumb['item'];
        $this->itemActive = $breadCrumb['itemActive'];
        $this->itemMethod = $breadCrumb['itemMethod'];
        $this->itemIcon = $breadCrumb['itemIcon'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
