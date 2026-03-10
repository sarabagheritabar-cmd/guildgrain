<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guild & Grain - Artisan Workshops & Creative Consulting</title>
  <meta name="description" content="Discover Guild & Grain, your hub for artisan craft workshops, collaborative art projects, sustainable material sourcing, and creative business consulting in New York.">
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --background-primary: #1a1a2e;
      --background-secondary: #16213e;
      --text-primary: #f0f5fe;
      --text-secondary: #bbd3fa;
      --accent-primary: #5290f3;
      --accent-glow: hsl(217 85% 65% / 0.2);
      --surface-card: #1f2a4a;
      --section-spacing: clamp(3rem, 6vw, 5rem);
      --border-radius: 24px;
      --card-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    body {
      font-family: 'Outfit', sans-serif;
      background-color: var(--background-primary);
      color: var(--text-primary);
      line-height: 1.6;
      scroll-behavior: smooth;
    }

    .container {
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 1rem;
    }

    p {
      color: var(--text-secondary);
      margin-bottom: 1rem;
    }

    .btn-outline {
      display: inline-block;
      padding: 0.75rem 1.75rem;
      border: 2px solid var(--accent-primary);
      color: var(--accent-primary);
      text-decoration: none;
      border-radius: var(--border-radius);
      transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
      font-weight: 700;
    }

    .btn-outline:hover {
      background-color: var(--accent-primary);
      color: var(--text-primary);
      transform: translateY(-2px);
    }

    .section-spacing {
      padding-top: var(--section-spacing);
      padding-bottom: var(--section-spacing);
    }

    .card {
      background-color: var(--surface-card);
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-12px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    .glow-effect {
      position: relative;
    }

    .glow-effect::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%; /* Adjust size as needed */
      height: 100%; /* Adjust size as needed */
      background: var(--accent-glow);
      border-radius: 50%;
      transform: translate(-50%, -50%) scale(0.9);
      filter: blur(20px); /* Adjust blur for glow intensity */
      opacity: 0.6;
      z-index: -1;
    }

    .testimonial-quote {
        position: relative;
        padding: 2rem;
        background-color: var(--background-secondary);
        border-radius: var(--border-radius);
        text-align: center;
        margin-bottom: 2rem;
    }

    .testimonial-quote::before,
    .testimonial-quote::after {
        font-family: 'Outfit', sans-serif;
        position: absolute;
        font-size: 8rem;
        color: var(--accent-primary);
        opacity: 0.1;
        line-height: 1;
        top: 0.5rem;
        z-index: 0;
        transform: translateY(-25%);
    }

    .testimonial-quote::before {
        content: open-quote;
        left: 1rem;
    }

    .testimonial-quote::after {
        content: close-quote;
        right: 1rem;
        top: auto;
        bottom: 0.5rem;
        transform: translateY(25%);
    }

    .testimonial-text {
        position: relative;
        z-index: 1;
        font-size: 1.25rem;
        font-style: italic;
        color: var(--text-primary);
    }

    .testimonial-author {
        position: relative;
        z-index: 1;
        margin-top: 1rem;
        font-weight: 700;
        color: var(--text-secondary);
    }

    .image-zoom-hover {
        overflow: hidden;
    }

    .image-zoom-hover img {
        transition: transform 0.5s ease-in-out;
    }

    .image-zoom-hover:hover img {
        transform: scale(1.05);
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const header = document.querySelector('header');
      let lastScrollY = window.scrollY;

      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          header.classList.add('bg-background-primary', 'shadow-md');
          header.classList.remove('bg-transparent');
        } else {
          header.classList.remove('bg-background-primary', 'shadow-md');
          header.classList.add('bg-transparent');
        }

        // Smooth fade-in for sections
        document.querySelectorAll('section').forEach(section => {
          const sectionTop = section.getBoundingClientRect().top;
          const viewportHeight = window.innerHeight;
          if (sectionTop < viewportHeight * 0.8) {
            section.style.opacity = 1;
            section.style.transform = 'translateY(0)';
          }
        });

        lastScrollY = window.scrollY;
      });

      // Initial check for section fade-in
      document.querySelectorAll('section').forEach(section => {
        section.style.opacity = 0;
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
      });
      // Trigger initial fade-in for visible sections
      window.dispatchEvent(new Event('scroll'));
    });
  </script>
