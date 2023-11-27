<?php

namespace App\Http\Controllers;

use App\Models\data_siswa;
use App\Models\Datatahun;
use Illuminate\Http\Request;

class DatapertahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = data_siswa::orderBy('tahun', 'asc')->get();
        $data = Datatahun::paginate(5);
        return view('datapertahun.datasiswa',compact('data'));

    }
public function create()
    {
        return view('datapertahun.tambahdatat');
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
            'jumlah'=> 'required|numeric',
        ], $messages);

        $post = new Datatahun();
        $post->tahun = $request->input('tahun');
        $post->jumlah = $request->input('jumlah');
        $post->save();

        return redirect()->route('datapertahun.index')->with('success', 'Data berhasil di tambahkan !');
    }

    public function edit(string $id)
    {
        $data = Datatahun::find($id);
        return view('datapertahun.edit',compact('data'));
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
            'jumlah'=> 'required|numeric',

        ], $messages);
        $post = Datatahun::find($id);
        $post->tahun = $request->input('tahun');
        $post->jumlah = $request->input('jumlah');
        $post->update();

        return redirect()->route('datapertahun.index')->with('success', 'Data berhasil di tambahkan !');
    }

    public function destroy(string $id)
    {
        $data = Datatahun::find($id);
        $data->delete();
        return redirect()->route('datapertahun.index')->with('success', 'Data berhasil di tambahkan !');
    }
}
