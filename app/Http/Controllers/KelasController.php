<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pelajaran = DB::table("guru")->select('mengajar')->distinct()->get();
        $query = DB::table("kelas")
            ->select("siswa.nama as siswa", "guru.nama as guru", "guru.mengajar as pelajaran")
            ->join("siswa", "siswa.id", "kelas.id_siswa")
            ->join("guru", "guru.id", "kelas.id_guru")
            ->orderBy("kelas.id", "desc");

        if($request->has("pelajaran")){
            $query->where("guru.mengajar", $request->pelajaran);
        }

        $data = $query->get();

        return view('index-0047', ["data" => $data, "pelajaran" => $pelajaran]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}