import Link from "next/link";

const CategoryLink = ({category}) => {
    return category.id !== 1 ? <p className="article-dossier" key={category.id}><Link href={category.slug}><a>{category.name}</a></Link></p> : null;
}

export const DateTime = ({post}) => {
    const date = new Date(post.date).toLocaleDateString('fr-FR');
    return <time dateTime={date} itemProp="datePublished"><small>{ ' - ' + date}</small></time>;
}

const PostListing = ({ posts, categories }) => {
    const chosenCategory = categories.find(category => category.id !== 1)
    return (
      <>
        {posts.map((post) => (
            <article key={post.id} itemScope itemType="https://schema.org/Article" className="article-content">
                <h2 itemProp="name">
                    <Link href={chosenCategory.slug + '/' + post.slug}><a dangerouslySetInnerHTML={{ __html: post.title.rendered }}></a></Link>
                    <DateTime post={post} />
                </h2>
                {categories.map(category => <CategoryLink key={category.id} category={category} />)}
                <div dangerouslySetInnerHTML={{ __html: post.excerpt.rendered }}></div>
          </article>
        ))}
      </>
    )
}

export default PostListing;