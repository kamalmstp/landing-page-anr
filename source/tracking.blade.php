@extends('_layouts.master')

@section('title', 'Pelacakan Kargo')

@section('body')

    {{-- Memanggil partial untuk Banner Area --}}
    @include('_partials.banner', ['pageTitle' => 'Pelacakan Kargo', 'currentPage' => 'Pelacakan'])
        
        <!--================Tracking Button Area =================-->
        <section class="tracking_search_area">
            <div class="container">
                <div class="tracking_search_inner">
                    <h2 class="single_title">Lacak Pengiriman Anda</h2>
                    <h5>Masukkan nomor pelacakan, dan dapatkan hasil pelacakan.</h5>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Nomor Pelacakan">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Lacak</button>
                      </span>
                    </div><!-- /input-group -->
                  
                </div>
            </div>
        </section>
        <!--================End Tracking Button Area =================-->
        
        <!--================Tracking Timeline Area =================-->
        <section class="timeline_tracking_area">
            <div class="container">
                <div class="timeline_tracking_inner"> 
                    <div class="timeline_tracking_box">
                        <div class="tracking_head">
                            <h4>ANR123456789ID</h4> {{-- Contoh nomor pelacakan ANR --}}
                        </div>
                        <div class="scheduled_area">
                            <ul>
                                <li>
                                    <div class="schedul_box">
                                        <h5> Penjemputan </h5>
                                    </div>
                                    <div class="s_icon"></div>
                                </li>
                                <li>
                                    <div class="schedul_box">
                                        <h5> Dalam Transit </h5>
                                    </div>
                                    <div class="s_icon"></div>
                                </li>
                                <li>
                                    <div class="schedul_box">
                                        <h5> Pengiriman </h5>
                                    </div>
                                    <div class="s_icon active"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="tracking_in tag-delivered">
                            <h4>TERKIRIM</h4>
                        </div>
                        <div class="tracking_list">
                            <ul>
                                <li>
                                    <div class="checkpoint__time"><strong>12 Juli, 2025</strong><div class="hint">02:55 pm</div></div>
                                    <div class="checkpoint__icon delivered"></div>
                                    <div class="checkpoint__content"><strong>Terkirim, Di/Pada Tujuan Akhir<span class="checkpoint__courier-name">Kurir Lokal</span></strong><div class="hint">Banjarmasin, Kalimantan Selatan</div></div>
                                </li>
                                <li>
                                    <div class="checkpoint__time"><strong>12 Juli, 2025</strong><div class="hint">10:05 am</div></div>
                                    <div class="checkpoint__icon outfordelivery"></div>
                                    <div class="checkpoint__content"><strong>Dalam Proses Pengiriman<span class="checkpoint__courier-name">Kurir Lokal</span></strong><div class="hint">Kantor Pusat Distribusi Banjarmasin</div></div>
                                </li>
                                <li>
                                    <div class="checkpoint__time"><strong>11 Juli, 2025</strong><div class="hint">07:25 pm</div></div>
                                    <div class="checkpoint__icon intransit"></div>
                                    <div class="checkpoint__content"><strong>Tiba di Fasilitas Sortir<span class="checkpoint__courier-name">ANR</span></strong><div class="hint">Jakarta, Indonesia</div></div>
                                </li>
                                <li>
                                    <div class="checkpoint__time"><strong>10 Juli, 2025</strong><div class="hint">08:55 pm</div></div>
                                    <div class="checkpoint__icon intransit"></div>
                                    <div class="checkpoint__content"><strong>Berangkat dari Pusat Logistik<span class="checkpoint__courier-name">ANR</span></strong><div class="hint">Surabaya, Indonesia</div></div>
                                </li>
                                 <li>
                                    <div class="checkpoint__time"><strong>10 Juli, 2025</strong><div class="hint">11:30 am</div></div>
                                    <div class="checkpoint__icon intransit"></div>
                                    <div class="checkpoint__content"><strong>Diambil oleh Kurir<span class="checkpoint__courier-name">ANR</span></strong><div class="hint">Gudang Asal</div></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Tracking Timeline Area =================-->

@endsection
