@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Tambah Data Petugas</h5>
        <a href="/petugas" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card-body">
        <form action="/petugas/store" method="POST">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <input
                  type="text"
                  name="email"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="Email"
                  aria-label="email"
                  aria-describedby="basic-icon-default-email2">
              </div>
              @if($errors->has('email'))
                <div class="text-danger">
                  {{ $errors->first('email')}}
                </div>
              @endif
            </div>
          </div>

          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Password</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <input
                  type="password"
                  name="password"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="Nama"
                  aria-label="Nama"
                  aria-describedby="basic-icon-default-email2">
              </div>
              @if($errors->has('password'))
                <div class="text-danger">
                  {{ $errors->first('password')}}
                </div>
              @endif
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
                  placeholder="nama"
                  aria-label="nama"
                  aria-describedby="basic-icon-default-email2">
              </div>
              @if($errors->has('nama_petugas'))
                <div class="text-danger">
                  {{ $errors->first('nama_petugas')}}
                </div>
              @endif
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Role</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <select
                  type="select"
                  name="level"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="Role"
                  aria-label="Role"
                  aria-describedby="basic-icon-default-email2">
                  <option selected disabled>Pilih Level</option>
                  @foreach ($role as $item)
                  <option value="{{$item->name}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
              @if($errors->has('level'))
                <div class="text-danger">
                  {{ $errors->first('level')}}
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