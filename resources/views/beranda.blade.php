@extends('layouts.master')
@section('content')
<!-- Main content starts -->
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Dashboard</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $a }}</h2>
                <span class="label label-primary">Otomotif</span>
                <div class="side-box">
                    <a class="info-link" data-toggle="modal" data-target="#otomotif">
                        <i class="ti-info text-warning-color"></i>
                    </a>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $b }}</h2>
                <span class="label label-warning">Media dan Desain</span>
                <div class="side-box">
                    <a class="info-link" data-toggle="modal" data-target="#media-desain">
                        <i class="ti-info text-primary-color"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $c }}</h2>
                <span class="label label-success">Teknik Komputer</span>
                <div class="side-box">
                    <a class="info-link" data-toggle="modal" data-target="#tkk">
                        <i class="ti-info text-success-color"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $d }}</h2>
                <span class="label label-danger">Manajemen Bisnis</span>
                <div class="side-box">
                    <a class="info-link" data-toggle="modal" data-target="#manajemen-bisnis">
                        <i class="ti-info text-danger-color"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $e }}</h2>
                <span class="label label-primary">Akuntansi dan Keuangan</span>
                <div class="side-box">
                    <a class="info-link" data-toggle="modal" data-target="#akuntansi">
                        <i class="ti-info text-primary-color"></i>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{$f}}</h2>
                <span class="label label-info">Multimedia</span>
                <div class="side-box">
                    <i class="ti-server text-info-color"></i>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- 4-blocks row end -->

    <!-- 1-3-block row start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Pola Grafik Tahunan</h5>
            </div>
            
            <div class="card-block">
                <div id="data-siswa" style="height: 250px;">
                </div>
            </div>
            
        </div>
        
    </div>
    <!-- 1-3-block row end -->
    <div class="modal fade" id="otomotif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Otomotif</h5>
                </div>
                <div class="modal-body">
                    <p>- Teknik Kendaraan Ringan Otomotif</p>
                    <p>- Teknik dan Bisnis Sepeda Motor</p>
                    <p>- Teknik Otomotif</p>
                    <p>- Teknik Sepeda Motor</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="media-desain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Media dan Desain</h5>
                </div>
                <div class="modal-body">
                    <p>- Teknik Audio Video</p>
                    <p>- Multimedia</p>
                    <p>- Desain Komunikasi dan Visual</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="tkk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Teknik Komputer</h5>
                </div>
                <div class="modal-body">
                    <p>- Teknik dan Jaringan Komputer</p>
                    <p>- Teknik Jaringan Komputer dan Telekomunikasi</p>
                    <p>- Teknik Elektronika</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manajemen-bisnis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Manajemen Bisnis</h5>
                </div>
                <div class="modal-body">
                    <p>- Otomatisasi dan Tata Kelola Perkantoran</p>
                    <p>- Manajemen Perkantoran</p>
                    <p>- Manajemen Perkantoran dan Layanan Bisnis</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="akuntansi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Akuntansi dan Keuangan</h5>
                </div>
                <div class="modal-body">
                    <p>- Akuntansi dan Keuangan Lembaga</p>
                    <p>- Akuntansi</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Main content ends -->
@endsection('content')

@push('scripts')
<script>
    var otomotif = @json($otomotif);
    var media_desain = @json($media_desain);
    var tkk = @json($tkk);
    var manajemen_bisnis = @json($manajemen_bisnis);
    var akuntansi_keuangan = @json($akuntansi_keuangan);
    var year = @json($year);
  
    var chartData = [];
    for (var i = 0; i < year.length; i++) {
        chartData.push({
            year: year[i],
            otomotif: otomotif[i],
            media_desain: media_desain[i],
            tkk: tkk[i],
            manajemen_bisnis: manajemen_bisnis[i],
            akuntansi_keuangan: akuntansi_keuangan[i]
        });
    }
  
    new Morris.Line({
        element: 'data-siswa',
        data: chartData,
        xkey: 'year',
        ykeys: ['otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan'],
        labels: ['Otomotif', 'Media dan Desain', 'Teknik Komputer', 'Manajemen Bisnis', 'Akuntansi Keuangan']
    });
  </script>
  
@endpush