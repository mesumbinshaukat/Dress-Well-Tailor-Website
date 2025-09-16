<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PantShirtFormRequest extends FormRequest
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
            "category"=>[
                
            ],
            "quantity"=>[
                
            ],
            "shirt_length"=>[
                
            ],
            "chest"=>[
                
            ],
            "waist"=>[
                
            ],
            "shoulder"=>[
                
            ],
            "sleeve"=>[
                
            ],
            "arm"=>[
                
            ],
            "neck"=>[
                
            ],
            "collar"=>[
                
            ],
            "cuff"=>[
                
            ],
            "shirt_pocket"=>[
                
            ],
            "shirt_fitting"=>[
                
            ],
            "pant_length"=>[
                
            ],
            "pant_waist"=>[
                
            ],
            "hip"=>[
                
            ],
            "thigh"=>[
                
            ],
            "knee"=>[
                
            ],
            "bottom"=>[
                
            ],
            "pant_pocket"=>[
                
            ],
            "pant_fitting"=>[
                
            ],
            "belt_loop"=>[
                
            ],
            "zipper"=>[
                
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
                'digits:11',
            ],
            "coustmer_address"=>[
                
            ],
        ];

        return $rules;
    }

    public function messages(){
        
       return [
            'coustmer_name.required' => 'Please Enter Customer Name',
            'coustmer_contact.required' => 'Please Enter Customer Contact',
        ];
    }
}
