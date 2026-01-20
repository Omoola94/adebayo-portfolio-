<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adebayo Akinola Emmanuel - Full-Stack Developer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <h3>AAE</h3>
            <ul class="nav-menu">
                <li><a href="#hero">Home</a></li>
                <li><a href="#summary">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dark-mode-toggle">
                    <i class="fas fa-moon" id="toggle-icon"></i>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container hero-container">
            <div class="hero-text animate-on-scroll">
                <h1>Hello, I'm <span>Adebayo Akinola Emmanuel</span></h1>
                <p>Full-Stack Website Developer</p>
                <p>Ile-Ife, Osun State, Nigeria • 08052635998 | 07045688164</p>
                <p><a href="mailto:akinolaemmanueladebayo@gmail.com">akinolaemmanueladebayo@gmail.com</a></p>
                
                <!-- Social Icons in Hero -->
                <div class="social-icons">
                    <a href="https://github.com/Omoola94" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/akinola-adebayo-309933199?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://wa.me/2348052635998" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>

                <a href="#contact" class="btn">Get In Touch</a>
            </div>
            <div class="hero-image animate-on-scroll">
                <img src="img/img.jpg" alt="Adebayo Akinola Emmanuel">
            </div>
        </div>
    </section>
	
    <!-- Summary -->
    <section id="summary" class="section animate-on-scroll">
        <div class="container">
            <h2>Professional Summary</h2>
            <p>Creative and detail-oriented Full-Stack Website Developer with a strong passion for building responsive, user-friendly, and dynamic web applications. Skilled in both frontend and backend development with hands-on experience designing, coding, and maintaining websites using HTML, CSS, JavaScript, Bootstrap, PHP, SQL, and MySQLi. Dedicated to writing clean, maintainable code and continuously improving technical expertise.</p>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section animate-on-scroll">
        <div class="container">
            <h2>Core Technical Skills</h2>
            <div class="skills-grid">
                <div>
                    <h3>Frontend Development</h3>
                    <ul>
                        <li>HTML5, CSS3, JavaScript (ES6+), Bootstrap</li>
                        <li>Responsive Web Design, Cross-Browser Compatibility</li>
                    </ul>
                </div>
                <div>
                    <h3>Backend Development</h3>
                    <ul>
                        <li>PHP (Procedural & Basic Object-Oriented)</li>
                        <li>MySQL / MySQLi / SQL Database Management</li>
                        <li>CRUD Operations, Form Handling, and Data Validation</li>
                        <li>Authentication Systems and Basic Security Practices</li>
                    </ul>
                </div>
                <div>
                    <h3>Version Control & Tools</h3>
                    <ul>
                        <li>Git / GitHub</li>
                        <li>VS Code, XAMPP, phpMyAdmin</li>
                    </ul>
                </div>
                <div>
                    <h3>Other Skills</h3>
                    <ul>
                        <li>Problem Solving & Debugging</li>
                        <li>API Integration</li>
                        <li>Team Collaboration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section animate-on-scroll">
        <div class="container">
            <h2>Projects</h2>
            <?php
            $projects = [
                ['title' => 'Student Management System', 'tech' => 'HTML, CSS, Bootstrap, PHP, MySQLi', 'points' => ['Developed a web-based system for managing student records.', 'Implemented CRUD operations and login authentication.', 'Designed a responsive and clean dashboard using Bootstrap.']],
                ['title' => 'E-Commerce Website (Mini Project)', 'tech' => 'HTML, CSS, JavaScript, PHP, MySQLi', 'points' => ['Created product display pages with dynamic data from the database.', 'Designed an admin panel for product uploads and management.', 'Integrated cart system with session handling and database operations.']],
                ['title' => 'Personal Portfolio Website', 'tech' => 'HTML, CSS, JavaScript, Bootstrap', 'points' => ['Built a personal portfolio showcasing projects and contact form.', 'Optimized for mobile and desktop viewing.']]
            ];

            foreach ($projects as $project) {
                echo '<div class="project">';
                echo '<h3>' . htmlspecialchars($project['title']) . '</h3>';
                echo '<p><strong>Technologies:</strong> ' . htmlspecialchars($project['tech']) . '</p>';
                echo '<ul>';
                foreach ($project['points'] as $point) {
                    echo '<li>' . htmlspecialchars($point) . '</li>';
                }
                echo '</ul>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <!-- Education & Certifications -->
    <section id="education" class="section animate-on-scroll">
        <div class="container">
            <h2>Education</h2>
            <p><strong>B.Sc. Political Science</strong> – Adekunle Ajasin University Akungba-Akoko, Ondo State. (2018-2023)</p>

            <h2 style="margin-top: 40px;">Certifications</h2>
            <ul>
                <li>Full-Stack Web Development – Blisstech Multimedia Developers and Professional ICT Training School Nigeria</li>
                <li>Introduction to Web Development – W3Schools</li>
            </ul>

            <h2 style="margin-top: 40px;">Personal Attributes</h2>
            <ul>
                <li>Strong attention to detail</li>
                <li>Excellent communication and teamwork skills</li>
                <li>Passion for learning new technologies</li>
                <li>Self-motivated and goal-oriented</li>
            </ul>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section animate-on-scroll">
        <div class="container">
            <h2>Contact Me</h2>
            <form action="contact.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer with Social Icons -->
    <footer>
        <div class="container">
            <div class="social-icons footer-social">
                <a href="https://github.com/yourusername" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://wa.me/2348052635998" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
            <!--<p>References available on request</p> -->
            <p>&copy; <?php echo date('Y'); ?> Adebayo Akinola Emmanuel. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Dark Mode Toggle

        const toggleIcon = document.getElementById('toggle-icon');
        toggleIcon.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            toggleIcon.classList.toggle('fa-moon');
            toggleIcon.classList.toggle('fa-sun');
        });

        // Animations on Scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>