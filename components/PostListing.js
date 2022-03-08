const CategoryLink = ({category}) => {
    return category.id !== 1 ? <p className="article-dossier" key={category.id}><a href={category.slug}>{category.name}</a></p> : null;
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
                    <a href={chosenCategory.slug + '/' + post.slug} dangerouslySetInnerHTML={{ __html: post.title.rendered }}></a>
                    <DateTime post={post} />
                </h2>
                {categories.map(category => <CategoryLink category={category} />)}
                <div dangerouslySetInnerHTML={{ __html: post.excerpt.rendered }}></div>
          </article>
        ))}
      </>
    )
}

export default PostListing;