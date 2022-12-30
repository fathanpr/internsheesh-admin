<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kelola Akun | Buat Akun</title>
  
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
            <h1>Tentang InternSheesh</h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                  <div class="card-body text-center">
                    <div class="col-lg-12 mb-4">
                      <img src="{{ asset('img/logo-primary.png') }}" style="height:150px;" alt="" class="my-5">
                      <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                          <h4>Ujian Akhir Semester - Framework Pemrograman Web - Studi Kasus 1</h4>
                          <p>(2010631170072) / 5C / INFORMATIKA</p>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  @include('layouts.script')
  
</body>
</html>
