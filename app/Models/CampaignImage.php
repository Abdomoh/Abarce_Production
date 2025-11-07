<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignImage extends Model
{
    protected $fillable = ['campaign_id', 'image'];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
