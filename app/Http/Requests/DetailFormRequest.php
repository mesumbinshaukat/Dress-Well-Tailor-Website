<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailFormRequest extends FormRequest
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
            "asteen"=>[
                
                
                
            ],
            "hip"=>[
                
                
                
            ],
            "side_pocket"=>[
                
                
                
            ],
            "shoulder"=>[
                
                
                
            ],
            "front_pocket"=>[
                
                
                
            ],
            "sleeve"=>[
                
                
                
            ],
            "fitting"=>[
                
                
                
            ],
            "arm"=>[
                
                
                
            ],
            "neck"=>[
                
                
                
            ],
            "collar"=>[
                
                
                
            ],
            "kuff"=>[
                
                
                
            ],
            "patti"=>[
                
                
                
            ],
            "daman"=>[
                
                
                
            ],
            "shalwar_length"=>[
                
                
                
            ],
            "pajama"=>[
                
                
                
            ],
            "shalwar_pauncha"=>[
                
                
                
            ],
            "pocket"=>[
                
                
                
            ],
            "shalwar_gair"=>[
                
                
                
            ],
            "lastic"=>[
                
                
                
            ],
            "asan"=>[
                
                
                
            ],
            "shalwar_zip"=>[
                
                
                
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
