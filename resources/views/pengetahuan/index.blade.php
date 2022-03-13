@extends('layouts.app')

@section('content')
     <!-- Page Title Header Starts-->
  <div class="row page-title-header">
    <div class="col-12">
      <div class="px-1">
        <h3 class="page-title">Basis Pengetahuan</h3>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <a href="/admin/pengetahuan/create" data-toggle="tooltip" title="Tambah pengetahuan"><button class="btn btn-icons btn-primary btn-rounded"><i class="mdi mdi-close mdi-rotate-45"></i></button></a>
            @if (count($data_pengetahuan) < 1)
            <div class="p-3">
              <p class="text-center">No data found</p>
            </div>
            @else
            <table class="table table-hover table-responsive-lg mt-4">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col"s>penyakit</th>
                    <th scope="col"s>Gejala</th>
                    <th scope="col"s>MB</th>
                    <th scope="col"s>MD</th>
                    <th scope="col"s>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_pengetahuan as $pengetahuan)
                        <tr>
                            <td>{{ $pengetahuan->id }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($pengetahuan->diseases->name, 45, $end='...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($pengetahuan->symptoms->name, 45, $end='...') }}</td>
                            <td>{{ $pengetahuan->mb }}</td>
                            <td>{{ $pengetahuan->md }}</td>
                            <td>
                              <a href="/admin/pengetahuan/{{$pengetahuan->id}}/edit"><button class="btn btn-icons btn-light" data-toggle="tooltip" title="Edit data pengetahuan"><i class="mdi mdi-pencil"></i></button></a>
                              <a href="/admin/pengetahuan/{{$pengetahuan->id}}"><button class="btn btn-icons btn-danger" data-toggle="tooltip" title="Hapus data pengetahuan" onclick="return confirm('Apakah Anda Yakin?')"><i class="mdi mdi-delete"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              @endif
        </div>
      </div>
    </div>
  </div>
    
@endsection