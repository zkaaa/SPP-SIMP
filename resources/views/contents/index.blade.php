@extends('layouts.main')
@section('content')
<?php
  header("Cache-Control: no-cache, no-store, must-revalidate");
?>
<div class="row">
    <div class="col-lg-4 col-md-4 order-1">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img
                    src="img/user.png"
                    alt="chart success"
                    class="rounded">
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="cardOpt3"
                    data-bs-toggle="dropdown"
                    data-bs-offset="0,4"
                    data-bs-placement="right"
                    aria-haspopup="true"
                    data-bs-html="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="/siswa">View More</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Siswa</span>
              <h3 class="card-title mb-2">{{ $siswaCount }}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img
                    src="img/user.png"
                    alt="Credit Card"
                    class="rounded">
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="cardOpt6"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                    <a class="dropdown-item" href="/petugas">View More</a>
                  </div>
                </div>
              </div>
              <span>Petugas</span>
              <h3 class="card-title text-nowrap mb-1">{{ $petugasCount }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
      <div class="row">
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="img/school.png" alt="Credit Card" class="rounded" />
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="cardOpt4"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                    <a class="dropdown-item" href="/kelas">View More</a>
                  </div>
                </div>
              </div>
              <span class="d-block mb-1">Kelas</span>
              {{-- @dd($kelasCount); --}}
              <h3 class="card-title text-nowrap mb-2">{{ $kelasCount }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
  <div class="card">
    <h5 class="card-header">Data siswa</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No telp</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($siswa as $s)
          <tr>
            <td>{{ $s->nisn }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->kelas->nama_kelas }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->no_telp }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <br>
  <br>

  <div class="card">
    <h5 class="card-header">Data petugas</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Ditambahkan Pada</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($petugas as $p)
          <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->created_at->format('d-m-Y') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <br>
  <br>
  
  <div class="card">
    <h5 class="card-header">Data kelas</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($kelas as $k)
          <tr>
            <td></i>{{ $k->nama_kelas }}</td>
            <td>{{ $k->kompetensi_keahlian }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
  