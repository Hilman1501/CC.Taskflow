<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Manajemen Tugas
        </h2>
    </x-slot>

    <div class="w-full px-6 py-6 mx-auto flex justify-center">
        <div class="w-full max-w-[1500px]">

            {{-- Tombol Tambah --}}
            <div class="flex items-center justify-between mb-6">
                <a href="{{ route('menagement.create') }}"
                   class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md shadow transition">
                    + Tambah Tugas
                </a>
            </div>

            {{-- Card Utama --}}
            <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-200">

                {{-- Notifikasi sukses --}}
                @if(session('success'))
                    <div class="mb-4 px-4 py-3 text-sm text-green-700 bg-green-100 rounded-lg shadow">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Judul --}}
                <div class="mb-6 text-center">
                    <h3 class="text-2xl font-bold text-gray-800">Manajemen Tugas</h3>
                </div>

                {{-- Tabel --}}
                <div class="w-full overflow-x-auto flex justify-center">
                    <table class="min-w-[1300px] text-sm text-center text-gray-700 border border-gray-300 rounded-lg overflow-hidden shadow-md">
                        <thead class="bg-blue-100 text-gray-800 uppercase text-xs font-semibold">
                            <tr>
                                <th class="px-6 py-4 border-b">Judul</th>
                                <th class="px-6 py-4 border-b">Deskripsi</th>
                                <th class="px-6 py-4 border-b">Penanggung Jawab</th>
                                <th class="px-6 py-4 border-b">Deadline</th>
                                <th class="px-6 py-4 border-b">File Tugas</th>
                                <th class="px-6 py-4 border-b">GitHub</th>
                                <th class="px-6 py-4 border-b">Drive</th>
                                <th class="px-6 py-4 border-b text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tasks as $task)
                                <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition">
                                    <td class="px-6 py-4 border-b">{{ $task->judul }}</td>
                                    <td class="px-6 py-4 border-b">{{ $task->deskripsi }}</td>
                                    <td class="px-6 py-4 border-b">{{ $task->penanggung_jawab }}</td>
                                    <td class="px-6 py-4 border-b">{{ $task->deadline }}</td>
                                    <td class="px-6 py-4 border-b">
                                        @if ($task->file_tugas)
                                            <a href="{{ asset('storage/' . $task->file_tugas) }}" target="_blank"
                                               class="text-blue-600 font-medium hover:underline">Download</a>
                                        @else
                                            <span class="italic text-gray-400">Belum ada file</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 border-b">
                                        @if ($task->link_github)
                                            <a href="{{ $task->link_github }}" target="_blank"
                                               class="text-blue-600 font-medium hover:underline">GitHub</a>
                                        @else
                                            <a href="{{ route('menagement.addlink.form', $task->id) }}"
                                               class="text-blue-500 text-sm hover:underline">+ Add Link</a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 border-b">
                                        @if ($task->link_drive)
                                            <a href="{{ $task->link_drive }}" target="_blank"
                                               class="text-blue-600 font-medium hover:underline">Drive</a>
                                        @else
                                            <a href="{{ route('menagement.addlink.form', $task->id) }}"
                                               class="text-blue-500 text-sm hover:underline">+ Add Link</a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 border-b text-center">
                                        <div class="flex justify-center gap-4">
                                            <a href="#" class="text-sm text-blue-600 hover:underline">Edit</a>

                                            <form action="{{ route('menagement.destroy', $task->id) }}" method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus tugas ini?')"
                                                  class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="text-sm text-red-600 hover:underline">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-6 py-4 text-center text-gray-500 italic">
                                        Belum ada tugas.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
