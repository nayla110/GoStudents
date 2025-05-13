<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Absen - GoStudents</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex min-h-screen bg-gray-100 font-sans">

  <!-- Sidebar -->
  <aside id="sidebar" class="w-64 bg-gray-300 p-6 flex flex-col">
    <h2 class="text-3xl italic font-bold mb-10">GoStudents</h2>
    <nav class="flex flex-col gap-6 text-lg font-bold">
    <a href="{{ route('DashboardSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-dashboard">Halaman Utama</a>
      <a href="{{ route('AbsenSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-absen">Absen</a>
      <a href="{{ route('NilaiSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-nilai">Nilai</a>
      <a href="{{ route('PointSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-point">Point</a>
      <a href="{{ route('IjinKeluarSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-ijin">Ijin Keluar</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-2xl font-bold">SMA NEGERI 1 BATAM</h1>
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
          </svg>
        </div>
        <button class="border-2 border-red-500 text-red-500 font-bold px-4 py-2 rounded-md hover:bg-red-500 hover:text-white transition">
          Logout
        </button>
      </div>
    </div>

<!-- Sub Header -->
<div class="flex items-center gap-3 mb-8">
  <!-- Hamburger Icon -->
  <button class="p-1">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Text "Absen" -->
  <h2 class="text-xl font-bold ml-2">Absen</h2>
</div>


    <!-- Filters Dropdown -->
    <div class="flex gap-4 mb-8" x-data="{ kelasOpen: false, tanggalOpen: false }">
      
      <!-- Kelas Dropdown -->
      <div class="relative">
        <button @click="kelasOpen = !kelasOpen" class="border-2 border-black font-bold rounded-full px-6 py-2 flex items-center">
          <span class="mr-2">▼</span> Kelas
        </button>
        <div x-show="kelasOpen" @click.outside="kelasOpen = false" class="absolute mt-2 w-40 bg-white border-2 border-gray-300 rounded-md shadow-md z-10">
          <ul>
            <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">12 A</li>
            <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">12 B</li>
            <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">11 A</li>
          </ul>
        </div>
      </div>

      <!-- Tanggal Dropdown -->
      <div class="relative">
        <button @click="tanggalOpen = !tanggalOpen" class="border-2 border-black font-bold rounded-full px-6 py-2 flex items-center">
          <span class="mr-2">▼</span> Tanggal
        </button>
        <div x-show="tanggalOpen" @click.outside="tanggalOpen = false" class="absolute mt-2 w-40 bg-white border-2 border-gray-300 rounded-md shadow-md z-10">
          <ul>
            <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">26/04/2025</li>
            <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">27/04/2025</li>
            <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">28/04/2025</li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="w-full border border-black text-center font-bold">
        <thead class="bg-white">
          <tr>
            <th class="border border-black p-4">TANGGAL</th>
            <th class="border border-black p-4">KETERANGAN</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr>
            <td class="border border-black p-4"></td>
            <td class="border border-black p-4"></td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>

</body>
</html>
