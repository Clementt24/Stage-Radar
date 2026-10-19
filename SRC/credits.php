<?php
session_start();

// Sécurité : Redirection si l'utilisateur n'est pas connecté
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$page_title = "Crédits";

include 'includes/header.php';
include 'includes/sidebar.php';

// Tableau de données de l'équipe (facile à modifier plus tard)
$equipe = [
    [
        'nom' => 'Clément',
        'img' => 'photo_pro_clement.png',
        'github' => 'https://github.com/Clementt24',
        'role' => 'Infrastructure, BDD &<br>Scraping Esup-Stage'
    ],
    [
        'nom' => 'Arushan',
        'img' => 'photo_pro_arushan.png',
        'github' => '#',
        'role' => 'Algorithmique &<br>Logique de Rapprochement'
    ],
    [
        'nom' => 'Julien',
        'img' => 'photo_pro_julien.png',
        'github' => '#',
        'role' => 'Scraping Moodle &<br>Backend PHP'
    ],
    [
        'nom' => 'Sam',
        'img' => 'photo_pro_sam.png',
        'github' => '#',
        'role' => 'Développement Web &<br>Module Statistiques'
    ]
];
?>

<main class="main-content" style="align-items: flex-start; padding-top: 3rem;">
    <div style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 2rem; text-align: center;">
        
        <h1 style="font-size: 2rem; color: var(--primary-color); margin-bottom: 2rem; text-align: left;">
            <i class="fa-solid fa-circle-info"></i> Crédits
        </h1>

        <div style="background: var(--white); padding: 3rem 2rem; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e5e7eb;">
            
            <h2 style="color: var(--text-color); font-size: 1.8rem; margin-bottom: 3rem;">
                Notre équipe
            </h2>

            <!-- Conteneur des membres généré par la boucle PHP -->
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 3rem;">
                
                <?php foreach($equipe as $membre): ?>
                <div style="width: 240px; text-align: center; display: flex; flex-direction: column; align-items: center;">
                    <!-- Photo -->
                    <img src="assets/img/<?php echo $membre['img']; ?>" alt="<?php echo $membre['nom']; ?>" style="width: 150px; height: 150px; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-bottom: 1rem; border: 3px solid var(--white); object-fit: cover;">
                    
                    <!-- Nom -->
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 0.25rem;"><?php echo $membre['nom']; ?></h3>
                    
                    <!-- Bouton GitHub (Entre le nom et la description) -->
                    <a href="<?php echo $membre['github']; ?>" target="_blank" class="btn-primary" style="display: inline-block; padding: 0.4rem 0.8rem; margin: 0.5rem 0 1rem 0; text-decoration: none; font-size: 0.85rem; border-radius: 0.5rem;">
                        <i class="fa-brands fa-github"></i> Profil GitHub
                    </a>

                    <!-- Rôle -->
                    <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.4; flex-grow: 1;">
                        <?php echo $membre['role']; ?>
                    </p>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>