<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menagement;
use Illuminate\Support\Facades\Storage;

class MenagementController extends Controller
{
    // Menampilkan semua tugas
    public function index()
    {
        $tasks = Menagement::latest()->get();
        return view('menagement', compact('tasks')); 
    }

    // Menampilkan form tambah tugas
    public function create()
    {
        return view('form'); 
    }

    // Menyimpan data tugas baru
  public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required',
        'penanggung_jawab' => 'required|string|max:255',
        'deadline' => 'required|date',
        'file_tugas' => 'nullable|file|mimes:pdf,doc,docx,zip',
    ]);

    $filePath = null;
    if ($request->hasFile('file_tugas')) {
        $filePath = $request->file('file_tugas')->store('tugas', 'public');
    }

    Menagement::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'penanggung_jawab' => $request->penanggung_jawab,
        'deadline' => $request->deadline,
        'file_tugas' => $filePath,
    ]);

    return redirect()->route('menagement.index')->with('success', 'Tugas berhasil ditambahkan.');
}
public function destroy($id)
{
    $task = Menagement::findOrFail($id);
    
    // Hapus file jika ada
    if ($task->file_tugas) {
        Storage::delete('public/' . $task->file_tugas);
    }

    $task->delete();

    return redirect()->route('menagement.index')->with('success', 'Tugas berhasil dihapus.');
}

    // Form untuk tambah link GitHub / Drive
    public function addLinkForm($id)
    {
        $task = Menagement::findOrFail($id);
        return view('add_link', compact('task')); 
    }

    // Simpan link GitHub dan Drive
    public function storeLink(Request $request, $id)
    {
        $request->validate([
            'link_github' => 'nullable|url',
            'link_drive' => 'nullable|url',
        ]);

        $task = Menagement::findOrFail($id);
        $task->update([
            'link_github' => $request->link_github,
            'link_drive' => $request->link_drive,
        ]);

        return redirect()->route('menagement.index')->with('success', 'Link berhasil ditambahkan.');
    }
}
