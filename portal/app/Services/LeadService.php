<?php

namespace App\Services;

use App\Http\Resources\LeadResource;
use App\Models\Lead;

class LeadService
{
    public function getOne($data)
    {
        $email = $data->email;
        $lead = Lead::where('email', $email)->get();
        return LeadResource::collection($lead);
    }

    public function getAll()
    {
        return LeadResource::collection(Lead::all());
    }

    public function create($data)
    {
        $lead = Lead::create($data);
        return new LeadResource($lead);
        // $lead = new Lead;
        // $lead->visitor       =  (isset($data['visitor'])) ? $data['visitor']    : '';
        // $lead->email       =  (isset($data['email'])) ? $data['email']    : '';
        // $lead->first_name    =  (isset($data['first_name'])) ? $data['first_name'] : '';
        // $lead->last_name     =  (isset($data['last_name'])) ? $data['last_name']  : '';
        // $lead->country       =  (isset($data['country'])) ? $data['country']    : '';
        // $lead->date_of_birth =  (isset($data['date_of_birth'])) ? $data['date_of_birth']:'0000-00-00';
        // $lead->insurance_start = (isset($data['insurance_start']))? $data['insurance_start']:'0000-00-00';
        // $lead->living_in_policy = (isset($data['living_in_policy'])) ? $data['living_in_policy']:'';
        // $lead->is_living_usa = (isset($data['is_living_usa'])) ? $data['is_living_usa']:'no';
        // $lead->usa_street = (isset($data['usa_street'])) ? $data['usa_street']:'';
        // $lead->usa_city = (isset($data['usa_city'])) ? $data['usa_city'] : '';
        // $lead->usa_zip = (isset($data['usa_zip'])) ? $data['usa_zip'] : '';
        // $lead->gender = (isset($data['gender'])) ? $data['gender']:'';
        // $lead->occupation = (isset($data['occupation'])) ? $data['occupation']: '';
        // $lead->feet = (isset($data['feet'])) ? $data['feet'] : '';
        // $lead->inches = (isset($data['inches'])) ? $data['inches']: '';
        // $lead->in_pounds = (isset($data['in_pounds'])) ? $data['in_pounds']: '';
        // $lead->in_kilograms = (isset($data['in_kilograms'])) ? $data['in_kilograms']:'';
        // $lead->is_alternative_product = (isset($data['is_alternative_product'])) ? $data['is_alternative_product'] : 'no';
        // $lead->usage_twenty_more = (isset($data['usage_twenty_more'])) ? $data['usage_twenty_more'] : 'yes';
        // $lead->quote = (isset($data['quote'])) ? $data['quote'] : 'no';
        // $lead->persons = (isset($data['persons'])) ? $data['persons'] : '{}';
        // $lead->diabetes_endocrine = (isset($data['diabetes_endocrine'])) ? $data['diabetes_endocrine']: 'no';
        // $lead->heart_or_circulatory = (isset($data['heart_or_circulatory'])) ? $data['heart_or_circulatory']:'no';
        // $lead->cancer_tumours = (isset($data['cancer_tumours'])) ? $data['cancer_tumours']:'no';
        // $lead->muscle_skeletal = (isset($data['muscle_skeletal'])) ? $data['muscle_skeletal']: 'no';
        // $lead->asthma_allergies = (isset($data['asthma_allergies'])) ? $data['asthma_allergies']:'no';
        // $lead->gall_bladder = (isset($data['gall_bladder'])) ? $data['gall_bladder']:'no';
        // $lead->none_of_above_diabetes = (isset($data['none_of_above_diabetes'])) ? $data['none_of_above_diabetes'] : 'no';
        // $lead->neurological = (isset($data['neurological'])) ? $data['neurological'] : 'no';
        // $lead->skin_problems = (isset($data['skin_problems'])) ? $data['skin_problems']: 'no';
        // $lead->blood_infective = (isset($data['blood_infective'])) ? $data['blood_infective']:'no';
        // $lead->urinary_or_reproductive = (isset($data['urinary_or_reproductive'])) ? $data['urinary_or_reproductive']:'no';
        // $lead->anxiety = (isset($data['anxiety'])) ? $data['anxiety'] : 'no';
        // $lead->ear_nose_throat = (isset($data['ear_nose_throat'])) ? $data['ear_nose_throat'] : 'no';
        // $lead->pre_condition = (isset($data['pre_condition'])) ? $data['pre_condition'] : 'no';
        // $lead->pre_condition_details = (isset($data['pre_condition_file'])) ? $data['pre_condition_file'] : '';
        // $lead->pre_condition_file = (isset($data['pre_condition_file'])) ? $data['pre_condition_file'] : '';
        // $lead->pre_medication = (isset($data['pre_medication'])) ? $data['pre_medication']:'no';
        // $lead->pre_medication_details = (isset($data['pre_medication_details'])) ? $data['pre_medication_details']:'no';
        // $lead->pre_medication_file = (isset($data['pre_medication_file'])) ? $data['pre_medication_file']:'no';
        // $lead->name_illness = (isset($data['name_illness'])) ? $data['name_illness']:'no';
        // $lead->body_part = (isset($data['body_part'])) ? $data['body_part']: '';
        // $lead->treatment_provided = (isset($data['treatment_provided'])) ? $data['treatment_provided']: '';
        // $lead->treatment_start = (isset($data['treatment_start'])) ? $data['treatment_start']:'';
        // $lead->treatment_end = (isset($data['treatment_end'])) ? $data['treatment_end']: '';
        // $lead->status_problem = (isset($data['status_problem'])) ? $data['status_problem']: 'ongoing';
        // $lead->save();
        // return new LeadResource($lead);

    }

