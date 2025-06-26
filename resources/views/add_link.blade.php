@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-start justify-center pt-16 px-4 bg-gray-50">
  <div class="w-full max-w-md">
    <div class="bg-white p-6 rounded-xl shadow-md">
      <h3 class="text-lg font-bold text-gray-800 mb-4 text-center">Tambah Link Tugas</h3>

      <form action="{{ route('menagement.addlink.store', $task->id) }}" method="POST" class="text-sm">
        @csrf

        <div class="mb-4">
          <label for="link_github" class="block font-medium mb-1">Link GitHub</label>
          <input
            type="url"
            id="link_github"
            name="link_github"
            class="w-full px-3 py-2 border border-gray-300 rounded-md"
            value="{{ old('link_github', $task->link_github) }}"
            placeholder="https://github.com/..."
          >
        </div>

        <div class="mb-4">
          <label for="link_drive" class="block font-medium mb-1">Link Drive</label>
          <input
            type="url"
            id="link_drive"
            name="link_drive"
            class="w-full px-3 py-2 border border-gray-300 rounded-md"
            value="{{ old('link_drive', $task->link_drive) }}"
            placeholder="https://drive.google.com/..."
          >
        </div>

        <div class="flex justify-end gap-2">
          <a href="{{ route('menagement.index') }}" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-md text-sm">
            Batal
          </a>
          <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md text-sm">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
