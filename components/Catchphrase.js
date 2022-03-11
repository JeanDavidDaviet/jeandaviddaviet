const Catchphrase = () => (
    <div className="catchphrase col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
        <picture className="catchphrase-picture">
            <source type="image/avif" data-lazy-srcset="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.avif" alt="" srcSet="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.avif"></source>
            <source type="image/webp" data-lazy-srcset="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.webp" alt="" srcSet="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.webp"></source>
            <img className="catchphrase-image entered lazyloaded" src="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.png" alt="" data-lazy-src="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.png" data-ll-status="loaded" />
            <noscript><img className="catchphrase-image" src="https://jeandaviddaviet.fr/wp-content/themes/jdd4/dist/img/jd.png" alt="" /></noscript>
        </picture>
        <blockquote className="catchphrase-quote">
            <p className="catchphrase-text">J'aide les organisations de petites et moyennes tailles à développer leur projets internets.</p>
            <p className="catchphrase-author reveal">– Jean-David Daviet</p>
        </blockquote>
    </div>
)

export default Catchphrase;