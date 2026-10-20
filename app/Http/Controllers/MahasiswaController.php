<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $mahasiswas= [
            [
                'nama' => 'Andi',
                'nim' => '101',
                'jurusan' => 'Sistem Informasi'
            ],
            [
                'nama' => 'Budi',
                'nim' => '102',
                'jurusan' => 'Informatika'
            ],
            [
                'nama' => 'Citra',
                'nim' => '103',
                'jurusan' => 'Teknik Komputer'
            ]
        ];
    }
}
