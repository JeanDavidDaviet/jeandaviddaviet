import Link from "next/link";
import Header from "../../components/Header";
import { getAllCategories } from "../../helpers/category";

function Dossiers({ categories }) {
    return (
        <>
            <Header />
            {categories.map((category) => (
                <article key={category.id} itemScope="" itemType="https://schema.org/Article" className="article__content">
                    <h2 itemProp="name">
                        <Link href={'/' + category.slug}><a>{category.name}</a></Link>
                    </h2>
                </article>
            ))}
        </>
    )
}

export async function getStaticProps() {
    let categories = await getAllCategories();
    categories = categories.filter(category => category.id !== 1)

    return {
        props: {
            categories
        },
    }
}

export default Dossiers;