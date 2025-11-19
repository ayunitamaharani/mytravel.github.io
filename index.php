<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project SIM Kelompok 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-inner">
            <div class="logo">
                Nama<span>Travel</span>
            </div>
            <nav class="nav-links">
                <a href="#booking">Pesan Tiket</a>
                <a href="#features">Keunggulan</a>
                <a href="#services">Layanan</a>
                <a href="#coverage">Jangkauan</a>
                <a href="#blog">Info</a>
                <a href="#contact">Kontak</a>
            </nav>
        </div>
    </header>

    <section class="hero" id="booking">
        <div class="hero-inner">
            <div class="hero-text">
                <h1>Travel Antar Kota Antar Provinsi #JadiMakinDekat</h1>
                <p>
                    Mulai perjalanan nyaman dan aman dengan XXX Shuttle.
                    Pesan tiket travel untuk rute antar kota dan antar provinsi di seluruh Indonesia,
                    cukup dari ponsel atau laptopmu.
                </p>
                <ul class="hero-badges">
                    <li>✔ Kursi nyaman & ber-AC</li>
                    <li>✔ Jadwal beragam setiap hari</li>
                    <li>✔ Pembayaran online</li>
                </ul>
            </div>

            <div class="booking-card">
                <h2>Pesan Tiket Travel</h2>

<form class="booking-form" method="POST" action="jadwal.php">
  <div class="form-group">
    <label for="trip-type">Tipe Perjalanan</label>
    <select id="trip-type" name="trip_type">
      <option value="Sekali Jalan">Sekali Jalan</option>
      <option value="Pulang Pergi">Pulang Pergi</option>
    </select>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="from">Keberangkatan</label>
      <select id="from" name="from">
        <option value="">Pilih Kota Asal</option>
        <option value="Gambir">Gambir</option>
        <option value="Pasar Senen">Pasar Senen</option>
        <option value="Jakarta Selatan">Jakarta Selatan</option>
        <option value="Jakarta Barat">Jakarta Barat</option>
        <option value="Jakarta Timur">Jakarta Timur</option>
        <option value="Jakarta Utara">Jakarta Utara</option>
        <option value="Surabaya">Surabaya</option>
        <option value="Malang">Malang</option>
        <option value="Kediri">Kediri</option>
        <option value="Madiun">Madiun</option>
        <option value="Probolinggo">Probolinggo</option>
        <option value="Semarang">Semarang</option>
        <option value="Solo">Solo</option>
        <option value="Magelang">Magelang</option>
        <option value="Purwokerto">Purwokerto</option>
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Bandung">Bandung</option>
        <option value="Bogor">Bogor</option>
        <option value="Bekasi">Bekasi</option>
        <option value="Sukabumi">Sukabumi</option>
        <option value="Depok">Depok</option>
        <option value="Tangerang Selatan">Tangerang Selatan</option>
        <option value="Merak">Merak</option>
        <option value="Serang">Serang</option>
        <option value="BSD">BSD</option>
      </select>
    </div>

    <div class="form-group">
      <label for="to">Tujuan</label>
      <select id="to" name="to">
        <option value="">Pilih Kota Tujuan</option>
        <option value="Gambir">Gambir</option>
        <option value="Pasar Senen">Pasar Senen</option>
        <option value="Jakarta Selatan">Jakarta Selatan</option>
        <option value="Jakarta Barat">Jakarta Barat</option>
        <option value="Jakarta Timur">Jakarta Timur</option>
        <option value="Jakarta Utara">Jakarta Utara</option>
        <option value="Surabaya">Surabaya</option>
        <option value="Malang">Malang</option>
        <option value="Kediri">Kediri</option>
        <option value="Madiun">Madiun</option>
        <option value="Probolinggo">Probolinggo</option>
        <option value="Semarang">Semarang</option>
        <option value="Solo">Solo</option>
        <option value="Magelang">Magelang</option>
        <option value="Purwokerto">Purwokerto</option>
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Bandung">Bandung</option>
        <option value="Bogor">Bogor</option>
        <option value="Bekasi">Bekasi</option>
        <option value="Sukabumi">Sukabumi</option>
        <option value="Depok">Depok</option>
        <option value="Tangerang Selatan">Tangerang Selatan</option>
        <option value="Merak">Merak</option>
        <option value="Serang">Serang</option>
        <option value="BSD">BSD</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="date">Tanggal Pergi</label>
      <input type="date" id="tanggal" name="date" min="<?php echo date('Y-m-d'); ?>" required>

