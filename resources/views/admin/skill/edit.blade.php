<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill</title>
    <style>
body {
    background-color: #121212; /* Dark background */
    color: #ffffff; /* White text */
    font-family: 'Arial', sans-serif; /* Clean font */
    margin: 0; /* Remove default margin */
    padding: 20px; /* General padding */
}

.container {
    max-width: 600px; /* Max container width */
    background-color: #1f1f1f; /* Dark background for container */
    border-radius: 10px; /* Rounded corners */
    padding: 40px; /* Padding inside container */
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.5); /* Shadow for depth */
    margin: auto; /* Center the container */
    transition: transform 0.3s; /* Hover transition */
}

.container:hover {
    transform: scale(1.02); /* Zoom effect on hover */
}

h1 {
    text-align: center; /* Center align title */
    color: #9b59b6; /* Soft purple for title */
    margin-bottom: 30px; /* Bottom margin for title */
    font-size: 2.5em; /* Larger font size for title */
    font-weight: 600; /* Bold title font */
}

.form-label {
    font-weight: bold; /* Bold labels */
    margin-bottom: 5px; /* Bottom margin for labels */
    color: #9b59b6; /* Soft purple for labels */
}

.form-control {
    background-color: #333; /* Dark background for input fields */
    color: #ffffff; /* White text */
    border: 1px solid #9b59b6; /* Soft purple border */
    border-radius: 5px; /* Rounded corners for input fields */
    padding: 12px; /* Padding inside input fields */
    width: 100%; /* Full width input fields */
    margin-bottom: 20px; /* Bottom margin */
    transition: border-color 0.3s; /* Border color transition on focus */
    font-size: 1em; /* Font size for input */
    box-sizing: border-box; /* Include padding in width */
    resize: none; /* Prevent textarea resize */
}

textarea {
    width: 100%; /* Full width textarea */
    resize: none; /* Prevent resizing */
}

.form-control::placeholder {
    color: #bbb; /* Placeholder color */
}

.form-control:focus {
    border-color: #8e44ad; /* Darker purple border on focus */
    outline: none; /* Remove default outline */
    background-color: #444; /* Dark background on focus */
}

.btn-success {
    background-color: #9b59b6; /* Soft purple button */
    color: #fff; /* White text for button */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners for button */
    padding: 15px; /* Button padding */
    width: 100%; /* Full width button */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s, transform 0.2s; /* Hover transition */
    font-weight: bold; /* Bold button text */
    font-size: 1.2em; /* Button font size */
    margin-top: 10px; /* Margin top for button */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Button shadow */
}

.btn-success:hover {
    background-color: #8e44ad; /* Darker purple button on hover */
    transform: translateY(-2px); /* Button lift effect on hover */
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4); /* Button shadow on hover */
}

.form-group {
    margin-bottom: 20px; /* Margin between input groups */
}

@media (max-width: 600px) {
    .container {
        padding: 20px; /* Smaller padding on small screens */
    }

    h1 {
        font-size: 1.8em; /* Smaller title font on small screens */
    }

    .btn-success {
        padding: 12px; /* Smaller button padding on small screens */
        font-size: 1em; /* Smaller button font size on small screens */
    }
}
</style>
</head>

<body>
    <div class="container">
        <h1>Edit Skill</h1>

        <form action="{{ route('skill.update', $skill) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Skill Name</label>
                <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required placeholder="Enter skill name">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Enter skill description" rows="4">{{ $skill->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Skill</button>
        </form>
    </div>
</body>

</html>
