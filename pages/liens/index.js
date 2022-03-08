import Header from "../../components/Header";
import LinkListing from "../../components/LinkListing";
import { getAllLinks } from "../../helpers/links";

function Links({ links }) {
    return (
        <>
            <Header />
            <LinkListing links={links} />
        </>
    )
}

export async function getStaticProps() {
    const links = await getAllLinks();

    return {
        props: {
            links
        },
    }
}

export default Links