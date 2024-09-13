document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mainNavigation = document.getElementById('main-navigation');
    
    menuToggle.addEventListener('click', function() {
        mainNavigation.classList.toggle('active');
    });
});
