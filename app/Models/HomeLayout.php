<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeLayout extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_key',
        'title',
        'subtitle',
        'description',
        'image',
        'link',
        'button_text',
        'is_active',
        'sort_order',
        'extra_data',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'extra_data' => 'array',
    ];
}