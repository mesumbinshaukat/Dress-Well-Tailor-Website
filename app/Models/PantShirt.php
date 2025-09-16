<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PantShirt extends Model
{
    use HasFactory;
    
    protected $table = 'pant_shirts';
    protected $fillable = [
        'coustmer_name',
        'category',
        'quantity',
        // Shirt measurements
        'shirt_length',
        'chest',
        'waist',
        'shoulder',
        'sleeve',
        'arm',
        'neck',
        'collar',
        'cuff',
        'shirt_pocket',
        'shirt_fitting',
        // Pant measurements
        'pant_length',
        'pant_waist',
        'hip',
        'thigh',
        'knee',
        'bottom',
        'pant_pocket',
        'pant_fitting',
        'belt_loop',
        'zipper',
        // Common fields
        'textarea',
        'trail_date',
        'delivery_date',
        'advance',
        'total_amount',
        'coustmer_contact',
        'coustmer_address',
    ];
}
