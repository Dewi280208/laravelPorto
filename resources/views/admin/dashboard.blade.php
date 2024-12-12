<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f6f0f8; /* Soft purple light background */
        color: #3e2a47; /* Darker purple text */
        display: flex;
        min-height: 100vh;
        transition: background-color 0.5s ease, color 0.5s ease;
    }

    /* Sidebar */
    .sidebar {
        width: 250px;
        background-color: #6a4c9c; /* Soft purple for sidebar */
        color: white;
        display: flex;
        flex-direction: column;
        padding: 20px;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        border-right: 2px solid #9b7edc; /* Light purple border */
        box-shadow: 3px 0 10px rgba(0, 0, 0, 0.5);
    }

    /* Sidebar Header */
    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 22px;
        color: #f0c6e4; /* Light purple header color */
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    /* Sidebar Links */
    .sidebar a {
        display: flex;
        align-items: center;
        color: #e0e1dd; /* Soft text color for links */
        padding: 12px;
        text-decoration: none;
        margin: 10px 0;
        transition: background 0.3s, color 0.3s;
        border-radius: 5px;
        font-size: 16px;
    }

    /* Icon in sidebar links */
    .sidebar a i {
        margin-right: 10px;
        font-size: 1.2rem;
        color: #f0c6e4; /* Light purple icon color */
    }

    /* Hover effect on sidebar links */
    .sidebar a:hover {
        background: #9b7edc; /* Lighter purple on hover */
        color: #f0c6e4; /* Light purple text */
        box-shadow: inset 5px 0 0 #f0c6e4; /* Soft purple shadow on hover */
    }

    /* Main Content */
    .main-content {
        margin-left: 250px;
        padding: 20px;
        width: calc(100% - 250px);
        display: flex;
        flex-direction: column;
        gap: 20px;
        background-color: #f6f0f8; /* Light purple main content background */
        color: #3e2a47; /* Dark purple text */
    }

    /* Light Mode */
    .light-mode {
        background-color: #f9f5f9; /* Light purple for light mode */
        color: #3e2a47;
    }
    .light-mode .sidebar {
        background-color: #9b7edc; /* Lighter purple for light mode sidebar */
        color: #3e2a47;
        border-right-color: #f0c6e4;
    }
    .light-mode .sidebar a {
        color: #3e2a47;
    }
    .light-mode .sidebar a:hover {
        background-color: #f0c6e4;
    }
    .light-mode .main-content {
        background-color: #f9f5f9;
    }

    .header {
        background-color: #6a4c9c; /* Soft purple header background */
        color: #f0c6e4; /* Light purple text */
        padding: 15px;
        text-align: center;
        font-size: 1.8rem;
        border: 2px solid #9b7edc;
        border-radius: 8px;
        margin-bottom: 20px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 1.2px;
    }

    .button {
        padding: 10px 15px;
        background-color: #f0c6e4; /* Light purple button background */
        color: #6a4c9c; /* Dark purple text */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s;
        display: inline-block;
        position: relative;
    }

    .button:hover {
        background-color: #9b7edc; /* Hover effect on button */
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 2px solid #9b7edc;
        padding: 12px 15px;
        text-align: left;
        color: #3e2a47; /* Dark purple text */
    }
    th {
        background-color: #9b7edc; /* Soft purple table header */
        color: #f0f6fa; /* Light text in table header */
        text-transform: uppercase;
    }
    tr {
        background-color: #fff;
        transition: background-color 0.3s;
    }
    tr:hover {
        background-color: #f0c6e4; /* Soft purple hover on rows */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .sidebar {
            width: 200px;
        }
        .main-content {
            margin-left: 200px;
            width: calc(100% - 200px);
        }
    }

    @media (max-width: 576px) {
        .sidebar {
            width: 100%;
            position: relative;
            height: auto;
        }
        .main-content {
            margin-left: 0;
            width: 100%;
        }
    }
