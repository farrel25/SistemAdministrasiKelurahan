<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_requirements', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('letter_type_id')->constrained('letter_types');
            $table->foreignId('letter_document_id')->constrained('letter_documents');
            // $table->timestamps();
            $table->primary(['letter_type_id', 'letter_document_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letter_requirements');
    }
}
