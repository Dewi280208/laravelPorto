<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Halaman About</title>
    
    <style>
        /* Reset dan dasar styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Orbitron', sans-serif;
            background: linear-gradient(45deg, #8A2BE2, #9B30FF); /* Ungu */
            color: #e0e0e0;
            line-height: 1.6;
            padding: 0;
            overflow-x: hidden;
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Header */
        header {
            background-color: rgba(0, 0, 0, 0.8);
            color: #8A2BE2; /* Ungu soft untuk teks */
            text-align: center;
            padding: 40px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);
        }

        h1 {
            font-size: 3rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: neonGlow 2s ease-in-out infinite alternate;
        }

        @keyframes neonGlow {
            0% { text-shadow: 0 0 12px #8A2BE2, 0 0 24px #8A2BE2, 0 0 36px #8A2BE2, 0 0 48px #8A2BE2; }
            100% { text-shadow: 0 0 18px #ff33cc, 0 0 36px #ff33cc, 0 0 54px #ff33cc, 0 0 72px #ff33cc; }
        }

        /* Form Styling */
        .content {
            max-width: 850px;
            margin: 50px auto;
            padding: 40px;
            background-color: #333333; /* Hitam soft */
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(138, 43, 226, 0.3); /* Ungu soft */
            transition: transform 0.3s ease;
            border: 1px solid #8A2BE2; /* Ungu soft */
        }

        .content:hover {
            transform: translateY(-5px);
        }

        .content label {
            display: block;
            color: #8A2BE2; /* Ungu soft */
            font-size: 1.1rem;
            margin-bottom: 8px;
            text-shadow: 0 0 4px #8A2BE2;
        }

        .content input,
        .content textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            background-color: #121212; /* Hitam */
            border: 1px solid #333;
            border-radius: 8px;
            color: #e0e0e0;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .content input:focus,
        .content textarea:focus {
            border-color: #8A2BE2; /* Ungu soft */
            outline: none;
            box-shadow: 0 0 10px #8A2BE2;
        }

        .content textarea {
            height: 220px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 18px;
            background-color: #8A2BE2; /* Ungu soft */
            color: #121212;
            font-size: 1.2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(138, 43, 226, 0.2); /* Ungu soft */
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #9370DB; /* Ungu lebih terang */
            transform: translateY(-3px); /* Efek tombol terangkat */
        }

        /* Link styling */
        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            color: #8A2BE2; /* Ungu soft */
            font-size: 1.1rem;
            text-decoration: none;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .back-link a:hover {
            color: #ff33cc;
            text-decoration: underline;
            transform: scale(1.1); /* Efek perbesar saat hover */
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
            }

            .content {
                padding: 20px;
            }

            button {
                padding: 15px;
            }
        }
    </style>

    <!-- Include SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">

</head>
<body>

    <header>
        <h1>Edit Halaman About</h1>
    </header>

    <div class="content">
        <!-- Form untuk mengedit halaman About -->
        <form action="{{ route('admin.about.update', $about->id) }}" method="POST" id="editForm">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $about->title) }}" required>
            </div>

            <div>
                <label for="content">Isi Konten</label>
                <textarea name="content" id="content" required>{{ old('content', $about->content) }}</textarea>
            </div>

            <button type="submit">Update</button>
        </form>

        <div class="back-link">
            <a href="{{ route('admin.about.index') }}">Kembali ke Halaman About</a>
        </div>
    </div>

    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.js"></script>

    <script>
        // Trigger SweetAlert after the form is submitted
        document.getElementById("editForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            Swal.fire({
                title: 'Sukses!',
                text: 'Data berhasil diperbarui!',
                icon: 'success',
                confirmButtonText: 'Oke'
            }).then((result) => {
                if (result.isConfirmed) {
                    // After the alert, submit the form
                    event.target.submit();
                }
            });
        });
    </script>

</body>
</html>
