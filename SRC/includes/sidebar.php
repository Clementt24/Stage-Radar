<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h2>Menu</h2>
        <button class="close-btn" id="closeMenu"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <?php if(!isset($_SESSION['user_id'])): ?>
        <!-- Menu utilisateur NON connecté -->
        <button class="btn-primary open-modal" style="width: 100%;">Se connecter</button>
    <?php else: ?>
        <!-- Menu utilisateur CONNECTÉ -->
        <div class="menu-category">Général</div>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Accueil</a></li>
            <li><a href="suivi.php"><i class="fa-solid fa-user-graduate"></i> Suivi Étudiants</a></li>
            <li><a href="statistiques.php"><i class="fa-solid fa-chart-pie"></i> Statistiques</a></li>
        </ul>

        <div class="menu-category">À propos</div>
        <ul>
            <li><a href="https://github.com/Clementt24/Stage-Radar" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a></li>
            <li><a href="credits.php"><i class="fa-solid fa-circle-info"></i> Crédits</a></li>
        </ul>

        <div class="menu-category">Administration</div>
        <ul>
            <li><a href="https://discord.com/channels/1553853220923641946/1553853221611643012" target="_blank"><i class="fa-brands fa-discord"></i> Discord</a></li>
            <li><a href="#"><i class="fa-solid fa-chart-line"></i> Grafana</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Paramètres</a></li>
        </ul>
        
        <hr style="margin: 1.5rem 0; border: 0; border-top: 1px solid #e5e7eb;">
        <a href="logout.php" class="btn-primary" style="display: block; text-align: center; text-decoration: none; background-color: #ef4444;">Déconnexion</a>
    <?php endif; ?>
</aside>