<!DOCTYPE html>
<html lang="id">
<head>
    <title>Menu Fahyi Nashaqi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(180deg, #eef3ff 0%, #ffffff 55%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1f2937;
            min-height: 100vh;
        }
        .page-header {
            margin-top: 40px;
            margin-bottom: 35px;
            padding: 30px 25px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 18px 50px rgba(15, 23, 42, 0.08);
            border: 1px solid rgba(99, 102, 241, 0.12);
        }
        .page-header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #111827;
        }
        .page-header p {
            margin-bottom: 0;
            color: #4b5563;
            font-size: 0.97rem;
        }
        .badge-nrp {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(59, 130, 246, 0.12);
            color: #1d4ed8;
            font-weight: 600;
            letter-spacing: 0.02em;
        }
        .menu-grid {
            margin-top: 20px;
        }
        .menu-card {
            background: #ffffff;
            border: none;
            border-radius: 18px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            height: 100%;
        }
        .menu-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
        }
        .menu-card-body {
            padding: 25px;
        }
        .menu-card-title {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #111827;
        }
        .menu-card-text {
            color: #6b7280;
            font-size: 0.95rem;
            margin-bottom: 18px;
        }
        .menu-card-link {
            font-weight: 600;
            color: #3730a3;
            text-decoration: none;
        }
        .menu-card-link:hover {
            text-decoration: underline;
        }
        .category-pill {
            display: inline-flex;
            align-items: center;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 0.76rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        .category-materi {
            background: rgba(59, 130, 246, 0.1);
            color: #1d4ed8;
        }
        .category-tugas {
            background: rgba(16, 185, 129, 0.12);
            color: #047857;
        }
        @media (max-width: 575.98px) {
            .page-header {
                padding: 22px 18px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="page-header text-center">
        <h1>Menu Belajar</h1>
        <p>Halo, saya <strong>Fahyi Nashaqi</strong> dengan NRP <span class="badge-nrp">5026241171</span>. Temukan materi dan tugas kelas Pemrograman Web di bawah ini.</p>
    </div>

    <div class="row menu-grid">
        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-materi">Materi</span>
                    <h2 class="menu-card-title">Day 1 – Intro</h2>
                    <p class="menu-card-text">Dasar pengenalan kelas dan struktur awal halaman web.</p>
                    <a href="{{ url('day1') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-materi">Materi</span>
                    <h2 class="menu-card-title">Day 2 – News</h2>
                    <p class="menu-card-text">Konten berita dan tata letak untuk praktik kelas kedua.</p>
                    <a href="{{ url('day2') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-materi">Materi</span>
                    <h2 class="menu-card-title">Day 3 – Responsive</h2>
                    <p class="menu-card-text">Belajar membuat tampilan responsif agar tampil bagus di semua perangkat.</p>
                    <a href="{{ url('day3') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-tugas">Tugas</span>
                    <h2 class="menu-card-title">Day 3 – Icons</h2>
                    <p class="menu-card-text">Tugas untuk mempraktikkan penggunaan ikon dan estetika antarmuka.</p>
                    <a href="{{ url('day3_icons') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-tugas">Tugas</span>
                    <h2 class="menu-card-title">Day 4 – Layout</h2>
                    <p class="menu-card-text">Tugas layout lanjutan untuk meningkatkan struktur halaman.</p>
                    <a href="{{ url('day4') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-materi">Materi</span>
                    <h2 class="menu-card-title">Day 5 – Dell Case</h2>
                    <p class="menu-card-text">Studi kasus dan desain untuk halaman produk Dell.</p>
                    <a href="{{ url('day5') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card menu-card">
                <div class="card-body menu-card-body">
                    <span class="category-pill category-tugas">Tugas</span>
                    <h2 class="menu-card-title">Day 5 – Linktree</h2>
                    <p class="menu-card-text">Tugas membuat halaman tautan ringkas ala Linktree.</p>
                    <a href="{{ url('day5_linktree') }}" class="menu-card-link">Buka Halaman →</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
