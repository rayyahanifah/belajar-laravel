<h2>Tambah Mahasiswa</h2>
@if(session('pesan'))
    <p style="color:green;">{{ session('pesan') }}</p>
@endif

<form action="{{ url('/simpan-mahasiswa') }}" method="POST">
    @csrf <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>
    <label>Nim:</label><br>
    <input type="text" name="nim" required><br><br>
    <button type="submit">Simpan</button>
</form>
