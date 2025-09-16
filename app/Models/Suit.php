<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suit extends Model
{
    use HasFactory;
    
    protected $table = 'suits';
    protected $fillable = [
        'coustmer_name',
        'category',
        'quantity',
        'length',
        'chest',
        'waist',
        'hip',
        'shoulder',
        'chaak',
        'sleeve',
        'cross_back',
        'bress',
        'kaj',
        'bress_nepal',
        'daman',
        'pent_length',
        'pent_inside',
        'pent_fly',
        'pent_waist',
        'pent_hip',
        'pent_thai',
        'pent_knee',
        'pent_bottom',
        'pocket',
        'hip_pocket',
        's_bottom',
        'french_fly',
        'loops',
        'textarea',
        'trail_date',
        'delivery_date',
        'advance',
        'total_amount',
        'coustmer_contact',
        'coustmer_address',
    ];
}
