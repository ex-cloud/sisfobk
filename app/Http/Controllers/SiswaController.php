<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(Request $request){
        $siswas = Siswa::sortable()->paginate(10);
        $jurusans = Jurusan::query()->get();
        if($request->has('search')){
            $dtsiswa = Siswa::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nis', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtsiswa = Siswa::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/siswa', compact('dtsiswa', 'jurusans', 'siswas'), [
            'title' => 'Daftar Siswa',
        ]);
    }

    public function print(){
        $dtsiswa = Siswa::all();

        $pdf = PDF::loadview('admin.features.inc.print_siswa', ['dtsiswa'=>$dtsiswa]);
        return $pdf->download('laporan-siswa-pdf');
    }
    
    public function store(Request $request)
    {
        $messages = [
            'nis.required' => 'NIS is required!'
        ];

        $this->validate($request, [
            'nis'     => 'required|unique:siswa,nis',
            'nama'     => 'required|unique:siswa,nama',
            'kelas'     => 'required',
            'id_jurusan'     => 'required',
        ], $messages);

        Siswa::create([
            'nis'     => $request->nis,
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,
            'id_jurusan'   => $request->id_jurusan
        ]);

        return redirect('/admin/features/siswa')->with('success', 'Anda berhasil menambahkan data siswa!');
    }

    public function show($id){
        $siswa = Siswa::query()->where('id',$id)->first();
        $jurusans = Jurusan::query()->get();

        $folder = "admin.features.inc.detail_siswa";
        $html = view($folder, compact('siswa', 'jurusans'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    public function edit($id){
        $siswa = Siswa::query()->where('id',$id)->first();
        $jurusans = Jurusan::query()->get();

        $folder = "admin.features.inc.result_siswa";
        $html = view($folder, compact('siswa', 'jurusans'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    public function updateSiswa(Request $request){
        $input = $request->all();
        $dtsiswa = Siswa::query()->where('id', $input['id'])->first();
        $dtsiswa->nis = $request['nis'];
        $dtsiswa->nama = $request['nama'];
        $dtsiswa->kelas = $request['kelas'];
        $dtsiswa->id_jurusan = $request['id_jurusan'];
        $dtsiswa->save();

        return redirect('/admin/features/siswa')->with('success', 'Anda berhasil merubah data siswa!');
    }

    public function destroy($id){
        $siswa =  Siswa::find($id);

        $siswa->visit()->delete();
        $siswa->individual()->delete();
        $siswa->cases()->delete();
        $siswa->delete();

        return back();
    }

}