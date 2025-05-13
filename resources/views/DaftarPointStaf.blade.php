<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Point</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans font-bold">

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-gray-300 p-6 flex flex-col font-bold">
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
      <!-- Header -->
      <div class="flex items-center justify-between mb-6">
        <div class="cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </div>
        
        <h1 class="text-2xl text-center flex-1">SMA NEGERI 1 BATAM</h1>

        <!-- Logout Button -->
        <button onclick="logout()" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 transition">
          Logout
        </button>
      </div>

      <!-- Tabel Pelanggaran -->
      <table class="w-full border border-black text-left mb-8">
        <thead>
          <tr class="bg-white">
            <th class="border border-black px-4 py-2 text-center" colspan="2">JENIS PELANGGARAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-black px-4 py-2">TERLAMBAT</td>
            <td class="border border-black px-4 py-2">100</td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">BERKELAHI</td>
            <td class="border border-black px-4 py-2">500</td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">MENGGUNAKAN MAKE UP</td>
            <td class="border border-black px-4 py-2">200</td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">MEROKOK DI LINGKUNGAN SEKOLAH</td>
            <td class="border border-black px-4 py-2">500</td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">RAMBUT TIDAK SESUAI STANDAR</td>
            <td class="border border-black px-4 py-2">200</td>
          </tr>
        </tbody>
      </table>

      <!-- Tabel Surat Peringatan -->
      <table class="w-full border border-black text-left">
        <thead>
          <tr class="bg-white">
            <th class="border border-black px-4 py-2 text-center" colspan="2">SURAT PERINGATAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-black px-4 py-2">SURAT PERINGATAN 1</td>
            <td class="border border-black px-4 py-2">500</td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">SURAT PERINGATAN 2</td>
            <td class="border border-black px-4 py-2">1000</td>
          </tr>
          <tr>
            <td class="border border-black px-4 py-2">DROP OUT</td>
            <td class="border border-black px-4 py-2">1500</td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>

  <!-- Script logout -->
  <script>
    function logout() {
      if (confirm("Yakin ingin logout?")) {
        window.location.href = "login.html"; // arahkan ke halaman login
      }
    }
  </script>

</body>
</html>
