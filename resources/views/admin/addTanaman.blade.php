<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Tanaman</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <script src="https://kit.fontawesome.com/c3cf8af875.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <p>Admin Tanaman</p>
    </nav>
    <div class="admin-page">
        <form method="POST" action="{{route('prosesAddTanaman')}}" enctype="multipart/form-data">
            @csrf
            <div class="group-input">
                <div class="input-row">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required>
                </div>
                <div class="input-row">
                    <label for="namaLatin">Latin Tanaman</label>
                    <input type="text" name="nama_latin" id="namaLatin" required>
                </div>
                <div class="input-row">
                    <label for="images">Image</label>
                    <input type="file" name="images[]" id="images" multiple required>
                </div>
                <div class="input-row">
                    <label for="images">Link Video</label>
                    <input type="text" name="video" id="video" required>
                </div>
            </div>
            <div class="group-input">
                <h5>Taksanomi</h5>
                <div class="input-row">
                    <label for="kingdom">Kingdom</label>
                    <input type="text" name="kingdom" id="kingdom" required>
                </div>
                <div class="input-row">
                    <label for="subkingdom">Sub Kingdom</label>
                    <input type="text" name="subkingdom" id="subkingdom" required>
                </div>
                <div class="input-row">
                    <label for="division">Division</label>
                    <input type="text" name="division" id="division" required>
                </div>
                <div class="input-row">
                    <label for="subdivisi">Sub Divisi</label>
                    <input type="text" name="subdivisi" id="subdivisi" required>
                </div>
                <div class="input-row">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" required>
                </div>
                <div class="input-row">
                    <label for="Famili">Famili</label>
                    <input type="text" name="famili" id="Famili" required>
                </div>
                <div class="input-row">
                    <label for="genus">Genus</label>
                    <input type="text" name="genus" id="genus" required>
                </div>
                <div class="input-row">
                    <label for="species">Species</label>
                    <input type="text" name="species" id="species" required>
                </div>
            </div>
            <div class="group-input">
                <div class="input-row">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required></textarea>
                </div>
                <div class="input-row">
                    <label for="asalsebaran">Asal dan Sebaran</label>
                    <textarea name="asalsebaran" id="asalsebaran" cols="30" rows="10" required></textarea>
                </div>
                <div class="input-row">
                    <label for="habitat">Habitat</label>
                    <textarea name="habitat" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="input-row">
                    <label for="morfologi">Morfologi</label>
                    <textarea name="morfologi" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="input-row">
                    <label for="manfaat">Manfaat</label>
                    <textarea name="manfaat" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="input-row">
                    <label for="sumber">Sumber</label>
                    <textarea name="sumber" id="" cols="30" rows="10" required></textarea>
                </div>
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
<script>

</script>
</html>
