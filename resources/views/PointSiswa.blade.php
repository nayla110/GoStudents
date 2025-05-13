<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai | GoStudents</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
  <main class="flex-1 p-8">

    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-8">

      <!-- Hamburger (garis tiga) -->
      <div class="cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </div>

      <!-- Judul -->
      <h1 class="text-2xl font-bold flex-1 text-center">SMA NEGERI 1 BATAM</h1>

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

    <!-- Filter Dropdowns -->
    <div class="flex flex-wrap justify-center gap-6 mb-8">
      <select class="border-2 border-black rounded-full px-6 py-2 font-bold">
        <option selected disabled>Nama</option>
        <option>Nama 1</option>
        <option>Nama 2</option>
      </select>

      <select class="border-2 border-black rounded-full px-6 py-2 font-bold">
        <option selected disabled>Kelas</option>
        <option>10 IPA 1</option>
        <option>10 IPA 2</option>
      </select>

      <select class="border-2 border-black rounded-full px-6 py-2 font-bold">
        <option selected disabled>Semester</option>
        <option>Semester 1</option>
        <option>Semester 2</option>
      </select>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto flex justify-center">
      <table class="w-3/4 table-fixed border-2 border-black bg-white">
        <thead>
          <tr>
            <th class="p-3 border-2 border-black font-bold text-lg bg-white">JENIS PELANGGARAN</th>
            <th class="p-3 border-2 border-black font-bold text-lg bg-white">POINT</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="p-3 border-2 border-black">-</td>
            <td class="p-3 border-2 border-black text-center">-</td>
          </tr>
          <tr class="bg-white">
            <td class="p-3 border-2 border-black">-</td>
            <td class="p-3 border-2 border-black text-center">-</td>
          </tr>
          <tr class="bg-white">
            <td class="p-3 border-2 border-black">-</td>
            <td class="p-3 border-2 border-black text-center">-</td>
          </tr>
        </tbody>
      </table>
    </div>      

  </main>

</body>
</html>
