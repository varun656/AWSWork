<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'primary_passport' => $this->primary_passport,
            'dob' => $this->dob,
            'insurance_begin' => $this->insurance_begin,
            'living_in_policy_dates' => $this->living_in_policy_dates,
            'currently_live_in_usa' => $this->currently_live_in_usa,
            'street' => $this->street,
            'city_id' => $this->city_id,
            'state_id' => $this->state_id,
            'zipcode' => $this->zipcode,
            'gender' => $this->gender,
            'occupation' => $this->occupation,
            'height_feet' => $this->height_feet,
            'height_inches' => $this->height_inches,
            'weight_measure_scale' => $this->weight_measure_scale,
            'weight' => $this->weight,
            'smoke' => $this->smoke,
            'smoke_per_day' => $this->smoke_per_day,
            'diabetes_endocrine' => $this->diabetes_endocrine,
            'heart_or_circulatory' => $this->heart_or_circulatory,
            'cancer_tumours' => $this->diabetes_endocrine,
            'muscle_skeletal' => $this->muscle_skeletal,
            'asthma_allergies' => $this->asthma_allergies,
            'gall_bladder' => $this->gall_bladder,
            'neurological' => $this->neurological,
            'skin_problems' => $this->skin_problems,
            'blood_infective' => $this->blood_infective,
            'urinary_or_reproductive' => $this->urinary_or_reproductive,
            'anxiety' => $this->anxiety,
            'ear_nose_throat' => $this->ear_nose_throat,
            'illness_not_mentioned' => $this->illness_not_mentioned,
            'illness_not_mentioned_file' => $this->illness_not_mentioned_file,
            'treatment_not_mentioned' => $this->treatment_not_mentioned,
            'treatment_not_mentioned_file' => $this->treatment_not_mentioned_file,
            'name_of_illness' => $this->name_of_illness,
            'body_part_affected' => $this->body_part_affected,
            'illness_treatment_description' => $this->illness_treatment_description,
            'illness_start_date' => $this->illness_start_date,
            'illness_end_date' => $this->illness_end_date,
            'illness_status' => $this->illness_status,
        ];

    }
}
