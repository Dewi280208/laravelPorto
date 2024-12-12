<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@500&display=swap" rel="stylesheet">
<style>
    /* Global Styles */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    color: #DDD;
    line-height: 1.6;
    overflow-x: hidden;
    padding-top: 60px;

    /* Background dengan animasi gradient */
    background: linear-gradient(45deg, #6a4c9c, #9b59b6); /* Soft purple gradient */
    background-size: 400% 400%; /* Menambah area untuk animasi */
    animation: gradientBackground 10s ease infinite; /* Animasi berjalan selama 10 detik dan loop terus */
}

@keyframes gradientBackground {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

h1, h2, h3 {
    font-family: 'Orbitron', sans-serif;
    font-weight: 600;
    color: #D1A3E0; /* Soft purple color */
    text-shadow: 0 0 10px rgba(209, 163, 224, 0.7), 0 0 30px rgba(209, 163, 224, 0.3);
    text-align: center;
    font-size: 50px;
}

p {
    font-weight: 300;
    color: #DDD;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
}

a {
    text-decoration: none;
    color: inherit;
}

/* Header */
header {
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent header */
    color: #D1A3E0; /* Soft purple */
    padding: 120px 20px;
    text-align: center;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
    position: relative;
    z-index: 2;
}

header h1 {
    margin: 0;
    font-size: 4em;
    letter-spacing: 5px;
    text-transform: uppercase;
    font-weight: 700;
}

header p {
    font-size: 1.5em;
    color: #DDD;
    margin-top: 10px;
}

/* Navbar Styles */
nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
    z-index: 100;
    padding: 20px 40px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 25px;
}

nav ul li a {
    font-size: 1.2em;
    font-weight: 600;
    color: #D1A3E0; /* Soft purple color */
    text-transform: uppercase;
    letter-spacing: 2px;
    text-decoration: none;
    transition: color 0.3s ease, transform 0.3s ease;
}

nav ul li a:hover {
    color: #A85BB5; /* Slightly darker purple for hover effect */
    transform: translateY(-2px); /* Subtle lift effect */
}

/* Active Link */
nav ul li a.active {
    color: #A85BB5;
    font-weight: bold;
}

/* About Section */
section.about {
    padding: 80px 20px;
    background-color: #3a2c6b; /* Darker purple */
    text-align: center;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    position: relative;
}

section.about h2 {
    font-size: 3em;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #D1A3E0; /* Soft purple */
}

section.about p {
    font-size: 1.2em;
    color: #DDD;
    line-height: 1.7;
}

.intro-content {
    display: flex; /* Menggunakan Flexbox untuk menyusun gambar dan teks secara horizontal */
    align-items: flex-start; /* Menyusun teks agar berada di atas (vertikal) */
    justify-content: space-between; /* Memberikan ruang antar gambar dan teks */
    padding: 90px 90px;
}

.image-container {
    flex: 1; /* Gambar mengambil ruang 1 bagian dari keseluruhan ruang */
}

.intro-image {
    max-width: 80%; /* Gambar responsif dan menyesuaikan lebar kontainer */
    height: auto; /* Menjaga rasio aspek gambar */
    border-radius: 20px; /* Membuat gambar dengan sudut yang melengkung */
}

.text-container {
    flex: 1; /* Teks mengambil ruang 1 bagian dari keseluruhan ruang */
    padding-left: 10px; /* Memberikan jarak antara gambar dan teks */
    text-align: left; /* Menyelaraskan teks ke kiri */
    display: flex;
    flex-direction: column; /* Menyusun teks secara vertikal */
    justify-content: flex-start; /* Menyusun konten di bagian atas */
}

h2 {
    font-size: 2.5em;
    margin: 0;
    color: #D1A3E0; /* Soft purple */
    font-weight: bold;
    text-shadow: 0 0 10px rgba(209, 163, 224, 0.7), 0 0 30px rgba(209, 163, 224, 0.3);
    margin-bottom: 10px; /* Menambahkan jarak antara judul dan deskripsi */
}

p {
    font-size: 1.2em;
    margin-top: 10px;
    color: #DDD;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
}


/* Skills Section */
section.skills {
    background-color: #3a2c6b; /* Darker purple */
    padding: 80px 20px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    position: relative;
}

section.skills h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.skills-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 40px;
}

.skill {
    background-color: #5e3a9f; /* Soft purple */
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
}

.skill:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(209, 163, 224, 0.5);
    filter: brightness(1.1);
}

.skill-name {
    font-size: 1.5em;
    color: #D1A3E0; /* Soft purple */
    margin-bottom: 15px;
    text-transform: uppercase;
}

.skill-description {
    font-size: 1.1em;
    color: #DDD;
    line-height: 1.5;
}

