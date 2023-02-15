<?php

namespace App\Http\Controllers;
use App\Models\data_pengunjung;
use Illuminate\Http\Request;
use Session;

class data_pengunjungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = data_pengunjung::all();
        return view('halaman_utama.guest.pengunjung', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman_utama.guest.TambahTamu');
    }

    // public function export()
    // {    
    //     $data = data_pengunjung::all();
    //     return view ('halaman_utama.staff.export', compact('data'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required' => ':attribute harus diisi gaesss',
            'min' => ':attribute minimal :min karakter ya coy',
            'max' => ':attribute maximal :max karakter gaess',
            'numeric' => ':attribute harus diisi angka',
            'mimes' => 'file :attribute harus bertipe jpg, jpeg'

        ];


        //validate form
        $this->validate($request,[ 
            'bulan_tanggal'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_tlp'=>'required|numeric',
            'status_pengunjung'=>'required',
            'keperluan'=>'required'
        ], $message);

        //insert data
        data_pengunjung::create([
            'bulan_tanggal'=> $request -> bulan_tanggal,
            'nama'=> $request -> nama,
            'alamat'=> $request -> alamat,
            'no_tlp'=> $request -> no_tlp,
            'status_pengunjung'=> $request -> status_pengunjung,
            'keperluan'=> $request -> keperluan
        ]);

        session::flash('success', 'data anda tersimpan!');
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
        
        $tamu = data_pengunjung::find($id);
        return view ('halaman_utama.guest.ShowTamu', compact('tamu'));
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
         $pengunjung=data_pengunjung::find($id);
        return view ('halaman_utama.guest.EditTamu', compact('pengunjung'));
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
        $message = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maximal :max karakter',
            'numeric' => ':attribute harus diisi angka',
            'mimes' => ':attribute harus bertipe foto'
        ];

        $this->validate($request, [
            'bulan_tanggal' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_tlp'=> 'required',
            'status_pengunjung'=> 'required',
            'keperluan' => 'required'

        ], $message);

            $data = data_pengunjung::find($id);
            $data->bulan_tanggal = $request->bulan_tanggal;
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->no_tlp = $request->no_tlp;
            $data->status_pengunjung = $request->status_pengunjung;
            $data->keperluan = $request->keperluan;

            $data->save();
            Session::flash('success', "data anda berhasil diupdate!!");
            return redirect('/Data_Pengunjung');
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

    public function hapus($id)
    {
        $data=data_pengunjung::find($id)->delete();
        Session::flash('danger', 'Data berhasil dihapus');
        return redirect('/Data_Pengunjung');    
    }


}


