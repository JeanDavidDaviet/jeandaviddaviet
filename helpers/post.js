export const getAllPosts = async () => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/posts')
    const posts = await res.json()
    return posts;
}