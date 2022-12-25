<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

function calculateReadingTime(string $content, int $wpm = 200): int
{
  // $clean_content = \strip_shortcodes($content);
  $clean_content = preg_replace('#\[[^\]]+\]#', '', $content);
  $clean_content = strip_tags($clean_content);
  $word_count = str_word_count($clean_content);
  $time = ceil($word_count / $wpm);
  return $time;
}

class PostsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */

  public function run()
  {
    $content = file_get_contents(__DIR__ . '/../../public/dev/post.html');
    foreach (User::all() as $author) {
      $post = new Post([
        'cover' => '/uploads/productivity-banner.jpg',
        'title' => 'How To Boost Productivity As A Developer',
        'desc' =>
         'Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.',
        'content' => $content,
        'reading_time' => calculateReadingTime($content),
        'user_id' => 1,
        'author_username'=>'Admin'

      ]);

      $category = Category::inRandomOrder()->first();
      $tag = Tag::find('tech');

      $post->author()->associate($author);
      $post->category()->associate($category);

      $post->save();
      $post->tags()->attach($tag);
    }
  }
}
