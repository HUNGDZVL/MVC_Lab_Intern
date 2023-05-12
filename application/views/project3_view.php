<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tracks</title>
    <link rel="icon" type="image/x-icon" href="../assets/lab3/assets/img/mapround.jpg" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap&amp;subset=vietnamese" />
    <!-- RESETCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MAP -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <link rel="stylesheet" href="../assets/lab3/node_modules/Leaflet.TrackPlayBack-master/dist/control.playback.css" />
    <script src="../assets/lab3/node_modules/leaflet/leaflet.js"></script>
    <script src="../assets/lab3/node_modules/Leaflet.TrackPlayBack-master/dist/control.trackplayback.js"></script>

    <script src="../assets/lab3/node_modules/Leaflet.TrackPlayBack-master/dist/leaflet.trackplayback.js"></script>

    <link rel="stylesheet" href="../assets/lab3/assets/css/main.css" />
</head>

<body>
    <div class="app grid">
        <div class="row">
            <div class="app__left col l-2 ls-3 m-4 c-7">
                <h2>HÀNH TRÌNH</h2>
                <div class="app__left--content"></div>
                <div class="app__left--footer">
                    <i class="ileft fa-solid fa-chevron-left"></i>
                    <p class="inumber">1</p>
                    <i class="iright fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="app__right col l-10 ls-9 m-8 c-5">
                <div class="app__right--header">
                    <i class="fa-solid fa-road"></i>
                    <h2>TUYẾN ĐƯỜNG</h2>
                    <i class="fa-solid fa-desktop"></i>
                    <h2>GIÁM SÁT</h2>
                </div>
                <div class="app__right--content">
                    <div class="app__right--icon">
                        <i class="icon--left fa-solid fa-chevron-left"></i>
                        <i class="icon--right fa-solid fa-chevron-right disable"></i>
                    </div>

                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/lab3/assets/js/main.js?v=1.4"></script>
</body>

</html>