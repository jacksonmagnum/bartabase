document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector(".menu-toggle");
    const menuModal = document.querySelector(".menu-modal");
    const closeMenu = document.querySelector(".close-menu");
    const sidebar = document.querySelector(".sidebar");
    const sidebarToggle = document.querySelector(".toggle-sidebar");
    
    // Toggle modal menu for mobile and tablet view
    menuToggle.addEventListener("click", function() {
        menuModal.classList.add("active");
    });
    
    // Close modal menu
    closeMenu.addEventListener("click", function() {
        menuModal.classList.remove("active");
    });
    
    // Close modal menu when clicking outside
    document.addEventListener("click", function(event) {
        if (!menuModal.contains(event.target) && !menuToggle.contains(event.target)) {
            menuModal.classList.remove("active");
        }
    });
    
    // Toggle sidebar
    sidebarToggle.addEventListener("click", function() {
        sidebar.classList.toggle("expanded");
    });
    
    // Close sidebar when clicking outside
    document.addEventListener("click", function(event) {
        if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
            sidebar.classList.remove("expanded");
        }
    });
});
