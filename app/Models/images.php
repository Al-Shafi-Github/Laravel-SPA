<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'id'; 
    protected $fillable = ['title', 'image_path'];  
}
