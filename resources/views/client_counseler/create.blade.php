<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konseling</title>
</head>
<body>
<div class="container">
    <h1>Reservasi Baru</h1>
    <form action="{{ route('client_counseler.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="domisili" class="form-label">Domisili</label>
            <input type="text" name="domisili" id="domisili" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea name="keluhan" id="keluhan" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
            <select name="jenis_layanan" id="jenis_layanan" class="form-select" required>
                <option value="">Pilih Layanan</option>
                @foreach ($layanans as $item)
                    <option value="{{ $item->id }}">{{ $item->jenis_layanan }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Reservasi</button>
    </form>
</div>
</body>
</html>