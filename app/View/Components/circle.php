<?php

namespace App\View\Components;

use Illuminate\View\Component;

class circle extends Component
{
  /**
   * The className string
   * @var string
   *
   */
  public $className;

  /**
   * Create a new component instance.
   * @param string $className
   * @return void
   */
  public function __construct(string $className)
  {
    $this->className = $className;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.circle');
  }
}
