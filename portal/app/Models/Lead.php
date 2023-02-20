<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
                                'first_name', 'last_name', 'email', 'phone', 'primary_passport',
                                'dob', 'insurance_begin', 'living_in_policy_dates', 'currently_live_in_usa',
                                'street', 'city_id', 'zipcode', 'gender', 'occupation', 'height_feet',
                                'height_inches', 'weight_measure_scale', 'weight', 'smoke',
                                'smoke_per_day', 'diabetes_endocrine', 'heart_or_circulatory',
                                'cancer_tumours', 'muscle_skeletal', 'asthma_allergies', 'gall_bladder',
                                'neurological', 'skin_problems', 'blood_infective', 'urinary_or_reproductive',
                                'anxiety', 'ear_nose_throat', 'illness_not_mentioned', 'illness_not_mentioned_file',
                                'treatment_not_mentioned', 'treatment_not_mentioned_file', 'name_of_illness',
                                'body_part_affected', 'illness_treatment_description', 'illness_start_date',
                                'illness_end_date', 'illness_status'
                          ];
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id', 'id')->withDefault();
    // }

    // public function country()
    // {
    //     return $this->belongsTo('App\Models\Country', 'country_id', 'id')->withDefault();
    // }

    // public function state()
    // {
    //     return $this->belongsTo('App\Models\State', 'state_id', 'id')->withDefault();
    // }

    // public function licenses()
    // {
    //     return $this->hasMany('App\Models\AgencyLicenseTypes');
    // }

    // public function city()
    // {
    //     return $this->belongsTo('App\Models\City', 'city_id', 'id')->withDefault();
    // }
}
