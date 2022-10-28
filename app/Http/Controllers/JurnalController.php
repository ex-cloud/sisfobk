<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jurnal;

class JurnalController extends Controller{
    public function index(Request $request){
    $dtjurnal = Jurnal::orderBy('id', 'desc')->paginate(10);
        
    return view('/admin/features/jurnal', compact('dtjurnal'),[
            'title' => 'Jurnal Harian'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'   => 'required',
            'sasaran_kegiatan'  => 'required',
            'layanan_kegiatan'  => 'required',
            'hasil_kegiatan'  => 'required',
            'guru'    => 'required',
        ]);

        $date = date('Y-m-d',  strtotime($request->tanggal));

        Jurnal::create([
            'tanggal'     => $date,
            'sasaran_kegiatan'     => $request->sasaran_kegiatan,
            'layanan_kegiatan'     => $request->layanan_kegiatan,
            'hasil_kegiatan'   => $request->hasil_kegiatan,
            'guru'   => $request->guru
        ]);

        return redirect('/admin/features/jurnal')->with('success', 'Anda berhasil menambahkan data jurnal harian!');
    }

    public function edit($id){
        $jurnal = Jurnal::query()->where('id',$id)->first();

        $folder = "admin.features.inc.result_jurnal";
        $html = view($folder, compact('jurnal'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    public function updateJurnal(Request $request){
        $input = $request->all();
        $dtjurnal = Jurnal::query()->where('id', $input['id'])->first();
        $dtjurnal->tanggal = $request['tanggal'];
        $dtjurnal->sasaran_kegiatan = $request['sasaran_kegiatan'];
        $dtjurnal->layanan_kegiatan = $request['layanan_kegiatan'];
        $dtjurnal->hasil_kegiatan = $request['hasil_kegiatan'];
        $dtjurnal->guru = $request['guru'];
        $dtjurnal->save();

        return redirect('/admin/features/jurnal')->with('success', 'Anda berhasil merubah data jurnal');
    }

    public function destroy($id){
        $jurnal = Jurnal::query()->where('id', $id)->first();

        if($jurnal){
            $jurnal->delete();
        }
        return true;
    }
    
}
