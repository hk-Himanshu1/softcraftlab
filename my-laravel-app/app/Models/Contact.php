<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts'; // Specify the table name if it's not the plural of the model name

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}