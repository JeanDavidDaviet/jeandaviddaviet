export const getAllCategories = async () => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories')
    const categories = await res.json()
    return categories;
}

export const getCategoryById = async (id) => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories/' + id)
    const category = await res.json()
    return category;
}

export const getCategoryBySlug = async (slug) => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories')
    const categories = await res.json();
    const category = categories.filter(category => category.slug === slug);
    console.log(slug, category);
    return category.length ? category[0] : null;
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