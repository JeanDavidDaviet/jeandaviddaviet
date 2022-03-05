import { getAllCategories, getCategoryBySlug } from "../../helpers/category";

const CategoryLink = ({category}) => {
    return category.id !== 1 ? <p className="article-dossier" key={category.id}><a href={category.slug}>{category.name}</a></p> : null;
}

const DateTime = ({post}) => {
    const date = new Date(post.date).toLocaleDateString('fr-FR');
    return <time dateTime="{date}" itemProp="datePublished"><small> - {date}</small></time>;
}

// posts will be populated at build time by getStaticProps()
function Blog({ posts, categories }) {
    // console.log(categories);
    return (
      <ul>
        {posts.map((post) => (
            <article key={post.id} itemScope itemType="https://schema.org/Article" className="article-content">
                <h2 itemProp="name">
                    <a href={categories[0].slug + '/' + post.slug}>{post.title.rendered}</a>
                    <DateTime post={post} />
                </h2>
                {categories.map(category => <CategoryLink category={category} />)}
                {post.excerpt.rendered}
          </article>
        ))}
      </ul>
    )
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

    let categorySet = new Set(posts.map(p => p.categories).flatMap(cat => cat));
    const categories = [];
    for(const categoryId of categorySet){
        const res = await fetch('https://jeandaviddaviet.fr/wp-json/wp/v2/categories/' + categoryId)
        const category = await res.json();
        categories.push(category);
    }

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
    console.log(paths);
    return {
      paths: paths,
      fallback: false // false or 'blocking'
    };
  }
  
  
  export default Blog