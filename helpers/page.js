import { PAGES_API_URL } from "./const";

export const getAllPages = async () => {
    const res = await fetch(PAGES_API_URL);
    let pages = await res.json();
    return pages;
}

export const getPageBySlug = async (slug) => {
    const res = await fetch(PAGES_API_URL);
    const pages = await res.json();
    return pages.find(page => page.slug === slug);
}