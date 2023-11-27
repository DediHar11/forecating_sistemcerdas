@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <!-- Header Starts -->
        <div class="row">
            <div class="col-sm-12 p-0">
                <h6 class="text" style="font-size:8px;color:transparent">hh</h6>
            </div>
        </div>
        <!-- Header end -->

        <!-- Tables start -->
        <!-- Row start -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Table starts -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Data Jumlah Siswa</h5>
                        <a href="{{route('datasiswa.create')}}" class="btn-sm btn-info" style="float: right"><i class="icon-plus"></i> Tambah</a>
                        {{-- <p>Basic example <code>without any additional modification</code> classes</p> --}}
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table class="table" style="font-family:'Times New Roman'">
                                    <thead style="background-color:dimgrey">
                                        <tr style="color:white">
                                            <th>No.</th>
                                            <th>Nama Jurusan</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Siswa</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color:wheat">
                                        @php
                                            $no=1;
                                        @endphp
                                        @foreach ($data as $d)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$d->jurusan}}</td>
                                            <td>{{$d->tahun}}</td>
                                            <td>{{$d->jumlahsiswa}}</td>
                                            <td>
                                                <a class="btn-sm btn-warning" href="#"><i class="ti-pencil-alt"></i> Edit</a>
                                                <a class="btn-sm btn-danger" href="#"><i class="ti-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Table ends -->

            </div>
        </div>
        <!-- Row end -->
        <!-- Tables end -->
    </div>
@endsection('content')
