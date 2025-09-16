<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    
    protected $table = 'details';
    protected $fillable = [
        'coustmer_name',
        'category',
        'quantity',
        'length',
        'chest',
        'waist',
        'asteen',
        'hip',
        'side_pocket',
        'shoulder',
        'front_pocket',
        'sleeve',
        'arm',
        'neck',
        'fitting',
        'collar',
        'kuff',
        'patti',
        'daman',
        'shalwar_length',
        'pajama',
        'shalwar_pauncha',
        'pocket',
        'shalwar_gair',
        'lastic',
        'asan',
        'shalwar_zip',
        'textarea',
        'trail_date',
        'delivery_date',
        'advance',
        'total_amount',
        'coustmer_contact',
        'coustmer_address',
    ];
}
