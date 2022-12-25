<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
  /**
   * The page array
   * @var array
   *
   */
  public $page;

  /**
   * Create a new component instance.
   * @param array $page
   *
   * @return void
   */
  public function __construct(array $page)
  {
    $this->page = $page;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.nav-link');
  }
}
