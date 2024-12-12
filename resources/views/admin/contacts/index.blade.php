<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
    /* Global Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #9c27b0; /* Soft purple light background */
    color: #3e2a47; /* Darker purple text */
    display: flex;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    margin: 0;
    transition: background-color 0.5s ease, color 0.5s ease;
}

.container {
    background-color: #f9f5f9; /* Light purple container background */
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05); /* Soft shadow */
    padding: 30px;
    width: 100%;
    max-width: 1200px;
    position: relative;
    z-index: 1;
    border: 1px solid #ddd; /* Soft border */
}

/* Hover effect on container */
.container:hover {
    transform: translateY(-5px);
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

h1 {
    text-align: center;
    color: #6a4c9c; /* Soft purple */
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 30px;
}

.btn {
    font-size: 16px;
    padding: 12px 24px;
    border-radius: 50px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease-in-out;
    text-transform: uppercase;
    font-weight: bold;
    box-shadow: none;
}

.btn-primary {
    background-color: #9b7edc; /* Soft purple */
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #7b1fa2; /* Slightly darker purple */
    transform: translateY(-2px);
}

.card {
    background-color: #9b7edc; /* Soft purple card */
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.card-title {
    color: #fff;
    font-size: 1.5rem;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.card-title i {
    margin-right: 10px; /* Spacing between icon and name */
}

.card-subtitle {
    color: #ecf0f1;
    margin-top: 5px;
}

.card-body p {
    color: #ecf0f1;
    font-size: 1rem;
}

.card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
}

.btn-action {
    padding: 10px 15px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 500;
}

.btn-warning {
    background-color: #f0c6e4; /* Light purple */
    color: #6a4c9c; /* Dark purple */
    border: none;
}

.btn-warning:hover {
    background-color: #9b7edc; /* Slightly darker purple */
}

.btn-danger {
    background-color: #ef5350; /* Soft red */
    color: #fff;
    border: none;
}

.btn-danger:hover {
    background-color: #e53935; /* Slightly darker red */
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }

    h1 {
        font-size: 2rem;
    }

    .card {
        margin: 15px 0;
    }
}

@media (max-width: 576px) {
    .container {
        padding: 15px;
    }

    .btn-primary, .btn-warning, .btn-danger {
        font-size: 12px;
        padding: 8px 12px;
    }

    h1 {
        font-size: 1.5rem;
    }

    .card {
        margin: 10px 0;
    }
}
</style>
</head>
<body>
<div class="container">
    <h1>Contact List</h1>

    <!-- Button for Adding Contact -->
    <div class="text-center mb-4">
        <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary">
            <i class="fas fa-user-plus"></i> Add New Contact
        </a>
    </div>

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- DataTable for Contacts -->
    <table id="contactsTable" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->notelp }}</td>
                    <td>{{ $contact->description }}</td>
                    <td>
                        <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn btn-warning btn-action">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>
<!-- jQuery and DataTable JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    // Initialize DataTable
    $(document).ready(function() {
        $('#contactsTable').DataTable();
    });

    // Check if session contains success message for Edit or Delete
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            showConfirmButton: true,
        });
    @endif

    // Delete confirmation with SweetAlert
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form submission

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    form.submit();
                }
            });
        });
    });
</script>

</body>
</html>
