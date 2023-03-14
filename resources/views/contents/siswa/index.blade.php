@extends('layouts.main')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
  @endif
  <div class="card">
    <h5 class="card-header">Data Siswa</h5>
    <a href="/siswa/tambah" class="btn btn-primary btn-sm">Tambah data</a>
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
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($siswa as $s)
          <tr>
            <td>{{ $s->nisn }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->id_kelas }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->no_telp }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/siswa/edit/{{ $s->nisn }}">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="/siswa/hapus/{{ $s->nisn }}">
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