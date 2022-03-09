import { DateTime } from "./PostListing";

const LinkListing = ({ links }) => {
    return (
      <>
        {links.map((link) => (
            <article key={link.id} itemScope itemType="https://schema.org/Article" className="article-content">
                <h2 itemProp="name">
                    <Link href={link.link}><a dangerouslySetInnerHTML={{ __html: link.title.rendered }}></a></Link>
                    <DateTime post={link} />
                </h2>
                <div dangerouslySetInnerHTML={{ __html: link.content.rendered }}></div>
          </article>
        ))}
      </>
    )
}

export default LinkListing;