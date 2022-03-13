@extends('layouts.app')

@section('content')
     <!-- Page Title Header Starts-->
  <div class="row page-title-header">
    <div class="col-12">
      <div class="px-1">
        <h3 class="page-title">Data Gejala</h3>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
            <a href="/admin/gejala/create" data-toggle="tooltip" title="Tambah gejala"><button class="btn btn-icons btn-primary btn-rounded"><i class="mdi mdi-close mdi-rotate-45"></i></button></a>
            @if (count($data_gejala) < 1)
            <div class="p-3">
              <p class="text-center">No data found</p>
            </div>
            @else
            <table class="table table-hover table-responsive-lg mt-4">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Info</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_gejala as $gejala)
                        <tr>
                            <td>{{ $gejala->id }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($gejala->name, 35, $end='...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($gejala->info, 50, $end='...') }}</td>
                            <td>
                              <a href="/admin/gejala/{{$gejala->id}}/edit"><button class="btn btn-icons btn-light" data-toggle="tooltip" title="Edit data gejala"><i class="mdi mdi-pencil"></i></button></a>
                              <a href="/admin/gejala/{{$gejala->id}}"><button class="btn btn-icons btn-danger" data-toggle="tooltip" title="Hapus data gejala" onclick="return confirm('Apakah Anda Yakin?')"><i class="mdi mdi-delete"></i></button></a>
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