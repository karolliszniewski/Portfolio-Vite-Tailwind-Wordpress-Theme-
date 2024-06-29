document.addEventListener('DOMContentLoaded', function () {
    // Sprawdzanie, czy w URL jest hash
    if (window.location.hash) {
        var target = document.querySelector(window.location.hash);
        if (target) {
            // Płynne przewijanie do sekcji
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
});