<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'size',
        'placement',
        'style',
        'tattoo_type',
        'ink_preference',
        'message',
        'reference_link',
    ];
}