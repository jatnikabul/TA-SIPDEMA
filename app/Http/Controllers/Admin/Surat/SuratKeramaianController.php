<?php

namespace App\Http\Controllers\Admin\Surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratKeramaian;
use App\Models\Penduduk;
use PDF;


class SuratKeramaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $acara = $request->query('acara');
        $data = SuratKeramaian::whereRaw('lower(acara) like(?)', ["%{$acara}%"])->paginate(10);
        $penduduks = Penduduk::all();
        return view('admin.surat.surat-keramaian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduks = Penduduk::all();
        return view('admin.surat.surat-keramaian.create', compact('data', 'penduduks'));
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
            'acara' => 'required',
            'jenis_hiburan' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-keramaian.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratKeramaian();
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->acara = $request->acara;
        $data->jenis_hiburan = $request->jenis_hiburan;
        $data->waktu = $request->waktu;
        $data->tempat = $request->tempat;
        $data->hari = $request->hari;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->save();

        return redirect(route('admin.surat.surat-keramaian.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_keramaian = SuratKeramaian::findOrFail($id);
        return view('admin.surat.surat-keramaian.show', compact('surat_keramaian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduks = Penduduk::all();
        $surat_keramaian = SuratKeramaian::findOrFail($id);
        return view('admin.surat.surat-keramaian.edit', compact('surat_keramaian', 'penduduks'));
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
            'acara' => 'required',
            'jenis_hiburan' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-keramaian.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data =SuratKeramaian::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->acara = $request->acara;
        $data->jenis_hiburan = $request->jenis_hiburan;
        $data->waktu = $request->waktu;
        $data->tempat = $request->tempat;
        $data->hari = $request->hari;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->update();

        return redirect(route('admin.surat.surat-keramaian.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $surat_keramaian = SuratKeramaian::findOrFail($id);
        $surat_keramaian->delete();
        return redirect('admin/surat/surat-keramaian');
    }

    public function cetak_pdf($id)
    {
        $surat_keramaian = SuratKeramaian::findOrFail($id);

    	$surat_keramaian = PDF::loadview('admin.print.surat_keramaian', ['surat_keramaian'=>$surat_keramaian]);
    	return $surat_keramaian->stream('surat-keramaian.pdf');
    }
}
