<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable =
    [
        'name',
        'phone',
        'email',
        'referer',
        'category',
        'sub_category',
        'service_name',
        'message'
    ];

    /**
     * Get the consent form for this inquiry
     */
    public function consentForm()
    {
        return $this->hasOne(ConsentForm::class);
    }
}
