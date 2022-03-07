const Header = () => {
    return (
        <>
        <header className="header">
            <h1 className="header-title"><a href="/" className="header-title-link">Jean-David Daviet</a></h1>
            <nav className="navbar">
                <ul className="navbar-list">
                    <li className="navbar-item"><a className="navbar-link" href="/developpement-sites-wordpress">WordPress</a></li><li className="navbar-item"><a className="navbar-link" href="/blog">Blog</a></li><li className="navbar-item"><a className="navbar-link" href="/dossiers">Dossiers</a></li><li className="navbar-item"><a className="navbar-link" href="/en-vrac">En vrac</a></li>
                    <li className="navbar-item"><a className="navbar-link" href="/liens">Liens</a></li>
                </ul>
            </nav>
        </header>
      </>
    )
}

export default Header;