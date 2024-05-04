<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <script src="https://kit.fontawesome.com/c3cf8af875.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <p>Admin Tanaman</p>
        <a href="{{route('logout')}}">Sign Out</a>
    </nav>
    <div class="admin-page">
        <h5>All Data</h5>
        <div class="row-data">
            <a href="{{route('addTanaman')}}">
                <div class="card-data">
                    <p>Add Data</p>
                    <div class="center">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
            </a>
            @foreach ($tanaman as $item)
                <div class="card-data">
                    <p class="card-title">{{$item->nama}}</p>
                    @php
                        $url = urlencode(route('tanaman', ['slug' => $item->slug]));
                    @endphp
                    <div class="center">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data={{ $url }}" alt="" srcset="">
                    </div>
                    <a href="{{route('deleteTanaman', $item->id)}}">
                        <div class="card-button">
                            <p>Delete</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
