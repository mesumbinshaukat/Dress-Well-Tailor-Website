<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuitFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "coustmer_name"=>[
                'string',
                'max:191',
            ],
            "length"=>[
                
                
                
            ],
            "category"=>[
                
                
                
            ],
            "quantity"=>[
                
                
                
            ],
            "chest"=>[
                
                
                
            ],
            "waist"=>[
                
                
                
            ],
            "hip"=>[
                
                
                
            ],
            "shoulder"=>[
                
                
                
            ],
            "chaak"=>[
                
                
                
            ],
            "sleeve"=>[
                
                
                
            ],
            "cross_back"=>[
                
                
                
            ],
            "bress"=>[
                
                
                
            ],
            "kaj"=>[
                
                
                
            ],
            "bress_nepal"=>[
                
                
                
            ],
            "daman"=>[
                
                
                
            ],
            "pent_length"=>[
                
                
                
            ],
            "pent_inside"=>[
                
                
                
            ],
            "pent_fly"=>[
                
                
                
            ],
            "pent_waist"=>[
                
                
                
            ],
            "pent_hip"=>[
                
                
                
            ],
            "pent_thai"=>[
                
                
                
            ],
            "pent_knee"=>[
                
                
                
            ],
            "pent_bottom"=>[
                
                
                
            ],
            "pocket"=>[
                
                
                
            ],
            "hip_pocket"=>[
                
                
                
            ],
            "s_bottom"=>[
                
                
                
            ],
            "french_fly"=>[
                
                
                
            ],
            "loops"=>[
                
                
                
            ],
            "textarea"=>[
                
                
                
            ],
            "trail_date"=>[
                
                
                
            ],
            "delivery_date"=>[
                
                
                
            ],
            "advance"=>[
                
                
                
            ],
            "total_amount"=>[
                
                
                
            ],
            "coustmer_contact"=>[
                
                
                
            ],
            "coustmer_address"=>[
                
                
                
            ],
            "coustmer_contact"=>[
                'digits:11',

            ],
        ];

        return $rules;
    }

    public function messages(){
        
       return [
            'coustmer_name.required' => 'Please Enter Coustmer Name',
            'coustmer_contact.required' => 'Please Enter Coustmer Contact',
        ];
    }
}
