@extends('admin.layout.admin_layouts')
@section('sec_halaman', 'HALAMAN PERTANYAAN')

@section('content_admin')
<div class="row">
    <section class="section dashboard">
        <a href="/admin/tambah_pertanyaan" class="btn btn-primary mb-3">Tambah Pertanyaan</a>
        <div class="table-responsive card p-3">
          <table class="table table-hover table-bordered" id="tabelku">
            <thead class="bg-primary text-white text-center">
              <tr class="text-center align-items-center">
                <th class="text-center">No</th>
                <th class="text-center">Kategori</th>
                <th class="text-center">Pertanyaan</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($pertanyaan as $row)
              <tr>
                <td class="text-center" style="width:5%;">{{ $no++ }}</td>
                <td>{{ $row->kategori->kategori }}</td>
                <td>{{ $row->pertanyaan }}</td>
                <td class="text-center" style="width:20%;">
                    <a href="/admin/ubah_pertanyaan/{{ $row->id_pertanyaan }}" class="btn btn-info btn-sm mb-3">Ubah</a>
                    <button class="btn btn-danger btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $row->id_pertanyaan }}">Hapus</button>
                    <div class="modal fade" id="modalHapus{{ $row->id_pertanyaan }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Apakah Ingin Menghapus Data ini ?</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                                  <form action="/admin/hapus_pertanyaan/{{ $row->id_pertanyaan }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" >Hapus</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>
</div>

<script>
    $(document).ready(function () {
        $('#tabelku').dataTable();
    });
</script>
@endsection