<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'job_id',
        'name',
        'email',
        'contact_number',
        'file'
    ];
}
