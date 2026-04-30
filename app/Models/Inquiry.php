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
        'message',
        'tattoo_size',
        'tattoo_placement',
        'tattoo_style',
        'tattoo_type',
        'ink_preference',
        'reference_link'
    ];

    /**
     * Get the consent form for this inquiry
     */
    public function consentForm()
    {
        return $this->hasOne(ConsentForm::class);
    }
}
