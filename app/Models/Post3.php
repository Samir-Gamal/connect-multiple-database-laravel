<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post3 extends Model
{
    protected $connection="mysql3";
    protected $table="posts3";
    use HasFactory;
}
