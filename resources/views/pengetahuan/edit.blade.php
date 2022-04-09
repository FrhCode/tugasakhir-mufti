@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h4 class="mb-5"><strong>Edit Pengetahuan</strong></h4>
              <form class="forms-sample" action="/admin/pengetahuan/{{$pengetahuan->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="pengetahuanpenyakit">Pilih Penyakit</label>
                  <select id="pengetahuanpenyakit" name="disease_id" class="form-control">
                    @foreach ($data_penyakit as $penyakit)
                      <option value="{{$penyakit->id}}" @if ($pengetahuan->disease_id == $penyakit->id) selected @endif>{{$penyakit->id}} - {{$penyakit->name}}</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="pengetahuangejala">Pilih Gejala</label>
                  <select id="pengetahuangejala" name="symptom_id" class="form-control">
                    @foreach ($data_gejala as $gejala)
                      <option value="{{$gejala->id}}" @if ($pengetahuan->symptom_id == $gejala->id) selected @endif>{{$gejala->id}} - {{$gejala->name}}</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="pengetahuanmb">Nilai Kepastian (MB)</label>
                  <input id="pengetahuanmb" name="mb" type="number" step=0.01 max=1.00 min=0.00 class="form-control" value="{{$pengetahuan->mb}}"  placeholder="Masukkan nilai kepastian">
                </div>
                <div class="form-group">
                  <label for="pengetahuanmd">Nilai Ketidakpastian (MD)</label>
                  <input id="pengetahuanmd" name="md" type="number" step=0.01 max=1.00 min=0.00 class="form-control" value="{{$pengetahuan->md}}" placeholder="Masukkan nilai ketidakpastian">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
                <a href="/admin/pengetahuan"><button type="button" class="btn btn-light mr-2">Cancel</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection