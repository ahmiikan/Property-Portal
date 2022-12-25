<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class Post extends Model
{
  use HasFactory , SoftDeletes ;

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = ['content'];
  protected $fillable = [
    'cover',
   'title',
   'author_username',
   'category_name',
   'updated_at',
   'created_at',
   'reading_time',
   'content',
   'desc',
   'user_id',
   'status'
   
];

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class, 'post_id','id');
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'post_tag', 'post_id');
  }



  protected static function boot() {
    parent::boot();

    static::creating(function($post) {

      // produce a slug based on the activity title
      $slug = Str::slug($post->title);

      // check to see if any other slugs exist that are the same & count them
      $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

      // if other slugs exist that are the same, append the count to the slug
      $post->slug = $count ? "{$slug}-{$count}" : $slug;

  });
}
}
