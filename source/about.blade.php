@extends('_layouts.master')

@section('title', 'Tentang Kami')

@section('body')

    @include('_partials.banner', ['pageTitle' => 'Tentang Kami', 'currentPage' => 'Tentang Kami'])

<!--================Our About Area =================-->
<section class="our_about_area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="our_about_image">
                    <img src="/img/about-right-1.jpg" alt="Tentang Kami">
                </div>
            </div>
            <div class="col-md-8">
                <div class="our_about_left_content">
                    <h3 class="single_title">Tentang Kami</h3>
                    <p>PT. Antar Nusa Raya Ekspress adalah perusahaan logistik yang terus meningkatkan hubungan efisien dengan teknologi yang berpusat pada pengguna. Kami menyediakan layanan pengiriman yang andal dan tepat waktu.</p>
                    <p>Kami adalah penyedia layanan logistik terkemuka yang berdedikasi untuk memberikan solusi pengiriman yang inovatif dan efisien bagi pelanggan kami di seluruh dunia.</p>
                    <p>Secara global, kami mempromosikan inovasi revolusioner dengan sinergi yang berpusat pada klien. Kami dengan kompeten menyediakan infomediari yang dimanfaatkan daripada keterkaitan total perusahaan. Kami secara proaktif menyinergikan proses di luar kebiasaan dengan kolaborasi taktis dan berbagi ide. Kami secara interaktif mendefinisikan infomediari B2C dengan pasar fungsional. Kami secara tegas berinovasi dalam layanan web yang diaktifkan web dengan kemitraan yang andal.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our About Area =================-->


<section class="global_text_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="global_text_item">
                    <h3 class="single_title">Misi Global Kami</h3>
                    <p>Secara dinamis merangkul skenario akurat dengan ROI berkualitas. Secara kredibel mendominasi modal intelektual yang luas sementara data visioner. Dengan cepat memfasilitasi skenario fleksibel dengan sumber daya pembangunan tim. Terus memanfaatkan hubungan efisien yang ada dengan teknologi yang berpusat pada pengguna. Menerapkan modal manusia multidisiplin secara mulus melalui metodologi 24/7.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="global_text_item">
                    <h3 class="single_title">Kami Tumbuh Lebih Cepat</h3>
                    <p>Secara objektif merek proses yang berpusat pada klien dengan hasil profesional. Secara kredibel mengatur sumber daya virtual dan keahlian dinamis. Secara interaktif mempertahankan pengguna yang dimanfaatkan dengan skenario yang diberdayakan. Secara dinamis menunda vektor kualitas terbaik tanpa strategi pertumbuhan mutakhir. Terus memulihkan strategi pertumbuhan yang berorientasi pada tujuan.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!--================End Global Text Area =================-->
<section class="why_choose_area">
    <div class="why_choose_image">
        <img src="/img/why-us-img.jpg" alt="Mengapa Memilih Kami">
    </div>
    <div class="why_choose_feature">
        <div class="why_choose_content">
            <h3 class="single_title">TEKNOLOGI DAN REKAYASA</h3>
            <h6>Secara kredibel mengatur sumber daya virtual dan keahlian dinamis. Secara interaktif mempertahankan pengguna yang dimanfaatkan.</h6>
            <p>Dengan kompeten mengirimkan pengguna e-bisnis melalui rantai pasokan yang sehat secara ekonomi. Secara tegas merekonseptualisasi pasar elektronik bebas kesalahan sedangkan skema terfokus. Secara fosforesen merangkul pasar niche yang berpusat pada proses sebelum platform ortogonal.</p>
            <p>Lorem Ipsum hanyalah teks dummy industri percetakan dan penataan huruf. Lorem Ipsum hanyalah teks dummy industri percetakan dan penataan huruf. Lorem Ipsum hanyalah teks dummy industri percetakan dan penataan huruf.</p>
        </div>
    </div>
</section>
    <!--================End Global Text Area =================-->

<section class="our_team_area">
    <div class="container">
        <h3 class="single_title">Tim Kami</h3>
        <div class="our_team_slider owl-carousel">
            <div class="item">
                <div class="team">
                    <div class="team_img">
                        <div class="img">
                            <img src="/img/team/img1.jpg" alt="John Martin">
                        </div>
                    </div>
                    <a href="#">
                        <h2>John Martin</h2>
                    </a>
                    <p>Pendiri &amp; CEO</p>
                </div>
            </div>
            <div class="item">
                <div class="team">
                    <div class="team_img">
                        <div class="img">
                            <img src="/img/team/img2.jpg" alt="Amber Greene">
                        </div>
                    </div>
                    <a href="#">
                        <h2>Amber Greene</h2>
                    </a>
                    <p>Hubungan Pelanggan</p>
                </div>
            </div>
            <div class="item">
                <div class="team">
                    <div class="team_img">
                        <div class="img">
                            <img src="/img/team/img3.jpg" alt="Brandon Castillo">
                        </div>
                    </div>
                    <a href="#">
                        <h2>Brandon Castillo</h2>
                    </a>
                    <p>Kepala Operasi</p>
                </div>
            </div>
            <div class="item">
                <div class="team">
                    <div class="team_img">
                        <div class="img">
                            <img src="/img/team/img4.jpg" alt="Alan Stewart">
                        </div>
                    </div>
                    <a href="#">
                        <h2>Alan Stewart</h2>
                    </a>
                    <p>Manajer Pengiriman</p>
                </div>
            </div>
            <div class="item">
                <div class="team">
                    <div class="team_img">
                        <div class="img">
                            <img src="/img/team/img5.jpg" alt="Jonathan Grant">
                        </div>
                    </div>
                    <a href="#">
                        <h2>Jonathan Grant</h2>
                    </a>
                    <p>CTO</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--================Client Slider Area =================-->
    <section class="client_logo_area white_client">
        <div class="container">
            <div class="client_slider owl-carousel">
                <div class="item">
                    <img src="img/client-logo/client-1.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-2.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-3.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-4.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-5.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================End Client Slider Area =================-->

    <!--================Footer Area =================-->
<section class="subscribe_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4>Berlangganan dengan perusahaan kami</h4>
            </div>
            <div class="col-lg-6">
                <form action="#" class="form-inline" method="post" id="subscribeform">
                    <div class="form-group"> <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda..."> </div>
                    <div class="form-group"> <button class="btn" type="submit" id="js-subscribe-btn"> Berlangganan </button> </div>
                    <div id="js-subscribe-result" class="text-center" data-success-msg="Hampir selesai. Silakan periksa email Anda dan verifikasi." data-error-msg="Ups. Terjadi kesalahan."></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection