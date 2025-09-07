// Function to load HTML components
function loadComponent(id, file) {
    fetch(file)
        .then(response => response.text())
        .then(data => {
            document.getElementById(id).innerHTML = data;
            
            // Re-initialize Alpine.js for dynamically loaded content
            if (typeof Alpine !== 'undefined') {
                Alpine.discoverUninitializedComponents(el => {
                    Alpine.initializeComponent(el);
                });
            }
        })
        .catch(error => console.error(`Error loading ${file}:`, error));
}

// Load header and footer when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    loadComponent('header-component', 'header.html');
    loadComponent('footer-component', 'footer.html');
});