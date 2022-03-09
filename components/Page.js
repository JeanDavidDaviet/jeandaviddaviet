import Header from "./Header";

function Page({ page }) {
    return (
        <>
            <Header />
            <div dangerouslySetInnerHTML={{ __html: page.content.rendered }}></div>
        </>
    )
}

export default Page;