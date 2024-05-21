@extends('welcome')
@section('content')
    <section id="content">
        <div class="content-wrap py-0 py-lg-3">

            <div class="container">
                <div class="row justify-content-center g-5">
                    <div class="col-10 col-md-8 col-lg-3 text-center rotated-text">
                        <p class="fs-5 pt-4 color mb-0 px-3 fw-medium">Kata mereka tentang Octans IDN</p>
                        <img src="{!! asset('webpage/demos/saas/images/arrow.svg') !!}" alt=".." class="w-25 p-2 d-none d-lg-inline-block">
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <h2><i class="bi-person-badge-fill me-2 color"></i> Sangat responsif</h2>
                        <p class="lead">Octans juga bisa diakses ke semua perangkat, baik itu dari browser PC,
                            android, ataupun iOS.</p>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <h2><i class="bi-shield-fill-check me-2 color"></i> Transparansi</h2>
                        <p class="lead">Semua laporan dibuat transparan, dan bisa export ke excel ataupun PDF.
                        </p>
                    </div>

                </div>
            </div>

            <div class="section bg-transparent my-0 my-lg-5">
                <div class="container">
                    <div class="row align-items-md-center">
                        <!-- Image -->
                        <img src="{!! asset('webpage/demos/saas/images/section/2.png') !!}" alt="OctansIDN Features" class="col-md-6">

                        <!-- Content -->
                        <div class="col-md-6 px-lg-5">
                            <p class="mt-3 mb-1 fs-5 text-muted">Mudah and Responsif</p>
                            <h3 class="h2 mb-4 fw-semibold">Mudah Digunakan</h3>
                            <p class="lead fw-normal">
                                Octans memiliki antarmuka yang sederhana dan mudah dipahami. Pengguna dapat dengan
                                mudah memahami cara menggunakan aplikasi ini. Berikut adalah beberapa fitur yang
                                memudahkan pengguna untuk menggunakan Octans:
                            <ol>
                                <li>Tampilan visual yang menarik</li>
                                <li>Penjelasan yang jelas dan ringkas</li>
                                <li>Tombol dan menu yang mudah diakses</li>
                            </ol>
                            </p>
                        </div>
                    </div>

                    <div class="clear mt-lg-6"></div>

                    <div class="row flex-row-reverse align-items-md-center mt-5">
                        <!-- Image -->
                        <img src="{!! asset('webpage/demos/saas/images/section/3.png') !!}" alt="OctansIDN Features" class="col-md-6">

                        <!-- Content -->
                        <div class="col-md-6 px-lg-5">
                            <p class="mt-3 mb-1 fs-5 text-muted">Lengkap dan Dinamis</p>
                            <h3 class="h2 mb-4 fw-semibold">Fitur lengkap dan dinamis</h3>
                            <p class="lead fw-normal">Octans memiliki fitur untuk mencatat pemasukan dan
                                pengeluaran, membuat laporan keuangan mulai dari laporan pemasukan, pengeluaran,
                                laba-rugi, dan tabungan/saldo. Octans juga dapat menyesuaikan kebutuhan laporan
                                anda.</p>
                            <ol>
                                <li>Pembuatan anggaran: Octansidn memungkinkan pengguna untuk membuat anggaran dan melacak
                                    pengeluaran mereka terhadap anggaran tersebut.</li>
                                <li>Pemantauan pengeluaran: Octansidn memberikan gambaran yang jelas tentang di mana uang
                                    pengguna dihabiskan.</li>
                                <li>Analisis keuangan: Octansidn memberikan wawasan tentang kesehatan keuangan pengguna.
                                <li>Penyusunan tujuan keuangan: Octansidn membantu pengguna untuk menetapkan tujuan keuangan
                                    dan melacak kemajuan mereka.</li>
                            </ol>
                        </div>
                    </div>

                    <div class="clear mt-lg-6"></div>

                    <div class="row align-items-md-center mt-5">
                        <!-- Image -->
                        <img src="{!! asset('webpage/demos/saas/images/section/4.png') !!}" alt="OctansIDN Features" class="col-md-4">

                        <!-- Content -->
                        <div class="col-md-8 px-lg-5">
                            <p class="mt-3 mb-1 fs-5 text-muted">Terjangkau</p>
                            <h3 class="h2 mb-4 fw-semibold">Harga yang sangat terjangkau dan cocok untuk UMKM</h3>
                            <p class="lead fw-normal">Tersedia dengan trial gratis selama 30 hari, dan mulai dari
                                30rb per bulan, kamu bisa akses kesemua fitur dan akses <i>unlimited</i> transaksi
                                tanpa batas Octansidn dapat digunakan untuk berbagai keperluan, antara lain:

                            <ol>
                                <li>Mengelola keuangan pribadi: Octansidn dapat membantu pengguna untuk melacak pengeluaran
                                    mereka, menghemat uang, dan mencapai tujuan keuangan mereka.</li>
                                <li>Mengelola keuangan bisnis kecil: Octansidn dapat membantu bisnis kecil untuk melacak
                                    pengeluaran mereka, mengelola arus kas, dan membuat keputusan keuangan yang lebih baik.
                                </li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent my-0 my-lg-5 pb-0 pb-lg-5">
                <div class="container ">

                    <h3 class="h1 mb-5 text-center">Pricing Table</h3>

                    <div class="row pricing block-pricing-10 justify-content-center align-items-stretch">

                        <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
                            <div
                                class="pricing-box d-flex flex-column justify-content-between align-items-center h-100 rounded-5 pricing-simple px-5 py-0 border text-center bg-white overflow-visible">
                                <h3 class="pricing-title ls-0 bg-white fw-normal">Pemula</h3>
                                <div class="pricing-price fw-medium"><span class="price-unit"></span>Free</div>
                                <div class="pricing-features">
                                    <h5 class="mb-2 fw-semibold">Plan Includes:</h5>
                                    <ul class="d-flex flex-column align-items-center justify-content-center">
                                        <li>Full Access of all Features</li>
                                        <li>Akses transaksi terbatas sebanyak 50 masing-masing transaksi</li>
                                        <li>24/7 Support with Chats</li>
                                    </ul>
                                </div>
                                <a href="https://uat.octansidn.com/register" target="_blank"
                                    class="btn btn-action border bg-white h-bg-dark text-dark h-text-light btn-lg px-4">Coba
                                    gratis selama 30 hari</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
                            <div
                                class="pricing-box d-flex flex-column justify-content-between align-items-center h-100 rounded-5 pricing-simple px-5 py-0 border border-width-2 border-color text-center bg-white overflow-visible">
                                <h3 class="pricing-title ls-0 bg-white color">Mikro, Kecil, dan Menengah</h3>
                                <div class="pricing-price fw-medium"><span class="price-unit">IDR</span>xxx<span
                                        class="price-tenure">/bulan</span></div>
                                <div class="pricing-features">
                                    <h5 class="mb-2 fw-semibold">Plan Includes:</h5>
                                    <ul class="d-flex flex-column align-items-center justify-content-center">
                                        <li>Full Access of all Features</li>
                                        <li>User akses dan akses transaksi tanpa batas.</li>
                                        <li>1 Year License Available</li>
                                        <li>24/7 Support with Chats</li>
                                    </ul>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=6281915881569&text=Hi%20PatunganYuk%2C%20saya%20mau%20beli%20aplikasi%20keuangan%20octansidn%20dong." target="_blank"
                                    class="btn btn-dark btn-action bg-color btn-lg px-4">Berlangganan sekarang</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
