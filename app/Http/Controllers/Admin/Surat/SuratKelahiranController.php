<?php

namespace App\Http\Controllers\Admin\Surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratKelahiran;

class SuratKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama_anak = $request->query('nama_anak');
        $data = SuratKelahiran::whereRaw('lower(nama_anak) like(?)', ["%{$nama_anak}%"])->paginate(10);
        return view('admin.surat.surat-kelahiran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.surat.surat-kelahiran.create');
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
            'no_surat' => 'required',
            'nama_anak' => 'required',
            'anak_ke' => 'required',
            'tempat_lahir' => 'required',
            'hari' => 'required',
            'tanggal_lahir' => 'required',
            'waktu_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-kelahiran.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratKelahiran();
        $data->no_surat = $request->no_surat;
        $data->nama_anak = $request->nama_anak;
        $data->anak_ke = $request->anak_ke;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->hari = $request->hari;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->waktu_lahir = $request->waktu_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->nama_ibu = $request->nama_ibu;
        $data->nama_ayah = $request->nama_ayah;
        $data->alamat = $request->alamat;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->save();

        return redirect(route('admin.surat.surat-kelahiran.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_kelahiran = SuratKelahiran::findOrFail($id);
        return view('admin.surat.surat-kelahiran.show', compact('surat_kelahiran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_kelahiran = SuratKelahiran::findOrFail($id);
        return view('admin.surat.surat-kelahiran.edit', compact('surat_kelahiran'));
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
            'no_surat' => 'required',
            'nama_anak' => 'required',
            'anak_ke' => 'required',
            'tempat_lahir' => 'required',
            'hari' => 'required',
            'tanggal_lahir' => 'required',
            'waktu_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-kelahiran.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = SuratKelahiran::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->nama_anak = $request->nama_anak;
        $data->anak_ke = $request->anak_ke;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->hari = $request->hari;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->waktu_lahir = $request->waktu_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->nama_ibu = $request->nama_ibu;
        $data->nama_ayah = $request->nama_ayah;
        $data->alamat = $request->alamat;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->update();

        return redirect(route('admin.surat.surat-kelahiran.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_kelahiran = SuratKelahiran::findOrFail($id);
        $surat_kelahiran->delete();
        return redirect('admin/surat/surat-kelahiran');
    }
}
