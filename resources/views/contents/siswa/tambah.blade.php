@extends('layouts.main')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Tambah Data Siswa</h5>
        <a href="/siswa" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card-body">
        <form method="POST" action="/siswa/store">
          @csrf
          <input type="hidden" name="id_spp">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NISN</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                  <i class='bx bx-note'></i>
                </span>
                <input type="text" name="nisn" class="form-control" id="basic-icon-default-fullname" placeholder="NISN" aria-label="nisn" aria-describedby="basic-icon-default-fullname2">
              </div>
              @if($errors->has('nisn'))
                <div class="text-danger">
                  {{ $errors->first('nisn') }}
                </div>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">NIS</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text">
                  <i class='bx bx-note'></i>
                </span>
                <input type="text" name="nis" id="basic-icon-default-company" class="form-control" placeholder="NIS" aria-label="NIS" aria-describedby="basic-icon-default-company2">
              </div>
              @if($errors->has('nis'))
                <div class="text-danger">
                  {{ $errors->first('nis') }}
                </div>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" name="nama" id="basic-icon-default-email" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-icon-default-email2">
              </div>
              @if($errors->has('nama'))
                <div class="text-danger">
                  {{ $errors->first('nama')}}
                </div>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Kelas</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                <select type="select" name="id_kelas" id="basic-icon-default-email" class="form-control" placeholder="Kelas" aria-label="Nama" aria-describedby="basic-icon-default-email2">
                @foreach ($kelas as $k)
                  <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                @endforeach
                </select>
              </div>
              @if($errors->has('kelas'))
                <div class="text-danger">
                  {{ $errors->first('kelas')}}
                </div>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Alamat</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text">
                    <i class="bx bx-buildings"></i>
                </span>
                <input type="text" name="alamat" class="form-control" id="basic-icon-default-fullname" placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-icon-default-fullname2">
              </div>
              @if($errors->has('alamat'))
                <div class="text-danger">
                  {{ $errors->first('alamat') }}
                </div>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">No Telpon</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text">
                  <i class="bx bx-phone"></i>
                </span>
                <input name="no_telp" type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
              </div>
              @if($errors->has('no_telp'))
               <div class="text-danger">
                 {{ $errors->first('no_telp') }}
               </div>
              @endif   
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" name="submit" class="btn btn-primary" value="save">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection