import "./components/testimonies";

document.querySelector('.switch-theme')?.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  document.cookie = `theme=${document.body.classList.contains('dark') ? 'dark' : 'light'}`;
});

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/sw.js', { scope: '/' }).then(function(reg) {
    console.log('Registration succeeded. Scope is ' + reg.scope);
  }).catch(function(error) {
    console.log('Registration failed with ' + error);
  });
};
