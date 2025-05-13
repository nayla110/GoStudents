<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-xl mx-auto mt-10 bg-white border border-gray-300 rounded-lg shadow-md">
    <!-- Header -->
    <div class="bg-gray-200 px-6 py-4 flex items-center gap-2 rounded-t-lg">
     <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
      </svg>

      <h2 class="font-semibold text-gray-800">Identitas siswa</h2>
    </div>

    <!-- Form -->
    <form class="p-6 space-y-4" onsubmit="handleSave(event)">
      <!-- NIK/NIM -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">NIS</label>
        <input type="text" value="3312411070" readonly
               class="form-input w-full px-3 py-2 border border-gray-300 rounded bg-gray-100" />
      </div>

      <!-- Nama -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Nama</label>
        <input type="text" value="Arwan Pradipta" readonly
               class="form-input w-full px-3 py-2 border border-gray-300 rounded bg-gray-100" />
      </div>

      <!-- Email -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Kelas</label>
        <input type="text" value="" readonly
               class="form-input w-full px-3 py-2 border border-gray-300 rounded bg-gray-100" />
      </div>

      <!-- Alamat -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
        <input type="text" value="kosong" readonly
               class="form-input w-full px-3 py-2 border border-gray-300 rounded bg-gray-100" />
      </div>

     <!-- Tombol-tombol -->
  <div class="flex justify-between items-center pt-4">
  <!-- Tombol Back di kiri -->
  <button onclick="window.history.back()" type="button"
    class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-5 py-2 rounded">
    Back
  </button>

  <!-- Tombol Ubah dan Simpan di kanan -->
  <div class="flex gap-3">
    <button type="button" onclick="enableEdit()"
      class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2 rounded">
      Ubah
    </button>
    <button type="submit" id="saveButton" disabled
      class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-5 py-2 rounded opacity-70 cursor-not-allowed">
      Simpan
    </button>
  </div>
</div>


  <script>
    function enableEdit() {
      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
        input.removeAttribute('readonly');
        input.classList.remove('bg-gray-100');
        input.classList.add('bg-white');
      });

      const saveBtn = document.getElementById('saveButton');
      saveBtn.disabled = false;
      saveBtn.classList.remove('opacity-70', 'cursor-not-allowed', 'bg-gray-500');
      saveBtn.classList.add('bg-green-600', 'hover:bg-green-700');
    }

    function handleSave(e) {
      e.preventDefault();
      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
        input.setAttribute('readonly', true);
        input.classList.add('bg-gray-100');
        input.classList.remove('bg-white');
      });

      const saveBtn = document.getElementById('saveButton');
      saveBtn.disabled = true;
      saveBtn.classList.add('opacity-70', 'cursor-not-allowed', 'bg-gray-500');
      saveBtn.classList.remove('bg-green-600', 'hover:bg-green-700');

      alert("Data berhasil disimpan!");
    }
  </script>

</body>
</html>
