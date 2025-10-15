<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkMechanism extends Model
{
    /** @use HasFactory<\Database\Factories\WorkMechanismFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'image'];
}
