<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Siswa;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index(Request $request){ 
        $siswas = Siswa::query()->get();
        $dtvisit = Visit::with('siswa')->paginate(10);
        if($request->has('search')){
            $dtvisit = Siswa::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nis', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtvisit = Visit::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/visit', compact('siswas', 'dtvisit'), [
            'title' => 'Kunjungan Rumah'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bidang_layanan'   => 'required',
            'fungsi_layanan'  => 'required',
            'topik'  => 'required',
            'tujuan_kegiatan'    => 'required',
            'gambaran'    => 'required',
            'alamat'    => 'required',
            'tanggal'    => 'required',
            'anggota_keluarga'    => 'required',
            'evaluasi'    => 'required',
            'tindak_lanjut'    => 'required',
            'catatan'    => 'required',
            'id_siswa'    => 'required',
            'guru'    => 'required',
        ]);

        Visit::create([
            'bidang_layanan'   => $request->bidang_layanan,
            'fungsi_layanan'  => $request->fungsi_layanan,
            'topik'  => $request->topik,
            'tujuan_kegiatan'    => $request->tujuan_kegiatan,
            'gambaran'    => $request->gambaran,
            'alamat'    => $request->alamat,
            'tanggal'    => $request->tanggal,
            'lama_kunjungan'    => $request->lama_kunjungan,
            'anggota_keluarga'    => $request->anggota_keluarga,
            'evaluasi'    => $request->evaluasi,
            'tindak_lanjut'    => $request->tindak_lanjut,
            'catatan'    => $request->catatan,
            'id_siswa'    => $request->id_siswa,
            'guru'    => $request->guru
        ]);
        return redirect('/admin/features/visit')->with('success', 'Anda berhasil menambahkan data jurnal harian!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::query()->get();
        $visit = Visit::query()->where('id',$id)->first();

        $folder = "admin.features.inc.detail_visit";
        $html = view($folder, compact('visit', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = Siswa::query()->get();
        $visit = Visit::query()->where('id',$id)->first();

        $folder = "admin.features.inc.result_visit";
        $html = view($folder, compact('visit', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function updateVisit(Request $request)
    {
        $input = $request->all();
        $dtvisit = Visit::query()->where('id', $input['id'])->first();
        $dtvisit->bidang_layanan = $request['bidang_layanan'];
        $dtvisit->fungsi_layanan = $request['fungsi_layanan'];
        $dtvisit->topik = $request['topik'];
        $dtvisit->tujuan_kegiatan = $request['tujuan_kegiatan'];
        $dtvisit->gambaran = $request['gambaran'];
        $dtvisit->alamat = $request['alamat'];
        $dtvisit->tanggal = $request['tanggal'];
        $dtvisit->lama_kunjungan = $request['lama_kunjungan'];
        $dtvisit->anggota_keluarga = $request['anggota_keluarga'];
        $dtvisit->evaluasi = $request['evaluasi'];
        $dtvisit->tindak_lanjut = $request['tindak_lanjut'];
        $dtvisit->catatan = $request['catatan'];
        $dtvisit->guru = $request['guru'];
        $dtvisit->save();

        return redirect('/admin/features/visit')->with('success', 'Anda berhasil merubah data kunjungan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visit =  Visit::query()->where('id', $id)->first();

        if ($visit) {
            $visit->delete();
        }
        return true;
    }
}
