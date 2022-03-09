import { LINKS_API_URL } from "./const";

export const getAllLinks = async () => {
    const res = await fetch(LINKS_API_URL)
    const links = await res.json()
    return links;
}