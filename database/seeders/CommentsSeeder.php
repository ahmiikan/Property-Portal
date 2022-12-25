<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class CommentsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (Post::all() as $post) {
      Comment::factory()
        ->count(2)
        ->make()
        ->each(
          fn($comment) => $comment
            ->post()
            ->associate($post)
            ->save()
        );
    }
  }
}
