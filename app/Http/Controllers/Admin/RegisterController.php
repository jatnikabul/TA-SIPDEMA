<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jenis_surat = $request->query('jenis_surat');
        $data = Register::whereRaw('lower(jenis_surat) like(?)', ["%{$jenis_surat}%"])->paginate(10);
        return view('admin.register.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.register.create', compact('data'));
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
            'nama' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'jenis_surat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.register.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new Register();
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->nama = $request->nama;
        $data->tanggal  = $request->tanggal ;
        $data->alamat  = $request->alamat ;
        $data->jenis_surat = $request->jenis_surat;
        $data->save();

        return redirect(route('admin.register.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $register = Register::findOrFail($id);
        return view('admin.register.show', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $register = Register::findOrFail($id);
        return view('admin.register.edit', compact('register'));
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
            'nama' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'jenis_surat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.register.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = Register::findOrFail($id);
        $data->no_surat = $request->no_surat;
        $data->penduduk_id = $request->penduduk_id;
        $data->nama = $request->nama;
        $data->tanggal  = $request->tanggal ;
        $data->alamat  = $request->alamat ;
        $data->jenis_surat = $request->jenis_surat;
        $data->update();

        return redirect(route('admin.register.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register = Register::findOrFail($id);
        $register->delete();
        return redirect('admin/register');
    }

    public function cetak_pdf($id)
    {
        $surat_register = Register::findOrFail($id);

        $surat_register = PDF::loadview('admin.print.surat_register', ['surat_usaha' => $surat_register]);
        return $surat_register->stream('surat-register.pdf');
    }
}
