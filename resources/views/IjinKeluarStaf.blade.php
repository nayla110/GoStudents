<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ijin Keluar Siswa</title>
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
      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="w-full border border-black text-left">
          <thead>
            <tr>
              <th class="border border-black px-4 py-2">JAM</th>
              <th class="border border-black px-4 py-2">NAMA</th>
              <th class="border border-black px-4 py-2">KELAS</th>
              <th class="border border-black px-4 py-2">ALASAN</th>
              <th class="border border-black px-4 py-2">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-black px-4 py-2">10:15</td>
              <td class="border border-black px-4 py-2">Ramadhani</td>
              <td class="border border-black px-4 py-2">12 A</td>
              <td class="border border-black px-4 py-2">Mengambil Buku</td>
              <td class="border border-black px-4 py-2 flex gap-2">
                <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-1 rounded-full text-sm">✔️ IJINKAN</button>
                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full text-sm">❌ TOLAK</button>
              </td>
            </tr>
            <tr>
              <td class="border border-black px-4 py-2">13:02</td>
              <td class="border border-black px-4 py-2">Gilly</td>
              <td class="border border-black px-4 py-2">12 B</td>
              <td class="border border-black px-4 py-2">Ke Fotocopy</td>
              <td class="border border-black px-4 py-2 flex gap-2">
                <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-1 rounded-full text-sm">✔️ IJINKAN</button>
                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full text-sm">❌ TOLAK</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>
