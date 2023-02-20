<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
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
        return [
            'id' => 'sometimes',
            'user_id' => 'sometimes',
            'first_name' => 'sometimes',
            'last_name' => 'sometimes',
            'email' => 'sometimes',
            'phone' => 'sometimes',
            'primary_passport' => 'sometimes',
            'dob' => 'sometimes',
            'insurance_begin' => 'sometimes',
            'living_in_policy_dates' => 'sometimes',
            'currently_live_in_usa' => 'sometimes',
            'street' => 'sometimes',
            'state_id' => 'sometimes',
            'city_id' => 'sometimes',
            'zipcode' => 'sometimes',
            'gender' => 'sometimes',
            'occupation' => 'sometimes',
            'height_feet' => 'sometimes',
            'height_inches' => 'sometimes',
            'weight_measure_scale' => 'sometimes',
            'weight' => 'sometimes',
            'smoke' => 'sometimes',
            'smoke_per_day' => 'sometimes',
            'diabetes_endocrine' => 'sometimes',
            'heart_or_circulatory' => 'sometimes',
            'cancer_tumours' => 'sometimes',
            'muscle_skeletal' => 'sometimes',
            'asthma_allergies' => 'sometimes',
            'gall_bladder' => 'sometimes',
            'neurological' => 'sometimes',
            'skin_problems' => 'sometimes',
            'blood_infective' => 'sometimes',
            'urinary_or_reproductive' => 'sometimes',
            'anxiety' => 'sometimes',
            'ear_nose_throat' => 'sometimes',
            'illness_not_mentioned' => 'sometimes',
            'illness_not_mentioned_file' => 'sometimes',
            'treatment_not_mentioned' => 'sometimes',
            'treatment_not_mentioned_file' => 'sometimes',
            'name_of_illness' => 'sometimes',
            'body_part_affected' => 'sometimes',
            'illness_treatment_description' => 'sometimes',
            'illness_start_date' => 'sometimes',
            'illness_end_date' => 'sometimes',
            'illness_status' => 'sometimes',
        ];

    }
}
