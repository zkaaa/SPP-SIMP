@extends('layouts.main')
@section('content')
  <div class="card">
    <h5 class="card-header">History Pembayaran</h5>
    <div class="table-responsive text-nowrap">
      <a href="javascript:window.print()" class="btn btn-primary">generate</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>petugas</th>
            <th>nama siswa</th>
            <th>tanggal</th>
            <th>Bulan bayar</th>
            <th>Tahun bayar</th>
            <th>Jumlah</th>
            <th>Action</th>      
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach ($history as $h)
        <tr>
            <td>{{ $h->petugas->nama_petugas }}</td>
            <td>{{ $h->siswa->nama}}</td>
            <td>{{ $h->tanggal   }}</td>
            <td>{{ $h->bulan_dibayar }}</td>
            <td>{{ $h->tahun_dibayar }}</td>
            <td>{{ $h->jumlah_bayar }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/history/hapus/{{ $h->id_pembayaran }}">
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