<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Berita;

class Berita extends Model
{
       private static $data_berita = [
        [
            "judul" => "Mahasiswa TI",
            "slug" => "mahasiswa-ti",
            "penulis" => "Naura Natwa",
            "isi" => "Isi berita muncul disini.."
        ],
        [
            "judul" => "Dosen TI",
            "slug" => "dosen-ti",
            "penulis" => "Admin",
            "isi" => "Isi berita muncul disini.."
        ]
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        $beritas = self::$data_berita;

        $berita = [];
        foreach($beritas as $b)
        {
            if ($b["slug"] === $slug)
            {
                $berita = $b;
            }
        }

        return $berita;
    }

    public static function getTitle($slug)
    {
        $berita = self::getberita($slug);

        return $berita["judul"];
    }

}
