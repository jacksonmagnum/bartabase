<!--Sign in Modal-->
<script>
  const modal = document.getElementById('bartabase-auth-modal');
  const triggers = document.querySelectorAll('[data-auth-trigger]');
  const closeBtn = modal.querySelector('.bartabase-modal-close');

  triggers.forEach(trigger => {
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      modal.style.display = 'block';
    });
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', function (event) {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
</script>

<!--Sign up with email modal-->
<script>
  const menuModalEl = document.getElementById('menuModal');

  function closeBootstrapModals() {
    const activeModal = bootstrap.Modal.getInstance(menuModalEl);
    if (activeModal) activeModal.hide();
    document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());
  }

  const authModal = document.getElementById('bartabase-auth-modal');
  const emailModal = document.getElementById('bartabase-email-modal');

  function showModal(modal) {
    closeBootstrapModals();
    document.querySelectorAll('.bartabase-modal').forEach(m => m.style.display = 'none');
    modal.style.display = 'block';
    modal.querySelector('input')?.focus();
  }

  document.querySelectorAll('[data-auth-trigger]').forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault();
      showModal(authModal);
    });
  });

  document.querySelector('.email-link').addEventListener('click', e => {
    e.preventDefault();
    authModal.style.display = 'none';
    showModal(emailModal);
  });

  document.querySelectorAll('.bartabase-modal-close').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.closest('.bartabase-modal').style.display = 'none';
    });
  });

  // Toggle password visibility
  document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordField = document.getElementById('passwordField');
    const isVisible = passwordField.type === 'text';
    passwordField.type = isVisible ? 'password' : 'text';
    this.textContent = isVisible ? '\u{1F441}' : '\u{1F441}\u{200D}\u{1F5E8}'; // Eye or crossed eye
  });
</script>

<!--Toggle and form validation-->
<script>

  const signupBtn = document.getElementById("signupBtn");

  signupBtn.addEventListener("click", function (e) {
    e.preventDefault();

    const fields = [
      {
        input: document.getElementById("fullName"),
        label: document.getElementById("fullNameLabel"),
        validate: value => value.trim().length >= 2,
        errorMsg: "Full name must be at least 2 characters."
      },
      {
        input: document.getElementById("username"),
        label: document.getElementById("usernameLabel"),
        validate: value => /^[a-zA-Z0-9]{3,}$/.test(value.trim()),
        errorMsg: "Use at least 3 letters/numbers. No symbols allowed."
      },
      {
        input: document.getElementById("email"),
        label: document.getElementById("emailLabel"),
        validate: value => /^\S+@\S+\.\S+$/.test(value.trim()),
        errorMsg: "Enter a valid email address."
      },
      {
        input: document.getElementById("passwordField"),
        label: document.getElementById("passwordLabel"),
        validate: value => /(?=.*[a-zA-Z])(?=.*[0-9]).{7,}/.test(value),
        errorMsg: "Password must be at least 7 chars with letters and numbers."
      }
    ];

    let isValid = true;

    fields.forEach(field => {
      const { input, label, validate, errorMsg } = field;
      if (!validate(input.value)) {
        input.classList.add("error");
        label.textContent = errorMsg;
        label.classList.add("error-text");
        isValid = false;
      } else {
        input.classList.remove("error");
        label.textContent = label.dataset.default;
        label.classList.remove("error-text");
      }
    });

    const terms = document.getElementById("termsCheckbox");
    const termsError = document.getElementById("termsError");
    if (!terms.checked) {
      termsError.textContent = "You must agree to the terms to continue.";
      isValid = false;
    } else {
      termsError.textContent = "";
    }

    if (isValid) {
      alert("Form submitted successfully!");
      // Handle actual submission
    }
  });

  // Reset labels on input
  document.querySelectorAll("input").forEach(input => {
    input.addEventListener("input", () => {
      const label = document.querySelector(`#${input.id} + label`);
      if (label && label.dataset.default) {
        label.textContent = label.dataset.default;
        input.classList.remove("error");
        label.classList.remove("error-text");
      }
    });
  });
</script>


<!--Auto-reset label when the user starts typing-->
<script>
  document.querySelectorAll("input").forEach(input => {
    input.addEventListener("input", () => {
      const label = document.querySelector(`label[for="${input.id}"], #${input.id} + label`);
      if (label && label.dataset.default) {
        label.textContent = label.dataset.default;
        input.classList.remove("error");
      }
    });
  });
</script>

<!--login form-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleIcon = document.getElementById('toggleLoginPassword');
            const passwordInput = document.getElementById('loginPassword');

            if (toggleIcon && passwordInput) {
            toggleIcon.addEventListener('click', function () {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
            } else {
            console.warn('Toggle or password field not found');
            }
        });
    </script>


<!-- Footer -->
<footer class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h5>Get to Know Us</h5>
                    <ul>
                        <li><a href="#">About Bartabase</a></li>
                        <li><a href="#">Handy Services</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Advertise with us</a></li>
                        <li><a href="#">Policies</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h5>Sell</h5>
                    <ul>
                        <li><a href="#">Start Selling</a></li>
                        <li><a href="#">How to sell</a></li>
                        <li><a href="#">Affilliates</a></li>
                        <li><a href="#">Seller Center</a></li>
                        <li><a href="#">Free Items</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h5>Order & Purchases</h5>
                    <ul>
                        <li><a href="#">Check Order Status</a></li>
                        <li><a href="#">Shipping, Delivery & Pickup</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6 mb-5">
                    <h5>Help & Contact</h5>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Money Back Guarantee</a></li>
                        <li><a href="#">Announcements</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div><hr>

                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; <?php echo date('Y'); ?> BartaBase Systems Limited. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>