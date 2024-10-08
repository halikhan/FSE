<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'description', 'image', 'facebook_link', 
        'twitter_link', 'pinterest_link', 'instagram_link'
    ];
}
