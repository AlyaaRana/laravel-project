<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $student = [
        [
            "id" => 1,
            "nis" => "8678659",
            "nama" => "nea",
            "kelas" => "11 PPLG 2",
            "alamat" => "Jln.pandawa"
        ],
        [
            "id" => 2,
            "nis" => "8678660",
            "nama" => "putra",
            "kelas" => "11 Ekonomi1",
            "alamat" => "Jln.toraja"
        ],
        [
            "id" => 3,
            "nis" => "8678661",
            "nama" => "kurnia",
            "kelas" => "11 sosial2",
            "alamat" => "Jln.kebumen"
        ],
        [
            "id" => 4,
            "nis" => "8678662",
            "nama" => "adit",
            "kelas" => "11 PPLG 5",
            "alamat" => "Jln.mangga"
        ],
        [
            "id" => 5,
            "nis" => "8678663",
            "nama" => "vano",
            "kelas" => "11 PPLG 5",
            "alamat" => "Jln.durian"
        ],
    ];
    public static function all()
    {
        return self::$student;
    }

}
