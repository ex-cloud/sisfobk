<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Siswa;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siswas = Siswa::query()->get();
        if($request->has('search')){
            $cases = Cases::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nis', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $cases = Cases::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/cases', compact('cases', 'siswas'), [
            'title' => 'Daftar Kasus',
            'subtitle' => 'Siswa SMK Negeri 6 Bandung'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
            'tanggal' => 'required',
            'id_siswa' => 'required',
            'kasus' => 'required',
            'guru' => 'required'
        ]);

        $date = date('Y-m-d', strtotime($request->tanggal));

        Cases::create([
            'tanggal' => $date,
            'id_siswa' => $request->id_siswa,
            'kasus' => $request->kasus,
            'guru' => $request->guru
        ]);

        return redirect('/admin/features/cases')->with('success', 'Anda berhasil menambahkan data kasus!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function show(Cases $cases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = Siswa::query()->get();
        $cases = Cases::query()->where('id',$id)->first();

        $folder = "admin.features.inc.result_cases";
        $html = view($folder, compact('cases', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function updateCases(Request $request)
    {
        $input = $request->all();
        $dtcases = Cases::query()->where('id', $input['id'])->first();
        $dtcases->kasus = $request['kasus'];
        $dtcases->guru = $request['guru'];
        $dtcases->save();

        return redirect('/admin/features/cases')->with('success', 'Anda berhasil merubah data kasus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cases =  Cases::query()->where('id', $id)->first();

        if ($cases) {
            $cases->delete();
        }
        return true;
    }
}
