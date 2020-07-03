<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;
class DesaController extends Controller
{
    public function statistik()
    {
        $penduduk = Penduduk::all();
        return view('admin.desa.statistik', compact('penduduk'));
    }
}