    public function edit($id)
    {

    }

    public function update($data)
    {
        $id = $data['id'];
        $lead = Lead::find($id);
        if(isset($data['user_id'])){
            $lead->user_id =  $data['user_id'];
        }
        if(isset($data['first_name'])){
            $lead->first_name =  $data['first_name'];
        }
        if(isset($data['last_name'])){
            $lead->last_name =  $data['last_name'];
        }
        if(isset($data['email'])){
            $lead->email =  $data['email'];
        }
        if(isset($data['phone'])){
            $lead->phone =  $data['phone'];
        }
        if(isset($data['primary_passport'])){
            $lead->primary_passport =  $data['primary_passport'];
        }
        if(isset($data['dob'])){
            $newDate = date("Y-m-d", strtotime($data['dob']));  
            $lead->dob =  $newDate;
        }
        if(isset($data['insurance_begin'])){
            $newDate = date("Y-m-d", strtotime($data['insurance_begin']));  
            $lead->insurance_begin =  $newDate;
        }
        if(isset($data['living_in_policy_dates'])){
            $lead->living_in_policy_dates =  $data['living_in_policy_dates'];
        }
        if(isset($data['currently_live_in_usa'])){
            $lead->currently_live_in_usa =  $data['currently_live_in_usa'];
        }
        if(isset($data['street'])){
            $lead->street =  $data['street'];
        }
        if(isset($data['state_id'])){
            $lead->state_id =  $data['state_id'];
        }
        if(isset($data['city_id'])){
            $lead->city_id =  $data['city_id'];
        }
        if(isset($data['zipcode'])){
            $lead->zipcode =  $data['zipcode'];
        }
        if(isset($data['gender'])){
            $lead->gender =  $data['gender'];
        }
        if(isset($data['occupation'])){
            $lead->occupation =  $data['occupation'];
        }
        if(isset($data['height_feet'])){
            $lead->height_feet =  $data['height_feet'];
        }
        if(isset($data['height_inches'])){
            $lead->height_inches =  $data['height_inches'];
        }
        if(isset($data['weight_measure_scale'])){
            $lead->weight_measure_scale =  $data['weight_measure_scale'];
        }
        if(isset($data['weight'])){
            $lead->weight =  $data['weight'];
        }
        if(isset($data['smoke'])){
            $lead->smoke =  $data['smoke'];
        }
        if(isset($data['smoke_per_day'])){
            $lead->smoke_per_day =  $data['smoke_per_day'];
        }
        if(isset($data['diabetes_endocrine'])){
            $lead->diabetes_endocrine =  $data['diabetes_endocrine'];
        }
        if(isset($data['heart_or_circulatory'])){
            $lead->heart_or_circulatory =  $data['heart_or_circulatory'];
        }
        if(isset($data['cancer_tumours'])){
            $lead->cancer_tumours =  $data['cancer_tumours'];
        }
        if(isset($data['muscle_skeletal'])){
            $lead->muscle_skeletal =  $data['muscle_skeletal'];
        }
        if(isset($data['asthma_allergies'])){
            $lead->asthma_allergies =  $data['asthma_allergies'];
        }
        if(isset($data['gall_bladder'])){
            $lead->gall_bladder =  $data['gall_bladder'];
        }
        if(isset($data['neurological'])){
            $lead->neurological =  $data['neurological'];
        }
        if(isset($data['skin_problems'])){
            $lead->skin_problems =  $data['skin_problems'];
        }
        if(isset($data['blood_infective'])){
            $lead->blood_infective =  $data['blood_infective'];
        }
        if(isset($data['blood_infective'])){
            $lead->blood_infective =  $data['blood_infective'];
        }
        if(isset($data['urinary_or_reproductive'])){
            $lead->urinary_or_reproductive =  $data['urinary_or_reproductive'];
        }
        if(isset($data['anxiety'])){
            $lead->anxiety =  $data['anxiety'];
        }
        if(isset($data['ear_nose_throat'])){
            $lead->ear_nose_throat =  $data['ear_nose_throat'];
        }
        if(isset($data['illness_not_mentioned'])){
            $lead->illness_not_mentioned =  $data['illness_not_mentioned'];
        }
        if(isset($data['illness_not_mentioned_file'])){
            $lead->illness_not_mentioned_file =  $data['illness_not_mentioned_file'];
        }
        if(isset($data['treatment_not_mentioned'])){
            $lead->treatment_not_mentioned =  $data['treatment_not_mentioned'];
        }
        if(isset($data['treatment_not_mentioned_file'])){
            $lead->treatment_not_mentioned_file =  $data['treatment_not_mentioned_file'];
        }
        if(isset($data['name_of_illness'])){
            $lead->name_of_illness =  $data['name_of_illness'];
        }
        if(isset($data['body_part_affected'])){
            $lead->body_part_affected =  $data['body_part_affected'];
        }
        if(isset($data['illness_treatment_description'])){
            $lead->illness_treatment_description =  $data['illness_treatment_description'];
        }
        if(isset($data['illness_start_date'])){
            $lead->illness_start_date =  $data['illness_start_date'];
        }
        if(isset($data['illness_end_date'])){
            $lead->illness_end_date =  $data['illness_end_date'];
        }
        if(isset($data['illness_status'])){
            $lead->illness_status =  $data['illness_status'];
        }

        $lead->save();
        return new LeadResource($lead);
    }

    public function delete($data)
    {
        $lead = Lead::find($data);
        $lead->delete();
    }

}
