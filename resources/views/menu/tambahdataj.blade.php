@extends('layouts.master')
@section('content')
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->

        <!-- Row Starts -->
        <div class="row">
            <div class="col-sm-12 p-0">
                <h6 class="text" style="font-size:8px;color:transparent">hh</h6>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
            <!--Horizontal Form starts-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Tambah Data Siswa</h5>
                    </div>

                    <div class="card-block">
                        <form action="{{route('jurusan.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-control-label">Tahun</label>
                                <select class="form-control " id="exampleSelect1" name="tahun">
                                    <option value>Pilih Tahun</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                                @if ($errors->has('tahun'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('tahun')}}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Otomotif</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" name="otomotif" placeholder="Jumlah Siswa" required>
                                @if ($errors->has('otomotif'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('otomotif')}}</p>
                                    </span>
                                @endif
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Media dan Mesin</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" name="media" placeholder="Jumlah Siswa" required>
                                @if ($errors->has('media'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('media')}}</p>
                                    </span>
                                @endif
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Teknik Komputer</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" name="tk" placeholder="Jumlah Siswa" required>
                                @if ($errors->has('tk'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('tk')}}</p>
                                    </span>
                                @endif
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Manajemen Bisnis</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" name="mb" placeholder="Jumlah Siswa" required>
                                @if ($errors->has('mb'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('mb')}}</p>
                                    </span>
                                @endif
                             </div>

                            <div class="form-group">
                                <label class="form-control-label">Akuntansi dan Keuangan</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" name="ak" placeholder="Jumlah Siswa" required>
                                @if ($errors->has('ak'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('ak')}}</p>
                                    </span>
                                @endif
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-inverse-primary waves-effect m-r-30">Save</button>
                                    <a onclick="goBack()" class="btn btn-secondary waves-effect">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Horizontal Form ends-->

        </div>

        <!-- Main content ends -->
    </div>
    <!-- Container-fluid ends -->
@endsection('content')
