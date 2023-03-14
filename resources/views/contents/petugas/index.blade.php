@extends('layouts.main')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
  @endif
  <div class="card">
    <h5 class="card-header">Data Petugas</h5>
    <a href="/petugas/tambah" class="btn btn-primary btn-sm">Tambah data</a>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Role</th>
            <th>Ditambahkan Pada</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($petugas as $p)
          <tr>
            <td>{{ $p->nama }}</td>
            <td>@foreach ($p->getRoleNames() as $role)
                {{$role}}
            @endforeach</td>
            <td>{{ $p->created_at->format('d-m-Y')}}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="petugas/edit/{{ $p->id }}">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="/petugas/hapus/{{ $p->id }}">
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