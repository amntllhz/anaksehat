<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BbuLakilaki;
use App\Models\BbuPerempuan;

class CekGiziController extends Controller
{
    // membuat logika untuk cek status gizi balita

    public function index()
    {
        return view('cekgizi');
    }

    public function hitung(Request $request)
    {
        // validasi input
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'umur' => 'required|numeric',
            'berat' => 'required',
        ]);

        $nama = $request->nama;
        $umur = $request->umur;
        $berat = $request->berat;
        $gender = $request->gender;

        // ambil data dari table sesuai gender
        $data = $gender === 'laki-laki' 
            ? BbuLakilaki::where('id_umur', $umur)->first()
            : BbuPerempuan::where('id_umur', $umur)->first();

        // Jika data tidak ditemukan
        if (!$data) {
            return redirect()->back()->withErrors([
                'error' => 'Data tidak ditemukan untuk umur yang diberikan.',
            ]);
        }

        // hitung berat badan dengan z-score
        $median = $data->median;
        $sd1 = $data->sd1;
        $sdmin1 = $data->sdmin1;

        $zscore = $berat < $median
            ? ($berat - $median) / ($median - $sdmin1)
            : ($berat - $median) / ($sd1 - $median);

        // Tentukan status gizi
        $status = $this->getStatus($zscore);

        // tampilkan hasil
        return view('hasilgizi', compact('nama','gender', 'umur', 'berat', 'zscore', 'status'));

    }

    public function getStatus($zscore)
    {
        // if ($zscore < -3) return 'Berat Badan Sangat Kurang';
        // if ($zscore < -2) return 'Berat Badan Kurang';
        // if ($zscore <= 2) return 'Gizi Baik';
        // return 'Gizi Lebih';

        if ($zscore < -3) {
            return 'Berat Badan Sangat Kurang';
        } elseif ($zscore >= -3 && $zscore < -2) {
            return 'Berat Badan Kurang';
        } elseif ($zscore >= -2 && $zscore <= 1) {
            return 'Berat Badan Normal';
        } else {
            return 'Risiko Berat Badan Lebih';
        }
    }
}
