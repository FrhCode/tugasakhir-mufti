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
  @foreach ($data_penyakit as $penyakit)
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h4><strong>{{ $penyakit->name }}</strong></h4>
                </div>
                <div class="card-body">
                    {{-- Info Box --}}
                    <div class="p-3 rounded-lg border jumbotron">
                        <div class="mb-2">
                            <span class="d-inline mr-1"><i class="fas fa-info-circle text-primary"></i></span>
                            <span class="d-inline">Informasi:</span>
                        </div>
                        <div class="pl-4">
                            <p>{{ $penyakit->info }}</p>
                        </div>
                    </div>
                    {{-- Info Box END --}}
                    
                    <table class="table table-striped table-responsive-md my-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gejala</th>
                                <th>MB</th>
                                <th>MD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                            @foreach ($data_pengetahuan as $pengetahuan)
                                @if ($pengetahuan->disease_id == $penyakit->id)
                                    <tr>
                                        <td>{{ $index }}</td>
                                        <td>{{ $pengetahuan->symptoms->name }}</td>
                                        <td>{{ $pengetahuan->mb }}</td>
                                        <td>{{ $pengetahuan->md }}</td>
                                    </tr>
                                    <?php $index++; ?>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
  @endforeach
  <div class="py-3">
      <a href="/dashboard"><button type="button" class="btn btn-lg btn-primary">Back</button></a>
  </div>
@endsection