import "./components/testimonies";

document.querySelector('.switch-theme')?.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  document.cookie = `theme=${document.body.classList.contains('dark') ? 'dark' : 'light'}`;
});

Array.from(document.querySelectorAll('[data-js="toggle-menu"]')).forEach(button => button.addEventListener('click', () => {
  document.body.classList.toggle('toggle-menu');
}));

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register(urls.theme + '/sw.js', { scope: '/' }).then(function(reg) {
    console.log('Registration succeeded. Scope is ' + reg.scope);
  }).catch(function(error) {
    console.log('Registration failed with ' + error);
  });
};
