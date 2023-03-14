@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Tambah Data Petugas</h5>
        <a href="/petugas" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card-body">
        <form action="/petugas/update/{{ $petugas->id_petugas }}" method="post">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Username</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <input
                  type="text"
                  name="username"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="username"
                  aria-label="username"
                  aria-describedby="basic-icon-default-email2"
                  value="{{ $petugas->username }}">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <input
                  type="text"
                  name="nama_petugas"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="Nama"
                  aria-label="Nama"
                  aria-describedby="basic-icon-default-email2"
                  value="{{ $petugas->nama_petugas }}">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Role</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <select name="level" id="role" class="form-select form-control">
                  @if ($petugas->level == 'admin')
                    <option selected value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                  @else
                  <option value="admin">Admin</option>
                  <option value="petugas">Petugas</option>
                  @endif
                </select>
              </div>
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