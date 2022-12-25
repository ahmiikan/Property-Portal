<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletionRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'reason',
        'user_id',  
    ];
    protected static function boot() {
        parent::boot();
    
        static::creating(function($DeletionRequest) {
    
          // produce a slug based on the activity title
          $DeletionRequest->user_id=auth()->user()->id;
    
    
      });
    }
}
