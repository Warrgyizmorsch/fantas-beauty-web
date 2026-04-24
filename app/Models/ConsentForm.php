<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConsentForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'inquiry_id',
        'name',
        'email',
        'phone',
        'date_of_birth',
        'address',
        'city',
        'state',
        'zip',
        'consent_token',
        'agreed_terms',
        'is_signed',
        'signed_at',
        'pdf_file_path',
        'png_file_path',
        'signature_path',
    ];

    protected $casts = [
        'agreed_terms' => 'json',
        'is_signed' => 'boolean',
        'signed_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    /**
     * Get the inquiry that owns the consent form
     */
    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }
}
