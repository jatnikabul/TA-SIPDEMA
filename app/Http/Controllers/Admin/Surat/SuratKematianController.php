<?php

namespace App\Http\Controllers\Admin\Surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratKematian;
use App\Models\Penduduk;
use PDF;

class SuratKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tanggal = $request->query('tanggal');
        $data = SuratKematian::whereRaw('lower(tanggal) like(?)', ["%{$tanggal}%"])->paginate(10);
        $penduduks = Penduduk::all();
        return view('admin.surat.surat-kematian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduks = Penduduk::all();
        return view('admin.surat.surat-kematian.create',  compact('data', 'penduduks'));
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
            'hari' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'meninggal_di' => 'required',
            'disebabkan_karena' => 'required',
            'nama_yang_melaporkan' => 'required',
            'hubungan_dengan_yang_meninggal' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-kematian.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratKematian();
        $data->no_surat = $request->no_surat;
        $data->penduduk_id=$request->penduduk_id;
        $data->hari = $request->hari;
        $data->waktu = $request->waktu;
        $data->tanggal = $request->tanggal;
        $data->meninggal_di = $request->meninggal_di;
        $data->disebabkan_karena = $request->disebabkan_karena;
        $data->nama_yang_melaporkan = $request->nama_yang_melaporkan;
        $data->hubungan_dengan_yang_meninggal = $request->hubungan_dengan_yang_meninggal;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->save();

        return redirect(route('admin.surat.surat-kematian.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_kematian = SuratKematian::findOrFail($id);
        return view('admin.surat.surat-kematian.show', compact('surat_kematian'));
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
        $surat_kematian = SuratKematian::findOrFail($id);
        return view('admin.surat.surat-kematian.edit', compact('surat_kematian', 'penduduks'));
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
            'hari' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'meninggal_di' => 'required',
            'disebabkan_karena' => 'required',
            'nama_yang_melaporkan' => 'required',
            'hubungan_dengan_yang_meninggal' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-kematian.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = SuratKematian::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->penduduk_id=$request->penduduk_id;
        $data->hari = $request->hari;
        $data->waktu = $request->waktu;
        $data->tanggal = $request->tanggal;
        $data->meninggal_di = $request->meninggal_di;
        $data->disebabkan_karena = $request->disebabkan_karena;
        $data->nama_yang_melaporkan = $request->nama_yang_melaporkan;
        $data->hubungan_dengan_yang_meninggal = $request->hubungan_dengan_yang_meninggal;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->update();

        return redirect(route('admin.surat.surat-kematian.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_kematian = SuratKematian::findOrFail($id);
        $surat_kematian->delete();
        return redirect('admin/surat/surat-kematian');
    }

    public function cetak_pdf($id)
    {
        $surat_kematian = SuratKematian::findOrFail($id);

        $surat_kematian = PDF::loadview('admin.print.surat_kematian', ['surat_kematian'=>$surat_kematian]);
        return $surat_kematian->stream('surat-kematian.pdf');
    }
}
