console.log("Dark Mode default from options:", dmtAdminSettings);


document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('adminDarkToggle');
    const darkClass = 'admin-dark';
    const defaultEnabled = typeof dmtAdminSettings !== 'undefined' && dmtAdminSettings.darkModeDefault === 'on';

    if (localStorage.getItem('adminDarkMode') === 'enabled' ||
        (defaultEnabled && localStorage.getItem('adminDarkMode') === null)) {
        document.body.classList.add(darkClass);
    }

    if (button) {
        button.textContent = dmtAdminSettings.toggleLabel || '🌙 Admin Dark';
        button.addEventListener('click', function () {
            document.body.classList.toggle(darkClass);
            if (document.body.classList.contains(darkClass)) {
                localStorage.setItem('adminDarkMode', 'enabled');
            } else {
                localStorage.removeItem('adminDarkMode');
            }
        });
    }
});


