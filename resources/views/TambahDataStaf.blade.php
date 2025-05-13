<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Tambah Data Siswa - Staff</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-bold bg-gray-100 min-h-screen">
  <div class="flex">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-gray-300 p-6 flex flex-col font-bold transition-transform duration-300 ease-in-out">
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

      <!-- Tombol Tambah Siswa -->
      <div class="flex items-center space-x-4 mb-4">
        <button onclick="toggleForm()" class="flex items-center space-x-2 text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
          <span class="text-xl">+</span>
          <span>Tambah Data Siswa</span>
        </button>
      </div>

      <!-- Form Tambah Siswa -->
      <div id="formSiswa" class="bg-white p-4 rounded-xl shadow mb-6 hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" placeholder="NIS" class="p-2 border rounded" />
          <input type="text" placeholder="Nama" class="p-2 border rounded" />
          <input type="text" placeholder="Kelas" class="p-2 border rounded" />
          <input type="text" placeholder="No HP" class="p-2 border rounded" />
          <input type="text" placeholder="Alamat" class="p-2 border rounded col-span-2" />
        </div>
        <button class="mt-4 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
      </div>

      <!-- Tabel Siswa -->
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto border text-center bg-white">
          <thead class="bg-gray-100">
            <tr>
              <th class="border px-4 py-2">NIS</th>
              <th class="border px-4 py-2">NAMA</th>
              <th class="border px-4 py-2">KELAS</th>
              <th class="border px-4 py-2">NO HP</th>
              <th class="border px-4 py-2">ALAMAT</th>
              <th class="border px-4 py-2">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border px-4 py-2">123456</td>
              <td class="border px-4 py-2">Ramadhani</td>
              <td class="border px-4 py-2">12 A</td>
              <td class="border px-4 py-2">081234567890</td>
              <td class="border px-4 py-2">Batam Kota</td>
              <td class="border px-4 py-2">
                <button class="text-sm text-blue-500 hover:underline">Edit</button> |
                <button class="text-sm text-red-500 hover:underline">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>

  <!-- Script -->
  <script>
    function toggleForm() {
      const form = document.getElementById("formSiswa");
      form.classList.toggle("hidden");
    }

    // Toggle sidebar visibility on small screens
    document.getElementById("toggleSidebar")?.addEventListener("click", function () {
      const sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("hidden");
    });
  </script>
</body>
</html>