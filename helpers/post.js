import { getCategoryById } from "./category";
import { POSTS_API_URL } from "./const";

export const getAllPosts = async () => {
    const res = await fetch(POSTS_API_URL);
    const posts = await res.json();
    return posts;
}

export const getPostCategories = async (categoriesId) => {
  return await Promise.all(categoriesId.map(async categoryId => {
    return await getCategoryById(categoryId);
  }));
}