<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;



    protected $fillable = [
        'message',
        'image',
        'recipient_id',
        'recipient_name',
        'updated_at',
        'created_at',
        
    ];


    public function Sender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');    
    }
    
    public function recipent()
    {
        return $this->belongsTo(User::class,'recipient_id','id');    
    }



    protected static function boot() {
        parent::boot();
    
        static::creating(function($message) {
            $message->sender_id = auth()->id();
            $message->sender_name = auth()->user()->name;

    
      });
    }
}
