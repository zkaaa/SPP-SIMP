@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Tambah data kelas</h5>
        <a href="/kelas" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card-body">
        <form action="/kelas/store" method="POST">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama Kelas</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                  <i class="bx bx-buildings"></i>
              </span>
                <input
                  type="text"
                  name="nama_kelas"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="nama_Kelas"
                  aria-label="nama_kelas"
                  aria-describedby="basic-icon-default-email2">
              </div>
              @if($errors->has('nama_kelas'))
                <div class="text-danger">
                  {{ $errors->first('nama_kelas')}}
                </div>
              @endif
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kompetensi Keahlian</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class='bx bx-wrench'></i></span>
                <input
                  type="text"
                  name="kompetensi_keahlian"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="kompetensi keahlian"
                  aria-label="Kompetensi Keahlian"
                  aria-describedby="basic-icon-default-fullname2"
                />
              </div>
              @if($errors->has('kompetensi_keahlian'))
                <div class="text-danger">
                  {{ $errors->first('kompetensi_keahlian')}}
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