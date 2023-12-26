<x-app-layout>

    <form action="{{ route('galangdana.storeTahap1') }}" method="POST">
        @csrf
    
        <label for="namaKTP">Nama KTP:</label>
        <input type="text" id="namaKTP" name="namaKTP" required>
    
        <label for="noTelfon">Nomor Telepon:</label>
        <input type="text" id="noTelfon" name="noTelfon" required>
    
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required>
    
        <input type="radio" id="akunMedsos" name="akunMedsos" value="Instagram">
        <label>Instagram</label>

        <input type="radio" id="akunMedsos" name="akunMedsos" value="Facebook">
        <label>Facebook</label>

        <input type="radio" id="akunMedsos" name="akunMedsos" value="X">
        <label>X</label>

        <button type="submit">Lanjut ke Tahap 2</button>
    </form>
    
</x-app-layout>

