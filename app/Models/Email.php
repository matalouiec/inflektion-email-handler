<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $table = 'successful_emails';
    public $timestamps = false;

    protected $fillable = ['email', 'raw_text'];
}
