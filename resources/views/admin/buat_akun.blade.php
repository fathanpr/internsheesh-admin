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
            <h1>Buat Akun</h1>
          </div>
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
                      <strong>Registrasi Gagal, Silahkan cek kembali form yang anda isi</strong> 
                      <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
                  </div>
              </div>
              @endif
              <div class="card">
                <div class="card-header border-0">
                  <h4>Buat Akun</h4>
                </div>
                <form action="{{ route('admin.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="col-lg-12 mb-4">
                      <label class="form-label" for="form1Example2">Role</label>
                      <select class="form-control" aria-label="Default select example" name="role_id">
                          <option selected value="2">Mahasiswa</option>
                          <option value="3">Pembimbing</option>
                          <option value="4">Kaprodi</option>
                          <option value="5">Admin Magang</option>
                        </select>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                      <label class="form-label" for="form1Example2">Email</label>
                      <input type="email" id="form1Example2" class="form-control" name="email"/>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                      <label class="form-label" for="form1Example2">Password</label>
                      <input type="password" id="form1Example2" class="form-control" name="password"/>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                      <label class="form-label" for="form1Example2">Konfirmasi Password Baru</label>
                      <input type="password" id="form1Example2" class="form-control" name="confirm_password"/>
                    </div>
                    <div class="d-flex justify-content-end">
                      <div class="col-lg-2 col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
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
