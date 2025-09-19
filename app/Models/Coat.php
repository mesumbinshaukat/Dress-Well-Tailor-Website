<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coat extends Model
{
    use HasFactory;
    
    protected $table = 'coats';
    protected $fillable = [
        'coustmer_name',
        'category',
        'quantity',
        'length',
        'chest',
        'waist',
        'hip',
        'shoulder',
        'sleeve',
        'arm',
        'neck',
        'kuffs',
        'kuff',
        'collar',
        'collar_size',
        'patti',
        'daman',
        'pocket',
        'shirt_pocket',
        'shirt_fitting',
        'shirt_fitting_size',
        'coat_length',
        'coat_chest',
        'coat_waist',
        'coat_hip',
        'coat_shoulder',
        'coat_neck',
        'cross_back',
        'cot_collar',
        'wal_pocket',
        'side_choke',
        'coat_daman',
        'ins_pocket',
        'textarea',
        'trail_date',
        'delivery_date',
        'advance',
        'total_amount',
        'coustmer_contact',
        'coustmer_address',
    ];
}
