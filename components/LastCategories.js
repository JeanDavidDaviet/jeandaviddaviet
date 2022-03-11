import Link from "next/link";

const LastCategories = ({ categories }) => (
    <div className="homepage-last">
        <h3 className="homepage-last-title">Les derniers dossiers</h3>
        {categories.map((category) => (
            <p key={category.id} ><Link href={category.slug}><a className="homepage-last-link" dangerouslySetInnerHTML={{ __html: category.name }}></a></Link></p>
        ))}
        <p><Link href="/dossiers"><a className="homepage-last-link-more">Plus de dossiers</a></Link></p>
    </div>
)

export default LastCategories;