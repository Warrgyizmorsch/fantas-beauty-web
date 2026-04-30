<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

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

    /**
     * Delete the inquiry and all related data (consent form, signature files)
     */
    public function deleteWithRelations()
    {
        // Get consent form if exists
        $consentForm = $this->consentForm;

        if ($consentForm) {
            // Delete signature file if exists
            if ($consentForm->signature_path) {
                $signaturePath = storage_path('app/' . $consentForm->signature_path);
                if (File::exists($signaturePath)) {
                    File::delete($signaturePath);
                }
            }

            // Delete PDF file if exists
            if ($consentForm->pdf_file_path) {
                $pdfPath = storage_path('app/' . $consentForm->pdf_file_path);
                if (File::exists($pdfPath)) {
                    File::delete($pdfPath);
                }
            }

            // Delete the consent form record
            $consentForm->delete();
        }

        // Delete the inquiry itself
        $this->delete();
    }
}
