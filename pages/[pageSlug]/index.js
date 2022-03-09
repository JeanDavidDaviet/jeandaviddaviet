import { getAllCategories, getCategoriesByPosts, getCategoryBySlug } from "../../helpers/category";
import { getAllPages, getPageBySlug } from "../../helpers/page";
import Page from "../../components/Page";
import Category from "../../components/Category";
import { POSTS_API_URL } from "../../helpers/const";

function PageOrCategory(props) {
    if(props.page !== undefined){
        return <Page page={props.page} />
    }else{
        return <Category posts={props.posts} categories={props.categories} />
    }
}

export async function getStaticProps({ params: { pageSlug } }) {
    const page = await getPageBySlug(pageSlug);
    if(page === undefined){
        const categoryObject = await getCategoryBySlug(pageSlug);
        const res = await fetch(POSTS_API_URL + '?categories=' + categoryObject.id)
        const posts = await res.json()
        const categories = await getCategoriesByPosts(posts);

        return {
            props: {
                posts,
                categories,
            },
        }
    }else{
        return {
            props: {
                page,
            },
        }
    }
}

export async function getStaticPaths() {
    const pages = await getAllPages();
    const categories = await getAllCategories();
  
    const paths = [].concat(
        pages.map(page => { return { params: { pageSlug: page.slug } } }),
        categories.map(category => { return { params: { pageSlug: category.slug } } })
    );
    
    return {
        paths: paths,
        fallback: false
    };
}

export default PageOrCategory