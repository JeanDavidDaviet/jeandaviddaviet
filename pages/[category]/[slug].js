import { getAllCategories, getCategoryById } from "../../helpers/category";
import { getAllPosts } from "../../helpers/post";

function Blog({ post, categories }) {
  const date = new Date(post.date).toLocaleDateString('fr-FR');
  return (
    <article itemType="https://schema.org/Article">
        <h1 itemProp="name" className="article-title">{post.title.rendered}</h1>
        <time className="article-meta" dateTime={date} itemProp="datePublished"><small>Publié le {date} par {post.author} dans {post.categories.map((category, index) => (
          <span key={category.id}>
            <a href={'/' + category.slug} rel="category tag">{category.name}</a>
            {index ? '' : ', '}
          </span>
        ))} </small></time>
        <div className="article-content" dangerouslySetInnerHTML={{ __html: post.content.rendered }}></div>
      </article>
  )
}

// This function gets called at build time on server-side.
// It won't be called on client-side, so you can even do
// direct database queries.
export async function getStaticProps({ params: { category, slug } }) {
  const posts = await getAllPosts();
  const categories = await getAllCategories()
  const post = posts.filter(p => p.slug === slug)[0];

  post.categories = await Promise.all(post.categories.map(async category => {
    return await getCategoryById(category);
  }));

  return {
    props: {
      post,
      categories
    },
  }
}

export async function getStaticPaths() {
  const posts = await getAllPosts();

  const paths = await Promise.all(posts.flatMap(post => {
    return post.categories.map( async categoryId => {
      let category = await getCategoryById(categoryId);
      if(category.slug === undefined){
        category.slug = 'articles';
      }
      return { params: { category: category.slug, slug: post.slug } };
    });
  }));

  return {
    paths: paths,
    fallback: false // false or 'blocking'
  };
}


export default Blog