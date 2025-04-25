<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        date_default_timezone_set('Asia/Jakarta');
        $nama = 'Feyza Adyani B';
        $jam = date('H');
        $waktu = date('H:i');
        $tanggal = $this->getTanggal();
 
        if ($jam >= 0 && $jam < 12) {
             $salam = 'Selamat pagi';
        } elseif ($jam >= 12 && $jam < 15) {
             $salam = 'Selamat siang';
        } elseif ($jam >= 15 && $jam < 18) {
             $salam = 'Selamat sore';
        } else {
             $salam = 'Selamat malam';
        }
 
        return view('dashboard', compact('nama', 'waktu', 'tanggal', 'salam'));
    }

    private function getTanggal()
    {
        // ==================3==================
        return date('d-m-Y');
    }
}