/* Card Section */
.card-container {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.card {
    background-color: #5e3a9f; /* Soft purple */
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
    width: 280px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    overflow: hidden;
    margin-bottom: 40px;
}

.card img {
    width: 100%;
    height: auto; /* Makes the height of the image adjust proportionally */
    max-height: 200px; /* Ensures images don't become too large */
    object-fit: contain; /* Makes sure the aspect ratio is maintained */
}

.card h3 {
    font-size: 1.5em;
    color: #D1A3E0; /* Soft purple */
    margin: 15px 0;
    text-shadow: 0 0 5px rgba(209, 163, 224, 0.7);
}

.card p {
    font-size: 1em;
    color: #DDD;
    padding: 0 20px;
    margin-bottom: 20px;
}

.card a {
    display: inline-block;
    padding: 12px 20px;
    background-color: #D1A3E0; /* Soft purple */
    color: #1A1A1A;
    border-radius: 6px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.card a:hover {
    background-color: #A85BB5; /* Darker purple */
    transform: scale(1.1);
}

/* Certificate Section */
.certificate-card-container {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.certificate-card {
    background-color: #5e3a9f; /* Soft purple */
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
    width: 280px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    overflow: hidden;
    margin-bottom: 40px;
}

.certificate-card img {
    width: 100%;
    height: auto;
    max-height: 200px;
    object-fit: contain;
}

.certificate-card h3 {
    font-size: 1.5em;
    color: #D1A3E0; /* Soft purple */
    margin: 15px 0;
    text-shadow: 0 0 5px rgba(209, 163, 224, 0.7);
}

.certificate-card p {
    font-size: 1em;
    color: #DDD;
    padding: 0 20px;
    margin-bottom: 20px;
}

/* Contact Section */
section.contact {
    padding: 80px 20px;
    background-color: #3a2c6b; /* Darker purple */
    text-align: center;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    position: relative;
}

section.contact h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #D1A3E0; /* Soft purple */
}

.contact-card {
    background-color: #5e3a9f; /* Soft purple */
    border-radius: 12px;
    padding: 30px;
    margin-top: 30px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
}

.contact-card h3 {
    font-size: 1.5em;
    color: #D1A3E0; /* Soft purple */
    margin-bottom: 10px;
}

.contact-card p {
    font-size: 1.2em;
    color: #DDD;
    margin-bottom: 10px;
}

/* Scroll to Top Button */
.scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #D1A3E0; /* Soft purple */
    color: #1A1A1A;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 30px;
    cursor: pointer;
    display: none;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.scroll-to-top:hover {
    background-color: #A85BB5; /* Darker purple */
    transform: scale(1.1);
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .card-container,
    .certificate-card-container {
        flex-direction: column;
        align-items: center;
    }

    .skills-list {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
    <header>
        <h1>MY PORTFOLIO</h1>
        <p>Web Developer | Programmer</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#certificates">Certificates</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- New Section: Image on the left and text on the right -->
    <section id="intro" class="intro">
    <div class="intro-content">
        <div class="image-container">
        <img src="{{ asset('assets/img/dewi.jpeg') }}" class="intro-image">
        </div>
        <div class="text-container">
            <h2> Hai i'm Dewi Lestari</h2>
            <p>Halo, saya Dewi Lestari, seorang siswa kelas 11 jurusan PPLG di SMKN 1 Ciomas. Saya tertarik dalam pengembangan teknologi, terutama di bidang desain web dan pemrograman. Melalui pendidikan di jurusan PPLG, saya terus mengembangkan keterampilan saya dalam teknologi untuk menciptakan solusi yang bermanfaat di dunia pendidikan. Terima kasih telah mengunjungi portofolio saya!</p>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="about" class="about">
        @foreach($about as $ab)
        <h2>{{$ab->title}}</h2>
        <p>{{$ab->content}}</p>
        @endforeach
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <h2>My Skills</h2>
        <div class="skills-list">
            @foreach($skill as $sk)
            <div class="skill">
                <div class="skill-name">{{$sk->name}}</div>
                <div class="skill-description">{{$sk->description}}</div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <h2>My Projects</h2>
        <div class="card-container">
            @foreach($project as $pr)
            <div class="card">
                <img src="{{asset('storage/'.$pr->image_path)}}" alt="Project Image">
                <h3>{{$pr->title}}</h3>
                <p>{{$pr->description}}</p>
                <p>{{$pr->tools}}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates">
        <h2>My Certificates</h2>
        <div class="certificate-card-container">
            @foreach($certificate as $cert)
            <div class="certificate-card">
                <img src="{{asset('storage/'.$cert->file)}}" alt="Certificate">
                <h3>{{$cert->name}}</h3>
                <p>{{$cert->issued_by}}</p>
                <p>{{$cert->issued_at}}</p>
                <p>{{$cert->description}}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Me</h2>
        @foreach($contact as $co)
        <div class="contact-card">
            <h3>Chat Me</h3>
            <p><strong>Name:</strong> {{$co->name}}</p>
            <p><strong>Email:</strong> {{$co->email}}</p>
            <p><strong>Phone:</strong> {{$co->notelp}}</p>
            <p><strong>Message:</strong> {{$co->description}}</p>
        </div>
        @endforeach
    </section>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">↑</button>

</body>
</html>
