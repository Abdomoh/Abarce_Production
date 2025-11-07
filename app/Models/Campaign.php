<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'type',
        'description',
        'image',
        'client_name',
        'client_industry',
        'results',
        'ads_count',
        'duration_days',
        'platforms_count',
    ];

     public function images()
    {
        return $this->hasMany(CampaignImage::class);
    }

    protected $casts = [
        'results' => 'array',
    ];
}
