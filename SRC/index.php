<?php 
session_start(); 
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<main class="main-content" <?php echo isset($_SESSION['user_id']) ? 'style="align-items: flex-start; padding-top: 4rem;"' : ''; ?>>
    <?php if(!isset($_SESSION['user_id'])): ?>
        <!-- Vue Visiteur : Formulaire de connexion direct -->
        <div class="login-container" style="background: var(--white); padding: 2.5rem; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 400px; margin: auto;">
            <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Connexion à StageRadar</h2>
            
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
    <?php else: ?>
        <!-- Vue Connecté : Tableau de bord -->
        <div style="width: 100%; max-width: 1000px; margin: 0 auto; padding: 0 2rem;">
            <h1 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 0.5rem;">
                Bonjour <?php echo htmlspecialchars($_SESSION['username']); ?>
            </h1>
            <p style="color: #6b7280; font-size: 1.1rem;">
                Que souhaitez-vous consulter aujourd'hui ?
            </p>

            <div class="dashboard-cards">
                <!-- Carte Suivi Étudiants -->
                <a href="suivi.php" class="card">
                    <i class="fa-solid fa-user-graduate"></i>
                    <h3>Suivi Étudiants</h3>
                    <p>Consultez la liste des étudiants, l'état de leurs dépôts Moodle et l'avancement de leurs conventions Esup-Stage.</p>
                </a>

                <!-- Carte Statistiques -->
                <a href="statistiques.php" class="card">
                    <i class="fa-solid fa-chart-pie"></i>
                    <h3>Statistiques</h3>
                    <p>Visualisez les taux de couverture, les délais de validation et les indicateurs globaux de la promotion.</p>
                </a>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php if (isset($_SESSION['user_id'])){ include 'includes/footer.php';}?> <!-- Si l'utilisateur est connecté, on affiche le footer --> 