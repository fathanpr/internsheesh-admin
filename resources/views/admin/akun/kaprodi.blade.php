<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kelola Akun | kaprodi</title>

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
            <h1>Manajemen Akun Kaprodi</h1>
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
              @endif
              <div class="card">
                <div class="card-header border-0">
                  <h4>Akun Kaprodi</h4>
                    <div class="card-header-action">
                      <a href="{{ route('admin.register') }}" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                  {{-- @include('') --}}
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th colspan="2">Email</th>
                          <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $kaprodi)    
                        <tr>
                          <td>{{ $user->firstItem() + $loop->iteration-1 }}</td>
                          <td colspan="2">{{ $kaprodi->email }}</td>
                            <td>
                                <a href="{{ route('kaprodi.edit',$kaprodi->id) }}" class="btn btn-warning">Ganti Password</a>
                            </td>
                            <td>
                                <a href="{{ route('kaprodi.delete',$kaprodi->id) }}" class="btn btn-danger" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?">Hapus Akun</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer pt-1">
                  {{ $user->links() }}
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
  
</body>
</html>
