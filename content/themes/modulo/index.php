<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modulo</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <nav class="navbar">
                <div class="navbar-brand">
                    <a href="#" class="navbar-item">
              <span class="logo" style="background-image: url(logo/logo-bleu.png)";></span>
            </a>
                    <a href="#" class="navbar-item social">
              <span class="icon">
                <i class="fa fa-facebook"></i>
              </span>
            </a>
                    <a href="#" class="navbar-item social">
              <span class="icon">
                <i class="fa fa-twitter"></i>
              </span>
            </a>
                    <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
                </div>

                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-end menu">
                        <a href="#" class="navbar-item is-active">Qui sommes nous</a>
                        <a href="#" class="navbar-item">Sercices</a>
                        <a href="#" class="navbar-item">Références</a>
                        <a href="#" class="navbar-item">Actualitées</a>

                    </div>
                </div>
            </nav>
        </header>

        <div class="container">

            <div class="aside">
                <div class="aside__image">
                    <img src="images/domenico-loia-310197-unsplash.jpg" alt="">
          </div>
                <div class="aside__title">
                    <h1>Agence Modulo</h1>
                </div>
            </div>
        </div>

        <section class="pages">
            <div class="section__one">
                <h2 class="section__one__title">Qui sommes nous</h2>
                <p class="section__one__text">Nous sommes une agence web fictive,
                    pour permettre à la créatrice de montrer son savoir faire en wordpress. Cette agence sera peut être un jour réel !</p>
            </div>

            <div class="section__two">
                <h2 class="section__two__title">Services</h2>
                <p class="section__two__text">Nous proposons la création de site en Wordpress, mais aussi le référencement,design et création de logos, identité visuelle, communication web</p>
            </div>
            <div class="section__three">
                <h2 class="section__three__title">Références</h2>
                <p class="section__three__text">Ce trouve ici les projets de fin d'études, ainsi que les projets personnels</p>
            </div>
            <div class="section__four">
                <h2 class="section__four__title">Actualités</h2>
                <p class="section__four__text">Pour suivre notre avancé, ainsi que les nouvelles créations !</p>
            </div>
        </section>

        <div class="container">
            <section class="section-contact">
                <h3 class="section-contact-title">Des projets ? des questions ?</h3>
                <p>contactez-nous au +33 (0)624 758 612 ou par mail modulo@gmail.com</p>
                <button class="button-contact">Contactez-nous</button>
            </section>
        </div>
        <div class="container">
            <div class="section-divers">
                <div class="columns">
                    <div class="column">
                        <h3 class="column-title">Agence Modulo</h3>
                        <p class="column-text">Agence Modulo crée en 2018 pour servir de vitrine à un développeur web en reconversions</p>
                    </div>
                    <div class="column">
                        <h3 class="column-title">Services</h3>
                        <a href="#">Exemples de sites</a>
                        <a href="#">Newsletter</a>
                        <a href="#">A venir...</a>
                    </div>
                    <div class="column">
                        <h3 class="column-title">Newsletter</h3>
                        <input class="input" type="email" placeholder="Email">
                        <button class="button is-link">Inscrivez-vous</button>
                    </div>
                    <div class="column">
                        <h3 class="column-title">Nos références</h3>
                        <a href="#" class="site-image">site 1</a>
                        <a href="#" class="site-image">site 2</a>
                        <a href="#" class="site-image">site 3</a>
                        <a href="#" class="site-image">site 4</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p class="footer-text">Agence Modulo &#169;-2018</p>
            <a href="#" class="footer-cgu">Mentions légales</a>
        </footer>
    </div>

    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
</body>

</html>

}
