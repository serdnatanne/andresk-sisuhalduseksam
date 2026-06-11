document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('.theme-toggle');
    const savedTheme = localStorage.getItem('roomusLaineTheme');

    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
    }

    if (button) {
        button.textContent = document.body.classList.contains('dark-mode')
            ? 'Hele vaade'
            : 'Tume vaade';

        button.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');

            const isDark = document.body.classList.contains('dark-mode');

            localStorage.setItem('roomusLaineTheme', isDark ? 'dark' : 'light');

            button.textContent = isDark ? 'Hele vaade' : 'Tume vaade';
        });
    }
});
