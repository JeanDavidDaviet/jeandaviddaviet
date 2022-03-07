import { getCategoryById } from "./category";

export const getAllPosts = async () => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/posts')
    const posts = await res.json()
    return posts;
}

export const getPostCategories = async (categoriesId) => {
  return await Promise.all(categoriesId.map(async categoryId => {
    return await getCategoryById(categoryId);
  }));
}