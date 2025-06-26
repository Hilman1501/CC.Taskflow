<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Tugas
        </h2>
    </x-slot>

    <div class="min-h-screen flex items-start justify-center pt-12 px-4 bg-gray-50">
        <div class="w-full max-w-md">
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-base font-bold text-gray-800 mb-4 text-center">Tambah Tugas</h3>

                <form action="{{ route('menagement.store') }}" method="POST" enctype="multipart/form-data" class="text-sm">
                    @csrf

                    <div class="mb-3">
                        <label for="judul" class="block font-medium mb-1">Judul Tugas</label>
                        <input type="text" id="judul" name="judul" class="w-full px-3 py-1.5 border border-gray-300 rounded-md" placeholder="Contoh: Buat UI Dashboard">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="block font-medium mb-1">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full px-3 py-1.5 border border-gray-300 rounded-md" placeholder="Deskripsi tugas di sini..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="penanggung_jawab" class="block font-medium mb-1">Penanggung Jawab</label>
                        <input type="text" id="penanggung_jawab" name="penanggung_jawab" class="w-full px-3 py-1.5 border border-gray-300 rounded-md" placeholder="Contoh: Hilman Hili">
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="block font-medium mb-1">Deadline</label>
                        <input type="date" id="deadline" name="deadline" class="w-full px-3 py-1.5 border border-gray-300 rounded-md">
                    </div>

                    <div class="mb-5">
                        <label for="file_tugas" class="block font-medium mb-1">Upload File Tugas</label>
                        <input type="file" id="file_tugas" name="file_tugas" class="w-full px-3 py-1.5 border border-gray-300 rounded-md">
                    </div>

                    <div class="flex justify-end gap-2">
                        <button type="reset" class="px-3 py-1.5 bg-gray-300 text-gray-700 rounded-md">Reset</button>
                        <button type="submit" class="px-3 py-1.5 bg-blue-600 text-white rounded-md">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
