<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama_lengkap = $request->query('nama_lengkap');
        $data = Penduduk::whereRaw('lower(nama_lengkap) like(?)', ["%{$nama_lengkap}%"])->paginate(10);
        return view('admin.penduduk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penduduk.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|max:255',
            'no_kk' => 'required',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'kedudukan_dalam_keluarga' => 'required',
            'keterangan' => 'required',
            'dapat_membaca' => 'required',
            'alamat_lengkap' => 'required',
            'alamat_email' => 'required',
            'nomor_handphone_1' => 'required',
            'nomor_handphone_2' => 'required',
            'status' => 'required',
            'pendidikan_terakhir' => 'required',
            'nik_ibu' => 'required',
            'nama_ibu' => 'required',
            'nik_ayah' => 'required',
            'nama_ayah' => 'required',
            'keterangan' => 'max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.penduduk.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new Penduduk();
        $data->nik = $request->nik;
        $data->no_kk = $request->no_kk;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->pekerjaan = $request->pekerjaan;
        $data->kedudukan_dalam_keluarga = $request->kedudukan_dalam_keluarga;
        $data->keterangan = $request->keterangan;
        $data->dapat_membaca = $request->dapat_membaca;
        $data->alamat_lengkap = $request->alamat_lengkap;
        $data->alamat_email = $request->alamat_email;
        $data->nomor_handphone_1 = $request->nomor_handphone_1;
        $data->nomor_handphone_2 = $request->nomor_handphone_2;
        $data->status = $request->status;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->nik_ibu = $request->nik_ibu;
        $data->nama_ibu = $request->nama_ibu;
        $data->nik_ayah = $request->nik_ayah;
        $data->nama_ayah = $request->nama_ayah;
        $data->save();

        return redirect(route('admin.penduduk.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        return view('admin.penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        return view('admin.penduduk.edit', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|max:255',
            'no_kk' => 'required',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'kedudukan_dalam_keluarga' => 'required',
            'keterangan' => 'required',
            'dapat_membaca' => 'required',
            'alamat_lengkap' => 'required',
            'alamat_email' => 'required',
            'nomor_handphone_1' => 'required',
            'nomor_handphone_2' => 'required',
            'status' => 'required',
            'pendidikan_terakhir' => 'required',
            'nik_ibu' => 'required',
            'nama_ibu' => 'required',
            'nik_ayah' => 'required',
            'nama_ayah' => 'required',
            'keterangan' => 'max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.penduduk.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = Penduduk::findOrFail($id);
        $data->nik = $request->nik;
        $data->no_kk = $request->no_kk;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->pekerjaan = $request->pekerjaan;
        $data->kedudukan_dalam_keluarga = $request->kedudukan_dalam_keluarga;
        $data->keterangan = $request->keterangan;
        $data->dapat_membaca = $request->dapat_membaca;
        $data->alamat_lengkap = $request->alamat_lengkap;
        $data->alamat_email = $request->alamat_email;
        $data->nomor_handphone_1 = $request->nomor_handphone_1;
        $data->nomor_handphone_2 = $request->nomor_handphone_2;
        $data->status = $request->status;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->nik_ibu = $request->nik_ibu;
        $data->nama_ibu = $request->nama_ibu;
        $data->nik_ayah = $request->nik_ayah;
        $data->nama_ayah = $request->nama_ayah;
        $data->save();

        return redirect(route('admin.penduduk.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect('admin/penduduk');
    }
}
