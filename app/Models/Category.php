<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "categories";
    // protected $with = ['book'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    // public function bukucat()
    // {
    //     return $this->belongsTo(Book::class);
    // }
}
