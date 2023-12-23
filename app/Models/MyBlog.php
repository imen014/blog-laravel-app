<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyBlog extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "auteur",
        "commentaire",
        "email",
    ];
}
