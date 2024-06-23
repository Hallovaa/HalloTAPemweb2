<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::all();
        return view('materi.index', compact('materis'));
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'audio' => 'nullable|file|mimes:mp3,wav,ogg',
            'Gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('audio')) {
            $audioPath = $request->file('audio')->store('audios', 'public');
            $validatedData['audio'] = $audioPath;
        }

        $gambarPath = $request->file('Gambar')->store('gambar', 'public');
        $validatedData['Gambar'] = $gambarPath;

        Materi::create($validatedData);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan.');
    }

    public function edit(Materi $materi)
    {
        return view('materi.edit', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'audio' => 'nullable|file|mimes:mp3,wav,ogg',
            'Gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('audio')) {
            $audioPath = $request->file('audio')->store('audios', 'public');
            $validatedData['audio'] = $audioPath;
        }

        if ($request->hasFile('Gambar')) {
            $gambarPath = $request->file('Gambar')->store('gambar', 'public');
            $validatedData['Gambar'] = $gambarPath;
        }

        $materi->update([
            'judul' => $validatedData['judul'],
            'deskripsi' => $validatedData['deskripsi'],
            'audio' => $validatedData['audio'] ?? $materi->audio,
            'Gambar' => $validatedData['Gambar'] ?? $materi->Gambar,
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diperbarui.');
    }

    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}
