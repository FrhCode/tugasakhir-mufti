@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h4 class="mb-5"><strong>Tambah Pengetahuan</strong></h4>
              <form class="forms-sample" action="/admin/pengetahuan/store" method="POST">
                @csrf
                <div class="form-group">
                  <label for="pengetahuanpenyakit">Pilih Penyakit</label>
                  <select id="pengetahuanpenyakit" name="disease_id" class="form-control">
                    @foreach ($data_penyakit as $penyakit)
                      <option value="{{$penyakit->id}}">{{$penyakit->id}} - {{$penyakit->name}}</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="pengetahuangejala">Pilih Gejala</label>
                  <select id="pengetahuangejala" name="symptom_id" class="form-control">
                    @foreach ($data_gejala as $gejala)
                      <option value="{{$gejala->id}}">{{$gejala->id}} - {{$gejala->name}}</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="pengetahuanmb">Nilai Kepastian (MB)</label>
                  <input id="pengetahuanmb" name="mb" type="number" step=0.01 max=0.80 min=-0.80 class="form-control"  placeholder="Masukkan nilai kepastian">
                </div>
                <div class="form-group">
                  <label for="pengetahuanmd">Nilai Ketidakpastian (MD)</label>
                  <input id="pengetahuanmd" name="md" type="number" step=0.01 max=0.80 min=-0.80 class="form-control" placeholder="Masukkan nilai ketidakpastian">
                </div>
                <button type="submit" class="btn btn-success mr-2">Tambah</button>
                <a href="/admin/pengetahuan"><button type="button" class="btn btn-light mr-2">Cancel</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection