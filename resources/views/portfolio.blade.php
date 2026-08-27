@extends('layouts.portfolio')

@section('title', 'Wahyu Dimasda - Portofolio Digital')

@section('content')
    {{-- Header --}}
    <header class="header" id="header">
        <a href="#home" class="logo">Wahyu Dimasda</a>

        <nav class="navbar">
            <a href="#home" class="nav-link active">Beranda</a>
            <a href="#about" class="nav-link">Profil</a>
            <a href="#skills" class="nav-link">Keahlian</a>
            <a href="#journey" class="nav-link">Perjalanan</a>
            <a href="#quotes" class="nav-link">Kutipan</a>
            <a href="#contact" class="nav-link">Kontak</a>
        </nav>

        <button class="menu-toggle" id="menu-toggle" aria-label="Buka/tutup menu">
            <i class="fas fa-bars"></i>
        </button>
    </header>

    {{-- Hero --}}
    <section class="home" id="home">
        <div class="home-img">
            <div class="img-wrapper">
                <img src="{{ asset('img/wahyu dimasda.jpg') }}" alt="Wahyu Dimasda">
            </div>
        </div>

        <div class="home-content">
            <p class="hero-badge">Portofolio Digital</p>
            <h3>Salam kenal, saya</h3>
            <h1>Wahyu Dimasda</h1>
            <h3>Dan saya seorang <span class="typing-text"></span></h3>
            <p>
                Mahasiswa Informatika Komputer di LP3I College Banda Aceh
                yang memiliki minat kuat pada bidang IT Support.
                Memiliki keahlian khusus di bidang Networking dan
                instalasi jaringan dasar. Sangat terbiasa dalam
                mengoperasikan dan mengelola Sistem Operasi
                (Linux/Windows). Memiliki kemampuan pemecahan
                masalah (troubleshooting) yang baik pada perangkat
                keras maupun perangkat lunak. Antusias untuk
                memberikan dukungan teknis yang optimal serta siap
                berkontribusi secara langsung pada penyelesaian
                masalah infrastruktur teknologi informasi perusahaan.
            </p>

            <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/masartelin" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>

            <div class="hero-actions">
                <a href="#contact" class="btn">Hubungi Saya</a>
                <a href="#journey" class="btn btn-outline">Lihat Perjalanan</a>
            </div>
        </div>
    </section>

    {{-- About / Profil --}}
    <section class="about" id="about">
        <h2 class="heading">Tentang <span>Saya</span></h2>

        <div class="about-container">
            <div class="about-img">
                <div class="img-wrapper about-img-wrapper">
                    <img src="{{ asset('img/wahyu dimasda2.jpg') }}" alt="Wahyu Dimasda">
                </div>
            </div>

            <div class="about-content">
                <h3>Saya seorang IT Support</h3>
                <p>
                    Saya adalah pribadi yang selalu haus akan ilmu. Setiap tempat yang saya datangi
                    adalah ruang untuk belajar, dan setiap perangkat yang bermasalah adalah kesempatan
                    untuk memahami sistem lebih dalam. Saya tidak ingin hanya mengejar hasil instan,
                    tetapi membangun keahlian yang jujur lewat praktik, ketelitian, dan konsistensi.
                </p>
                <p>
                    Fokus saya ada pada dukungan teknis: merancang dan merawat jaringan dasar,
                    mengelola sistem operasi Linux maupun Windows, serta menyelesaikan gangguan
                    perangkat keras dan perangkat lunak agar infrastruktur tetap berjalan.
                </p>

                <ul class="about-facts">
                    <li><i class="fas fa-graduation-cap"></i> Informatika Komputer — LP3I College Banda Aceh</li>
                    <li><i class="fas fa-location-dot"></i> Banda Aceh, Indonesia</li>
                    <li><i class="fas fa-briefcase"></i> Minat: IT Support, Networking, Troubleshooting</li>
                </ul>

                <a href="#contact" class="btn">Mari Berkolaborasi</a>
            </div>
        </div>
    </section>

    {{-- Skills --}}
    <section class="skills" id="skills">
        <h2 class="heading">Keahlian <span>Saya</span></h2>
        <p class="section-lead">
            Keahlian tidak lahir dari bakat instan, tetapi dari ribuan pengulangan yang dilakukan dengan tekun.
        </p>

        <div class="services-container">
            <div class="service-box">
                <div class="service-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>Networking</h3>
                <p>
                    Instalasi jaringan dasar, pengaturan perangkat, dan perawatan konektivitas
                    agar sistem dapat saling terhubung dengan stabil.
                </p>
            </div>

            <div class="service-box">
                <div class="service-icon">
                    <i class="fab fa-linux"></i>
                </div>
                <h3>Sistem Operasi</h3>
                <p>
                    Terbiasa mengoperasikan dan mengelola Linux serta Windows, termasuk
                    pengaturan, pemeliharaan, dan penggunaan sehari-hari di lingkungan kerja.
                </p>
            </div>

            <div class="service-box">
                <div class="service-icon">
                    <i class="fas fa-screwdriver-wrench"></i>
                </div>
                <h3>Troubleshooting</h3>
                <p>
                    Mendiagnosis dan menyelesaikan masalah perangkat keras maupun perangkat lunak
                    dengan pendekatan yang rapi, sabar, dan berorientasi solusi.
                </p>
            </div>
        </div>

        <div class="skill-tags">
            <span>IT Support</span>
            <span>Instalasi Jaringan</span>
            <span>Linux</span>
            <span>Windows</span>
            <span>Hardware</span>
            <span>Software</span>
            <span>Dokumentasi</span>
            <span>Komunikasi Teknis</span>
        </div>
    </section>

    {{-- Journey / proses belajar — pola dari portofolio referensi --}}
    <section class="journey" id="journey">
        <h2 class="heading">Perjalanan <span>Belajar</span></h2>
        <p class="section-lead">
            Setiap proses memiliki cerita. Ada rasa lelah, kebingungan, revisi, dan tekanan.
            Semua itu menjadi pelajaran bahwa tantangan adalah bagian dari hasil yang lebih baik.
        </p>

        <div class="journey-grid">
            <article class="journey-card">
                <div class="journey-icon"><i class="fas fa-sitemap"></i></div>
                <h3>Instalasi jaringan</h3>
                <p>
                    Kualitas sebuah hasil sering kali ditentukan oleh kualitas persiapannya.
                    Merakit kabel, menata perangkat, dan menguji koneksi mengajarkan saya
                    bahwa proses yang dikerjakan dengan baik akan berbicara tanpa banyak kata.
                </p>
            </article>

            <article class="journey-card">
                <div class="journey-icon"><i class="fas fa-desktop"></i></div>
                <h3>Linux &amp; Windows</h3>
                <p>
                    Mengelola dua sistem operasi membuat saya terbiasa beradaptasi.
                    Setiap perintah, setiap pengaturan, adalah latihan kesabaran:
                    tidak perlu terlihat hebat, cukup konsisten mengasah diri.
                </p>
            </article>

            <article class="journey-card">
                <div class="journey-icon"><i class="fas fa-stethoscope"></i></div>
                <h3>Troubleshooting</h3>
                <p>
                    Perangkat yang error adalah ruang belajar. Saya memilih tetap tenang,
                    menelusuri penyebab, dan memperbaiki langkah demi langkah.
                    Proses yang jujur membawa saya melewati batas diri sendiri.
                </p>
            </article>

            <article class="journey-card">
                <div class="journey-icon"><i class="fas fa-comments"></i></div>
                <h3>Komunikasi teknis</h3>
                <p>
                    Belajar menyampaikan masalah teknis dengan bahasa yang jelas.
                    Saya pernah melewati fase ragu, namun memilih konsisten berlatih
                    agar dukungan IT tidak hanya selesai di perangkat, tetapi juga dipahami pengguna.
                </p>
            </article>

            <article class="journey-card">
                <div class="journey-icon"><i class="fas fa-keyboard"></i></div>
                <h3>Ketelitian &amp; dokumentasi</h3>
                <p>
                    Setiap progres kecil lebih bermakna daripada pujian. Mengetik, mencatat
                    langkah perbaikan, dan merapikan laporan mengajarkan keselarasan:
                    kerja teknis yang rapi lebih berharga daripada yang hanya terlihat cepat.
                </p>
            </article>

            <article class="journey-card">
                <div class="journey-icon"><i class="fas fa-globe"></i></div>
                <h3>Membangun portofolio digital</h3>
                <p>
                    Seminar dan praktik membuat situs ini mengajarkan bahwa setiap proses punya cerita.
                    Ada revisi dan tekanan, tetapi semua itu membentuk cara saya menampilkan diri
                    secara profesional di dunia digital.
                </p>
            </article>
        </div>
    </section>

    {{-- Quotes --}}
    <section class="quotes" id="quotes">
        <h2 class="heading">Kutipan <span>Pengingat</span></h2>

        <div class="testimonial-wrapper">
            <button class="testimonial-btn prev" id="testimonial-prev" aria-label="Kutipan sebelumnya">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="testimonial-slider">
                <div class="testimonial-slide active">
                    <div class="testimonial-box quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p>
                            Sepotong besi rusak karena karatnya sendiri. Jangan biarkan
                            dirimu rusak karena pikiranmu sendiri.
                        </p>
                    </div>
                </div>

                <div class="testimonial-slide">
                    <div class="testimonial-box quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p>
                            Bunuh rasa malasmu sebelum malasmu membunuh impian dan cita-citamu.
                        </p>
                    </div>
                </div>

                <div class="testimonial-slide">
                    <div class="testimonial-box quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p>
                            Musuh sering kali lebih mengenalmu daripada dirimu sendiri.
                        </p>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-box quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p>
                            Rasa sakit adalah guru terbesarku.
                        </p>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-box quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p>
                            Bintang tidak bisa bersinar tanpa adanya kegelapan.
                        </p>
                    </div>
                </div>

                <div class="testimonial-slide">
                    <div class="testimonial-box quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p>
                            Kesalahan adalah pelajaran untuk masa depan.
                        </p>
                    </div>
                </div>
            </div>

            <button class="testimonial-btn next" id="testimonial-next" aria-label="Kutipan berikutnya">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="testimonial-dots" id="testimonial-dots"></div>
    </section>

    {{-- Contact --}}
    <section class="contact" id="contact">
        <h2 class="heading">Kontak <span>Saya</span></h2>
        <p class="section-lead">
            Siap membantu dukungan teknis, instalasi jaringan dasar, dan penyelesaian
            masalah infrastruktur. Silakan tinggalkan pesan.
        </p>

        <div class="contact-meta">
            <div class="contact-meta-item">
                <i class="fas fa-location-dot"></i>
                <div>
                    <strong>Lokasi</strong>
                    <span>Banda Aceh, Indonesia</span>
                </div>
            </div>
            <div class="contact-meta-item">
                <i class="fas fa-user-graduate"></i>
                <div>
                    <strong>Status</strong>
                    <span>Mahasiswa Informatika Komputer</span>
                </div>
            </div>
            <div class="contact-meta-item">
                <i class="fas fa-headset"></i>
                <div>
                    <strong>Fokus</strong>
                    <span>IT Support &amp; Networking</span>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div id="toast-success" class="toast toast-success">
                <i class="fas fa-circle-check"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                <input type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}" required>
            </div>
            <div class="input-box">
                <input type="tel" name="phone" placeholder="Nomor Telepon" value="{{ old('phone') }}">
                <input type="text" name="subject" placeholder="Subjek" value="{{ old('subject') }}" required>
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Pesan Anda" required>{{ old('message') }}</textarea>
            <button type="submit" class="btn">Kirim Pesan</button>

            @error('name') <p class="form-error">{{ $message }}</p> @enderror
            @error('email') <p class="form-error">{{ $message }}</p> @enderror
            @error('phone') <p class="form-error">{{ $message }}</p> @enderror
            @error('subject') <p class="form-error">{{ $message }}</p> @enderror
            @error('message') <p class="form-error">{{ $message }}</p> @enderror
        </form>
    </section>

    {{-- Footer --}}
    <footer class="footer">
        <div class="social-icons">
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/masartelin" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <p>&copy; {{ date('Y') }} Wahyu Dimasda — Portofolio Digital</p>
    </footer>
@endsection