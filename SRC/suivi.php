<?php
session_start();

// Sécurité : Redirection si l'utilisateur n'est pas connecté
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

include 'includes/header.php';
include 'includes/sidebar.php';
?>

<main class="main-content" style="align-items: flex-start; padding-top: 3rem;">
    <div style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 2rem; text-align: center;">
        
        <h1 style="font-size: 2rem; color: var(--primary-color); margin-bottom: 2rem; text-align: left;">
            <i class="fa-solid fa-user-graduate"></i> Suivi des Étudiants
        </h1>

        <div style="background: var(--white); padding: 4rem; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e5e7eb;">
            <h2 style="color: #dc2626; font-size: 2.5rem; margin-bottom: 1rem;">
                <i class="fa-solid fa-person-digging"></i> EN COURS DE CRÉATION
            </h2>
            <p style="color: #6b7280; font-size: 1.1rem;">
                La page de suivi et le tableau de données des étudiants sont actuellement en développement.
            </p>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>