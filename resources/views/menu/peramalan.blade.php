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
                        <h5 class="card-header-text">Peramalan Jumlah Siswa</h5>
                    </div>

                    <div class="card-block">
                        <form action="{{ route('peramalan.index') }}">
                            <div class="form-group">
                                <label for="tahun" class="form-control-label">Tahun Periode</label>
                                <input type="text" class="form-control yearpicker" id="tahun" name="tahun" readonly>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-outline-primary m-r-30"><i
                                            class="ti-bar-chart"></i> Hitung</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Horizontal Form ends-->

            @if (isset($caridata))
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Hasil</h5>
                        <p>Perkiraan jumlah siswa untuk tahun {{ $tahun }} adalah: {{ $a + $b * $caridata }}</p>
                        <p>Berdasarkan persamaan Regresi</p>
                        <h3>Y = a + b (x)</h3>
                        <p>a = {{ $a }}</p>
                        <p>b = {{ $b }}</p>
                        <p>Y = {{ $a }} + {{ $b }} ({{ $caridata }})</p>
                        <p> = {{ $a + $b * $caridata }}</p>
                        <p>dengan MAPE sebesar :  {{ $mape }} %</p>
                        <h4>MAPE = (Σ |(Actual - Forecast)| / Σ Actual) * 100%</h4>
                    </div>
                    <div class="card-block">
                        <div id="ex">
                        </div>
                    </div>
                    
                </div>
            </div>
            

            <div class="col-sm-12">
                <!-- Basic Table starts -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Perhitungan Tabel Regresi</h5>
                        {{-- <p>Basic example <code>without any additional modification</code> classes</p> --}}
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table class="table" style="font-family:'Times New Roman'">
                                    <thead style="background-color:dimgrey">
                                        <tr style="color:white">
                                            <th>No.</th>
                                            <th>Tahun</th>
                                            <th>x</th>
                                            <th>y</th>
                                            <th>x*y</th>
                                            <th>x^2</th>
                                            <th>y'</th>
                                            <th>y-y'</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color:wheat">
                                        @php
                                            $no = 1;
                                        @endphp
                                        {{-- @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $d->tahun }}</td>
                                                <td>{{ $no -1 }}</td>
                                                <td>{{ $d->jumlahsiswa }}</td>
                                                <td>{{ ($no -1) * $d->jumlahsiswa }}</td>
                                                <td>{{ pow($no -1, 2)}}</td>
                                            </tr>
                                        @endforeach --}}
                                        @foreach($year as $index => $tahun)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $tahun }}</td>
                                            <td>{{ $x[$index] }}</td>
                                            <td>{{ $y[$index] }}</td>
                                            <td>{{ $x[$index] * $y[$index] }}</td>
                                            <td>{{ pow($x[$index],2) }}</td>
                                            <td>{{ $a + $b * $x[$index] }}</td>
                                            <td>{{ abs($y[$index] - $dataForecast[$index]) }}</td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td></td>
                                            <td>Jumlah</td>
                                            <td>{{ $jumlahX }}</td>
                                            <td>{{ $jumlahY }}</td>
                                            <td>{{ $jumlahXY }}</td>
                                            <td>{{ $jumlahX2 }}</td>
                                            <td></td>
                                            <td>{{ $jumlahSelisih }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>a (intersep) : {{ $a }}</p>
                                <p>b (slope) : {{ $b }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Table ends -->

            </div>
            

            <!-- 1-3-block row start -->

            {{-- <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text"></h5>
                        </div>
                        <div class="card-block">
                            <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div> --}}
            <!-- Line Chart start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Data Aktual X Peramalan</h5>
                    </div>
                    
                    <div class="card-block">
                        <div id="forecast" style="height: 250px;">
                        </div>
                    </div>
                    
                </div>
                
            </div>
            @endif
            <!-- Line Chart end -->
            <!-- 1-3-block row end -->
            
        </div>

        <!-- Main content ends -->
    </div>
    <!-- Container-fluid ends -->
    
@endsection('content')

@push('scripts')
<script>
    $(document).ready(function() {
    $('.yearpicker').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true
    });
});

  var dataAktual = @json($y);
  var dataForecast = @json($dataForecast);
  var year = @json($year);
  
  var chartData = [];
  for (var i = 0; i < year.length; i++) {
      chartData.push({
          year: year[i],
          valueA: dataAktual[i],
          valueB: dataForecast[i]
      });
  }
  
  new Morris.Line({
      element: 'forecast',
      data: chartData,
      xkey: 'year',
      ykeys: ['valueA', 'valueB'],
      labels: ['Data Aktual', 'Data Peramalan']
  });


  </script>
@endpush
