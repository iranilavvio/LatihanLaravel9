<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function reviewable()
    {
        return $this->morphTo(); //one to many review dan user
    }

    public function user() {
        return $this->belongsTo(User::class); //relasi review dg user
    }
}
