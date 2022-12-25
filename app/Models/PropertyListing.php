<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PropertyListing extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable = ['type','purpose','address','title','description','location','price','size','user_id'];

    public function images()
    {
    return $this->hasMany(PropertyImages::class, 'listing_id','id');
    }

    public function owner()
    {
      return $this->belongsTo(User::class, 'user_id', 'id');
    }

}