<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use App\Models\Siswa;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $siswas = Siswa::query()->get();
        if($request->has('search')){
            $dtindividu = Individual::where('tanggal', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nama', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtindividu = Individual::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/individual', compact(['dtindividu','siswas']), [
            'title' => 'Konseling Individu',
            'subtitle' => 'Bimbingan Konseling SMK Negeri 6 Bandung'
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'   => 'required',
            'pertemuan'  => 'required',
            'waktu'  => 'required',
            'tempat'  => 'required',
            'pendekatan'    => 'required',
            'hasil'    => 'required',
            'id_siswa'    => 'required',
            'guru'    => 'required',
        ]);

        $date = date('Y-m-d',  strtotime($request->tanggal));

        Individual::create([
            'tanggal'     => $date,
            'pertemuan'  => $request->pertemuan,
            'waktu'     => $request->waktu,
            'tempat'   => $request->tempat,
            'pendekatan'   => $request->pendekatan,
            'hasil'   => $request->hasil,
            'id_siswa'   => $request->id_siswa,
            'guru'   => $request->guru
        ]);
        return redirect('/admin/features/individual')->with('success', 'Anda berhasil menambahkan data konseling individu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::query()->get();
        $individu = Individual::query()->where('id',$id)->first();

        $folder = "admin.features.inc.detail_individual";
        $html = view($folder, compact('individu', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = Siswa::query()->get();
        $individu = Individual::query()->where('id',$id)->first();

        $folder = "admin.features.inc.result_individual";
        $html = view($folder, compact('individu', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function updateIndividual(Request $request){
        $input = $request->all();
        $dtindividual = Individual::query()->where('id', $input['id'])->first();
        $dtindividual->tanggal = $request['tanggal'];
        $dtindividual->pertemuan = $request['pertemuan'];
        $dtindividual->waktu = $request['waktu'];
        $dtindividual->tempat = $request['tempat'];
        $dtindividual->pendekatan = $request['pendekatan'];
        $dtindividual->hasil = $request['hasil'];
        $dtindividual->id_siswa = $request['id_siswa'];
        $dtindividual->guru = $request['guru'];
        $dtindividual->save();

        return redirect('/admin/features/Individual')->with('success', 'Anda berhasil merubah data kunjungan rumah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $individu =  Individual::query()->where('id', $id)->first();

        if ($individu) {
            $individu->delete();
        }
        return true;
    }
}
