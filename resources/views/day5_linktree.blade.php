<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCSekuritas | Linktree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showme() {
            //alert("hallo selamat siang");
            Swal.fire({
                title: "Halo!",
                text: "Selamat Siang",
                icon: "success"
            });
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }

    </script>

    <style>
        :root {
            --mnc-green: #39e09b;
            --page-bg: #e4e6ea;
            --card-bg: #ffffff;
        }

        body {
            background-color: var(--page-bg);
            font-family: 'Karla', sans-serif;
            min-height: 100vh;
            margin: 0;
        }

        .main-wrapper {
            padding: 2rem 1rem 0 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .profile-canvas {
            width: 100%;
            max-width: 580px;
            background-color: var(--card-bg);
            border-radius: 25px 25px 0 0;
            padding: 2.5rem 2rem 3rem 2rem;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            font-size: 1.3rem;
            color: #000;
        }

        .top-nav .right-icons i {
            margin-left: 15px;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            border: 1px solid #eaeaea;
            transition: 0.2s;
        }

        .top-nav .right-icons i:hover {
            background-color: #f5f5f5;
        }

        .profile-pic {
            width: 100%;
            max-width: 120px;
            height: auto;
            object-fit: contain;
            margin-bottom: 1.5rem;
        }

        .profile-title {
            color: var(--mnc-green);
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 2rem;
        }

        .social-icons a {
            color: var(--mnc-green);
            font-size: 1.8rem;
            transition: transform 0.2s;
            text-decoration: none;
            position: relative;
        }

        .social-icons a:hover {
            transform: scale(1.1);
        }

        .spotify-container {
            position: relative;
        }

        .custom-tooltip {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #555555;
            color: white;
            font-size: 0.7rem;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 500;
            white-space: nowrap;
        }

        .btn-linktree {
            background-color: var(--mnc-green);
            color: white;
            border: none;
            border-radius: 2px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 64px;
            margin-bottom: 14px;
            position: relative;
            padding: 12px 64px;
            transition: filter 0.2s;
        }

        .btn-linktree:hover {
            color: white;
            filter: brightness(0.95);
        }

        .thumb-img {
            width: 44px;
            height: 44px;
            object-fit: cover;
            border-radius: 4px;
            position: absolute;
            left: 10px;
            background-color: white;
        }

        .left-icon {
            position: absolute;
            left: 20px;
            font-size: 1.6rem;
            color: white;
        }

        .btn-text {
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            width: 100%;
        }

        .featured-link {
            display: block;
            background-color: var(--mnc-green);
            border-radius: 2px;
            text-decoration: none;
            margin-bottom: 14px;
            padding: 10px 10px 0 10px;
            color: white;
            transition: filter 0.2s;
        }

        .featured-link:hover {
            color: white;
            filter: brightness(0.95);
        }

        .featured-link img {
            width: 100%;
            border-radius: 2px;
            aspect-ratio: 16/9;
            object-fit: cover;
        }

        .featured-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 16px;
            position: relative;
        }

        .featured-footer span {
            font-weight: 600;
            font-size: 15px;
        }

        .featured-footer i {
            position: absolute;
            right: 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.2rem;
        }

        .share-icon {
            position: absolute;
            right: 16px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .share-icon:hover {
            background-color: rgba(0, 0, 0, 0.15);
            color: rgba(255, 255, 255, 1);
        }

        .footer-area {
            margin-top: auto;
            padding-top: 3rem;
            text-align: center;
            width: 100%;
        }

        .btn-join {
            background-color: #ffffff;
            color: #000000;
            border: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 18px;
            padding: 12px 24px;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
            margin-bottom: 2.5rem;
            transition: transform 0.2s ease;
            cursor: pointer;
            font-family: 'Karla', sans-serif;
        }

        .footer-links a {
            color: #111;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
            margin: 0 6px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .footer-links span {
            color: #666;
            font-size: 12px;
        }

        @media (max-width: 576px) {
            .main-wrapper {
                padding: 0;
                align-items: stretch;
            }

            .profile-canvas {
                max-width: 100%;
                border-radius: 0;
                box-shadow: none;
                padding: 2rem 1.25rem 3rem 1.25rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <button class="btn btn-primary" onclick="showme();"> Show Me </button>
        <button class="btn btn-primary" onclick="changeText();"> Change Text </button>
        <button class="btn btn-primary" onclick="changeStyle();"> Change Style </button>
        <div class="profile-canvas">

            <div class="top-nav">
                <i class="bi bi-asterisk"></i>
                <div class="right-icons">
                    <i class="bi bi-bell"></i>
                    <i class="bi bi-upload"></i>
                </div>
            </div>

            <div class="text-center">
                <img class="rounded-full object-contain"
                    src="https://ugc.production.linktr.ee/FOz0qt2JSJGsemSWJSbT_a92dbba9b138af42b1c46ee553fd2a2b.png?io=true&amp;size=avatar-v3_0"
                    alt="" style="width:108px;height:108px" role="presentation" data-testid="ProfileImage"
                    crossorigin="anonymous">

                <h1 class="profile-title">@MNCSekuritas</h1>
                <div class="social-icons">
                    <a href="#"><i class="bi bi-whatsapp"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <a href="#"><i class="bi bi-tiktok"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="spotify-container">
                        <i class="bi bi-spotify"></i>
                    </a>
                </div>
            </div>

            <div class="links-container">
                <a href="https://bit.ly/reksadanaMTLite" class="featured-link">
                    <img src="https://ugc.production.linktr.ee/f3e36097-a295-43fa-97f0-8d4deed7a0f3_New-Reksadana-LITE-feed-1.png"
                        alt="MotionTrade Lite">
                    <div class="featured-footer">
                        <span>Reksa Dana di MotionTrade Lite!</span>
                    </div>
                </a>

                <a href="https://mncsekuritas.id/promo/motion-trade-billionaires-game-br-the-ultimate-virtual-trading-war/"
                    class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/b5492747-1d5a-4d78-8ad3-09bb156ade44_DAILY-MSEK-STORY---2026-03-13T095913.169.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">mncsekuritas.id</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://mncsekuritas.id/promo/promo-reksa-dana-br-angpao-imlek-spesial-br-pt-danakita-investama/"
                    class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/1676b489-cf82-443e-8106-621a907afe6d_IMG-5085.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">PROMO REKSA DANA DANAKITA INVESTAMA</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://mncsekuritas.id/promo/promo-reksa-dana-br-pacu-hoki-di-tahun-kuda-api-br-pt-ciptadana-asset-management/"
                    class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/e4439318-5969-4829-905e-16a5e761a18b_Tahun-Kuda-Ciptadana-feed.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">PROMO REKSA DANA CAPITAL ASSET MANAGEMENT</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://mncsekuritas.id/promo/motiontrade-trading-competition/" class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/f78511b6-3ba2-4984-8e75-e3301697c954_Email-blast.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">MotionTrade Trading Competition 2026</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://mncsekuritas.id/promo/promo-reksa-dana-new-year-new-asset-pt-avrist-asset-management/"
                    class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/de9aa9ef-4793-47a1-aca5-5c466d8e9a9c_DAILY-MSEK-STORY---2026-01-15T105710.237.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">PROMO REKSA DANA NEW YEAR NEW ASSET AVRIST</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://tr.ee/6Jyvw59xQi" class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/20dac30f-6e8b-49ea-9fb1-6e433b85b073_maxresdefault.webp"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">Ubah Tampilan PRO ke LITE</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://mncsekuritas.id/promo/motiontrade-lite/" class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/5fee7f12-95e4-4ebe-a30f-ee675614eb29_image.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">PROMO Rp0 MotionTrade Lite</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://www.youtube.com/watch?v=48RR7deS8rQ&feature=youtu.be" class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/yLFEKQqFRyV2rgq3p5bD_MotionTrade-icon_apps.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">Pembukaan Akun Full Online</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://www.youtube.com/watch?si=JfvDmcD2Ri8nvOI0&v=pEWES12A4dI&feature=youtu.be"
                    class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/hohc2EB1SsSGyWT2N621_MotionTrade-icon_apps.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">Pembukaan Akun Syariah</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://motiontrade.id/promo/Margin/" class="btn-linktree">
                    <i class="bi bi-cash-stack left-icon"></i>
                    <div class="btn-text">Aktivasi Akun Margin Online</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://mncsekuritas.id/jadwal/" class="btn-linktree">
                    <i class="bi bi-sliders left-icon"></i>
                    <div class="btn-text">Daftar Kelas Edukasi</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://motiontrade.id/" class="btn-linktree">
                    <img src="https://ugc.production.linktr.ee/TDr3FzfWRUy6g7bHQgTg_MotionTrade-icon_apps.png"
                        class="thumb-img" alt="Thumbnail">
                    <div class="btn-text">Download MotionTrade</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://www.mncsekuritas.id/" class="btn-linktree">
                    <div class="btn-text">Website</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://t.me/joinchat/AAAAAEIK3Lt0scymSQfOaw" class="btn-linktree">
                    <i class="bi bi-telegram left-icon"></i>
                    <div class="btn-text">Telegram Channel</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>

                <a href="https://id.linkedin.com/company/mncsekuritas" class="btn-linktree">
                    <i class="bi bi-linkedin left-icon"></i>
                    <div class="btn-text">LinkedIn</div>
                    <div class="share-icon"><i class="bi bi-three-dots-vertical"></i></div>
                </a>
            </div>

            <div class="footer-area">
                <button class="btn-join">Join MNCSekuritas on Linktree</button>

                <div class="footer-links">
                    <a href="#">Cookie Preferences</a> <span>•</span>
                    <a href="#">Report</a> <span>•</span>
                    <a href="#">Privacy</a> <span>•</span>
                    <a href="#">Explore</a>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
