<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Point Siswa - Staff</title>
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

      <!-- Dropdown -->
      <div class="flex flex-wrap gap-4 mb-6">
        <select class="px-6 py-2 rounded-full border border-black">
          <option selected disabled>▼ NAMA</option>
          <option>Andi</option>
          <option>Budi</option>
          <option>Citra</option>
        </select>
        <select class="px-6 py-2 rounded-full border border-black">
          <option selected disabled>▼ KELAS</option>
          <option>X IPA</option>
          <option>XI IPA</option>
          <option>XII IPA</option>
        </select>
        <select class="px-6 py-2 rounded-full border border-black">
          <option selected disabled>▼ SEMESTER</option>
          <option>1</option>
          <option>2</option>
        </select>
      </div>

      <!-- Tabel Nilai -->
      <table class="w-full border border-black text-left">
        <thead>
          <tr>
            <th class="border border-black px-4 py-2">JENIS PELANGGARAN </th>
            <th class="border border-black px-4 py-2">POINT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-black px-4 py-2">TERLAMBAT</td>
            <td class="border border-black px-4 py-2">
              <input type="number" class="w-full p-2 border border-gray-400 rounded" placeholder="Masukkan point">
            </td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">BERKELAHI</td>
            <td class="border border-black px-4 py-2">
              <input type="number" class="w-full p-2 border border-gray-400 rounded" placeholder="Masukkan point">
            </td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">MENGGUNAKAN MAKE UP</td>
            <td class="border border-black px-4 py-2">
              <input type="number" class="w-full p-2 border border-gray-400 rounded" placeholder="Masukkan point">
            </td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">MEROKOK DI LINGKUNGAN SEKOLAH</td>
            <td class="border border-black px-4 py-2">
              <input type="number" class="w-full p-2 border border-gray-400 rounded" placeholder="Masukkan point">
            </td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">RAMBUT TIDAK SESUAI STANDAR</td>
            <td class="border border-black px-4 py-2">
              <input type="number" class="w-full p-2 border border-gray-400 rounded" placeholder="Masukkan point">
            </td>
          </tr>
        </tbody>
      </table>

      <!-- Simpan Button -->
      <div class="flex justify-end mt-4">
        <button class="px-6 py-2 border border-black rounded-full bg-blue-500 text-white hover:bg-blue-600">
          SIMPAN
        </button>
      </div>

    </main>
  </div>
</body>
</html>
