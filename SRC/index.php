<?php 
session_start(); 
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<main class="main-content">
    <?php if(!isset($_SESSION['user_id'])): ?>
        <!-- Vue Visiteur -->
        <button class="btn-primary open-modal" style="font-size: 1.2rem; padding: 1rem 2rem;">
            Se connecter
        </button>
    <?php else: ?>
        <!-- Vue Connecté -->
        <div>
            <h1 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 1rem;">
                Page de liaison stage
            </h1>
            <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>. Centralisez vos données Esup-Stage et Moodle ici.</p>
        </div>
    <?php endif; ?>
</main>

<!-- Modale de Connexion (Visible uniquement si non connecté) -->
<?php if(!isset($_SESSION['user_id'])): ?>
<div class="modal-overlay" id="loginModal">
    <div class="modal-box">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Connexion</h2>
            <button id="closeModal" style="background:none; border:none; font-size:1.2rem; cursor:pointer;"><i class="fa-solid fa-xmark"></i></button>
        </div>
        
        <?php 
        if(isset($_SESSION['login_error'])) {
            echo '<p class="error-msg"><i class="fa-solid fa-circle-exclamation"></i> ' . $_SESSION['login_error'] . '</p>';
            unset($_SESSION['login_error']); // Efface l'erreur après affichage
        }
        ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Identifiant</label>
                <input type="text" id="username" name="username" required placeholder="Ex: root">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn-primary" style="width: 100%; margin-top: 1rem;">Se connecter</button>
        </form>
    </div>
</div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>