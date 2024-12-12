<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>

    <!-- Link to Google Fonts and Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 Script -->

    <!-- SimpleLightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simplelightbox@2.4.1/dist/simple-lightbox.min.css" rel="stylesheet">

    <!-- SimpleLightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/simplelightbox@2.4.1/dist/simple-lightbox.min.js"></script>

    <!-- DataTables CSS and JS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #cfa3de, #f1e1f3); /* Soft Purple Gradient Background */
    color: #333;
    padding: 40px 0;
}

/* Container styling */
.container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 50px;
    background-color: #f4f6f9; /* Light gray background for container */
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05); /* Subtle shadow */
    overflow: hidden;
    position: relative;
    z-index: 1;
    border: 1px solid #ddd; /* Soft border */
}

/* Hover effect on container */
.container:hover {
    transform: translateY(-5px); /* Slight lift effect */
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.1); /* Deeper shadow */
    transition: all 0.3s ease;
}

/* Soft internal glow effect */
.container::before {
    content: '';
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    background: rgba(184, 158, 242, 0.3); /* Soft purple glow */
    border-radius: 20px;
    z-index: -1;
}

/* Title styling */
h1 {
    text-align: center;
    color: #9c27b0; /* Soft Purple */
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 30px;
}

/* Success message */
.alert {
    background-color: #9c27b0; /* Soft purple */
    color: #fff;
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: 1px solid #8e44ad;
    text-align: center;
}

/* Add Project Button */
.add-project-btn {
    display: block;
    width: 240px;
    margin: 20px auto;
    padding: 14px 22px;
    background-color: #9c27b0; /* Soft Purple */
    color: white;
    font-weight: 600;
    text-align: center;
    border-radius: 8px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.add-project-btn:hover {
    background-color: #7b1fa2; /* Slightly darker purple */
    transform: translateY(-3px);
}

/* Card container */
.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

/* Card Styling */
.card {
    background-color: #f4f6f9; /* Light background for card */
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Soft, elegant shadow */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); /* Enhanced hover shadow */
}

/* Card Image Styling */
.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 3px solid #9c27b0;
}

/* Card body */
.card-body {
    padding: 20px;
    color: #333;
}

/* Title inside Card */
.card h3 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    font-weight: 600;
    color: #9c27b0; /* Soft Purple for Title */
}

/* Description inside Card */
.card p {
    font-size: 1rem;
    color: #666; /* Darker grey for text */
    margin-bottom: 15px;
}

/* Tools inside Card */
.card .tools {
    font-size: 0.9rem;
    color: #9c27b0; /* Soft purple accent for tools */
    font-weight: bold;
    margin-bottom: 15px;
}

/* Actions Buttons */
.card .actions {
    display: flex;
    justify-content: space-evenly;
    margin-top: 20px;
}

/* Button styling */
.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 5px;
    font-size: 1rem;
    font-weight: 600;
    color: white;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
    text-transform: capitalize;
}

.btn-edit {
    background-color: #9c27b0; /* Soft Purple */
}

.btn-edit:hover {
    background-color: #7b1fa2; /* Slightly darker purple */
}

.btn-delete {
    background-color: #ef5350; /* Soft red */
}

.btn-delete:hover {
    background-color: #e53935; /* Slightly darker red */
}

/* Responsive design */
@media (max-width: 768px) {
    .card-container {
        grid-template-columns: 1fr;
    }

    h1 {
        font-size: 28px;
    }

    th, td {
        font-size: 12px;
        padding: 10px;
    }

    .btn-primary, .btn-warning, .btn-danger {
        font-size: 12px;
        padding: 8px 12px;
    }

    .container {
        padding: 20px;
        margin: 20px;
    }
}

/* Smooth transition for hover */
a, button {
    transition: transform 0.2s ease;
}

a:hover, button:hover {
    transform: scale(1.05);
}

/* Style untuk thumbnail gambar yang bisa diklik */
.project-thumbnail {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 3px solid #9c27b0;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.project-thumbnail:hover {
    transform: scale(1.05);
}
</style>
</head>
<body>

    <div class="container">
        <h1>Daftar Proyek</h1>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Add Project Button -->
        <a href="{{ route('admin.project.create') }}" class="add-project-btn">
            <i class="fas fa-plus-circle"></i> Tambah Proyek Baru
        </a>

        <!-- DataTable for Project List -->
        <table id="projectsTable" class="display">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Tools</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>
                            <a href="{{ asset('storage/' . $project->image_path) }}" class="project-image" data-lightbox="project-gallery" data-title="{{ $project->title }}">
                                <img src="{{ asset('storage/' . $project->image_path) }}" alt="Image" class="project-thumbnail">
                            </a>
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>{{ Str::limit($project->description, 100) }}</td>
                        <td>{{ $project->tools ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $project->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $project->id }})" class="btn btn-delete">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Konfirmasi Hapus Proyek
        function confirmDelete(projectId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form to delete the project
                    document.getElementById('delete-form-' + projectId).submit();
                }
            });
        }

        // Menampilkan SweetAlert setelah sukses edit proyek
        @if(session('success'))
            Swal.fire({
                title: 'Sukses!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        // Inisialisasi SimpleLightbox untuk galeri gambar proyek
        var lightbox = new SimpleLightbox('.project-image', {
            captionSelector: 'data-title',
            captionsData: 'title',
            captionDelay: 300
        });

        // Initialize DataTable
        $(document).ready(function() {
            $('#projectsTable').DataTable();
        });
    </script>

</body>
</html>
