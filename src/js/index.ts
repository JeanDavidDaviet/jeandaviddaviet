import "./components/testimonies";

document.querySelector('.switch-theme')?.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  document.cookie = `theme=${document.body.classList.contains('dark') ? 'dark' : 'light'}`;
});
