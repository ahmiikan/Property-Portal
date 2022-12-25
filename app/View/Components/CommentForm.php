<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class CommentForm extends Component
{
  /**
   * The post object
   * @var Post
   *
   */
  public $post;

  /**
   * Create a new component instance.
   *
   * @param Post $post
   *
   * @return void
   */
  public function __construct(Post $post)
  {
    $this->post = $post;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.comment-form');
  }
}
