/*

document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('darkModeToggle');
    const darkClass = 'dark-mode';

    const defaultEnabled = dmtSiteSettings?.darkModeDefault === 'on';
    const hideToggle = dmtSiteSettings?.hideToggle;

    const userPref = localStorage.getItem('darkMode');

    if (userPref === 'enabled') {
        document.body.classList.add(darkClass);
    } else if (userPref === 'disabled') {
        document.body.classList.remove(darkClass);
    } else if (defaultEnabled) {
        document.body.classList.add(darkClass);
    }

    if (hideToggle && button) {
        button.style.display = 'none';
    }

    if (!hideToggle && button) {
        button.addEventListener('click', function () {
            const isDark = document.body.classList.toggle(darkClass);
            localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
        });
    }
});

*/

document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('darkModeToggle');
    const darkClass = 'dark-mode';

    const defaultEnabled = dmtSiteSettings?.darkModeDefault === 'on';
    const hideToggle = dmtSiteSettings?.hideToggle;

    const userPref = localStorage.getItem('darkMode');

    if (userPref === 'enabled') {
        document.body.classList.add(darkClass);
    } else if (userPref === 'disabled') {
        document.body.classList.remove(darkClass);
    } else if (defaultEnabled) {
        document.body.classList.add(darkClass);
    }

    if (hideToggle && button) {
        button.style.display = 'none';
    }

    if (!hideToggle && button) {
        button.addEventListener('click', function () {
            const isDark = document.body.classList.toggle(darkClass);
            localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
        });
    }
});
