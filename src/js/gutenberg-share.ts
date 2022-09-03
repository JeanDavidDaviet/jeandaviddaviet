window.addEventListener('load', () => {
  const url = new URLSearchParams(window.location.search)
  const title = url.get('title');
  const link = url.get('link');

  if(title !== null){
    wp.data.dispatch('core/editor').editPost({title})
  }

  if(link !== null){
    const input = document.querySelector('[data-name="link"] input') as HTMLInputElement;
    if(input !== null){
      input.value = link + '';
    }
  }
})
