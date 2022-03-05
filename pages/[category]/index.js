import PostListing from "../../components/PostListing";
import { getAllCategories, getCategoriesByPosts, getCategoryBySlug } from "../../helpers/category";

function Blog({ posts, categories }) {
    return <PostListing posts={posts} categories={categories} />
}
  
// This function gets called at build time on server-side.
// It won't be called on client-side, so you can even do
// direct database queries.
export async function getStaticProps({ params: { category } }) {
    // Call an external API endpoint to get posts.
    // You can use any data fetching library
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
        fallback: false // false or 'blocking'
    };
}

export default Blog