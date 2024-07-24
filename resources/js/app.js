  const menuButton = document.getElementById('menu-button');
  const menu = document.getElementById('menu');

  menuButton.addEventListener('click', () => {
    const isOpen = menu.classList.contains('hidden');
    menu.classList.toggle('hidden', !isOpen);
    menuButton.setAttribute('aria-expanded', !isOpen);
  });

  document.addEventListener('click', (event) => {
    if (!menuButton.contains(event.target) && !menu.contains(event.target)) {
      menu.classList.add('hidden');
      menuButton.setAttribute('aria-expanded', 'false');
    }
  });