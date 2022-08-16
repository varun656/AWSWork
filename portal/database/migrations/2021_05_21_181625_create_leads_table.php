<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->unsignedBigInteger('primary_passport')->nullable();
            $table->foreign('primary_passport')->references('id')->on('countries')->onDelete('cascade');
            
            $table->date('dob')->nullable();
            $table->date('insurance_begin')->nullable();
            
            $table->unsignedBigInteger('living_in_policy_dates')->nullable();
            $table->foreign('living_in_policy_dates')->references('id')->on('countries')->onDelete('cascade');

            $table->enum('currently_live_in_usa', ['yes', 'no'])->nullable();

            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            
            $table->string('street')->nullable();

            
            $table->string('zipcode')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('occupation')->nullable();
            $table->string('height_feet')->nullable();
            $table->string('height_inches')->nullable();
            $table->enum('weight_measure_scale', ['pound', 'kilogram'])->nullable();
            $table->string('weight')->nullable();
            $table->enum('smoke', ['yes', 'no'])->nullable();
            $table->enum('smoke_per_day', ['less_than_20', 'more_than_20'])->nullable();
            
            $table->enum('diabetes_endocrine', ['yes', 'no'])->nullable();
            $table->enum('heart_or_circulatory', ['yes', 'no'])->nullable();
            $table->enum('cancer_tumours', ['yes', 'no'])->nullable();
            $table->enum('muscle_skeletal', ['yes', 'no'])->nullable();
            $table->enum('asthma_allergies', ['yes', 'no'])->nullable();
            $table->enum('gall_bladder', ['yes', 'no'])->nullable();
            $table->enum('neurological', ['yes', 'no'])->nullable();
            $table->enum('skin_problems', ['yes', 'no'])->nullable();
            $table->enum('blood_infective', ['yes', 'no'])->nullable();
            $table->enum('urinary_or_reproductive', ['yes', 'no'])->nullable();
            $table->enum('anxiety', ['yes', 'no'])->nullable();
            $table->enum('ear_nose_throat', ['yes', 'no'])->nullable();

            $table->string('illness_not_mentioned')->nullable();
            $table->string('illness_not_mentioned_file')->nullable();
            
            $table->string('treatment_not_mentioned')->nullable();
            $table->string('treatment_not_mentioned_file')->nullable();
            
            $table->string('name_of_illness')->nullable();
            $table->string('body_part_affected')->nullable();
            $table->text('illness_treatment_description')->nullable();
            $table->dateTime('illness_start_date')->nullable();
            $table->dateTime('illness_end_date')->nullable();
            $table->enum('illness_status', ['ongoing','complete','recovery','recurrent'])->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
