import './bootstrap';

module.exports = {
    purge: {
      content: [
        './app/**/*.html',
        './resources/**/*.js',
        './resources/**/*.vue',
      ],
    },
    theme: {
      extend: {},
    },
    plugins: [],
  }
  
  const menuButton = document.getElementById('menu-button');
  const closeMenuButton = document.getElementById('close-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
  });
  
  closeMenuButton.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });
  