@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit data kelas</h5>
      </div>
      <div class="card-body">
        <form action="/kelas/update/{{ $kelas->id_kelas }}" method="post">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Kelas</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                  <i class="bx bx-buildings"></i>
              </span>
                <input
                  name="nama_kelas"
                  type="text"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="Nama"
                  aria-label="Nama"
                  aria-describedby="basic-icon-default-email2"
                  value="{{ $kelas->nama_kelas }}">
              </div>
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kompetensi Keahlian</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class='bx bx-wrench'></i></span>
                <input
                name="kompetensi_keahlian"
                  type="text"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="Kompetensi Keahlian"
                  aria-label="Kompetensi Keahlian"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{ $kelas->kompetensi_keahlian }}"
                />
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection