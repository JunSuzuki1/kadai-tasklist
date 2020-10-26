<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status','content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
