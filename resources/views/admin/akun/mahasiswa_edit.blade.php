<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kelola Akun | Ubah Password</title>

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
            <h1>Ubah Password</h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              @if(session()->has('error'))
              <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                      <strong>{{ session()->get('error') }}</strong> 
                      <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
                  </div>
              </div>
              @endif
              <div class="card">
                <div class="card-header border-0">
                  <h4>Ubah Password Mahasiswa</h4>
                </div>
                <form action="/akun/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-outline mb-4 col-lg-12">
                      <label class="form-label" for="form1Example2">Password Baru</label>
                      <input type="password" id="form1Example2" class="form-control" name="password"/>
                    </div>
                    <div class="form-outline mb-4 col-lg-12">
                      <label class="form-label" for="form1Example2">Konfirmasi Password Baru</label>
                      <input type="password" id="form1Example2" class="form-control" name="confirm_password"/>
                    </div>
                    <div class="d-flex justify-content-end">
                      <div class="col-lg-2 col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">Ubah Password</button>
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

  @include('layouts.script')
  
</body>
</html>
