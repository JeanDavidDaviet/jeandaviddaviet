export const getAllCategories = async () => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories')
    return await res.json()
}

export const getCategoryById = async (id) => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories/' + id)
    return await res.json()
}

export const getCategoryBySlug = async (slug) => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories')
    const categories = await res.json();
    return categories.find(category => category.slug === slug);
}

export const getCategoriesByPosts = async (posts) => {
    let categorySet = new Set(posts.map(p => p.categories).flatMap(cat => cat));
    const categories = [];
    for(const categoryId of categorySet){
        const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories/' + categoryId)
        const category = await res.json();
        categories.push(category);
    }
    return categories;
}