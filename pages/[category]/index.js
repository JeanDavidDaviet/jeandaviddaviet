import PostListing from "../../components/PostListing";
import { getAllCategories, getCategoriesByPosts, getCategoryBySlug } from "../../helpers/category";

function Blog({ posts, categories }) {
    return <PostListing posts={posts} categories={categories} />
}

export async function getStaticProps({ params: { category } }) {
    const categoryObject = await getCategoryBySlug(category);
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/posts?categories=' + categoryObject.id)
    const posts = await res.json()
    const categories = await getCategoriesByPosts(posts);

    return {
        props: {
            posts,
            categories
        },
    }
}

export async function getStaticPaths() {
    const categories = await getAllCategories();
  
    const paths = categories.map(category => { return { params: { category: category.slug } } });
    return {
        paths: paths,
        fallback: false
    };
}

export default Blog