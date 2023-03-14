@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">edit data siswa</h5>
        <a href="/siswa" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card-body">
        <form action="/siswa/update/{{ $siswa->nisn }}" method="POST">
          @method('put')
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NISN</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                    <i class='bx bx-comment'></i>
                </span>
                <input
                  type="text"
                  name="nisn"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="NISN"
                  aria-label="NISN"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{ $siswa->nisn }}"
                />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">NIS</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text">
                    <i class='bx bx-comment'></i>
                </span>
                <input
                name="nis"
                  type="text"
                  id="basic-icon-default-company"
                  class="form-control"
                  placeholder="NIS"
                  aria-label="NIS"
                  aria-describedby="basic-icon-default-company2"
                  value="{{ $siswa->nis }}"
                />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <input
                name="nama"
                  type="text"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="Nama"
                  aria-label="Nama"
                  aria-describedby="basic-icon-default-email2"
                  value="{{ $siswa->nama }}">
                  
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Kelas</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                <select name="id_kelas" id="kelas" class="form-control">
                  @foreach($kelasList as $kelas)
                      <option value="{{ $kelas->id_kelas }}" {{ old('kelas', $siswa->id_kelas) == $kelas->id_kelas ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                  @endforeach
              </select>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Alamat</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                    <i class="bx bx-buildings"></i>
                </span>
                <input
                name="alamat"
                  type="text"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="Alamat"
                  aria-label="Alamat"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{ $siswa->alamat }}"
                />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">No telp</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"
                  ><i class="bx bx-phone"></i
                ></span>
                <input
                name="no_telp"
                  type="text"
                  id="basic-icon-default-phone"
                  class="form-control phone-mask"
                  placeholder="658 799 8941"
                  aria-label="658 799 8941"
                  aria-describedby="basic-icon-default-phone2"
                  value="{{ $siswa->no_telp }}"
                />
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