import PostListing from "../../components/PostListing";
import { getCategoriesByPosts } from "../../helpers/category";

function Blog({ posts, categories }) {
    return <PostListing posts={posts} categories={categories} />
}

export async function getStaticProps() {
    const posts = await getAllPosts();
    const categories = await getCategoriesByPosts(posts);

    return {
        props: {
            posts,
            categories
        },
    }
}

export default Blog