<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'type', 'subject', 'name', 'cnic', 'contact', 'email', 'address', 'organization', 'complainto', 'complaintext', 'status', 'trackingid',
    ];

}
