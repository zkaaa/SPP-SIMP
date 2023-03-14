@extends('layouts.main')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
  @endif
  <div class="card">
    <h5 class="card-header">Data Kelas</h5>
    <a href="/kelas/tambah" class="btn btn-primary btn-sm">Tambah data</a>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($kelas as $k)
          <tr>
            <td></i>{{ $k->nama_kelas }}</td>
            <td>{{ $k->kompetensi_keahlian }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="kelas/edit/{{ $k->id_kelas }}">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="/kelas/hapus/{{ $k->id_kelas }}">
                      <i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection