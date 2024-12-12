<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Baru</title>
    <!-- Link ke CSS atau framework yang Anda gunakan -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1e272e; /* Dark background */
            color: #ecf0f1; /* Light text color */
            padding: 40px 0;
            text-align: center;
        }

        h1 {
            color: #9b59b6; /* Soft purple accent */
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #34495e;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .alert {
            background-color: #9b59b6; /* Soft purple */
            color: white;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #8e44ad;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 1.2rem;
            color: #ecf0f1;
        }

        input, textarea {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #9b59b6; /* Soft purple border */
            border-radius: 5px;
            width: 100%;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        input[type="file"] {
            padding: 5px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            background-color: #9b59b6; /* Soft purple button */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #8e44ad; /* Darker purple on hover */
        }

        a {
            text-decoration: none;
            color: #9b59b6; /* Soft purple link */
            font-size: 1rem;
            font-weight: 600;
        }

        a:hover {
            color: #8e44ad; /* Darker purple on hover */
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <h1>Tambah Proyek Baru</h1>

    <!-- Menampilkan pesan sukses setelah form berhasil disubmit -->
    @if(session('success'))
        <div class="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="title">Judul Proyek:</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}">
                @error('title')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="description">Deskripsi:</label>
                <textarea name="description" id="description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="tools">Alat/Tools (Opsional):</label>
                <input type="text" name="tools" id="tools" value="{{ old('tools') }}">
                @error('tools')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="image">Gambar (Opsional):</label>
                <input type="file" name="image" id="image">
                @error('image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit">Simpan Proyek</button>
            </div>
        </form>

        <br>
        <a href="{{ route('admin.project.index') }}">Kembali ke Daftar Proyek</a>
    </div>
</body>
</html>
