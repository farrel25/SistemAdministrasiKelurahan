<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterDocumentLetterTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_document_letter_type', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('document_id')->constrained('letter_documents');
            $table->foreignId('type_id')->constrained('letter_types');
            // $table->timestamps();
            $table->primary(['document_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letter_document_letter_type');
    }
}
