<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Tambah Absen Siswa - Staff</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans font-bold">
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-gray-300 p-6 flex flex-col transition-transform duration-300 ease-in-out">
      <h2 class="text-3xl italic mb-10">GoStudents</h2>
      <nav class="flex flex-col gap-6 text-lg">
        <a href="{{ route('DashboardStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Halaman Utama</a>
        <a href="{{ route('TambahDataStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Tambah Data Siswa</a>
        <a href="{{ route('AbsenStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Absen Siswa</a>
        <a href="{{ route('TambahNilaiStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Tambah Nilai Siswa</a>
        <a href="{{ route('TambahPointStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Tambah Point Siswa</a>
        <a href="{{ route('IjinKeluarStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Ijin Keluar Siswa</a>
        <a href="{{ route('DaftarPointStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Daftar Point</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">

        <!-- Header: Ikon, Judul, dan Tombol Logout -->
        <div class="flex items-center justify-between mb-6">
          <!-- Ikon Hamburger -->
          <div class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </div>
  
          <!-- Judul -->
          <h1 class="text-2xl font-bold text-center flex-1">SMA NEGERI 1 BATAM</h1>
  
          <!-- Tombol Logout -->
          <button onclick="location.href='login.html'" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 ml-4">
            Logout
          </button>
        </div>

      <!-- Filter -->
      <div class="flex gap-4 mb-6 mt-10">
        <!-- Dropdown Kelas -->
        <select class="border border-black px-4 py-2 rounded-full bg-white font-bold">
          <option disabled selected>▼ KELAS</option>
          <option>X IPA 1</option>
          <option>X IPA 2</option>
          <option>X IPS 1</option>
        </select>

        <!-- Dropdown Tanggal -->
        <input type="date" class="border border-black px-4 py-2 rounded-full bg-white font-bold text-gray-700" />
      </div>

      <!-- Tabel Absen -->
      <div class="overflow-x-auto mt-6">
        <table class="w-full table-auto border-collapse border border-black text-center">
          <thead>
            <tr>
              <th rowspan="2" class="border border-black px-2 py-2">NIS</th>
              <th rowspan="2" class="border border-black px-2 py-2">NAMA</th>
              <th colspan="4" class="border border-black px-2 py-2">KETERANGAN</th>
            </tr>
            <tr>
              <th class="border border-black px-2 py-1">H</th>
              <th class="border border-black px-2 py-1">S</th>
              <th class="border border-black px-2 py-1">I</th>
              <th class="border border-black px-2 py-1">A</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-black px-2 py-2"></td>
              <td class="border border-black px-2 py-2"></td>
              <td class="border border-black px-2 py-2"></td>
              <td class="border border-black px-2 py-2"></td>
              <td class="border border-black px-2 py-2"></td>
              <td class="border border-black px-2 py-2"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Tombol Simpan -->
      <div class="flex justify-end mt-6">
        <button class="border border-black px-6 py-2 rounded-full hover:bg-black hover:text-white">SIMPAN</button>
      </div>

    </main>
  </div>
</body>
</html>
