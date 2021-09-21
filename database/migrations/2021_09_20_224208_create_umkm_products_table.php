<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_category_id');
            $table->foreignId('umkm_profile_id');
            $table->string('product_name');
            $table->string('photo');
            $table->string('description');
            $table->string('price');
            $table->string('stock');
            $table->integer('view_count')->nullable();
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
        Schema::dropIfExists('umkm_products');
    }
}
