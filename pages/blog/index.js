import Header from "../../components/Header";
import PostListing from "../../components/PostListing";
import { getCategoriesByPosts } from "../../helpers/category";
import { getAllPosts } from "../../helpers/post";

function Blog({ posts, categories }) {
    return (
        <>
            <Header />
            <PostListing posts={posts} categories={categories} />
        </>
    )
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