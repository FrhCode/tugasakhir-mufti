@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h4 class="mb-5"><strong>Edit Data Penyakit</strong></h4>
              <form class="forms-sample" action="/admin/penyakit/{{$penyakit->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="penyakitid">ID Penyakit</label>
                  <input id="penyakitid" name="id" type="text" class="form-control"  placeholder="ex: P001" value="{{$penyakit->id}}">
                </div>
                <div class="form-group">
                  <label for="penyakitname">Nama Penyakit</label>
                  <input id="penyakitname" name="name" type="text" class="form-control"  placeholder="Masukkan nama penyakit" value="{{$penyakit->name}}">
                </div>
                <div class="form-group">
                  <label for="penyakitinfo">Informasi</label>
                  <textarea name="info" class="form-control" id="penyakitinfo" placeholder="Masukkan informasi penyakit">{{$penyakit->info}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
                <a href="/admin/penyakit"><button type="button" class="btn btn-light mr-2">Cancel</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection