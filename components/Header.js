import Link from "next/link";

const Header = () => {
    return (
        <>
        <header className="header">
            <h1 className="header-title"><Link href="/"><a className="header-title-link">Jean-David Daviet</a></Link></h1>
            <nav className="navbar">
                <ul className="navbar-list">
                    <li className="navbar-item"><Link href="/developpement-sites-wordpress"><a className="navbar-link">WordPress</a></Link></li>
                    <li className="navbar-item"><Link href="/blog"><a className="navbar-link">Blog</a></Link></li>
                    <li className="navbar-item"><Link href="/dossiers"><a className="navbar-link">Dossiers</a></Link></li>
                    <li className="navbar-item"><Link href="/en-vrac"><a className="navbar-link">En vrac</a></Link></li>
                    <li className="navbar-item"><Link href="/liens"><a className="navbar-link">Liens</a></Link></li>
                </ul>
            </nav>
        </header>
      </>
    )
}

export default Header;