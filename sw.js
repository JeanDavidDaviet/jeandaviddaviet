self.addEventListener('fetch', event => {
  const url = new URL(event.request.url);
  if (event.request.method === 'POST' && url.pathname === '/share') {
    event.respondWith((async () => {
      const formData = await event.request.formData();
      const params = new URLSearchParams(formData).toString();
      return Response.redirect(`/wp-admin/post-new.php?post_type=link&${params}`, 303);
    })());
  }
});