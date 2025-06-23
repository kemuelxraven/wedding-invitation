<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Raven & Kemuel's Wedding Invitation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="particles" id="particles"></div>
  <div class="hearts" id="hearts"></div>

  <div class="header">
    <h1 class="names">Raven & Kemuel</h1>
    <p class="subtitle">You're Invited to Celebrate Our Wedding</p>
    <div class="date">November 30, 2025</div>
    <div class="scroll-indicator">
      <div style="font-size: 2rem;">↓</div>
      <div style="font-size: 0.9rem; margin-top: 0.5rem;">Scroll to RSVP</div>
    </div>
  </div>

  <div class="content">
    <div class="section">
      <h2 class="section-title">Our Story Begins</h2>
      <div class="event-details">
        Join us for a day full of love, laughter, and memories that will last a lifetime.
        <br><br>
        We can't wait to celebrate this special moment with our closest family and friends.
        <br><br>
        The ceremony and celebration will be held at:
        <div class="venue">Casa Ibarra, MOA Complex, Pasay City</div>
        <strong>Ceremony starts at 3:00 PM followed by reception</strong>
      </div>
    </div>

    <div class="section color-theme">
      <h2 class="section-title">Wedding Color Theme</h2>
      <p class="event-details" style="margin-bottom: 2rem;">
        To make our special day even more beautiful, we kindly request that you coordinate with our wedding colors.
        Here's what each member of our wedding party and guests should wear:
      </p>

      <div class="color-grid">
        <div class="color-item">
          <div class="color-swatch color-golden-yellow"></div>
          <div class="color-role">Maid of Honor</div>
          <div class="color-name">Golden Yellow</div>
        </div>

        <div class="color-item">
          <div class="color-swatch color-pastel-yellow"></div>
          <div class="color-role">Bridesmaids</div>
          <div class="color-name">Pastel Yellow</div>
        </div>

        <div class="color-item">
          <div class="color-swatch color-light-brown"></div>
          <div class="color-role">Best Man</div>
          <div class="color-name">Light Brown</div>
        </div>

        <div class="color-item">
          <div class="color-swatch color-brown"></div>
          <div class="color-role">Groomsmen</div>
          <div class="color-name">Brown</div>
        </div>

        <div class="color-item">
          <div class="color-swatch color-beige"></div>
          <div class="color-role">Principal Sponsors</div>
          <div class="color-name">Beige</div>
        </div>

        <div class="color-item">
          <div class="color-swatch color-dark-brown"></div>
          <div class="color-role">Guests</div>
          <div class="color-name">Dark Brown</div>
        </div>
      </div>

      <p style="margin-top: 2rem; font-style: italic; color: #4a5d3b;">
        Thank you for helping us create a harmonious and beautiful celebration! 💕
      </p>
    </div>

    <div class="section guest-policy">
      <div class="policy-icon">👥💕</div>
      <h2 class="section-title">Important Guest Information</h2>

      <div class="policy-text">
        We are so excited to celebrate this special day with the people who mean the most to us!
      </div>

      <div class="policy-highlight">
        <span class="policy-heart">💝</span>
        Our guest list has been thoughtfully curated to include only our closest family and friends.
        We kindly ask that you respect our decision to keep this celebration intimate by not bringing
        additional guests who are not specifically listed below.
        <span class="policy-heart">💝</span>
      </div>

      <div class="policy-text">
        This helps us ensure that everyone can enjoy a meaningful and comfortable celebration together.
        Unfortunately, guests who are not on our list will not be able to enter the venue, as we have
        planned our space and arrangements specifically for our invited loved ones.
      </div>

      <div class="policy-footer">
        Thank you for understanding and helping us make this day as special as we've always dreamed!
        <span class="policy-heart">💕</span>
      </div>
    </div>

    <div class="section wedding-party">
      <h2 class="section-title">Our Wedding Party</h2>
      <div class="party-grid">
        <?php include 'guests/principal_sponsors.php'; ?>

        <!-- Best Man and Maid of Honor side by side -->
        <?php include 'guests/best_man_woman.php'; ?>

        <!-- Bridesmaids and Groomsmen -->
        <?php include 'guests/bridesmaid.php'; ?>

        <?php include 'guests/groomsmen.php'; ?>

        <!-- Other Guests -->
        <?php include 'guests/other_guests.php'; ?>

      </div>
    </div>

    <div class="section rsvp-form">
      <h2 class="section-title">Please RSVP</h2>
      <form id="rsvpForm">
        <div class="form-group">
          <input type="text" name="name" class="form-input" placeholder="Your Full Name" required>
        </div>

        <div class="form-group">
          <select name="attendance" class="form-input" required>
            <option value="">Will you be attending?</option>
            <option value="Yes">Yes, I'll be there! 🎉</option>
            <option value="No">Sorry, I can't make it 😢</option>
          </select>
        </div>

        <div class="form-group">
          <textarea name="message" class="form-input form-textarea"
            placeholder="Leave us a heartfelt message (optional)"></textarea>
        </div>

        <button type="submit" class="submit-btn">
          <span class="btn-text">Send RSVP</span>
        </button>
      </form>

      <div id="responseMsg" class="response-msg" style="display: none;"></div>
    </div>
  </div>
  <script src="script/script.js"></script>
</body>

</html>