@extends('layouts.main')

@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
    <div class="h3 mb-2>
        <form method="POST" action="#">
        <table>
            <tr>
                <td style="width:15pc;"><input type="text" class="form-control" value="" required name="kategori"
                        placeholder="Masukan Kategori Barang Baru">
                    <input type="hidden" name="id" value="">
                </td>
                <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-edit"></i>
                        Tambah Data</button></td>
            </tr>
        </table>
        </form>
    </div>
    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Tanggal Input</th>
                            <th>Aksi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $kategori)
                            <tr>
                                <td>{{ $kategori->id_kategori }}</td>
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td>{{ $kategori->tgl_input }}</td>
                                <td>
                                    <a href="#"><button class="btn btn-warning">Edit</button></a>
                                </td>
                                <td>
                                    <a href="#" onclick="javascript:return confirm('Hapus Data Kategori ?');"><button
                                            class="btn btn-danger">Hapus</button></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
