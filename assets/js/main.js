const themeToggleBtn = document.getElementById('theme-toggle');
const html = document.documentElement;
const moonIcon = document.querySelector('#theme-toggle-dark-icon');
const sunIcon = document.querySelector('#theme-toggle-light-icon');

var toggleOpen = document.getElementById('toggleOpen');
var toggleClose = document.getElementById('toggleClose');
var collapseMenu = document.getElementById('collapseMenu');

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
    if (collapseMenu.style.display === 'block') {
        collapseMenu.style.display = 'none';
    } else {
        collapseMenu.style.display = 'block';
    }
}
toggleOpen.addEventListener('click', handleClick);
toggleClose.addEventListener('click', handleClick);