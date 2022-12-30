<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Magang | Tempat Magang</title>

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
              <div class="alert alert-success alert-dismissible show fade">
                  <div class="alert-body">
                      <strong>{{ session()->get('success') }}</strong> 
                      <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
                  </div>
              </div>
              @endif
              <div class="card">
                <div class="card-header border-0">
                  <h4>Daftar Tempat Magang</h4>
                  <div class="card-header-action">
                    <a href="{{ route('magang.create') }}" class="btn btn-primary">Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Instansi</th>
                          <th>Alamat</th>
                          <th>Posisi Lamaran</th>
                          <th>Periode Pendaftaran</th>
                          <th>Durasi Magang</th>
                          <th>Status Magang</th>
                          <th>Benefit</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($magang as $item)    
                        <tr>
                          <td>{{ $magang->firstItem() + $loop->iteration-1 }}</td>
                          <td>{{ $item->nama_instansi }}</td>
                          <td>{{ $item->alamat }}</td>
                          <td>{{ $item->posisi }}</td>
                          <td>{{ $item->pendaftaran_buka }} - {{ $item->pendaftaran_tutup }}</td>
                          <td>{{ $item->durasi }} Bulan</td>
                          <td>{{ $item->status }}</td>
                          <td>{{ $item->benefit }}</td>
                          <td>{{ $item->keterangan }}</td>
                            <td>
                                <a href="{{ route('magang.edit',$item->id) }}" class="btn btn-warning btn-action"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('magang.delete',$item->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer pt-1">
                  {{ $magang->links() }}
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
