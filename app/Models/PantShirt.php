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
        'collar_size',
        'cuff',
        'shirt_pocket',
        'shirt_fitting',
        'shirt_fitting_size',
        // Pant measurements
        'pant_length',
        'pant_waist',
        'hip',
        'thigh',
        'knee',
        'bottom',
        'pant_pocket',
        'pant_pocket_size',
        'pant_fitting',
        'pant_fitting_measurement',
        'belt_loop',
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
