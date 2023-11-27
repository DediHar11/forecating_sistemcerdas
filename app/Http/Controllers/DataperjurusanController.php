<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa_jurusan as jurusan;
use App\Models\Datajurusan;

class DataperjurusanController extends Controller
{
    public function index() {
        // $year = Jurusan::select('tahun')->distinct()->pluck('tahun');
        // $otomotif = Jurusan::where('id_jurusan', 1)->pluck('jumlah_siswa');
        // $media_desain = Jurusan::where('id_jurusan', 2)->pluck('jumlah_siswa');
        // $tkk = Jurusan::where('id_jurusan', 3)->pluck('jumlah_siswa');
        // $manajemen_bisnis = Jurusan::where('id_jurusan', 4)->pluck('jumlah_siswa');
        // $akuntansi_keuangan = Jurusan::where('id_jurusan', 5)->pluck('jumlah_siswa');

        // return view('menu.datasiswajurusan', compact('year', 'otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan'));
        $data = Datajurusan::paginate(5);
        return view('menu.datasiswajurusan',compact('data'));
    }
    
    public function create()
    {
        return view('menu.tambahdataj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        $this->validate($request, [
            'tahun'=> 'required',
            'otomotif'=> 'required|numeric',
            'media'=> 'required|numeric',
            'tk'=> 'required|numeric',
            'mb'=> 'required|numeric',
            'ak'=> 'required|numeric',
        ], $messages);

        $post = new Datajurusan();
        $post->tahun = $request->input('tahun');
        $post->otomotif = $request->input('otomotif');
        $post->media = $request->input('media');
        $post->tk = $request->input('tk');
        $post->mb = $request->input('mb');
        $post->ak = $request->input('ak');
        $post->save();

        return redirect()->route('jurusan.index')->with('success', 'Data berhasil di tambahkan !');
    }

    public function edit(string $id)
    {
        $data = Datajurusan::find($id);
        return view('menu.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        $this->validate($request, [
            'tahun'=> 'required',
            'otomotif'=> 'required|numeric',
            'media'=> 'required|numeric',
            'tk'=> 'required|numeric',
            'mb'=> 'required|numeric',
            'ak'=> 'required|numeric',
        ], $messages);
        $post = Datajurusan::find($id);
        $post->tahun = $request->input('tahun');
        $post->otomotif = $request->input('otomotif');
        $post->media = $request->input('media');
        $post->tk = $request->input('tk');
        $post->mb = $request->input('mb');
        $post->ak = $request->input('ak');
        $post->update();

        return redirect()->route('jurusan.index')->with('success', 'Data berhasil di tambahkan !');
    }

    public function destroy(string $id)
    {
        $data = Datajurusan::find($id);
        $data->delete();
        return redirect()->route('jurusan.index')->with('success', 'Data berhasil di tambahkan !');
    }
}
