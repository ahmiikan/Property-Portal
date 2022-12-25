<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
  use HasFactory;

  protected $primaryKey = 'name';
  public $incrementing = false;

  public function posts()
  {
    return $this->belongsToMany(Post::class);
  }
}
