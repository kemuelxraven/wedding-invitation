// Create floating particles
function createParticles() {
  const particles = document.getElementById("particles");
  for (let i = 0; i < 50; i++) {
    const particle = document.createElement("div");
    particle.className = "particle";
    particle.style.left = Math.random() * 100 + "%";
    particle.style.animationDelay = Math.random() * 6 + "s";
    particle.style.animationDuration = Math.random() * 3 + 3 + "s";
    particles.appendChild(particle);
  }
}

// Create floating hearts
function createHearts() {
  const hearts = document.getElementById("hearts");
  setInterval(() => {
    const heart = document.createElement("div");
    heart.className = "heart";
    heart.innerHTML = "♥";
    heart.style.left = Math.random() * 100 + "%";
    heart.style.animationDuration = Math.random() * 2 + 3 + "s";
    hearts.appendChild(heart);

    setTimeout(() => {
      heart.remove();
    }, 5000);
  }, 3000);
}

// Handle form submission
document.getElementById("rsvpForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const submitBtn = this.querySelector(".submit-btn");
  const btnText = submitBtn.querySelector(".btn-text");
  const responseMsg = document.getElementById("responseMsg");

  // Show loading state
  btnText.innerHTML = '<div class="loading"></div>';
  submitBtn.disabled = true;

  // Simulate form submission (replace with actual endpoint)
  setTimeout(() => {
    responseMsg.style.display = "block";
    responseMsg.className = "response-msg success";
    responseMsg.textContent =
      "Thank you for your RSVP! We can't wait to celebrate with you! 💕";

    // Reset form
    this.reset();

    // Reset button
    btnText.textContent = "Send RSVP";
    submitBtn.disabled = false;

    // Hide message after 5 seconds
    setTimeout(() => {
      responseMsg.style.display = "none";
    }, 5000);
  }, 2000);
});

// Initialize animations
createParticles();
createHearts();

// Smooth scrolling for scroll indicator
document.querySelector(".scroll-indicator").addEventListener("click", () => {
  document.querySelector(".content").scrollIntoView({ behavior: "smooth" });
});

// Add scroll animations
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.animation = "slideInUp 0.8s ease-out";
    }
  });
});

document.querySelectorAll(".section").forEach((section) => {
  observer.observe(section);
});
