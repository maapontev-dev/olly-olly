<section class="c-modal" id="modal-form-js">
  <div class="c-modal__wrapper">
    <div class="c-modal__content">
      <button class="c-modal__close" id="modal-close-js">&#x2715;</button>
      <div class="c-modal__title">
        <h2>Don’t wait any longer!</h2>
        <p>Fill out this form and we’ll create the landscape of your dreams.</p>
      </div>

      <!-- Multi-step form START -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="c-form">
        <div class="c-form__multistep">
          <!-- Step 1 START -->
          <div class="c-form__step is-active is-fading">
            <div class="c-form__group">
              <label for="input-email" class="c-form__label">Email*</label>
              <input type="email" id="input-email" class="c-form__input" placeholder="email@email.com" required aria-required="true" data-name="Email">
              <span class="c-form__error">Invalid email address.</span>
              <span class="c-form__text">By entering your email information, you accept to receive emails from Wonder-land.</span>
            </div>
          </div>
          <!-- Step 1 END -->
          <!-- Step 2 START -->
          <div class="c-form__step">
            <div class="c-form__group">
              <label for="input-name" class="c-form__label">First and last name</label>
              <input type="text" id="input-name" class="c-form__input" placeholder="Jane Doe" data-name="First and last name">
            </div>
          </div>
          <!-- Step 2 END -->
          <!-- Step 3 START -->
          <div class="c-form__step">
            <div class="c-form__group">
              <label for="phone" class="c-form__label">Phone number*</label>
              <input type="tel" id="input-phone" class="c-form__input" placeholder="000-000-0000" required aria-required="true" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" data-name="Phone number">
              <span class="c-form__error">Invalid phone number.</span>
            </div>
          </div>
          <!-- Step 3 END -->
          <!-- Step 4 START -->
          <div class="c-form__step">
            <div class="c-form__thanks">
              <i class="c-icon c-icon--check"></i>
              <div class="c-form__message">
                <h3>Thank you!</h3>
                <p>We’ve received your information and we’ll get back to you.</p>
              </div>
            </div>
          </div>
          <!-- Step 4 END -->
          <div class="c-form__buttons">
            <button class="c-btn c-btn--white is-hidden" id="form-prev-js">
              <span>Go back</span>
            </button>
            <button class="c-btn c-btn--primary" id="form-next-js">
              <span>Next</span>
            </button>
          </div>
        </div>
      </form>

      <ol class="c-form__nav" id="form-nav-js">
        <li><i class="c-form__circle is-active"></i></li>
        <li><i class="c-form__circle"></i></li>
        <li><i class="c-form__circle"></i></li>
        <li><i class="c-form__circle"></i></li>
      </ol>
      <!-- Multi-step form END -->
    </div>
  </div>
</section>