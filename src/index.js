const themeToggleBtn = document.getElementById('theme-toggle');
const html = document.documentElement;

// Check localStorage on page load
if (localStorage.theme === 'dark') {
    html.classList.add('dark');
}

// Toggle dark mode
themeToggleBtn.addEventListener('click', () => {
    if (html.classList.contains('dark')) {
        html.classList.remove('dark');
        localStorage.theme = 'light';
    } else {
        html.classList.add('dark');
        localStorage.theme = 'dark';
    }
});