<?php

namespace App\Http\Controllers;

use App\Models\BbuLakilaki;
use App\Models\PbuLakilaki;
use App\Models\BbuPerempuan;
use App\Models\PbuPerempuan;
use Illuminate\Http\Request;

class CekGiziController extends Controller
{
    // membuat logika untuk cek status gizi balita

    public function index()
    {
        return view('cekgizi');
    }

    public function hitung(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'umur' => 'required|numeric',
            'berat' => 'required',
            'panjang' => 'required',
        ]);

        // Ambil data input dari form
        $nama = $request->nama;
        $gender = $request->gender;
        $umur = $request->umur;
        $berat = $request->berat;
        $panjang = $request->panjang;

        /** Perhitungan BB/U **/
        // Ambil data antropometri BB/U berdasarkan gender dan umur
        $dataBbu = $gender === 'laki-laki'
            ? BbuLakilaki::where('id_umur', $umur)->first()
            : BbuPerempuan::where('id_umur', $umur)->first();

        if (!$dataBbu) {
            return redirect()->back()->withErrors([
                'error' => 'Data BB/U tidak ditemukan untuk umur yang diberikan.',
            ]);
        }

        // Hitung Z-Score BB/U
        $zscoreBbu = $this->calculateZscore(
            $berat,
            $dataBbu->median,
            $dataBbu->sd1,
            $dataBbu->sdmin1
        );

        // Tentukan status gizi BB/U
        $statusBbu = $this->getStatusBbu($zscoreBbu);

        /** Perhitungan PB/U **/
        // Ambil data antropometri PB/U berdasarkan gender dan umur
        $dataPbu = $gender === 'laki-laki'
            ? PbuLakilaki::where('id_umur', $umur)->first()
            : PbuPerempuan::where('id_umur', $umur)->first();

        if (!$dataPbu) {
            return redirect()->back()->withErrors([
                'error' => 'Data PB/U tidak ditemukan untuk umur yang diberikan.',
            ]);
        }

        // Hitung Z-Score PB/U
        $zscorePbu = $this->calculateZscore(
            $panjang,
            $dataPbu->median,
            $dataPbu->sd1,
            $dataPbu->sdmin1
        );

        // Tentukan status gizi PB/U
        $statusPbu = $this->getStatusPbu($zscorePbu);

        // Tampilkan hasil di view
        return view('hasilgizi', compact('nama', 'gender', 'umur', 'berat', 'panjang', 'zscoreBbu', 'statusBbu', 'zscorePbu', 'statusPbu'));
    }

    // Metode untuk menghitung z-score
    private function calculateZscore($value, $median, $sd1, $sdmin1)
    {
        // Jika nilai lebih kecil dari median
        if ($value < $median) {
            return ($value - $median) / ($median - $sdmin1);
        }
        // Jika nilai lebih besar dari median
        return ($value - $median) / ($sd1 - $median);
    }

    // Metode untuk menentukan status gizi BB/U
    private function getStatusBbu($zscore)
    {
        if ($zscore < -3) {
            return 'Berat Badan Sangat Kurang';
        } elseif ($zscore >= -3 && $zscore < -2) {
            return 'Berat Badan Kurang';
        } elseif ($zscore >= -2 && $zscore <= 1) {
            return 'Berat Badan Normal';
        }
        return 'Risiko Berat Badan Lebih';
    }

    // Metode untuk menentukan status gizi PB/U
    private function getStatusPbu($zscore)
    {
        if ($zscore < -3) {
            return 'Sangat Pendek';
        } elseif ($zscore >= -3 && $zscore < -2) {
            return 'Pendek';
        } elseif ($zscore >= -2 && $zscore <= 1) {
            return 'Normal';
        }
        return 'Tinggi';
    }
}
