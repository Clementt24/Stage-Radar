document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const openMenuBtn = document.getElementById('openMenu');
    const closeMenuBtn = document.getElementById('closeMenu');
    
    // --- NOUVEAUTÉ : Vérification de la mémoire du navigateur au chargement ---
    if (localStorage.getItem('sidebarState') === 'open') {
        sidebar.classList.add('active');
    }

    // Gestion de l'ouverture du menu
    if(openMenuBtn) {
        openMenuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            localStorage.setItem('sidebarState', 'open'); // On mémorise que c'est ouvert
        });
    }

    // Gestion de la fermeture du menu
    if(closeMenuBtn) {
        closeMenuBtn.addEventListener('click', () => {
            sidebar.classList.remove('active');
            localStorage.setItem('sidebarState', 'closed'); // On mémorise que c'est fermé
        });
    }

    // (Optionnel) Fermer le menu si on clique en dehors (sur le fond gris)
    document.addEventListener('click', (event) => {
        if (sidebar.classList.contains('active') && 
            !sidebar.contains(event.target) && 
            !openMenuBtn.contains(event.target)) {
            sidebar.classList.remove('active');
            localStorage.setItem('sidebarState', 'closed');
        }
    });
});