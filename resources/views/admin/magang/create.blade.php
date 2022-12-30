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
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              @if(session()->has('success'))
              <div class="alert alert-primary alert-dismissible show fade">
                  <div class="alert-body">
                      <strong>{{ session()->get('success') }}</strong> 
                      <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
                  </div>
              </div>
              @elseif (session()->has('error'))
              <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                      <strong>Input Gagal, Silahkan cek kembali form yang anda isi</strong> 
                      <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
                  </div>
              </div>
              @endif
              <div class="card">
                <div class="card-header border-0">
                  <h4>Input Tempat Magang</h4>
                </div>
                <form action="{{ route('magang.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-outline mb-4 col-lg-12">
                        <label class="form-label" for="form1Example2">Nama Instansi</label>
                        <input type="text" id="form1Example2" class="form-control" name="nama_instansi"/>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                        <label class="form-label" for="form1Example2">Alamat</label>
                        <input type="text" id="form1Example2" class="form-control" name="alamat"/>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                        <label class="form-label" for="form1Example2">Posisi yang tersedia</label>
                        <input type="text" id="form1Example2" class="form-control" name="posisi"/>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="form-group">
                            <label class="form-label" for="form1Example2">Pendaftaran Dibuka</label>
                            <input type="text" class="form-control datepicker" name="pendaftaran_buka">
                        </div> 
                      </div>
                    <div class="col-lg-12 mb-4">
                        <div class="form-group">
                            <label class="form-label" for="form1Example2">Pendaftaran ditutup</label>
                            <input type="text" class="form-control datepicker" name="pendaftaran_tutup">
                        </div> 
                      </div>
                      <div class="form-outline mb-4 col-lg-12">
                        <label class="form-label" for="form1Example2">Durasi (Bulan)</label>
                        <input type="text" id="form1Example2" class="form-control" name="durasi"/>
                    </div>
                    <div class="col-lg-12 mb-4">
                      <label class="form-label" for="form1Example2">Status</label>
                      <select class="form-control" aria-label="Default select example" name="status">
                          <option selected value="Paid">Paid</option>
                          <option value="Unpaid">Unpaid</option>
                        </select>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                        <label class="form-label" for="form1Example2">Benefit</label>
                        <input type="text" id="form1Example2" class="form-control" name="benefit"/>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                        <label class="form-label" for="form1Example2">Keterangan</label>
                        <input type="text" id="form1Example2" class="form-control" name="keterangan"/>
                    </div>
                    <div class="d-flex justify-content-end">
                      <div class="col-lg-2 col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">Input Data</button>
                      </div>
                    </div>
                  </div>
                </form>
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
