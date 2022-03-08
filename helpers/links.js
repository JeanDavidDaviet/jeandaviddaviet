export const getAllLinks = async () => {
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/link')
    const links = await res.json()
    return links;
}