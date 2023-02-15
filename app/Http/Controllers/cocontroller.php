<?php

namespace App\Http\Controllers;
use App\Models\check_out;
use App\Models\data_pengunjung;
use Illuminate\Http\Request;
use Session;

class cocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = check_out::all();
        return view('halaman_utama.guest.pengunjung', compact('data'));
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
        $message=[
            'required' => ':Mohon Lengkapi Informasi Anda Terlebih Dahulu'

        ];


        //validate form
        $this->validate($request,[ 
            'date'=>'required',
            'deskripsi'=>'required'
        ], $message);

        //insert data
        check_out::create([
            'id_pengunjung' => $request->id_pengunjung,
            'date'=> $request->date,
            'deskripsi'=> $request->deskripsi


        ]);

        session::flash('success', 'Data Anda Telah Tersimpan!');
        return redirect('/Data_Pengunjung');
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
        $data = data_pengunjung::find($id);
        return view('check_out.check_out', compact('data'));
        //
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
