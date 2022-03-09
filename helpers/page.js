export const getAllPages = async () => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/pages')
    let pages = await res.json()
    return pages;
}

export const getPageBySlug = async (slug) => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/pages')
    const pages = await res.json();
    return pages.find(page => page.slug === slug);
}