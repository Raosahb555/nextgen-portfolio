<?php get_header(); ?>

<section class="error-404 not-found">
  <div class="container">
    <div class="error-content">
      <h1 class="error-code">404</h1>
      <h2 class="error-message">Oops! Page Not Found</h2>
      <p class="error-desc">
        It seems the page you’re looking for doesn’t exist.<br>
        Don’t worry, let’s get you back on track.
      </p>
      <a href="<?php echo home_url(); ?>" class="btn">Go Back Home</a>
    </div>
  </div>
</section>

<style>
/* 404 Page Styling */
.error-404 {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: linear-gradient(135deg, #1a1a2e, #16213e);
  color: #fff;
  overflow: hidden;
}

.error-code {
  font-size: 8rem;
  font-weight: 900;
  animation: bounce 2s infinite;
  color: #ff4c60;
  text-shadow: 0 0 20px rgba(255, 76, 96, 0.7);
}

.error-message {
  font-size: 2rem;
  margin: 10px 0;
  animation: fadeIn 2s ease-in-out;
}

.error-desc {
  font-size: 1.1rem;
  margin-bottom: 20px;
  color: #ccc;
  animation: fadeIn 3s ease-in-out;
}

.error-404 .btn {
  display: inline-block;
  padding: 12px 25px;
  background: #ff4c60;
  color: #fff;
  font-weight: 600;
  border-radius: 30px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.error-404 .btn:hover {
  background: #ff6b81;
  transform: scale(1.05);
}

/* Animations */
@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>

<?php get_footer(); ?>

