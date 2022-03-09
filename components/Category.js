import Header from "./Header";
import PostListing from "./PostListing";

function Category({ posts, categories }) {
    return (
        <>
            <Header />
            <PostListing posts={posts} categories={categories} />
        </>
    )
}

export default Category;