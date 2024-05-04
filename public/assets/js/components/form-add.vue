<script>
export default {

}
</script>

<template>
    <div>
        <div class="group-input">
        <div class="input-row">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="input-row">
            <label for="namaLatin">Latin Tanaman</label>
            <input type="text" name="nama_latin" id="namaLatin">
        </div>
        <div class="input-row">
            <label for="images">Image</label>
            <input type="file" name="images[]" id="images" multiple>
        </div>
    </div>
    <div class="group-input">
        <h5>Taksanomi</h5>
        <div class="input-row">
            <label for="kingdom">Kingdom</label>
            <input type="text" name="kingdom" id="kingdom">
        </div>
        <div class="input-row">
            <label for="subkingdom">Sub Kingdom</label>
            <input type="text" name="subkingdom" id="subkingdom">
        </div>
        <div class="input-row">
            <label for="division">Division</label>
            <input type="text" name="division" id="division">
        </div>
        <div class="input-row">
            <label for="subdivisi">Sub Divisi</label>
            <input type="text" name="subdivisi" id="subdivisi">
        </div>
        <div class="input-row">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas">
        </div>
        <div class="input-row">
            <label for="Famili">Famili</label>
            <input type="text" name="Famili" id="Famili">
        </div>
        <div class="input-row">
            <label for="genus">Genus</label>
            <input type="text" name="genus" id="genus">
        </div>
        <div class="input-row">
            <label for="species">Species</label>
            <input type="text" name="species" id="species">
        </div>
    </div>
    <div class="group-input">
        <div class="input-row">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        </div>
        <div class="input-row">
            <label for="asalsebaran">Asal dan Sebaran</label>
            <textarea name="asalsebaran" id="asalsebaran" cols="30" rows="10"></textarea>
        </div>
        <div class="input-row">
            <label for="habitat">Habitat</label>
            <textarea name="habitat" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="input-row">
            <label for="morfologi">Morfologi</label>
            <textarea name="morfologi" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="input-row">
            <label for="manfaat">Manfaat</label>
            <textarea name="manfaat" id="" cols="30" rows="10"></textarea>
        </div>

    </div>
    <button type="button">Upload</button>
    </div>
</template>
