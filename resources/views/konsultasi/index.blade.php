@extends('layouts.app')

@section('content')
    <!-- Page Title Header Starts-->
  <div class="row page-title-header">
    <div class="col-12">
      <div class="px-1">
        <h3 class="page-title">Konsultasi</h3>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5 class="mb-5"><strong>Isi nilai kepastian pada gejala yang dirasakan</strong></h5>
              <form class="forms-sample" action="/konsultasi/diagnosa" method="POST">
                @csrf
                @foreach ($data_gejala as $gejala)
                <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <label>{{$gejala->id}} - {{$gejala->name}}</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="{{$gejala->id}}" class="form-control form-control-sm">
                                      <option value=0.00>--Pilih Jika Sesuai--</option> 
                                          <option value=1.00>Yakin</option> 
                                          <option value=0.80>Cukup Yakin</option> 
                                          <option value=0.60>Biasa Saja</option> 
                                          <option value=0.40>Kurang Yakin</option> 
                                          <option value=0.20>Tidak Yakin</option>  
                                      </select>
                                </div>
                            </div>
                            <hr>
                  </div>
                @endforeach
                <button type="submit" class="btn btn-success mr-2">Diagnosa</button>
                <a href="/dashboard"><button type="button" class="btn btn-light mr-2">Batal</button></a>
              </form>
        </div>
      </div>
    </div>
  </div>
@endsection