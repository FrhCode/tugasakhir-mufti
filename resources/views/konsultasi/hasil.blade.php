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
  @if ($array_penyakit == [])
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="text-center p-3">
              <p class="text-center"><strong>Tidak ada gejala yang dipilih<strong></p>
              <a href="/konsultasi" class="text-center"><button type="button" class="btn btn-light">Go Back</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card mb-3">
        <div class="card-body">
          <h4 class="mb-3"><strong>Kemungkinan Penyakit</strong></h4>
            <table class="table table-striped pt-4">
              <thead>
                <th>Rank</th>
                <th>Penyakit</th>
                <th>Skor Kepastian</th>
              </thead>
              <tbody>
                @foreach ($array_penyakit as $key => $value)
                  <tr>
                    <td>{{ array_search($key, array_keys($array_penyakit)) + 1 }}</td>
                    <td>{{ $value['disease']->name }}</td>
                    @if ($value['cf'] <= 100.00 && $value['cf'] >= 50.00)
                      <td class="text-danger">{{ $value['cf'] }}%</td>
                    @elseif ($value['cf'] < 50.00 && $value['cf'] >= -50.00)
                      <td class="text-primary">{{ $value['cf'] }}%</td>
                    @else
                      <td class="text-success">{{ $value['cf'] }}%</td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
      <div class="card mb-3 text-light bg-success">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-md-1 col-3 p-0 mb-3 text-center">
              <i class="fas fa-plus-square fa-3x"></i>
            </div>
            <div class="col-md-11 col-9 p-0 mb-3">
              <h5>Hasil Diagnosa:</h5>
              <h3><strong>{{ $diagnosis['disease']->name }}</strong></h3>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              {{-- Info --}}
              <div class="mb-4 py-3 px-2 bg-success">
                <div class="d-flex mb-2">
                  <i class="fas fa-info-circle mr-2 text-light align-middle"></i>
                  <span class="text-light align-middle"><strong>Info Penyakit:</strong></span>
                </div>
                <h6 class="card-text text-light">{{ $diagnosis['disease']->info }}</h6>
              </div>
              {{-- Info End --}}
            </div>
            <div class="col-md-6">
              {{-- Saran --}}
              <div class="card bg-danger border border-light rounded">
                <div class="card-header">
                  <div class="d-flex">
                    <i class="fas fa-exclamation-triangle mr-2 text-success"></i>
                    <h4 class="text-success"><strong>Saran Pakar</strong></h4>
                  </div>
                </div>
                <div class="card-body bg-success">
                  <h6 class="card-text text-light">{{ $diagnosis['disease']->advice }}</h6>
                </div>
              </div>  
            {{--Saran End--}}
            </div>
          </div>
          <hr>
          <div class="d-flex">
            <div class="mt-3 mt-1">
              <a href="/konsultasi"><button type="button" class="btn btn-light mr-2 text-success">Coba Lagi</button></a>
            </div>
            <div class="mt-3">
              <a href="/dashboard"><button type="button" class="btn btn-primary mr-2 text-light hasil-diagnosa-button">Dashboard</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  @endif
    
@endsection