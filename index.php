<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage - Negozio per Animali</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!-- Inclusione della navbar -->
  <?php include './includes/navbar.php'; ?>

  <!-- Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Form di Login -->
          <form id="loginForm">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="loginEmail" required>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPassword" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Accedi</button>
          </form>

          <!-- Link per passare alla registrazione -->
          <p class="text-center mt-3">Non hai un account? <a href="#" id="showRegisterForm">Registrati</a></p>

          <!-- Form di Registrazione nascosto di default -->
          <form id="registerForm" style="display: none;">
            <div class="mb-3">
              <label for="registerEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="registerEmail" required>
            </div>
            <div class="mb-3">
              <label for="registerPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="registerPassword" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrati</button>
          </form>

          <!-- Link per tornare al login -->
          <p class="text-center mt-3" id="backToLogin" style="display: none;">Hai già un account? <a href="#"
              id="showLoginForm">Accedi</a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


  <script>
  document.getElementById('showRegisterForm').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
    document.getElementById('backToLogin').style.display = 'block';
    document.getElementById('showRegisterForm').parentElement.style.display =
    'none'; // Nasconde il link "Registrati"
    document.getElementById('loginModalLabel').textContent = 'Registrazione';
  });

  document.getElementById('showLoginForm').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('backToLogin').style.display = 'none';
    document.getElementById('showRegisterForm').parentElement.style.display =
    'block'; // Mostra di nuovo il link "Registrati"
    document.getElementById('loginModalLabel').textContent = 'Login';
  });
  </script>



</body>

</html>