<?php

namespace App\Http\Controllers\Admin\Surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\SuratTidakMampu;

class SuratTidakMampuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tanggal = $request->query('tanggal');
        $data = SuratTidakMampu::whereRaw('lower(tanggal) like(?)', ["%{$tanggal}%"])->paginate(10);
        return view('admin.surat.surat-tidak-mampu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.surat.surat-tidak-mampu.create');
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
            'tanggal' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-tidak-mampu.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new SuratTidakMampu();
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->peruntukan_surat = $request->peruntukan_surat;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->save();

        return redirect(route('admin.surat.surat-tidak-mampu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_tidak_mampu = SuratTidakMampu::findOrFail($id);
        return view('admin.surat.surat-tidak-mampu.show', compact('surat_tidak_mampu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_tidak_mampu = SuratTidakMampu::findOrFail($id);
        return view('admin.surat.surat-tidak-mampu.edit', compact('surat_tidak_mampu'));
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
            'tanggal' => 'required',
            'keterangan' => 'required',
            'pejabat_mengetahui' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.surat.surat-tidak-mampu.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = SuratTidakMampu::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->peruntukan_surat = $request->peruntukan_surat;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->pejabat_mengetahui = $request->pejabat_mengetahui;
        $data->update();

        return redirect(route('admin.surat.surat-tidak-mampu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_tidak_mampu = SuratTidakMampu::findOrFail($id);
        $surat_tidak_mampu->delete();
        return redirect('admin/surat/surat-tidak-mampu');
    }
}
