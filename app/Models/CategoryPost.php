<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'category_post';

    protected $fillable = ['category_id', 'post_id'];

}
