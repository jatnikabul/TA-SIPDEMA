<?php

namespace App\Http\Controllers\Admin\Surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratUsaha;

class SuratUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama_perusahaan = $request->query('nama_perusahaan');
        $data = SuratUsaha::whereRaw('lower(nama_perusahaan) like(?)', ["%{$nama_perusahaan}%"])->paginate(10);
        return view('admin.surat.surat-usaha.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.surat.surat-usaha.create');
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
            'penduduk_id' => 'required',
            'jenis_usaha' => 'required',
            'nama_perusahaan' => 'required',
            'penghasilan' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-usaha.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratUsaha();
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->jenis_usaha = $request->jenis_usaha;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->penghasilan = $request->penghasilan;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->save();

        return redirect(route('admin.surat.surat-usaha.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_usaha = SuratUsaha::findOrFail($id);
        return view('admin.surat.surat-usaha.show', compact('surat_usaha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_usaha = SuratUsaha::findOrFail($id);
        return view('admin.surat.surat-usaha.edit', compact('surat_usaha'));
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
            'penduduk_id' => 'required',
            'jenis_usaha' => 'required',
            'nama_perusahaan' => 'required',
            'penghasilan' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-usaha.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = SuratUsaha::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->jenis_usaha = $request->jenis_usaha;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->penghasilan = $request->penghasilan;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->update();

        return redirect(route('admin.surat.surat-usaha.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_usaha = SuratUsaha::findOrFail($id);
        $surat_usaha->delete();
        return redirect('admin/surat/surat-usaha');
    }
}
