<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard</title>

  @include('layouts.style')

</head>

<body>
  <div id="app">
    
    <div class="main-wrapper">

      <div class="navbar-bg"></div>

      @include('components.navbar')

      @include('components.sidebar')

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="bi-person-check" style="font-size: 36px; color: white;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Admin</h4>
                  </div>
                  <div class="card-body">
                    <h5>{{ $admins }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="bi-columns" style="font-size: 36px; color: white;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Mahasiswa</h4>
                  </div>
                  <div class="card-body">
                    <h5>{{ $mahasiswa }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="bi-columns-gap" style="font-size: 36px; color: white;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pembimbing</h4>
                  </div>
                  <div class="card-body">
                    <h5>{{ $pembimbing }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header border-0">
                  <h4>Grafik Magang Fasilkom 2022</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12" id="grafik"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
      </div>
      
      @include('components.footer')

    </div>
    
  </div>

  @include('layouts.script')
  <script src="https://code.highcharts.com/highcharts.js"></script>
      <script type="text/javascript">
            var telkom = JSON.parse('{!! json_encode($telkom) !!}');
            var kalbe = JSON.parse('{!! json_encode($kalbe) !!}');
            var hashmicro = JSON.parse('{!! json_encode($hashmicro) !!}');
            var pemerintahan = JSON.parse('{!! json_encode($pemerintahan) !!}');
            var bulan = JSON.parse('{!! json_encode($bulan) !!}');

            Highcharts.chart('grafik',{
              title : {
                text: 'Minat Daftar Magang Berdasarkan Tempat Fasilkom 2022'
              },
              xAxis : {
                categories: bulan
              },
              yAxis :{
                title:{
                  text : 'Jumlah Pendaftar'
                }
              },
              plotOptions:{
                series:{
                  allowPointSelect: true
                }
              },
              series:[
                {
                  name:"PT Telkom Tbk",
                  data : telkom
                },
                {
                  name:"Kalbe Morinaga Indonesia(KMI)",
                  data : kalbe
                },
                {
                  name:"Hashmicro Indonesia",
                  data : hashmicro
                },
                {
                  name:"DPRD Karawang",
                  data : pemerintahan
                },
              ]
            });
            </script>
</body>
</html>
