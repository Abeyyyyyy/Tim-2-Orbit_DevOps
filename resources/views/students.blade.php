<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body { background-color: #f8fafc; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 mb-1">Students</h1>
                <p class="text-secondary mb-0">CRUD visual latihan dengan data statis</p>
            </div>
            <button type="button" class="btn btn-primary">
                + Tambah Siswa
            </button>
        </div>

        @php
            $students = [
                ['name' => 'Asep Firmansyah', 'email' => 'asep@example.com', 'class' => 'XII RPL 1'],
                ['name' => 'Siti Nurhaliza', 'email' => 'siti@example.com', 'class' => 'XI TKJ 2'],
                ['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'class' => 'X MM 1'],
                ['name' => 'Rina Kartika', 'email' => 'rina@example.com', 'class' => 'XII AKL 3'],
            ];
        @endphp

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 56px;" class="text-center">#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th style="width: 200px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $index => $student)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $student['name'] }}</td>
                                    <td><a href="mailto:{{ $student['email'] }}" class="text-decoration-none">{{ $student['email'] }}</a></td>
                                    <td><span class="badge text-bg-secondary">{{ $student['class'] }}</span></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                            <button type="button" class="btn btn-sm btn-outline-danger">Hapus</button>
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

        <div class="text-secondary small mt-3">Catatan: Tombol hanya tampilan (belum terhubung ke backend).</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>


