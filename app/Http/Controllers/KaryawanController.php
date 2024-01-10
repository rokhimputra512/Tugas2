<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('karyawan')->get();
        return response()->json($data);
    }

    public function index1()
    {
        try {
            // Count the total number of rows in the "karyawan" table
            $jumlahKaryawan = DB::table('karyawan')->count();

            return view('dashboard', ['jumlahKaryawan' => $jumlahKaryawan]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch karyawan data.']);
        }
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
        $data = $request->validate([
            'NIP' => 'required|string',
            'NIK' => 'required|string',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|string',
            'hobi' => 'required|string',
            'status_pernikahan' => 'required|string',
            'jabatan' => 'required|string',
            'status_pegawai' => 'required|string',
        ]);

        $id = DB::table('karyawan')->insertGetId($data);
        return redirect('/')->with(['message' => 'Data karyawan berhasil ditambahkan', 'data' => $id]);
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
    public function update(Request $request, $NIP)
    {
        $data = $request->validate([
            'NIP' => 'required|string',
            'NIK' => 'required|string',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|string',
            'hobi' => 'required|string',
            'status_pernikahan' => 'required|string',
            'jabatan' => 'required|string',
            'status_pegawai' => 'required|string',
        ]);

        DB::table('karyawan')->where('NIP', $NIP)->update($data);
        $karyawan = DB::table('karyawan')->where('NIP', $NIP)->first();
        
        return response()->json($karyawan, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIP)
    {
        try {
            DB::table('karyawan')->where('NIP', $NIP)->delete();
            return response()->json(['message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal menghapus data'], 500);
        }
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        // Tambahkan logika pencarian ke database di sini
        $result = DB::table('karyawan')
            ->where('nama_lengkap', 'like', "%$searchTerm%")
            ->orWhere('jabatan', 'like', "%$searchTerm%")
            ->get();

            // dd($result);

        return response()->json($result);
    }
}
