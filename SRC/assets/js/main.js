document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const openMenuBtn = document.getElementById('openMenu');
    const closeMenuBtn = document.getElementById('closeMenu');
    
    const modal = document.getElementById('loginModal');
    const openModalBtns = document.querySelectorAll('.open-modal');
    const closeModalBtn = document.getElementById('closeModal');

    // Gestion du menu latéral
    if(openMenuBtn) openMenuBtn.addEventListener('click', () => sidebar.classList.add('active'));
    if(closeMenuBtn) closeMenuBtn.addEventListener('click', () => sidebar.classList.remove('active'));

    // Gestion de la modale de connexion
    openModalBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            sidebar.classList.remove('active'); // Ferme le menu si ouvert
            modal.classList.add('active');
        });
    });

    // Fermer modale au clic sur le bouton ou à l'extérieur
    if(closeModalBtn) closeModalBtn.addEventListener('click', () => modal.classList.remove('active'));
    window.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.remove('active');
    });
});