</style>
</head>
<body>
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="{{ route('admin.about.index') }}"><i class="fas fa-info-circle"></i> About</a>
    <a href="{{ route('admin.project.index') }}"><i class="fas fa-project-diagram"></i> Project</a>
    <a href="{{ route('skill.index') }}"><i class="fas fa-pencil-alt"></i> Edit Skill</a>
    <a href="{{ route('admin.certificate.index') }}"><i class="fas fa-scroll"></i> Certificate</a>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary"><i class="fas fa-address-book"></i> Lihat Kontak
</a>
    <a href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
    
<div class="main-content">
    <div class="header">
        Welcome to Admin Dashboard
        <div class="toggle-btn" id="theme-toggle">
            <i class="fas fa-moon"></i>
        </div>
    </div>

<!-- SweetAlert2 CSS and JavaScript -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4/animate.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Theme Toggle and SweetAlert for Dark/Light Mode
    document.getElementById('theme-toggle').addEventListener('click', function () {
        document.body.classList.toggle('light-mode');
        let icon = this.querySelector('i');
        
        // Rotate and toggle icons
        icon.classList.toggle('fa-moon');
        icon.classList.toggle('fa-sun');
        icon.style.transition = 'transform 0.8s ease';
        icon.style.transform = document.body.classList.contains('light-mode') ? 'rotate(360deg)' : 'rotate(-360deg)';
        
        Swal.fire({
            title: document.body.classList.contains('light-mode') ? 'Light Mode Activated!' : 'Dark Mode Activated!',
            icon: 'info',
            iconColor: '#4cc9f0',
            confirmButtonText: 'OK',
            confirmButtonColor: '#4cc9f0',
            background: document.body.classList.contains('light-mode') ? '#e0e1dd' : '#1b263b',
            color: document.body.classList.contains('light-mode') ? '#1b263b' : '#e0e1dd',
            showClass: { popup: 'animate__animated animate__fadeInDown' },
            hideClass: { popup: 'animate__animated animate__fadeOutUp' },
            backdrop: 'rgba(0, 0, 0, 0.4)', // Blur effect for focus on popup
        });
    });

    // Show welcome popup on page load
    window.onload = showWelcomePopup;

    // Function to show row details when table row is clicked
    document.querySelectorAll('tbody tr').forEach(row => {
        row.addEventListener('click', () => showRowDetails(row));
    });

    // Show Welcome Popup
    function showWelcomePopup() {
        Swal.fire({
            title: 'Welcome Back, Sir!',
            text: 'You can manage your data from here!',
            icon: 'success',
            confirmButtonText: 'Let\'s Go!',
            background: '#1b263b',
            color: '#e0e1dd',
            iconColor: '#4cc9f0',
            confirmButtonColor: '#4cc9f0',
            backdrop: 'rgba(0, 0, 0, 0.5)',
            showClass: { popup: 'animate__animated animate__fadeInDown' },
            hideClass: { popup: 'animate__animated animate__fadeOutUp' },
            customClass: { popup: 'custom-popup' }
        });
    }

    // Function to show row details in a SweetAlert popup
    function showRowDetails(row) {
        const rowData = row.querySelectorAll('td');
        
        Swal.fire({
            title: 'Detail: ' + rowData[1].innerText,
            text: rowData[2].innerText,
            icon: 'info',
            background: '#1b263b',
            color: '#e0e1dd',
            confirmButtonColor: '#4cc9f0',
            showClass: { popup: 'animate__animated animate__bounceIn' },
            hideClass: { popup: 'animate__animated animate__bounceOut' },
            backdrop: 'rgba(0, 0, 0, 0.4)' // Slightly darker backdrop for detail view
        });
    }

    // Add Custom CSS for popup styling
    const style = document.createElement('style');
    style.innerHTML = `
        .custom-popup {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            padding: 1em 1.5em;
            font-family: Arial, sans-serif;
            font-size: 1rem;
        }
    `;
    document.head.appendChild(style);
</script>

</body>
</html>
