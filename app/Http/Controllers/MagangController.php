<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magang = Magang::paginate(15);
        return view('admin.magang.tempat_magang',compact('magang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.magang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_instansi' => 'required',
            'alamat' => 'required',
            'posisi' => 'required',
            'pendaftaran_buka' => 'required',
            'pendaftaran_tutup' => 'required',
            'durasi' => 'required|numeric',
            'status' => 'required',
            'benefit' => 'nullable',
            'keterangan' => 'nullable',
        ]);
        
        Magang::create([
            'nama_instansi' => $request->nama_instansi,
            'alamat' => $request->alamat,
            'posisi' => $request->posisi,
            'pendaftaran_buka' => $request->pendaftaran_buka,
            'pendaftaran_tutup' => $request->pendaftaran_tutup,
            'durasi' => $request->durasi,
            'status' => $request->status,
            'benefit' => $request->benefit,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('magang.index')->with('success','Data tempat magang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function show(Magang $magang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Magang::find($id);
        return view('admin.magang.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_instansi' => 'required',
            'alamat' => 'required',
            'posisi' => 'required',
            'pendaftaran_buka' => 'required',
            'pendaftaran_tutup' => 'required',
            'durasi' => 'required|numeric',
            'status' => 'required',
            'benefit' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $data = Magang::find($id);

        $data->update([
            'nama_instansi' => $request->nama_instansi,
            'alamat' => $request->alamat,
            'posisi' => $request->posisi,
            'pendaftaran_buka' => $request->pendaftaran_buka,
            'pendaftaran_tutup' => $request->pendaftaran_tutup,
            'durasi' => $request->durasi,
            'status' => $request->status,
            'benefit' => $request->benefit,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('magang.index')->with('success','Data tempat magang berhasil diinput!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Magang::findOrFail($id);
        $data->delete();
        return redirect()->route('magang.index')->with('success','Data tempat magang berhasil dihapus!');
    }
}
