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