<x-app-layout>
    <form action="{{ route('galangdana.storeTahap3') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="fotoKTP">Foto KTP:</label>
        <input type="file" id="fotoKTP" name="fotoKTP" required>

        <label for="berkasLainnya">Berkas Lainnya:</label>
        <input type="file" id="berkasLainnya" name="berkasLainnya">

        <button type="submit">Selesai</button>
    </form>
</x-app-layout>