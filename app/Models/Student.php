<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'tanggal_lahir',
        'alamat',
        // Add other fields as needed
    ];
}
