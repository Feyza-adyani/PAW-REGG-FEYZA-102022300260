<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        $mahasiswa = [
            'nama' => 'Feyza Adyani B',
            'NIM' => '102022300260',
            'email' => 'feyzaadyani@gmail.com',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
        ];
        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
