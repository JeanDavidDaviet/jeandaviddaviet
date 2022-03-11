import Head from 'next/head'
import Header from '../components/Header'
import Catchphrase from '../components/Catchphrase';
import LastArticles from '../components/LastArticles'
import LastCategories from '../components/LastCategories'
import { getAllCategories } from '../helpers/category';
import { getAllPosts } from '../helpers/post';

export default function Home({ posts, categories }) {
  return (
    <div className="container">
      <Head>
        <title>Create Next App</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Header />
      <Catchphrase />
      <LastArticles posts={posts} />
      <LastCategories categories={categories} />
    </div>
  )
}


export async function getStaticProps() {
  let posts = await getAllPosts();
  posts = posts.slice(0, 3);
  let categories = await getAllCategories();
  categories = categories.slice(0, 6);

  return {
      props: {
          posts,
          categories
      },
  }
}