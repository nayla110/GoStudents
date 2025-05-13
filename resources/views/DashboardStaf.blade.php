<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GoStudents Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Tambahkan Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="flex min-h-screen bg-gray-100 font-sans">

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
  <main class="flex-1 p-8">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <!-- Title -->
      <h1 class="text-3xl font-bold">SMA NEGERI 1 BATAM</h1>

      <!-- Profile + Logout -->
      <div class="flex items-center gap-4">
        <!-- Avatar dari Flowbite -->
        <a href="{{ route('ProfilStaf') }}" class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-300 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
          </svg>
        </a>
        <button onclick="logout()" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-sm px-4 py-2 text-center">Logout</button>
      </div>
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
      <div class="bg-white p-6 rounded-2xl text-center shadow-md font-bold">
        Jumlah Siswa<br><span class="text-2xl">3</span>
      </div>
      <div class="bg-white p-6 rounded-2xl text-center shadow-md font-bold">
        Jumlah Kelas<br><span class="text-2xl">2</span>
      </div>
      <div class="bg-white p-6 rounded-2xl text-center shadow-md font-bold">
        Jumlah Mata Pelajaran<br><span class="text-2xl">5</span>
      </div>
    </div>

    <!-- Student List -->
    <div class="bg-white p-6 rounded-2xl shadow-md">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Lihat Semua Siswa</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full text-left font-bold text-sm text-gray-700">
          <thead class="text-xs uppercase bg-gray-200">
            <tr>
              <th class="px-4 py-3">Foto</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NIS</th>
              <th class="px-4 py-3">Kelas</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="px-4 py-3">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                  </svg>
                </div>
              </td>
              <td class="px-4 py-3">Ramadhani</td>
              <td class="px-4 py-3">123456</td>
              <td class="px-4 py-3">12 A</td>
            </tr>
            <tr class="border-b">
              <td class="px-4 py-3">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                  </svg>
                </div>
              </td>
              <td class="px-4 py-3">Gilly</td>
              <td class="px-4 py-3">123123</td>
              <td class="px-4 py-3">12 B</td>
            </tr>
            <tr>
              <td class="px-4 py-3">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                  </svg>
                </div>
              </td>
              <td class="px-4 py-3">Putra</td>
              <td class="px-4 py-3">654321</td>
              <td class="px-4 py-3">12 A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </main>

  <!-- Script Flowbite & logout -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  <script>
    function logout() {
      if (confirm("Yakin ingin logout?")) {
        window.location.href = "{{ route('Login') }}";
      }
    }
  </script>



</body>
</html>