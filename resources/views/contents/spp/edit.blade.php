@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Data spp</h5>
        <a href="/spp" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card-body">
        <form action="/spp/update/{{ $spp->id_spp }}" method="post">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tahun</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                    <i class='bx bx-calendar'></i>
                </span>
                <input
                  type="text"
                  name="tahun"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="tahun"
                  aria-label="tahun"
                  aria-describedby="basic-icon-default-fullname2"
                />
              </div>
              @if($errors->has('tahun'))
                <div class="text-danger">
                  {{ $errors->first('tahun') }}
                </div>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nominal</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text">
                    <i class='bx bx-money'></i>
                </span>
                <input
                  type="text"
                  name="nominal"
                  id="basic-icon-default-company"
                  class="form-control"
                  placeholder="nominal"
                  aria-label="nominal"
                  aria-describedby="basic-icon-default-company2"
                />
              </div>
              @if($errors->has('nominal'))
                <div class="text-danger">
                  {{ $errors->first('nominal') }}
                </div>
              @endif
            </div>
          </div>
          
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection