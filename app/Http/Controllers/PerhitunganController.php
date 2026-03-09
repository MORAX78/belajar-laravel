<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    function index()
    {
        return view('balok.lp_balok');
    }
    function store(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $operator = $request->operator;
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;

            case '-':
                $hasil = $angka1 - $angka2;
                break;

            case '*':
                $hasil = $angka1 * $angka2;
                break;

            case '/':
                if ($angka2 == 0) {
                    return back()->with('error', 'Tidak bisa dibagi 0!');
                }
                $hasil = $angka1 / $angka2;
                break;
        }
        return view('perhitungan.index', compact('hasil'));
    }
    function storeLpKubus(Request $request)
    {
        //L = 6*s^2
        $s = $request->sisi;
        $hasil = 6 * $s * $s;

        return view('balok.lp_balok', compact('hasil'));
    }
    function volumek()
    {
        return view('kubus.volumekubus');
    }
    function storeVolk(Request $request)
    {
        $a1 = $request->volkubus;
        $a3 = $request->volkubus;
        $a2 = $request->volkubus;
        $hasil = $a1 * $a2 * $a3;
        return view('kubus.volumekubus', compact('hasil'));
    }
    function luastabung()
    {
        return view('tabung.lp_tabung');
    }
    function storeTabung(Request $request)
    {
        $jari = $request->jari;
        $tinggi = $request->tinggi;

        // L = 2πr(r+t)
        $hasil = 2 * pi() * $jari * ($jari + $tinggi);

        return view('tabung.lp_tabung', compact('hasil'));
    }
    function voltabung()
    {
        return view('tabungvol.vol_tabung');
    }
    function storeVolt(Request $request)
    {
        $jari = $request->voltabung;
        $tinggi = $request->voltabung;
        $hasil = pi() * pow($jari, 2) * $tinggi;
        return view('tabungvol.vol_tabung', compact('hasil'));
    }
}
