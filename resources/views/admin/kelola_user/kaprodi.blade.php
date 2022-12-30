<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Manajemen Data | Kaprodi</title>

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
            <h1>Data Kaprodi</h1>
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
                  <h4>Data Kaprodi</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Email</th>
                          <th>Nama Lengkap</th>
                          <th>NIDN</th>
                          <th>No.HP</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $item)    
                        <tr>
                          <td>{{ $data->firstItem() + $loop->iteration-1 }}</td>
                          <td>{{ $item->user->email }}</td>
                          <td>{{ $item->nama_lengkap }}</td>
                          <td>{{ $item->nidn }}</td>
                          <td>{{ $item->nol_telp }}</td>
                          <td>{{ $item->tanggal_lahir }}</td>
                          <td>{{ $item->alamat }}</td>
                            <td>
                                <a href="{{ route('kaprodi.editdata',$item->id) }}" class="btn btn-warning">Ubah Data</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer pt-1">
                  {{ $data->links() }}
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
