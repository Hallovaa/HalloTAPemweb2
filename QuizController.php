<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    // Menampilkan halaman list quiz
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }

    // Menampilkan form untuk membuat quiz baru
    public function create()
    {
        return view('quiz.create');
    }

    // Menyimpan quiz baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'No' => 'required|string|max:255',
            'Soal' => 'required|string',
            'Gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pathGambar = $request->file('Gambar')->store('gambar_quiz', 'public');

        Quiz::create([
            'No' => $request->No,
            'Soal' => $request->Soal,
            'Gambar' => $pathGambar,
        ]);
    
        return redirect()->route('quiz.index')->with('success', 'Quis berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit quiz
    public function edit(Quiz $quiz)
    {
        return view('quiz.edit', compact('quiz'));
    }

    // Menyimpan perubahan pada quiz ke database
    public function update(Request $request, Quiz $quiz)
    {
        // Validasi data
        $request->validate([
            'No' => 'required|string|max:255',
            'Soal' => 'required|string',
            'Gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update quiz
        $quiz->update([
            'No' => $request->No,
            'Soal' => $request->Soal,
        ]);

        if ($request->hasFile('Gambar')) {
            $pathGambar = $request->file('Gambar')->store('gambar_quiz', 'public');
            $quiz->update([
                'Gambar' => $pathGambar,
            ]);
        }

        return redirect()->route('quiz.index')->with('success', 'Quiz updated successfully.');
    }

    // Menghapus quiz dari database
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quiz.index')->with('success', 'Quiz deleted successfully.');
    }
}
