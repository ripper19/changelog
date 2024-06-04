<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="index.js"></script>

</head>
<nav>
    <h1>Joseph Onsase</h1>
    <ul>
    <li><a href="#about" class="nav-link">About</a></li>
    <li><a href="#skills" class="nav-link">Skills</a></li>
    <li><a href="#projects" class="nav-link">Projects</a></li>
    <li><a href="#contact" class="nav-link">Contact</a></li>
</ul>
<button class="burger-menu" id="burger-menu">
    <i class="fa fa-bars"></i>
</button>
</nav>
<body>
<section class="myimage" id="about">
    <img src="assets/port3.jpg" class="mine-img">

    <div class="abt animate">
        <h2 class="abt-title">About me</h2>
        <p class="abt-text">Software engineer trained as a fullstack developer 
            and I enjoy coding in low level languages like C. I am open to learning new things </p>
    </div>
</section>

<section class="more-about">
    <h2>More About Me</h2>
    <p>I am an enthusiastic tech follower with in-depth coding experience and also networking skills. 
        <p>I have built personal projects that have elevated my understanding of coding best practices and 
        how to build software that meet requirements.</p> <p>I am also aware of development methodologies and 
        due to my degree course study, I have some knowledge on project management. As with all tech, I also
        know git. Programming Languages I know include: HTML5, CSS3, JavaScript, Python, PHP, Java and C. </p>
    </p>
</section>
<section class="skills" id="skills">
    <h2 class="skill-header">Skills</h2>
    <div class="skills-wrapper">
        <div class="first-set animate">
            <img src="https://img.icons8.com/?size=100&id=20909&format=png&color=000000" alt="HTML icon" loading="lazy" class="icon icon-card">
            <img src="https://img.icons8.com/?size=100&id=21278&format=png&color=000000" alt="CSS icon" loading="lazy" class="icon icon-card">
            <img src="https://img.icons8.com/?size=100&id=108784&format=png&color=000000" alt="Js icon" loading="lazy" class="icon icon-card">
            <img src="https://img.icons8.com/?size=100&id=13441&format=png&color=000000" alt="python icon" loading="lazy" class="icon icon-card">
            <img src="https://img.icons8.com/?size=100&id=39856&format=png&color=000000" alt="php icon" loading="lazy" class="icon icon-card">
            <img src="https://img.icons8.com/?size=100&id=40670&format=png&color=000000" alt="C icon" loading="lazy" class="icon icon-card">
            <img src="https://img.icons8.com/?size=100&id=20906&format=png&color=000000" alt="git icon" loading="lazy" class="icon icon-card">
        </div>
    </div>

</section>

<section class="projects" id="projects">
    <h2 class="projects-title">MY PROJECTS</h2>
    <div class="projects-container">
        <div class="project-container project-card">
            <img src="assets/pic.PNG" class="project-pic">
            <h3 class="project-title">Pharmacy System</h3>
            <p class="project-details">This is a simple web application built using HTML, CSS and JavaScript for the frontend and PHP and MySql for backend and database</p>
            <a href="#" class="project-link">Check it out</a>
        </div>

        <div class="project-container project-card">
            <img src="assets/admin.PNG" class="project-pic">
            <h2 class="project-title">Pharmacy system Admin</h2>
            <p class="project-details">This is as an admin panel for the pharmacy system that enables an administrator to configure and interact with information provided by users</p>
            <a href="" class="project-link">Check it out</a>
        </div>

        <div class="project-container project-card">
            <img src="https://img.icons8.com/?size=100&id=13441&format=png&color=000000" class="project-pic">
            <h2>File Organiser in Python</h2>
            <p class="project-details">This is a simple script file organiser for Python on local machine.
                It organizes files according to file extensions but can be modified. Please visit my github 
                to view source code
            </p>
            <a href="https://github.com/ripper19/project.git">To GITHUB</a>
        </div>

        <div class="project-container project-card">
            <img src="assets/bur.PNG" class="project-pic">
            <h2 class="project-title">Motel Booking System</h2>
            <p class="project-details">A simple website that allows customers to book motel rooms and provides packages. Was my first project
            and it helped understand CRUD operations with a simple GUI</p>
            <a href="" class="project-link">Check it out</a>
        </div>

        <div class="project-container project-card">
            <img src="assets/do.PNG" class="project-pic">
            <h2 class="project-title">TO-DO list in C</h2>
            <p class="project-details">This is a simple TO-DO list written in C. This project helped me better understand
                memory management.As this project is an executable file, please contact me for more.
            </p>
            <a href="" class="project-link">Contact me</a>
        </div>
        </div>
        </section>

        <section class="contacts" id="contacts">
            <h2>Get in Touch with me</h2>
            <div class="contact-form-container">
                <div class="contact-form">
                    <form action="">
                        <div class="form-control">
                            <label for="name">Name :</label>
                            <input type="text" 
                            id="name" 
                            name="sender-name" 
                            placeholder="Enter your name"
                            class="input-field"
                            required>
                            <label for="email">Email : </label>
                            <input type="email"
                            id="email"
                            name="sender-email"
                            placeholder="Enter your email address"
                            class="input-field"
                            required>
                            <label for="message">Message : </label>
                            <textarea id="message" cols="60" rows="10"
                            placeholder="Enter your message" name="message" class="input-field" required></textarea>
                        </div>
                        <input type="submit" value="Submit" class="sbtn">
                    </form>
                </div>
            </div>
        </section>

        <div class="socials">
            <a href="https://wa.me/254724062887"><img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt="whatsapp" loading="lazy" class="soicon"></a>

            <a href="mailto:josephonsase37@gmail.com"><img src="https://img.icons8.com/?size=100&id=P7UIlhbpWzZm&format=png&color=000000" alt="gmail" loading="lazy" class="soicon"></a>

            <a href="https://github.com/ripper19/project.git"><img src="https://img.icons8.com/?size=100&id=20906&format=png&color=000000" alt="github" loading="lazy" class="soicon"></a>
            
        </div>
</body>
<script>
const burger = document.querySelector("#burger-menu");
const ul = document.querySelector("nav ul");
const nav = document.querySelector("nav");

burger.addEventListener("click", ()=> {
    ul.classList.toggle("show");
});

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((link) =>
link.addEventListener("click", ()=> {
    ul.classList.remove("show");
})
);
</script>
<?php
phpinfo();
?>
</html>