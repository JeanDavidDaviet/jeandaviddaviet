import Link from "next/link";

const LastArticles = ({ posts }) => (
    <div className="homepage-last">
        <h3 className="homepage-last-title">Les derniers articles</h3>
        {posts.map((post) => (
            <p key={post.id} ><Link href={post.slug}><a className="homepage-last-link" dangerouslySetInnerHTML={{ __html: post.title.rendered }}></a></Link></p>
        ))}
        <p><Link href="/blog"><a className="homepage-last-link-more">Plus d'articles</a></Link></p>
    </div>
)

export default LastArticles;