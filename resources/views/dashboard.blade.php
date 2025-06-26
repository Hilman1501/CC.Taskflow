<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard TaskFlow
        </h2>
    </x-slot>

    <div class=" px-6 py-6 ">
        <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
    <!-- Tugas Todo -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:w-1/4">
    <div class="bg-white from-yellow-400 to-yellow-600 shadow-xl text-black rounded-2xl p-6">
        <div class="flex flex-col items-center text-center">
            
            <p class="text-sm uppercase font-semibold opacity-90">Tugas Todo</p>
            <h3 class="text-2xl font-bold mt-1">12</h3>
            <span class="text-sm opacity-80">Belum dikerjakan</span>
        </div>
    </div>
</div>


    <!-- Tugas Sedang Dikerjakan -->
<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:w-1/4">
    <div class="bg-white from-pink-400 to-pink-600 shadow-xl text-Black rounded-2xl p-6">
        <div class="flex flex-col items-center text-center">
            <p class="text-sm uppercase font-semibold opacity-90">Sedang Dikerjakan</p>
            <h3 class="text-2xl font-bold mt-1">5</h3>
            <span class="text-sm opacity-80">Dalam proses</span>
        </div>
    </div>
</div>


    <!-- Tugas Selesai -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:w-1/4">
    <div class="bg-white from-green-500 to-emerald-600 shadow-xl text-black rounded-2xl p-6">
        <div class="flex flex-col items-center text-center">
           
            <p class="text-sm uppercase font-semibold opacity-90">Tugas Selesai</p>
            <h3 class="text-2xl font-bold mt-1">18</h3>
            <span class="text-sm opacity-80">Selesai dikerjakan</span>
        </div>
    </div>
</div>

    <!-- Tugas Terlambat (Opsional) -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:w-1/4 bg">
        <div class="bg-white relative flex flex-col  shadow-xl dark:bg-slate-850 rounded-2xl">
            <div class="flex-auto p-4">
                 <div class="flex flex-col items-center text-center">
                    <div class="w-2/3 px-3">
                        <p class="mb-2 text-sm font-semibold uppercase text-black dark:text-white/60">Terlambat</p>
                        <h3 class="mb-2 font-bold text-gray-800 dark:text-white">2</h3>
                        <p class="mb-3 text-black text-sm">Lewat deadline</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- row 2 -->
     <div class="flex flex-wrap justify-center mt-6 -mx-3">
    <div class="w-full max-w-full px-3 mt-0 lg:w-7/12">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

            <!-- Header -->
            <div class="p-6 pt-4 pb-0 border-b border-gray-200 dark:border-slate-700">
                <h6 class="text-blue-700 font-semibold text-xl dark:text-white">👋 Selamat Datang di TaskFlow</h6>
                <p class="text-sm text-gray-600 mt-1 dark:text-white dark:opacity-60">
                    “Jangan menunda pekerjaan. Kerjakan sekarang, karena nanti belum tentu sempat.”
                </p>
            </div>

            <!-- Body -->
            <div class="flex-auto p-6 space-y-4">
                <!-- Informasi Hari Ini -->

                <!-- Reminder Card -->
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-4 rounded-xl text-white">
                    <h5 class="text-md font-semibold mb-1">📌 Pengingat Umum</h5>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        <li>Periksa kembali tugas yang mendekati deadline.</li>
                        <li>Selalu backup data tugas ke Google Drive atau GitHub.</li>
                        <li>Gunakan waktu dengan bijak, jangan kebanyakan rebahan 😴.</li>
                    </ul>
                </div>

                <!-- Chart -->
                <div class="mt-4">
                    <canvas id="chart-line" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>








            <!-- Carousel -->
            <div class="w-full max-w-full px-3 lg:w-5/12">
                <div class="relative w-full h-full overflow-hidden rounded-2xl">
                    <!-- Slide 1 -->
                    <div class="absolute w-full h-full transition-all duration-500">
                        <img class="object-cover h-full" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="carousel image">
                        <div class="absolute left-0 bottom-0 right-[15%] pt-5 pb-5 text-white ml-12">
                            <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white rounded-lg">
                                <i class="ni ni-camera-compact text-xxs text-slate-700"></i>
                            </div>
                            <h5 class="mb-1 text-white">Get started with Argon</h5>
                            <p class="dark:opacity-80">There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                        </div>
                    </div>

                    <!-- Tombol navigasi carousel -->
                    <button class="absolute top-6 right-4 z-10 w-10 h-10 p-2 text-lg text-white opacity-50 hover:opacity-100 fa fa-chevron-right"></button>
                    <button class="absolute top-6 right-16 z-10 w-10 h-10 p-2 text-lg text-white opacity-50 hover:opacity-100 fa fa-chevron-left"></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
