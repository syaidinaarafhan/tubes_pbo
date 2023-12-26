<x-app-layout>
    <form action="{{ route('galangdana.storetahap2') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="judulKampanye">Judul Kampanye:</label>
        <input type="text" id="judulKampanye" name="judulKampanye" required>

        <label for="Tujuan">Tujuan:</label>
        <textarea id="Tujuan" name="Tujuan" required></textarea>

        <label for="Lokasi">Lokasi:</label>
        <input type="text" id="Lokasi" name="Lokasi" required>

        <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="30Hari">
        <label>30 Hari</label>

        <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="60Hari">
        <label>60 Hari</label>

        <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="90Hari">
        <label>90 Hari</label>

        <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="120Hari">
        <label>120 Hari</label>

        <label for="rincianPenggunaanDana">Rincian Penggunaan Dana:</label>
        <textarea id="rincianPenggunaanDana" name="rincianPenggunaanDana" required></textarea>

        <label for="fotoGalangDana">Foto Kampanye:</label>
        <input type="file" id="fotoGalangDana" name="fotoGalangDana" required>

        <button type="submit">Lanjut ke Tahap 3</button>
    </form>
</x-app-layout>