<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village_identities', function (Blueprint $table) {
            $table->id();
            $table->string('village_name', 100)->nullable();
            $table->string('village_code', 100)->nullable();
            $table->string('kepala_desa_name', 100)->nullable();
            $table->char('kepala_desa_nip', 18)->nullable();
            $table->char('zip_code', 5)->nullable();
            $table->string('kecamatan_name', 100)->nullable();
            $table->string('kecamatan_code', 100)->nullable();
            $table->string('kepala_camat_name', 100)->nullable();
            $table->char('kepala_camat_nip', 18)->nullable();
            $table->string('kabupaten_name', 100)->nullable();
            $table->string('kabupaten_code', 100)->nullable();
            $table->string('province_name', 100)->nullable();
            $table->string('province_code', 100)->nullable();
            $table->text('history')->nullable();
            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            $table->string('logo', 100)->nullable();
            $table->string('background_pic', 100)->nullable();
            $table->string('office_address', 200)->nullable();
            $table->string('village_email', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('youtube', 100)->nullable();
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
        Schema::dropIfExists('village_identities');
    }
}
