<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div>
                <h1 class="h3 mb-1">Data Siswa</h1>
                <p class="text-secondary mb-0">Daftar seluruh siswa</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <form action="{{ route('students.index') }}" method="GET" class="d-flex gap-2">
                    <input type="text" name="search" value="{{ old('search', $search ?? '') }}" class="form-control" placeholder="Cari nama atau email" />
                    <button type="submit" class="btn btn-outline-primary">Cari</button>
                </form>
                <a href="{{ route('students.create') }}" class="btn btn-primary">+ Tambah Siswa</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width:56px" class="text-center">#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th style="width:200px" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $index => $student)
                                <tr>
                                    <td class="text-center">{{ ($students->currentPage() - 1) * $students->perPage() + $index + 1 }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td><a href="mailto:{{ $student->email }}" class="text-decoration-none">{{ $student->email }}</a></td>
                                    <td><span class="badge text-bg-secondary">{{ $student->class }}</span></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-secondary py-4">Belum ada data siswa.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-end">
            {{ $students->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


