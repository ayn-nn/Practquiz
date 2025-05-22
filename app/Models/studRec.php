<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studRec extends Model
{
    use HasFactory;
    protected $table = 'studrecords';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'midname',
        'age',
        'address',
        'zip'
    ];
}
