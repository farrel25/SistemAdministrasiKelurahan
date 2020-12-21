<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->foreignId('user_id')->nullable();
            $table->string('full_name');
            $table->foreignId('sex_id');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->foreignId('religion_id');
            $table->foreignId('education_id');
            $table->foreignId('profession_id');
            $table->foreignId('marital_status_id');
            $table->foreignId('nationality_id');
            $table->string('father_nik')->nullable();
            $table->string('mother_nik')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('blood_type_id');
            $table->foreignId('stay_status_id');
            $table->string('address');
            $table->foreignId('life_status_id');
            $table->foreignId('disability_id');
            $table->foreignId('chronic_disease_id');
            $table->string('phone_number');
            $table->foreignId('age_range_id')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
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
        Schema::dropIfExists('villagers');
    }
}
