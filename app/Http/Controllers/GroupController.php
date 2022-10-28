<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::query()->get();
        $dataJSON = Group::orderBy('id', 'desc')->paginate(10);

        return view('/admin/features/group', compact('siswas', 'dataJSON'),[
            'title' => 'Konseling Kelompok',
            'subtitle' => 'Bimbingan Konseling SMK Negeri 6 Bandung'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $input = $request->validate([
            'tanggal'   => 'required',
            'pertemuan'  => 'required',
            'waktu'  => 'required',
            'tempat'  => 'required',
            'pendekatan'    => 'required',
            'hasil'    => 'required',
            'id_siswa'    => 'required',
            'guru'    => 'required',
        ]);

        $input = $request->all();
        $id_siswa = $input['id_siswa'];
        $input['id_siswa'] = implode(',', $id_siswa);

        // $data['id_siswa'] = json_encode($request->id_siswa);
        Group::create($input);
        
        return redirect('/admin/features/group')->with('success', 'Anda berhasil menambahkan data konseling kelompok!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
