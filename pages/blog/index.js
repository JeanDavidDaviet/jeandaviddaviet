import PostListing from "../../components/PostListing";
import { getCategoriesByPosts } from "../../helpers/category";

function Blog({ posts, categories }) {
    return <PostListing posts={posts} categories={categories} />
}
  
// This function gets called at build time on server-side.
// It won't be called on client-side, so you can even do
// direct database queries.
export async function getStaticProps() {
    // Call an external API endpoint to get posts.
    // You can use any data fetching library
    const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/posts')
    const posts = await res.json()
    const categories = await getCategoriesByPosts(posts);

    return {
        props: {
            posts,
            categories
        },
    }
}

export default Blog