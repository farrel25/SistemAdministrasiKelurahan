<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('villager_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('nik')->unique()->nullable();
            $table->string('nip')->unique()->nullable();
            $table->string('nipd')->unique()->nullable();
            $table->string('photo')->nullable();
            $table->string('staff_position')->nullable();
            $table->string('position_period')->nullable();
            $table->string('pangkat')->nullable();
            $table->date('registered')->nullable();
            $table->string('nomor_sk_angkat')->nullable();
            $table->date('tgl_sk_angkat')->nullable();
            $table->string('nomor_sk_henti')->nullable();
            $table->date('tgl_sk_henti')->nullable();
            $table->smallInteger('ttd_an')->nullable();
            $table->smallInteger('ttd_ub')->default(0);
            $table->integer('urutan')->nullable();
            $table->boolean('is_active');
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
        Schema::dropIfExists('staff');
    }
}
