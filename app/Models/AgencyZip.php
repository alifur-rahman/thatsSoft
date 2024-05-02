<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyZip extends Model
{
    use HasFactory;
    protected $table = 'agency_zip';
    protected $fillable = [
        'zip',
        'company_name',
        'telephone',
        'city',
        'street',
        'email',
        'site_url',
        'ref'
    ];
}
