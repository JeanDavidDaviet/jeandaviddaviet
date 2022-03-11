import { TESTIMONIES_API_URL } from "./const"

export const getAllTestimonies = async () => {
    const res = await fetch(TESTIMONIES_API_URL);
    return await res.json();
}