document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.getElementById('equipo-dropdown');
    const dropdownContent = dropdown.querySelector('.dropdown-content');

    dropdown.addEventListener('mouseenter', function() {
        dropdown.classList.add('show');
    });

    dropdown.addEventListener('mouseleave', function() {
        setTimeout(function() {
            if (!dropdown.matches(':hover') && !dropdownContent.matches(':hover')) {
                dropdown.classList.remove('show');
            }
        }, 300);
    });

    dropdownContent.addEventListener('mouseenter', function() {
        dropdown.classList.add('show');
    });

    dropdownContent.addEventListener('mouseleave', function() {
        setTimeout(function() {
            if (!dropdown.matches(':hover') && !dropdownContent.matches(':hover')) {
                dropdown.classList.remove('show');
            }
        }, 300);
    });
});
