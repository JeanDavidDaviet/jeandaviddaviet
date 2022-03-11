import Head from 'next/head'
import Header from '../components/Header'
import Catchphrase from '../components/Catchphrase';
import LastArticles from '../components/LastArticles'
import LastCategories from '../components/LastCategories'
import Testimonies from '../components/Testimonies';
import { getAllCategories } from '../helpers/category';
import { getAllPosts } from '../helpers/post';
import { getAllTestimonies } from '../helpers/testimonies';

export default function Home({ posts, categories, testimonies }) {
  return (
    <div className="container">
      <Head>
        <title>Create Next App</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Header />
      <Catchphrase />
      <Testimonies testimonies={testimonies} />
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
  const testimonies = await getAllTestimonies();

  return {
      props: {
          posts,
          categories,
          testimonies
      },
  }
}