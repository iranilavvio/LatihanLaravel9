@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Data Siswa</h6>
                        <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Siswa</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Student->nis }}</td>
                                        <td><a href="{{ route('students.detail', $item->id) }}">{{ $item->name }}</a>
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->Student->phone }}</td>
                                        <td>
                                            <form action="{{ route('students.delete', $item) }}" class="d-inline"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('students.edit', $item->student->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{ $students->links() }}
        </div>
    </div>
@endsection
