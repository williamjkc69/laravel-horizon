<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestFile extends Model
{
    use HasFactory;
    
    protected $fillable = ['filename', 'url'];
}
