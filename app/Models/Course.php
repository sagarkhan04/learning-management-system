<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category',
        'youtube_link',
        'title',
        'description',
        'review',
        'lesson',
        'video',
        'quiz',
        'topic',
        'resource',
        'price',
        'old_price',
        'curriculum_title',
        'curriculum_sub_title',
        'video_or_url',
    ];
}
