<?php
include 'database.php';
include 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relaxation Spa</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!-- Header Section -->
        <header class="hero">
            <div class="hero-content">
                <h1>Welcome to Chroma Spa</h1>
                <p>Your destination for ultimate relaxation and rejuvenation.</p>
                <a href="services.php" class="btn-primary">Explore Services</a>
            </div>
        </header>

        <!-- About Section -->  
        <section class="about">
        <h2>About Us</h2>
        <p>
            At Relaxation Spa, we believe in providing a sanctuary where you can unwind, recharge, and rediscover balance. 
            Our professional team is dedicated to offering exceptional services tailored to your needs.
        </p>

        <p>
            With years of experience in wellness and beauty, we focus on creating a tranquil atmosphere 
            where every visit feels like an escape from the stresses of daily life. Whether you're here 
            for a soothing massage, rejuvenating facial, or a luxurious manicure, we are committed to 
            delivering a truly memorable experience.
        </p>
        <p>
            Our core values are rooted in relaxation, professionalism, and customer satisfaction. 
            We use only the finest products to ensure the highest quality treatments. At Relaxation Spa, 
            your well-being is our top priority.
        </p>
        <p>
            Discover the difference a moment of peace can make. Let us help you recharge, refresh, and glow 
            from the inside out.
        </p>
    </section>
    <!-- Testimonials Section -->
        <section class="testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial">
            <img src="customer1.png" alt="Customer 1">
                <p>"Relaxation Spa is my go-to place for unwinding after a long week. The staff is amazing!"</p>
                <span>- Sarah M.</span>
            </div>
            <div class="testimonial">
            <img src="customer2.png" alt="Customer 2">
                <p>"I love the Swedish Massage here. It's always a wonderful experience."</p>
                <span>- James L.</span>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </section>
    </body>

<?php include 'footer.php'; ?>
