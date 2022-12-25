<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
         'user_id',
        'name',
        'address',
        'email',
        'cell',
        'logo',
    ];
      
    public function user()
    {
        return $this->belongsTo(User::class);    
    }
    public function doc()
    {
        return $this->hasMany(AgentDocument::class);
    }
}
