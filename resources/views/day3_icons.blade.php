<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Join MyITS Music - Modern Recruitment</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      :root {
        --primary-color: #0f172a;
        --accent-color: #06b6d4;
        --bg-light: #f8fafc;
      }

      body {
        background-color: var(--bg-light);
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #334155;
      }

      .info-section {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: white;
        min-height: 100vh;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .form-section {
        padding: 60px;
        background-color: var(--bg-light);
      }

      .custom-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        padding: 30px;
        background: white;
      }

      .brand-logo {
        width: 60px;
        margin-bottom: 20px;
        filter: brightness(0) invert(1);
      }

      .carousel-modern {
        border-radius: 20px;
        overflow: hidden;
        margin-top: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      }

      .carousel-modern img {
        height: 300px;
        object-fit: cover;
      }

      .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 1px solid #e2e8f0;
        background-color: #f1f5f9;
      }

      .form-control:focus {
        background-color: white;
        border-color: var(--accent-color);
        box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
      }

      .btn-submit {
        background-color: var(--accent-color);
        color: white;
        font-weight: 700;
        border-radius: 10px;
        padding: 12px;
        transition: 0.3s;
        border: none;
      }

      .btn-submit:hover {
        background-color: #0891b2;
        transform: translateY(-2px);
        color: white;
      }

      .interest-tag {
        display: none;
      }

      .interest-label {
        display: block;
        padding: 10px;
        background: #f1f5f9;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        font-size: 0.85rem;
        transition: 0.2s;
        border: 2px solid transparent;
      }

      .interest-tag:checked + .interest-label {
        background: #ecfeff;
        border-color: var(--accent-color);
        color: var(--accent-color);
        font-weight: 600;
      }

      @media (max-width: 991px) {
        .info-section { min-height: auto; padding: 40px 20px; }
        .form-section { padding: 40px 20px; }
      }
    </style>
  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-5 info-section text-center text-lg-left">
          <img src="https://upload.wikimedia.org/wikipedia/id/c/c4/Badge_ITS.png" alt="ITS Logo" class="brand-logo mx-auto mx-lg-0" />
          <h1 class="display-4 font-weight-bold">Let's Make <span style="color: var(--accent-color)">Music</span> Together.</h1>
          <p class="lead opacity-75">Bergabunglah dengan UKM Musik ITS dan temukan panggungmu di sini.</p>

          <div id="musicSlider" class="carousel slide carousel-modern">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://plus.unsplash.com/premium_photo-1683134695147-fba97d0aed0d?q=80&w=2071&auto=format&fit=crop&w=800" class="d-block w-100" alt="Studio2">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800" class="d-block w-100" alt="Studio">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7 form-section">
          <div class="mx-auto" style="max-width: 600px">
            <div class="custom-card">
              <h3 class="font-weight-bold mb-4">Formulir Pendaftaran</h3>

              <form id="regForm">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label class="small font-weight-bold">NAMA DEPAN</label>
                    <input type="text" class="form-control" placeholder="Fahyi" required />
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="small font-weight-bold">NAMA BELAKANG</label>
                    <input type="text" class="form-control" placeholder="Nashaqi" required />
                  </div>
                </div>

                <div class="form-group">
                  <label class="small font-weight-bold">ASAL DEPARTEMEN</label>
                  <input type="text" class="form-control" placeholder="Contoh: Sistem Informasi" required />
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label class="small font-weight-bold">WHATSAPP</label>
                    <input type="text" class="form-control" placeholder="08xxxx" required />
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="small font-weight-bold">NRP (EMAIL STUDENT)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="5026..." required />
                        <div class="input-group-append">
                            <span class="input-group-text bg-light border-left-0" style="border-radius: 0 10px 10px 0">@its.ac.id</span>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="small font-weight-bold d-block">BIDANG MINAT</label>
                  <div class="row no-gutters">
                    <div class="col-4 p-1">
                      <input type="checkbox" id="v1" class="interest-tag">
                      <label for="v1" class="interest-label">Vokal</label>
                    </div>
                    <div class="col-4 p-1">
                      <input type="checkbox" id="v2" class="interest-tag">
                      <label for="v2" class="interest-label">Gitar</label>
                    </div>
                    <div class="col-4 p-1">
                      <input type="checkbox" id="v3" class="interest-tag">
                      <label for="v3" class="interest-label">Drum</label>
                    </div>
                    <div class="col-4 p-1">
                      <input type="checkbox" id="v4" class="interest-tag">
                      <label for="v4" class="interest-label">Visual</label>
                    </div>
                    <div class="col-4 p-1">
                      <input type="checkbox" id="v5" class="interest-tag">
                      <label for="v5" class="interest-label">Produksi</label>
                    </div>
                    <div class="col-4 p-1">
                      <input type="checkbox" id="v6" class="interest-tag">
                      <label for="v6" class="interest-label">Event</label>
                    </div>
                  </div>
                </div>

                <div class="form-group mb-4">
                    <label class="small font-weight-bold">TIPE KEANGGOTAAN</label>
                    <select class="form-control">
                        <option>Anggota Reguler</option>
                        <option>Anggota Eksklusif (Studio 24/7)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-submit btn-block shadow-sm">
                  SUBMIT PENDAFTARAN
                </button>
              </form>
            </div>

            <p class="text-center mt-4 small text-muted">
              &copy; 2026 UKM Musik Institut Teknologi Sepuluh Nopember
            </p>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        // Inisialisasi Carousel via JavaScript
        $('#musicSlider').carousel({
          interval: 2500,
          pause: 'hover',
          wrap: true
        });

        // Contoh tambahan: Deteksi saat slide berubah
        $('#musicSlider').on('slide.bs.carousel', function () {
          console.log('pindah slide');
        });
      });
    </script>
  </body>
</html>