<script>
document.getElementById('tanggal').min = new Date().toISOString().split('T')[0];
document.querySelector('form').addEventListener('submit', function(e) {
    const selectedDate = new Date(document.getElementById('tanggal').value);
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    
    if (selectedDate < today) {
        e.preventDefault();
        alert('Tidak bisa memilih tanggal yang sudah lewat!');
        return false;
    }
});
</script>
    </div>

    <div class="form-group">
      <label for="passengers">Penumpang</label>
      <select id="passengers" name="passengers">
        <option value="1">1 Orang</option>
        <option value="2">2 Orang</option>
        <option value="3">3 Orang</option>
        <option value="4">4 Orang</option>
        <option value="5">5+ Orang</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn-primary">Cari Tiket</button>
</form>
                    <p class="booking-note">
                        Temukan perjalanan terbaik dengan harga terbaik.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <section class="section" id="features">
        <div class="section-inner">
            <h2>Kenapa Pilih XXX?</h2>
            <p class="section-subtitle">
                Kami menghubungkan kota-kota di Indonesia dengan layanan travel nyaman dan terjangkau.
            </p>

            <div class="feature-grid">
                <div class="feature-item">
                    <h3>Harga Terjangkau</h3>
                    <p>
                        Pilihan tarif fleksibel dengan banyak promo musiman. Cocok untuk perjalanan kerja, mudik, hingga liburan keluarga.
                    </p>
                </div>
                <div class="feature-item">
                    <h3>Kursi Ergonomis</h3>
                    <p>
                        Armada ber-AC, kursi reclining seat, dan leg room yang lega untuk perjalanan jarak jauh.
                    </p>
                </div>
                <div class="feature-item">
                    <h3>Tracking Perjalanan</h3>
                    <p>
                        Dukungan sistem pelacakan armada sehingga kamu tahu posisi kendaraan dan estimasi waktu tiba.
                    </p>
                </div>
                <div class="feature-item">
                    <h3>Keamanan Terjaga</h3>
                    <p>
                        Pengemudi berpengalaman, armada rutin diservis, dan beberapa unit dilengkapi CCTV kabin.
                    </p>
                </div>
                <div class="feature-item">
                    <h3>Pool to Pool & Jemput Titik Tertentu</h3>
                    <p>
                        Pilih berangkat dari pool resmi atau titik tertentu yang tersedia di kotamu.
                    </p>
                </div>
                <div class="feature-item">
                    <h3>Standar Kebersihan</h3>
                    <p>
                        Armada dibersihkan secara berkala untuk menjaga kenyamanan dan kebersihan penumpang.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt" id="services">
        <div class="section-inner">
            <h2>Layanan XXX</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Shuttle Penumpang</h3>
                    <p>
                        Layanan travel antar kota dan antar provinsi dengan jadwal harian. Cocok untuk perjalanan reguler.
                    </p>
                    <ul>
                        <li>Rute antarkota di Pulau Jawa, Sumatra, Bali, dan lainnya</li>
                        <li>Jadwal keberangkatan beragam</li>
                        <li>Pemesanan online & offline</li>
                    </ul>
                </div>
                <div class="service-card">
                    <h3>Express Paket</h3>
                    <p>
                        Kirim dokumen dan paket kecil antar kota menggunakan armada XXX dengan estimasi sampai cepat.
                    </p>
                    <ul>
                        <li>Antar kota dalam pulau</li>
                        <li>Opsi same day untuk rute tertentu</li>
                        <li>Asuransi paket opsional</li>
                    </ul>
                </div>
                <div class="service-card">
                    <h3>Charter & Sewa</h3>
                    <p>
                        Sewa armada untuk keperluan kantor, rombongan keluarga, event, maupun tur wisata.
                    </p>
                    <ul>
                        <li>Custom rute & jadwal</li>
                        <li>Driver berpengalaman</li>
                        <li>Cocok untuk study tour & outing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="coverage">
        <div class="section-inner">
            <h2>Tersebar di Berbagai Kota Indonesia</h2>
            <p class="section-subtitle">
                XXX terus memperluas jaringan pool & titik jemput di kota-kota besar dan kota penyangga.
            </p>

            <div class="coverage-grid">
                <div class="coverage-item">
                    <h3>Jawa</h3>
                    <p>Jakarta, Bogor, Depok, Tangerang, Bekasi, Bandung, Semarang, Yogyakarta, Surabaya, Malang, dan sekitarnya.</p>
                </div>
                <div class="coverage-item">
                    <h3>Sumatra</h3>
                    <p>Medan, Palembang, Lampung, dan beberapa kota lain yang sedang kami kembangkan.</p>
                </div>
                <div class="coverage-item">
                    <h3>Bali & Nusa Tenggara</h3>
                    <p>Denpasar dan kota tujuan wisata populer lainnya secara bertahap.</p>
                </div>
                <div class="coverage-item">
                    <h3>Kota Lainnya</h3>
                    <p>
                        Jaringan akan terus bertambah. Cek aplikasi atau hubungi call center untuk info rute terbaru.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt" id="app">
        <div class="section-inner app-inner">
            <div class="app-text">
                <h2>Pesan Tiket di Aplikasi XXX</h2>
                <p>
                    Kemudahan memesan tiket travel, cek jadwal, dan pantau status perjalanan dalam satu aplikasi.
                </p>
                <ul class="app-list">
                    <li>🕒 Pesan kapan saja, di mana saja</li>
                    <li>💳 Banyak pilihan metode pembayaran</li>
                    <li>🔔 Notifikasi keberangkatan & promo</li>
                </ul>
                <div class="app-buttons">
                    <a href="#" class="store-badge">Download di Play Store</a>
                    <a href="#" class="store-badge">Download di App Store</a>
                </div>
            </div>
            <div class="app-mockup">
                <div class="phone">
                    <div class="phone-header"></div>
                    <div class="phone-screen">
                        <p class="phone-title">XXX App</p>
                        <p class="phone-text">Pesan tiket travel & paket dalam hitungan detik.</p>
                        <div class="phone-pill"></div>
                        <div class="phone-pill small"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="blog">
        <div class="section-inner">
            <h2>Info & Tips Perjalanan</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <span class="blog-date">Senin, 10 November 2025</span>
                    <h3>Tips Nyaman Naik Travel Antar Kota</h3>
                    <p>
                        Dari memilih kursi hingga membawa barang seperlunya, simak panduan singkat supaya perjalananmu tetap nyaman.
                    </p>
                    <a href="#" class="blog-link">Baca Selengkapnya →</a>
                </article>
                <article class="blog-card">
                    <span class="blog-date">Rabu, 29 Oktober 2025</span>
                    <h3>Rekomendasi Kota untuk Short Getaway</h3>
                    <p>
                        Butuh liburan singkat akhir pekan? Cek beberapa kota yang mudah dijangkau dengan travel XXX.
                    </p>
                    <a href="#" class="blog-link">Baca Selengkapnya →</a>
                </article>
                <article class="blog-card">
                    <span class="blog-date">Jumat, 03 Oktober 2025</span>
                    <h3>Cara Pesan Tiket Travel secara Online</h3>
                    <p>
                        Langkah-langkah mudah memesan tiket, mulai dari memilih rute, jadwal, hingga metode pembayaran.
                    </p>
                    <a href="#" class="blog-link">Baca Selengkapnya →</a>
                </article>
            </div>
        </div>
    </section>

    <footer class="footer" id="contact">
        <div class="footer-inner">
            <div class="footer-col">
                <h4>XXX Shuttle</h4>
                <p>
                    Travel antar kota dan antar provinsi dengan jaringan luas di Indonesia.
                    Fokus pada kenyamanan, keamanan, dan kemudahan pemesanan.
                </p>
            </div>
            <div class="footer-col">
                <h4>Kontak</h4>
                <p>📍 Undip, Tembalang, Semarang</p>
                <p>☎ 0123456789</p>
                <p>✉ XXX@gmai.com</p>
            </div>
            <div class="footer-col">
                <h4>Layanan</h4>
                <ul>
                    <li><a href="#booking">Pesan Tiket Travel</a></li>
                    <li><a href="#services">Express Paket</a></li>
                    <li><a href="#services">Charter & Sewa</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Ikuti Kami</h4>
                <p>Instagram, Tiktok, dan media sosial lainnya (placeholder).</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 XXX. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