</head>
<body class="antialiased">
  <header class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-4 bg-transparent">
    <nav class="container flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-text-primary">Guild & Grain</a>
      <div class="hidden md:flex space-x-8 items-center">
        <a href="#workshops" class="text-text-secondary hover:text-accent-primary transition-colors">Workshops</a>
        <a href="#projects" class="text-text-secondary hover:text-accent-primary transition-colors">Projects</a>
        <a href="#consulting" class="text-text-secondary hover:text-accent-primary transition-colors">Consulting</a>
        <a href="#contact" class="text-text-secondary hover:text-accent-primary transition-colors">Contact</a>
        <a href="#contact" class="btn-outline">Book Session</a>
      </div>
      <button class="md:hidden text-text-primary focus:outline-none">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </nav>
  </header>
<main>
    <section id="hero" class="relative overflow-hidden py-20 md:py-32 flex items-center min-h-screen" style="background: radial-gradient(circle at center, var(--surface-card) 0%, var(--background-primary) 70%);">
      <div class="container text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 animate-fade-in-up">Elevate Your Craft at Guild & Grain</h1>
        <p class="text-lg md:text-xl text-text-secondary max-w-3xl mx-auto mb-8 animate-fade-in-up delay-100">Immersive artisan workshops, sustainable material sourcing, and expert creative business consulting in the heart of New York.</p>
      </div>
      <div class="absolute bottom-0 left-0 w-full">
        <img src="images/hero-artisan-workshop-1280x640.jpeg" alt="Artisans collaborating on a modern craft project at Guild & Grain" width="1280" height="640" class="w-full object-cover">
      </div>
    </section>

    <section id="workshops" class="section-spacing bg-background-primary">
      <div class="container">
        <h2 class="text-3xl md:text-4xl text-center mb-12">Master Artisan Techniques</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="card md:col-span-2 image-zoom-hover">
            <img src="images/workshop-woodworking-768x512.jpeg" alt="Woodworking workshop overview" width="768" height="512" class="w-full h-auto object-cover rounded-t-lg">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Woodworking Fundamentals</h3>
              <p>Learn the intricacies of modern joinery and sustainable timber selection in our comprehensive intensive series, designed for both beginners and experienced craftspeople seeking to refine their skills.</p>
            </div>
          </div>
          <div class="card image-zoom-hover">
            <img src="images/workshop-metal-384x512.jpeg" alt="Blacksmith shaping metal" width="384" height="512" class="w-full h-auto object-cover rounded-t-lg">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Metal Forging</h3>
              <p>An introduction to contemporary blacksmithing and artistic metal manipulation, exploring traditional techniques alongside modern design approaches.</p>
            </div>
          </div>
          <div class="card image-zoom-hover">
            <img src="images/workshop-resin-384x512.jpeg" alt="Pouring colorful resin" width="384" height="512" class="w-full h-auto object-cover rounded-t-lg">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Resin & Pigments</h3>
              <p>Explore color theory and casting techniques for large-scale artistic installations, mastering the fluidity and versatility of resin as a creative medium.</p>
            </div>
          </div>
          <div class="card md:col-span-2 image-zoom-hover">
            <img src="images/workshop-ceramics-768x512.jpeg" alt="Ceramic pots on a studio shelf" width="768" height="512" class="w-full h-auto object-cover rounded-t-lg">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Ceramic Sculpting</h3>
              <p>From foundational wheel throwing to advanced glazing chemistry and hand-building, unlock the immense potential of clay and bring your sculptural visions to life.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="consulting" class="section-spacing bg-background-primary">
      <div class="container">
        <h2 class="text-3xl md:text-4xl text-center mb-12">Creative Consulting & Sourcing</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="text-center p-6 bg-surface-card rounded-[var(--border-radius)] card">
            <div class="mb-4 relative inline-block">
              <svg width="128" height="128" viewBox="0 0 128 128" class="text-[#5290f3] opacity-70 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" style="filter: blur(20px);">
                <circle cx="64" cy="64" r="60" fill="currentColor"/>
              </svg>
              <img src="images/icon-strategy-128x128.jpeg" alt="Strategy Icon" width="128" height="128" class="relative z-10 w-24 h-24 object-contain mx-auto">
            </div>
            <h3 class="text-xl font-bold mb-2">Creative Business Strategy</h3>
            <p>Tailored frameworks to help artists price their work effectively, build recurring revenue streams, and scale sustainable studios with a clear vision for growth and impact.</p>
          </div>
          <div class="text-center p-6 bg-surface-card rounded-[var(--border-radius)] card">
            <div class="mb-4 relative inline-block">
              <svg width="128" height="128" viewBox="0 0 128 128" class="text-[#8bb5f7] opacity-70 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" style="filter: blur(20px);">
                <circle cx="64" cy="64" r="60" fill="currentColor"/>
              </svg>
              <img src="images/icon-sourcing-128x128.jpeg" alt="Sourcing Icon" width="128" height="128" class="relative z-10 w-24 h-24 object-contain mx-auto">
            </div>
            <h3 class="text-xl font-bold mb-2">Ethical Material Sourcing</h3>
            <p>Leverage our extensive local and global networks to ethically procure sustainable, high-quality craft materials for your projects, ensuring integrity from concept to creation.</p>
          </div>
          <div class="text-center p-6 bg-surface-card rounded-[var(--border-radius)] card">
            <div class="mb-4 relative inline-block">
              <svg width="128" height="128" viewBox="0 0 128 128" class="text-[#bbd3fa] opacity-70 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" style="filter: blur(20px);">
                <circle cx="64" cy="64" r="60" fill="currentColor"/>
              </svg>
              <img src="images/icon-collaboration-128x128.jpeg" alt="Collaboration Icon" width="128" height="128" class="relative z-10 w-24 h-24 object-contain mx-auto">
            </div>
            <h3 class="text-xl font-bold mb-2">Collaborative Facilitation</h3>
            <p>We bridge the gap between individual artists and diverse communities to foster impactful, large-scale collaborative public art installations that inspire and unite.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="projects" class="section-spacing bg-background-primary">
      <div class="container">
        <h2 class="text-3xl md:text-4xl text-center mb-12">Signature Collaborative Projects</h2>
        <div class="bg-surface-card rounded-[var(--border-radius)] overflow-hidden card relative p-6 md:p-0">
          <div class="md:grid md:grid-cols-2 gap-8 items-center">
            <div class="md:order-2 image-zoom-hover">
              <img src="images/project-mural-1024x512.jpeg" alt="Large community multimedia mural project" width="1024" height="512" class="w-full h-auto object-cover md:rounded-r-[var(--border-radius)] rounded-t-[var(--border-radius)]">
            </div>
            <div class="md:order-1 p-6 md:p-8">
              <h3 class="text-3xl font-bold mb-4">The Clarkson Avenue Mural</h3>
              <p class="text-text-secondary">A breathtaking 50-foot multimedia installation that brilliantly combines meticulously forged steel, thoughtfully reclaimed lumber, and dynamic ambient lighting. This monumental piece was a true community-led triumph, brought to life by the dedicated artisans of Guild & Grain. It stands as a vibrant testament to collaborative creativity and urban revitalization.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing bg-background-primary">
      <div class="container">
        <h2 class="text-3xl md:text-4xl text-center mb-12">What Our Artisans Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="testimonial-quote">
            <p class="testimonial-text">The business consulting at Guild & Grain completely transformed how I run my independent studio. Their material sourcing network is unparalleled; it’s truly a game-changer for anyone serious about their craft.</p>
            <p class="testimonial-author">Elena R., Independent Sculptor</p>
          </div>
          <div class="testimonial-quote">
            <p class="testimonial-text">Attending the modern woodworking intensive gave me the confidence to launch my own bespoke furniture line. The instructors are truly masterful, providing insights and techniques I couldn't find anywhere else.</p>
            <p class="testimonial-author">Marcus V., Furniture Designer</p>
          </div>
          <div class="testimonial-quote">
            <p class="testimonial-text">I've participated in several workshops, and the quality of instruction and the community atmosphere at Guild & Grain are exceptional. My skills have grown exponentially.</p>
            <p class="testimonial-author">Sofia K., Textile Artist</p>
          </div>
          <div class="testimonial-quote">
            <p class="testimonial-text">Their focus on sustainable practices aligns perfectly with my values. Guild & Grain doesn't just teach art, they teach mindful creation.</p>
            <p class="testimonial-author">Jamal P., Ceramicist</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-spacing bg-background-primary">
      <div class="container text-center">
        <h2 class="text-3xl md:text-4xl mb-6">Join the Guild & Grain Community</h2>
        <p class="text-lg text-text-secondary mb-8 max-w-2xl mx-auto">Ready to refine your skills, collaborate on inspiring projects, or grow your creative business? Reach out to us today. We're here to help you foster your artistic journey.</p>
        <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="btn-outline">Email Us</a>
        <div class="mt-12 text-text-secondary space-y-2">
            <p><strong>Phone:</strong> <a href="tel:+12567507102" class="text-accent-primary hover:underline">+1 (256) 750-7102</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-accent-primary hover:underline">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
            <p><strong>Address:</strong> 451 Clarkson Avenue, New York, New York, 11203, USA</p>
            <div class="w-full max-w-xl mx-auto mt-8 h-64 rounded-[var(--border-radius)] overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12096.347318742881!2d-73.9680373!3d40.66574705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b394fbc6811%3A0x6b8c5a2c4e2a8c3d!2sClarkson%20Ave%2C%20Brooklyn%2C%20NY%2C%20USA!5e0!3m2!1sen!2suk!4v1701234567890!5m2!1sen!2suk"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
      </div>
    </section>
  </main>
