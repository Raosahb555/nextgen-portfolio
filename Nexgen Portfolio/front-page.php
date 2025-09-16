<?php get_header(); ?>

<main class="landing">

<!-- Hero -->
<section class="hero animate" 
  style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/header.png') no-repeat center center/cover; padding:60px 0; text-align:center;">
  <div class="container hero-content">
    <h1>Hi, I’m Hasnain 👋</h1>
    <p>WordPress & WooCommerce Expert | Ethical Hacker | Cybersecurity Enthusiast</p>
    <a href="#contact" class="btn">Hire Me</a>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="about">
  <div class="container about-wrapper">
    <div class="about-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Hasnain Ishfaq">
    </div>
    <div class="about-text">
      <h2>About Me</h2>
      <p>Hello! I’m <strong>Hasnain Ishfaq</strong>, a passionate Web Developer and Ethical Hacker from Pakistan.  
      I specialize in <b>WordPress, WooCommerce, security,</b> and advanced web solutions.  
      My goal is to create professional websites that are not just functional, but also fast, secure, and visually appealing.</p>
    </div>
  </div>
</section>

<!-- Services -->
<section class="services animate">
  <div class="container">
    <h2>My Skills</h2>
    <div class="grid-3">
      <div class="card">⚡ WordPress Development</div>
      <div class="card">🛒 WooCommerce Stores</div>
      <div class="card">🔒 Security & Ethical Hacking</div>
      <div class="card">🚀 SEO & Speed Optimization</div>
      <div class="card">🎨 Custom Theme Design</div>
      <div class="card">⚙️ Plugin Customization</div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section class="projects animate">
  <div class="container">
    <h2>My Projects</h2>
    <div class="grid-3">
      <div class="card">
        <h3>Perfume Store</h3>
        <p>A premium WooCommerce store for a perfume brand with elegant design & fast checkout.</p>
      </div>
      <div class="card">
        <h3>LMS Website</h3>
        <p>Learning Management System using WordPress & LearnPress for online education.</p>
      </div>
      <div class="card">
        <h3>Merch Store</h3>
        <p>A stylish T-shirt & merchandise shop built with WooCommerce + Elementor Pro.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials animate">
  <div class="container">
    <h2>Client Feedback</h2>
    <blockquote>
      “Hasnain built our WooCommerce store, optimized speed, and secured it. Fantastic work!”
    </blockquote>
    <blockquote>
      “Professional, fast, and very knowledgeable about WordPress development. Highly recommend!”
    </blockquote>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="contact animate">
  <div class="container">
    <h2>Contact Me</h2>

    <!-- Contact Info Block -->
    <div class="contact-info" style="margin-bottom:20px;">
      <p><strong>Email:</strong> <a href="mailto:hasnain@example.com">hasnain@example.com</a></p>
      <p><strong>GitHub:</strong> <a href="https://github.com/hasnain" target="_blank">github.com/hasnain</a></p>
      <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/hasnain" target="_blank">linkedin.com/in/hasnain</a></p>
    </div>

    <!-- 🌐 Social Media Icons -->
    <div class="social-icons" style="margin:20px 0; text-align:center;">
      <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
      <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="https://linkedin.com/in/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
      <a href="https://github.com/" target="_blank"><i class="fab fa-github fa-2x"></i></a>
    </div>

    <!-- Contact Form -->
    <form>
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea placeholder="Your Project Details"></textarea>
      <button type="submit" class="btn">Send Message</button>
    </form>
  </div>
</section>


</main>

<?php get_footer(); ?>
