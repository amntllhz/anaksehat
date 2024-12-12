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
        $dataBbu = $gender === 'Laki-laki'
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
        $dataPbu = $gender === 'Laki-laki'
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

        // Tentukan catatan
        $catatan = $this->getCatatan($statusBbu, $statusPbu);

        // Tampilkan hasil di view
        return view('hasilgizi', compact('nama', 'gender', 'umur', 'berat', 'panjang', 'zscoreBbu', 'statusBbu', 'zscorePbu', 'statusPbu','catatan'));
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

    // Tambahkan metode di bawah metode lain
    private function getCatatan($statusBbu, $statusPbu)
    {
        $catatan = [];

        // Saran berdasarkan BB/U
        switch ($statusBbu) {
            case 'Berat Badan Sangat Kurang':
                $catatan['bb'] = 'Kondisi ini memerlukan perhatian segera. Silakan konsultasikan ke fasilitas kesehatan terdekat untuk evaluasi lebih lanjut.';
                break;
            case 'Berat Badan Kurang':
                $catatan['bb'] = 'Perhatikan asupan makanan balita Anda. Pastikan mereka mendapatkan nutrisi yang cukup setiap harinya.';
                break;
            case 'Berat Badan Normal':
                $catatan['bb'] = 'Kondisi baik! Pastikan pola makan tetap terjaga dengan gizi seimbang.';
                break;
            case 'Risiko Berat Badan Lebih':
                $catatan['bb'] = 'Perhatikan pola makan balita. Hindari makanan tinggi gula dan lemak.';
                break;
        }

        // Saran berdasarkan PB/U
        switch ($statusPbu) {
            case 'Sangat Pendek':
                $catatan['pb'] = 'Kondisi ini menunjukkan stunting. Segera periksa ke fasilitas kesehatan untuk intervensi dini.';
                break;
            case 'Pendek':
                $catatan['pb'] = 'Pastikan balita mendapatkan pola makan bergizi dan stimulasi tumbuh kembang yang optimal.';
                break;
            case 'Normal':
                $catatan['pb'] = 'Kondisi baik! Pertahankan pola makan dan perawatan balita.';
                break;
            case 'Tinggi':
                $catatan['pb'] = 'Perhatikan pola makan balita agar panjang badan tetap sesuai dengan usia.';
                break;
        }

        return $catatan;
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
