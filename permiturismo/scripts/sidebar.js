const sidebar = document.querySelector('.sidebar');
const sidebarBtn = document.querySelector('.toggle-sidebar');
const closeBtn = document.querySelector('.close-sidebar');

// alternar exibição sidebar
sidebarBtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
});

// fechar sidebar
closeBtn.addEventListener('click', () => {
  sidebar.classList.remove('active');
});

// verifica cliques fora da sidebar
window.addEventListener('click', (event) => {
  if (event.target === sidebar || event.target === sidebarBtn) {
    return;
  }

  sidebar.classList.remove('active');
});
