<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterType extends Model
{
    protected $fillable = ['letter_code', 'type', 'validity_period', 'validity_period_unit'];

    public function letterDocuments()
    {
        return $this->belongsToMany(LetterDocument::class, 'letter_document_letter_type', 'type_id', 'document_id',);
    }

    public function letterSubmissions()
    {
        return $this->hasMany(LetterSubmission::class); // type punya banyak submission
    }
}
