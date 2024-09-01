document.addEventListener('DOMContentLoaded', function () {
    const toggleSwitch = document.querySelector('#dark-mode-toggle');
    const currentTheme = localStorage.getItem('darkMode') === 'true';

    if (currentTheme) {
        document.documentElement.classList.add('dark');
        toggleSwitch.checked = true;
    }

    toggleSwitch.addEventListener('change', function () {
        if (toggleSwitch.checked) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('darkMode', 'true');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('darkMode', 'false');
        }
    });
});
