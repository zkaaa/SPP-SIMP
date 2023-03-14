@extends('layouts.main')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
  @endif
  <div class="card mb-4">
    <h5 class="card-header">Input Data</h5>
    <div class="card-body">
      <form action="/transaksi/store" method="POST">
        @csrf
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
        <div class="col-md-10">
          <select
                  type="select"
                  name="namaSiswa"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="nama"
                  aria-label="nama"
                  aria-describedby="basic-icon-default-email2">
                  <option selected disabled>Pilih siswa</option>
                  @foreach ($siswa as $v)
                  <option value="{{ $v->id }}" >{{ $v->nama }}</option>
                  @endforeach
                </select>

          @if($errors->has('namaSiswa'))
            <div class="text-danger">
              {{ $errors->first('namaSiswa') }}
            </div>
          @endif

        </div>
      </div>

      <div class="mb-3 row">
        <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal</label>
        <div class="col-md-10">
          <input class="form-control" name="tanggal" type="date" value="2021-06-18" id="html5-date-input" />
          
          @if($errors->has('tanggal'))
            <div class="text-danger">
              {{ $errors->first('tanggal') }}
            </div>
          @endif
        </div>
      </div>
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah</label>
        <div class="col-md-10">
          <input type="number" name="jumlah_dibayar" class="form-control" placeholder="Jumlah">
        </div>
      </div>
      
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Bulan</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="bulan_dibayar" placeholder="Bulan">
          @if($errors->has('bulan_dibayar'))
            <div class="text-danger">
              {{ $errors->first('bulan_dibayar') }}
            </div>
          @endif
        </div>
      </div>
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Tahun</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="tahun_dibayar" placeholder="Tahun">
          @if($errors->has('tahun_dibayar'))
            <div class="text-danger">
              {{ $errors->first('tahun_dibayar') }}
            </div>
          @endif
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection