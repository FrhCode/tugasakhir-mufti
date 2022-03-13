@extends('layouts.app')

@section('content')
   <!-- Page Title Header Starts-->
   <div class="row page-title-header">
    <div class="col-12">
      <div class="px-1">
        <h3 class="page-title">Dashboard</h3>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin" style="height: 300px;">
      <div class="card img-fluid">
        <div class="image-container">
          <img class="card-img-top" src={{ asset("assets/images/dashboard/doctor.jpg") }} style="height: 300px; object-fit: cover;" />
        </div>
        <div class="card-img-overlay row align-items-end">
          <div class="col-md-6 py-1">
            <h3 class="text-light"><strong>Sistem Pakar <br> Diagnosis Penyakit Epilepsi</strong></h3>
            <hr class="border-light">
            <p class="text-light lead">Sistem pakar secara otomatis mendiagnosa jenis epilepsi yang diderita pasien berdasarkan skor kepastian pakar dan pasien.</p>
          </div>
          <div class="col-md-6 py-1">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin">
          <div class="card bg-blue">
            <div class="card-header bg-blue">
                <span class="d-inline px-2">
                  <i class="fas fa-stethoscope text-light"></i>
                </span>
                <h3 class="d-inline font-weight-semibold text-light">Konsultasi</h3>
            </div>
            <div class="card-body">
              <h6 class="text-light pb-3">Dapatkan hasil diagnosa yang cepat dan tepat hanya dengan mengisi gejala yang Anda rasakan</h6>
              <a href="/konsultasi"><button class="btn btn-lg btn-outline-light rounded-lg">Mulai Konsultasi</button></a>
            </div>
          </div>
    </div>
    <div class="col-md-6 grid-margin">
      <div class="card">
        <div class="card-header border-bottom border-secondary">
            <span class="d-inline px-2">
              <i class="fas fa-book"></i>
            </span>
            <h3 class="d-inline font-weight-semibold">Basis Pengetahuan</h3>
        </div>
        <div class="card-body">
          <h6 class="pb-3">Kenali lebih dalam berbagai jenis Epilepsi, gejala, dan saran penanganan penyakit berdasarkan rekomendasi pakar</h6>
          <a href="/pengetahuan/show"><button class="btn btn-lg btn-primary rounded-lg">Pelajari</button></a>
        </div>
      </div>
    </div>
  </div>
  @if (Auth::check() && Auth::user()->is_admin == 1)
  <div class="row">
    <div class="col-md-4 grid-margin">
      <a class="card-link" href="/admin/penyakit">
        <div class="card clickable">
          <div class="card-body row align-items-center">
            <div class="col-3 pr-4 text-right"><i class="fas fa-disease fa-3x"></i></div>
            <div class="col-9">
              <h2 class="display-3">{{ count($data_penyakit) }}</h2>
              <h6 class="display-5 font-weight-semibold">Penyakit</h6>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 grid-margin">
      <a class="card-link" href="/admin/gejala">
      <div class="card clickable">
        <div class="card-body row align-items-center">
          <div class="col-3 pr-4 text-right"><i class="fas fa-heartbeat fa-3x"></i></div>
          <div class="col-9">
            <h2 class="display-3">{{ count($data_gejala) }}</h2>
            <h6 class="display-5 font-weight-semibold">Gejala</h6>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-4 grid-margin">
      <a class="card-link" href="/admin/pengetahuan">
      <div class="card clickable">
        <div class="card-body row align-items-center">
          <div class="col-3 pr-4 text-right"><i class="fas fa-book-reader fa-3x"></i></div>
          <div class="col-9">
            <h2 class="display-3">{{ count($data_pengetahuan) }}</h2>
            <h6 class="display-5 font-weight-semibold">Basis Pengetahuan</h6>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  @endif
@endsection

