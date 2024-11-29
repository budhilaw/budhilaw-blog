const themeToggleBtn = document.getElementById('theme-toggle');
const html = document.documentElement;
const moonIcon = document.querySelector('#theme-toggle-dark-icon');
const sunIcon = document.querySelector('#theme-toggle-light-icon');

const toggleOpen = document.getElementById('toggleOpen');
const toggleClose = document.getElementById('toggleClose');
const fixedMenu = document.getElementById('fixed-nav');
const navOverlay = document.getElementById('nav-overlay');

// Check localStorage on page load
if (localStorage.theme === 'dark') {
    html.classList.add('dark');
    moonIcon.classList.add('hidden');
    sunIcon.classList.remove('hidden');
} else {
    moonIcon.classList.remove('hidden');
    sunIcon.classList.add('hidden');
}

// Toggle dark mode
themeToggleBtn.addEventListener('click', () => {
    if (html.classList.contains('dark')) {
        html.classList.remove('dark');
        localStorage.theme = 'light';
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
    } else {
        html.classList.add('dark');
        localStorage.theme = 'dark';
        moonIcon.classList.add('hidden');
        sunIcon.classList.remove('hidden');
    }
});


function handleClick() {
    if (fixedMenu.classList.contains('hidden')) {
        fixedMenu.classList.remove('hidden');
        fixedMenu.classList.add('block');

        navOverlay.classList.remove('hidden');
        navOverlay.classList.add('block');
    } else {
        fixedMenu.classList.remove('block');
        fixedMenu.classList.add('hidden');

        navOverlay.classList.remove('block');
        navOverlay.classList.add('hidden');
    }
}

toggleOpen.addEventListener('click', handleClick);
toggleClose.addEventListener('click', handleClick);