<footer class="bg-[#212529] text-[#ffffff] py-10 md:py-16">
    <div class="container text-center text-sm">
      <div class="mb-4">
        <a href="./privacy.html" class="text-gray-400 hover:text-accent-primary transition-colors mx-2">Privacy Policy</a>
        <span class="text-gray-500">|</span>
        <a href="./tos.html" class="text-gray-400 hover:text-accent-primary transition-colors mx-2">Terms of Service</a>
      </div>
      <p class="mt-4">&copy; 2024 Guild & Grain. All rights reserved.</p>
    </div>
  </footer>

  <div id="cookie-consent-banner" class="fixed bottom-0 left-0 w-full bg-[#16213e] text-white p-4 flex flex-col md:flex-row items-center justify-between text-sm z-[100] transform translate-y-full transition-transform duration-500 ease-in-out">
    <p class="mb-2 md:mb-0 mr-4 text-center md:text-left">We use essential cookies to make our site work. With your consent, we may also use non-essential cookies to improve user experience and analyze website traffic. By clicking 'Accept', you agree to our cookie use as described in our <a href="./privacy.html" class="text-accent-primary hover:underline">Privacy Policy</a>.</p>
    <button id="accept-cookies" class="btn-outline flex-shrink-0 !py-2 !px-4">Accept</button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const banner = document.getElementById('cookie-consent-banner');
      const acceptButton = document.getElementById('accept-cookies');
      const cookieName = 'consent_Guild & Grain_cookies'; // Unique cookie name prefix

      function setCookie(name, value, days) {
        let expires = "";
        if (days) {
          const date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
      }

      function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) === ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
      }

      if (!getCookie(cookieName)) {
        banner.classList.remove('translate-y-full');
      }

      acceptButton.addEventListener('click', function() {
        setCookie(cookieName, 'accepted', 365);
        banner.classList.add('translate-y-full');
      });
    });
  </script>
</body>
</html>