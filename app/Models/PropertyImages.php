<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;
    protected $fillable = ['image','created_at','updated_at','listing_id'];

    public function images()
    {
    return $this->belongsTo(PropertyImages::class, 'listing_id','id');
    }
}
