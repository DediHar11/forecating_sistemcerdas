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
                        <h5 class="card-header-text">Edit Data Perjurusan</h5>
                    </div>

                    <div class="card-block">
                        <form action="{{route('jurusan.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-control-label">Tahun</label>
                                <select class="form-control " id="exampleSelect1" name="tahun">
                                    <option>{{$data->tahun}}</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Otomotif</label>
                                <input type="text" class="form-control" aria-describedby="otomotif" value="{{$data->otomotif}}" name="otomotif" placeholder="Jumlah Siswa">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Media dan Desain</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" value="{{$data->media}}" name="media" placeholder="Jumlah Siswa">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Teknik Komputer</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" value="{{$data->tk}}" name="tk" placeholder="Jumlah Siswa">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Manajemen Bisnis</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" value="{{$data->mb}}" name="mb" placeholder="Jumlah Siswa">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>
                             <div class="form-group">
                                <label class="form-control-label">Akuntansi dan Keuangan</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" value="{{$data->ak}}" name="ak" placeholder="Jumlah Siswa">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-inverse-primary waves-effect m-r-30">Update</button>
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
