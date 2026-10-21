<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
   public function index()
{
    $mahasiswas = [
        ['nama' => 'Andi',  'nim' => '101', 'jurusan' => 'Sistem Informasi'],
        ['nama' => 'Budi',  'nim' => '102', 'jurusan' => 'Informatika nah gitu dong plis work'],
        ['nama' => 'Hitam banget', 'nim' => '103', 'jurusan' => 'Teknik Informasi apa banget dah anjir banget sih'],
    ];

    return view('mahasiswa.index', compact('mahasiswas'));
}
}
