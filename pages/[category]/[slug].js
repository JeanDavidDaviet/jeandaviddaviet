import { getCategoryById } from "../../helpers/category";
import { getAllPosts, getPostCategories } from "../../helpers/post";

function Blog({ post }) {
  const date = new Date(post.date).toLocaleDateString('fr-FR');
  return (
    <article key={post.id} itemType="https://schema.org/Article">
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

export async function getStaticProps({ params: { category, slug } }) {
  const posts = await getAllPosts();
  const post = posts.filter(p => p.slug === slug)[0];
  post.categories = await getPostCategories(post.categories);

  return {
    props: {
      post
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
    fallback: false
  };
}


export default Blog