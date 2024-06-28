<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Tanaman</title>
    <link rel="stylesheet" href="{{ asset('assets/css/preview.css') }}">
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/c3cf8af875.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    @if ($tanaman == null)
        <div class="not-found-page">
            <h1>404</h1>
            <p>Not Found</p>
        </div>
    @else
        <div class="detail-tanaman">
            {{-- Judul --}}
            <div class="group-name">
                <h5>{{ $tanaman->nama }}</h5>
                <p>{{ $tanaman->nama_latin }}</p>
            </div>
            {{-- Image --}}
            <div class="group-image">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @php

                            $video = null;
                            $images = json_decode($tanaman->images);
                            if ($tanaman->video != null) {
                                // https://youtu.be/5GXkWPcvHr0?si=MoYo4VGnfn2Kp2i5
                                // video = https://www.youtube.com/embed/5GXkWPcvHr0
                                $video = str_replace('youtu.be', 'www.youtube.com/embed', $tanaman->video);
                            }
                        @endphp
                        @foreach ($images as $image)
                            @php
                                $image = str_replace('public/', '', $image);
                            @endphp
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $image) }}" alt="">
                            </div>
                        @endforeach
                        @if ($video != null)
                            <div class="swiper-slide">
                                {{-- video dari youtube --}}
                                <div class="video">
                                    <iframe width="100%" height="200%"
                                        src="{{ $video }}?controls=0" title="YouTube video player"
                                        frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- Kategori --}}
            <div class="group-category">
                <div class="swiper-category">
                    <div class="swiper-wrapper">

                    </div>
                </div>
            </div>
            {{-- Detail --}}
            <div class="group-details">
                @php
                    $taksonomi = json_decode($tanaman->taksanomi);
                @endphp

        </div>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', fetchDataAndDisplay);
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1.3,
            direction: 'horizontal',
            spaceBetween: 20,
        });
        const swipers = new Swiper('.swiper-category', {
            slidesPerView: 2,
            direction: 'horizontal',
            spaceBetween: 20,
        });
        const category = [
            "Taksanomi",
            "Asal & Sebaran",
            "Habitat",
            "Morfologi",
            "Manfaat",
            "Sumber",
        ]

        let indexCategory = 0;

        function fetchDataAndDisplay() {
            const groupCategory = document.querySelector('.group-category .swiper-wrapper');
            category.forEach((item, index) => {
                const div = document.createElement('div');
                div.classList.add('swiper-slide');
                div.id = `category`;
                if (indexCategory == index) {
                    div.classList.add('active');
                }
                div.innerHTML = `
                    <p>${item}</p>
                `;
                groupCategory.appendChild(div);
            });

            const categorySlide = document.querySelectorAll('.group-category .swiper-slide');

            categorySlide.forEach((item, index) => {
                item.addEventListener('click', () => {
                    categorySlide.forEach((item) => {
                        item.classList.remove('active');
                    });
                    item.classList.add('active');
                    indexCategory = index;
                    displayCategory();
                });
            });
            displayCategory();
        }

        function displayCategory() {
            const groupDetail = document.querySelector('.group-details');
            if(indexCategory == 0){
                groupDetail.innerHTML = `<table>
                    <tr>
                        <td>Kingdom</td>
                        <td>{{ $taksonomi->kingdom }}</td>
                    </tr>
                    <tr>
                        <td>Sub Kingdom</td>
                        <td>{{ $taksonomi->subkingdom }}</td>
                    </tr>
                    <tr>
                        <td>Divisi</td>
                        <td>{{ $taksonomi->division }}</td>
                    </tr>
                    <tr>
                        <td>Sub Divisi</td>
                        <td>{{ $taksonomi->subdivisi }}</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>{{ $taksonomi->kelas }}</td>
                    </tr>
                    <tr>
                        <td>Famili</td>
                        <td>{{ $taksonomi->famili }}</td>
                    </tr>
                    <tr>
                        <td>Genus</td>
                        <td>{{ $taksonomi->genus }}</td>
                    </tr>
                    <tr>
                        <td>Spesies</td>
                        <td>{{ $taksonomi->species }}</td>
                    </tr>
                </table>
            </div>`;
            }else if(indexCategory == 1){
                groupDetail.innerHTML = '<p>{{ $tanaman->asalsebaran }}</p>'
            }else if(indexCategory == 2){
                groupDetail.innerHTML = '<p>{{ $tanaman->habitat }}</p>'
            }else if(indexCategory == 3){
                groupDetail.innerHTML = '<p>{{ $tanaman->morfologi }}</p>'
            }else if(indexCategory == 4){
                groupDetail.innerHTML = '{{ $tanaman->manfaat }}'
            }else if(indexCategory == 5){
                groupDetail.innerHTML = '<a href={{$tanaman->sumber}}>{{ $tanaman->sumber }}<a>'
            }

        }
    </script>
</body>

</html>
