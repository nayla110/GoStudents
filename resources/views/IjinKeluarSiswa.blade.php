<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ijin Keluar | GoStudents</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen bg-gray-100 font-bold">

  <!-- Sidebar -->
  <aside id="sidebar" class="w-64 bg-gray-300 p-6 flex flex-col">
    <h2 class="text-3xl italic mb-10">GoStudents</h2>
    <nav class="flex flex-col gap-6 text-lg">
    <a href="{{ route('DashboardSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-dashboard">Halaman Utama</a>
      <a href="{{ route('AbsenSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-absen">Absen</a>
      <a href="{{ route('NilaiSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-nilai">Nilai</a>
      <a href="{{ route('PointSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-point">Point</a>
      <a href="{{ route('IjinKeluarSiswa') }}" class="hover:bg-gray-400 p-3 rounded-md" id="menu-ijin">Ijin Keluar</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 relative">

    <!-- Top Bar -->
    <div class="flex justify-between items-start mb-6">
      <!-- Ijin Keluar Title + Hamburger -->
      <div class="flex items-center gap-4">
        <!-- Hamburger Icon -->
        <button id="hamburger" class="text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <!-- Title -->
        <h1 class="text-3xl">Ijin Keluar</h1>
      </div>

      <!-- Profile + Logout -->
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

    <!-- Form -->
    <div class="border-2 border-black p-6 rounded-3xl mb-8">
      <div class="flex flex-col gap-4">
        <div class="flex items-center">
          <label class="w-24">NAMA :</label>
          <input type="text" class="border-2 border-black flex-1 rounded-full px-4 py-2">
        </div>
        <div class="flex items-center">
          <label class="w-24">KELAS :</label>
          <input type="text" class="border-2 border-black flex-1 rounded-full px-4 py-2">
        </div>
        <div class="flex items-center">
          <label class="w-24">JAM :</label>
          <input type="text" class="border-2 border-black flex-1 rounded-full px-4 py-2">
        </div>
        <div class="flex items-center">
          <label class="w-24">ALASAN :</label>
          <textarea class="border-2 border-black flex-1 rounded-3xl px-4 py-2"></textarea>
        </div>

        <!-- Buttons -->
        <div class="flex justify-end gap-4 mt-4">
          <button class="border-2 border-black px-6 py-2 rounded-full hover:bg-black hover:text-white">KIRIM</button>
          <button class="border-2 border-black px-6 py-2 rounded-full hover:bg-black hover:text-white">BATAL</button>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full border-2 border-black text-center">
        <thead>
          <tr>
            <th class="border-2 border-black px-4 py-2">NAMA</th>
            <th class="border-2 border-black px-4 py-2">KELAS</th>
            <th class="border-2 border-black px-4 py-2">STATUS PERIJINAN</th>
          </tr>
        </thead>
        <tbody>
          <!-- Isi Tabel -->
          <tr>
            <td class="border-2 border-black px-4 py-2">-</td>
            <td class="border-2 border-black px-4 py-2">-</td>
            <td class="border-2 border-black px-4 py-2">-</td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>

  <!-- Script Active Sidebar -->
  <script>
    const currentPage = location.pathname.split("/").pop();
    const menus = {
      "dashboard.html": "menu-dashboard",
      "absen.html": "menu-absen",
      "nilai.html": "menu-nilai",
      "point.html": "menu-point",
      "ijin.html": "menu-ijin",
    };
    if (menus[currentPage]) {
      document.getElementById(menus[currentPage]).classList.add("bg-gray-400", "rounded-md");
    }
  </script>

</body>
</html>
