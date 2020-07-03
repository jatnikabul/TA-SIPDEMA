<?php

namespace App\Http\Controllers\Admin\Surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratSKCK;
use App\Models\Penduduk;
use PDF;

class SuratSKCKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peruntukan_surat = $request->query('peruntukan_surat');
        $data = SuratSKCK::whereRaw('lower(peruntukan_surat) like(?)', ["%{$peruntukan_surat}%"])->paginate(10);
        $penduduks = Penduduk::all();
        return view('admin.surat.surat-skck.index', compact('data', 'penduduks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduks = Penduduk::all();
        return view('admin.surat.surat-skck.create', compact('penduduks'));
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
            'peruntukan_surat' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-skck.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratSKCK();
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->peruntukan_surat = $request->peruntukan_surat;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->save();

        return redirect(route('admin.surat.surat-skck.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_skck = SuratSkck::findOrFail($id);
        return view('admin.surat.surat-skck.show', compact('surat_skck'));
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
        $surat_skck = SuratSKCK::findOrFail($id);
        return view('admin.surat.surat-skck.edit', compact('surat_skck', 'penduduks'));
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
            'peruntukan_surat' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-skck.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = SuratSKCK::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->peruntukan_surat = $request->peruntukan_surat;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->update();

        return redirect(route('admin.surat.surat-skck.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_skck = SuratSKCK::findOrFail($id);
        $surat_skck->delete();
        return redirect('admin/surat/surat-skck');
    }

    public function cetak_pdf($id)
    {
        $surat_skck = SuratSKCK::findOrFail($id);

    	$surat_skck = PDF::loadview('admin.print.surat_skck', ['surat_skck'=>$surat_skck]);
    	return $surat_skck->stream('surat-skck.pdf');
    }
}
