document.addEventListener('DOMContentLoaded', () => {
    // Disable automatic highlighting
    Prism.manual = true;

    // Manually highlight code blocks with language class
    document.querySelectorAll('pre[class*="language-"]').forEach(block => {
        Prism.highlightElement(block);
    });

    // Copy functionality
    document.querySelectorAll('.copy-button').forEach(button => {
        button.addEventListener('click', () => {
            const codeBlock = button.closest('.code-block-wrapper').querySelector('code');
            navigator.clipboard.writeText(codeBlock.textContent).then(() => {
                button.textContent = 'Copied!';
                setTimeout(() => {
                    button.textContent = 'Copy';
                }, 2000);
            });
        });
    });
});