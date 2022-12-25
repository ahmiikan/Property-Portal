<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
  use HasFactory;

  protected $fillable = ['poster', 'email', 'content','post_id'];
  protected $hidden = ['email'];

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public function replyTo()
  {
    return $this->hasOne(Comment::class, 'id', 'reply_to');
  }
}
