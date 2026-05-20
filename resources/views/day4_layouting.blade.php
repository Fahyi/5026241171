<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Samsung Galaxy S10</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'SF Mono', sans-serif;
            background-color: #f0f0f0;
        }

        .hero-section {
            min-height: 100vh;
            padding: 80px 0 0 0;
            position: relative;
            overflow: hidden;
        }

        h1 {
            font-size: 2.4rem;
            font-weight: 800;
            color: #1a1a2e;
            line-height: 1.25;
            margin-bottom: 24px;
        }

        p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .fitur-grid {
            margin-top: 70px;
        }

        .fitur-item {
            margin-bottom: 28px;
        }

        .fitur-icon {
            width: 46px;
            height: 46px;
            border-radius: 6px;
            margin-bottom: 12px;
            overflow: hidden;
        }

        .fitur-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .fitur-item h6 {
            font-size: 0.85rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 6px;
        }

        .fitur-item p {
            font-size: 0.75rem;
            color: #777;
            line-height: 1.6;
            margin: 0;
        }

        .hero-right {
            position: absolute;
            top: 40px;
            right: 5%;
            width: 45%;
            height: 100%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            overflow: hidden;
            padding: 0;
        }

        .phone-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .phone-wrapper img {
            height: 100%;
            width: auto;
            max-width: none;
            display: block;
            object-fit: cover;
            object-position: top center;
        }
        .deskripsi {
            color: #7c87b6;
        }
    </style>
</head>

<body>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1>Samsung Galaxy S10</h1>
                    <p class="deskripsi">
                        Eksplorasi kemewahan visual yang sesungguhnya melalui Samsung Galaxy S10, sebuah mahakarya teknologi yang menghadirkan layar Dynamic AMOLED 6.1 inci dengan resolusi QHD+ yang luar biasa jernih.
                    </p>
                    <p class="deskripsi">
                        Ditenagai oleh kekuatan tangguh prosesor Exynos 9820 yang dipadukan dengan efisiensi tingkat tinggi, perangkat ini menjamin performa yang responsif, mulus, dan tanpa kompromi untuk kebutuhan multitasking berat hingga gaming intensif.
                    </p>
                    <div class="row fitur-grid">
                        <div class="col-6 fitur-item">
                            <div class="fitur-icon">
                                <img src="https://cdn-icons-png.freepik.com/512/2956/2956744.png" alt="Kamera" />
                            </div>
                            <h6>Triple Kamera 12 MP</h6>
                            <p>Tiga kamera belakang, masing-masing untuk wide dengan resolusi 12 MP, lensa ultrawide dengan resolusi 16 MP. </p>
                        </div>
                        <div class="col-6 fitur-item">
                            <div class="fitur-icon">
                                <img src="{{ asset('assets/img/monitor.png') }}"
                                    alt="Layar" />
                            </div>
                            <h6>Layar AMOLED 6.1"</h6>
                            <p>Dynamic AMOLED QHD+ 3040×1440 px, 550 nit, HDR10+, Always-On Display, dan Infinity-O
                                punch-hole.</p>
                        </div>
                        <div class="col-6 fitur-item">
                            <div class="fitur-icon">
                                <img src="https://uxwing.com/wp-content/themes/uxwing/download/computers-mobile-hardware/battery-full-icon.png"
                                    alt="Baterai" />
                            </div>
                            <h6>Baterai 3.400 mAh</h6>
                            <p>Fast Charging 25W, Wireless Charging 15W dan Wireless PowerShare untuk untuk berbagi daya ke perangkat lain.</p>
                        </div>
                        <div class="col-6 fitur-item">
                            <div class="fitur-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/4738/4738920.png" alt="Prosesor"/>
                            </div>
                            <h6>Exynos 9820 & 8 GB RAM</h6>
                            <p>Prosesor 7nm octa-core dengan RAM 8 GB dan penyimpanan internal 128 GB yang luas dan
                                cepat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div class="phone-wrapper">
                <img src="{{ asset('assets/img/Vert.png') }}" alt="Samsung Galaxy S5 TANK mockup" />            </div>
        </div>
    </section>
</body>

</html>
