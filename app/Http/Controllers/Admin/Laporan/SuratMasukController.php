<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama_pemohon = $request->query('nama_pemohon');
        $data = SuratMasuk::whereRaw('lower(nama_pemohon) like(?)', ["%{$nama_pemohon}%"])->paginate(10);
        return view('admin.laporan.surat-masuk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laporan.surat-masuk.create');
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
            'nama_pemohon' => 'required',
            'perihal' => 'required|max:255',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.laporan.surat-masuk.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratMasuk();
        $data->no_surat = $request->no_surat;
        $data->nama_pemohon = $request->nama_pemohon;
        $data->perihal = $request->perihal;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect(route('admin.laporan.surat-masuk.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);
        return view('admin.laporan.surat-masuk.show', compact('surat_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);
        return view('admin.laporan.surat-masuk.edit', compact('surat_masuk'));
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
            'nama_pemohon' => 'required',
            'perihal' => 'required|max:255',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.laporan.surat-masuk.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = SuratMasuk::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->nama_pemohon = $request->nama_pemohon;
        $data->perihal = $request->perihal;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->update();

        return redirect(route('admin.laporan.surat-masuk.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);
        $surat_masuk->delete();
        return redirect('admin/laporan/surat-masuk');
    }
}
