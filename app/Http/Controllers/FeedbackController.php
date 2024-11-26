<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //

    public function store(Request $request)
    {
         // Validasi input
         $validated = $request->validate([
            'email' => 'required|email',
            'pesan' => 'required|string|max:500',
        ]);

        // Simpan data ke database
        Feedback::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
