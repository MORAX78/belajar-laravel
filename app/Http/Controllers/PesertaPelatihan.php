<?php

namespace App\Http\Controllers;

use App\Models\Peserta_pelatihan;
use Illuminate\Http\Request;

class PesertaPelatihan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihan = Peserta_pelatihan::all();
        return view('pelatihan.index', compact('pelatihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jurusan = $request->jurusan;
        $gelombang = $request->gelombang;
        $nama_lengkap = $request->nama_lengkap;
        $nik = $request->nik;
        $kartu_keluarga = $request->kartu_keluarga;
        $jenis_kelamin = $request->jenis_kelamin;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $pendidikan_terakhir = $request->pendidikan_terakhir;
        $nama_sekolah = $request->nama_sekolah;
        $kejuruan = $request->kejuruan;
        $nomor_hp = $request->nomor_hp;
        $email = $request->email;
        $aktivitas_saat_ini = $request->aktivitas_saat_ini;
        $status = $request->status;
        Peserta_pelatihan::create([
            'jurusan' => $jurusan,
            'gelombang' => $gelombang,
            'nama_lengkap' => $nama_lengkap,
            'nik' => $nik,
            'kartu_keluarga' => $kartu_keluarga,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'nama_sekolah' => $nama_sekolah,
            'kejuruan' => $kejuruan,
            'nomor_hp' => $nomor_hp,
            'email' => $email,
            'aktivitas_saat_ini' => $aktivitas_saat_ini,
            'status' => $status,
        ]);
        return redirect()->route('pesertapelatihan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelatihan = Peserta_pelatihan::find($id);
        return view('pelatihan.edit', compact('pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelatihan = Peserta_pelatihan::find($id);

        $pelatihan->jurusan = $request->jurusan;
        $pelatihan->gelombang = $request->gelombang;
        $pelatihan->nama_lengkap = $request->nama_lengkap;
        $pelatihan->nik = $request->nik;
        $pelatihan->kartu_keluarga = $request->kartu_keluarga;
        $pelatihan->jenis_kelamin = $request->jenis_kelamin;
        $pelatihan->tempat_lahir = $request->tempat_lahir;
        $pelatihan->tanggal_lahir = $request->tanggal_lahir;
        $pelatihan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pelatihan->nama_sekolah = $request->nama_sekolah;
        $pelatihan->kejuruan = $request->kejuruan;
        $pelatihan->nomor_hp = $request->nomor_hp;
        $pelatihan->email = $request->email;
        $pelatihan->aktivitas_saat_ini = $request->aktivitas_saat_ini;
        $pelatihan->status = $request->status;
        $pelatihan->update();

        return redirect()->route('pesertapelatihan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatihan = Peserta_pelatihan::find($id);
        $pelatihan->delete();

        return redirect()->route('pesertapelatihan.index');
    }
}
