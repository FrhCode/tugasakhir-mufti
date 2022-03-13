@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h4 class="mb-5"><strong>Tambah Data Gejala</strong></h4>
              <form class="forms-sample" action="/admin/gejala/store" method="POST">
                @csrf
                <div class="form-group">
                  <label for="gejalaid">ID Gejala</label>
                  <input id="gejalaid" name="id" type="text" class="form-control"  placeholder="ex: G001">
                </div>
                <div class="form-group">
                  <label for="gejalaname">Nama Gejala</label>
                  <input id="gejalaname" name="name" type="text" class="form-control"  placeholder="Masukkan nama gejala">
                </div>
                <div class="form-group">
                  <label for="gejalainfo">Informasi</label>
                  <textarea id="gejalainfo" name="info" class="form-control" placeholder="Masukkan informasi gejala"></textarea>
                </div>
                <button type="submit" class="btn btn-success mr-2">Tambah</button>
                <a href="/admin/gejala"><button type="button" class="btn btn-light mr-2">Cancel</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection