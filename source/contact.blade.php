@extends('_layouts.master')

@section('title', 'Kontak')

@section('body')

@include('_partials.banner', ['pageTitle' => 'Hubungi Kami', 'currentPage' => 'Kontak'])

<!--================Contact Form Area =================-->
<section class="contact_form_area2">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="single_title">Formulir Kontak</h3> {{-- Teks diubah --}}
                <div class="row">
                    {{-- Perhatikan: action="php/contact.php" diubah menjadi "#" karena Jigsaw adalah static site generator.
                         Anda perlu mengintegrasikan layanan formulir pihak ketiga atau backend jika ingin formulir berfungsi. --}}
                    <form class="contact_us_form" action="#" method="post" id="phpcontactform">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda"> {{-- Placeholder diubah --}}
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subjek"> {{-- Placeholder diubah --}}
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" id="message" name="message" placeholder="Pesan Anda" rows="1"></textarea> {{-- Placeholder diubah --}}
                        </div>
                        <div class="form-group col-md-12 button_area">
                            <button type="submit" value="submit your quote" class="btn submit_blue form-control" id="js-contact-btn">Kirim Pesan <i class="fa fa-angle-right"></i></button> {{-- Teks diubah --}}
                            <div id="js-contact-result" data-success-msg="Sukses, Kami akan segera menghubungi Anda" data-error-msg="Ups! Terjadi kesalahan"></div> {{-- Pesan diubah --}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <h3 class="single_title">Detail Kontak</h3> {{-- Teks diubah --}}
                <div class="contact_details_inner">
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <p>Jl. Contoh No. 123</p> {{-- Ganti dengan alamat ANR --}}
                            <p>Banjarmasin, Kalimantan Selatan, Indonesia</p> {{-- Ganti dengan kota/provinsi ANR --}}
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="media-body">
                            <a href="mailto:info@anr-ekspress.com">info@anr-ekspress.com</a> {{-- Ganti dengan email ANR --}}
                            <a href="mailto:support@anr-ekspress.com">support@anr-ekspress.com</a> {{-- Ganti dengan email support ANR --}}
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <a href="tel:+6281234567890">+62 812-3456-7890</a> {{-- Ganti dengan nomor telepon ANR --}}
                            <a href="tel:+6281234567891">+62 812-3456-7891</a> {{-- Ganti dengan nomor telepon ANR --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Contact Form Area =================-->

<!--================Map Area =================-->
<div id="mapid" style="height: 400px; width: 100%;"></div>
<!--================End Map Area =================-->

@endsection