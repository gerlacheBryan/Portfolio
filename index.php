<?php
$email = sendEmail()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="stylesheet" href=" <?= get_template_directory_uri(); ?>/src/scss/style.css">
    <title>Portfolio</title>
</head>
<body>
<main>
    <section class="accueil">
        <h1 role="heading" aria-level="1">
            Gerlache Bryan
        </h1>
        <h2 role="heading" aria-level="2">
            Web Designer
        </h2>
        <div class="burger">
            <span>

            </span>
        </div>
        <ul>
            <li>
                <a href="#1"> Présentation </a>
            </li>
            <li>
                <a href="#2"> Projects </a>
            </li>
            <li>
                <a href="#3"> Contact </a>
            </li>
        </ul>
        <div class="ArrowScroll">
            <p>
                Scrollez pour découvrir mon histoire !
            </p>
            <div class="box">
                <div class="arrow">
                </div>
            </div>
        </div>
        <canvas id="canvas1"></canvas>
    </section>
    <section class="presentation" id="1">
        <div class="wave wave1">
        </div>
        <div class="wave wave2">
        </div>
        <div class="wave wave3">
        </div>
        <div class="wave wave4">
        </div>
        <div class="content">
            <h2>
                Présentation
            </h2>
        </div>
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="<?= get_template_directory_uri(); ?>/Images/moi.jpg" alt="photo de moi">
                </div>
                <div class="content2">
                    <h3 aria-level="3">
                        Gerlache Bryan
                    </h3>
                    <p class="paragraphePresentation">
                        Je m'appelle Bryan Gerlache. Je suis étudiant en Infographie à l'HEPL de Seraing.
                        Après avoir fait un an en informatique de gestion, je me rends compte que les études
                        d'infographie me correspondait mieux. Aujourd'hui, cela fait 3 ans que j'essaye de décrocher
                        mon diplôme. Je suis passioné par la nouvelle technologique, les mangas, les séries, jeux vidéos, le
                        sport et j'aime passer du temps avec mes proches. Mon but est d'être polyvalent dans le milieu professionnel,
                        que ce soit en front-end et du back-end afin de répondre au mieux à vos désirs et à vos souhaits.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="projets" id="2">
        <h2 aria-level="2" role="heading" class="titreProjet">
            <span class="espace"><span class="neon">M</span><span class="neon">e</span><span class="neon">s</span></span> <span class="neon">p</span><span class="neon">r</span><span class="neon">o</span><span class="neon">j</span><span class="neon">e</span><span class="neon">t</span><span class="neon">s</span>
        </h2>
        <div class="global">
            <div class="projet">
                <a href="https://color.adobe.com/fr/search?q=orange" class="invisible"><img src="" alt= "nom de ton image" class="invisible"></a>
            </div>
            <div class="projet">
                <a href="http://www.journaldunet.com/business/salaire/ambulancier/salaire-00044" class="invisible"><img src="" alt= "nom de ton image" class="invisible"></a>
            </div>
        </div>
    </section>
    <section class="contact" id="3">
        <h2 aria-level="2" role="heading" class="titreContact">
            Me contacter
        </h2>
        <form method="post" action="#">
            <div class="contactNom">
                <label for="preNom">
                    Nom complet
                </label>
                <input type="text" name="preNom" id="preNom">
            </div>
            <div class="contactTelephone">
                <label for="telephone">
                    Numéro de téléphone
                </label>
                <input type="tel" name="telephone" id="telephone">
            </div>
            <div class="contactLangue">
                <label for="langue">
                    Langue
                </label>
                <select name="langue" id="langue">
                    <option value="Français">Français</option>
                    <option value="Anglais">Anglais</option>
                    <option value="Néerlandais">Néerlandais</option>
                </select>
            </div>
            <div class="contactEmail">
                <label for="email">
                    Adresse e-mail
                </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="contactDemande">
                <label for="demande">
                    Votre demande
                </label>
                <textarea name="demande" id="demande"></textarea>
            </div>
            <div class="contactBouton">
                <button type="submit" name="envoyer">
                    Envoyer
                </button>
            </div>
        </form>
        <div class="social-media">
            <a class="facebook"  href="facebook.com" title="lien vers facebook"></a>
            <a class="twitter"   href="twitter.com"  title="lien vers twitter"></a>
            <a class="linkedin"  href="linkedin.com" title="lien vers linkedin"></a>
        </div>
    </section>
</main>
<script src="<?= get_template_directory_uri(); ?>/src/js/particules.js"></script>
<script src="<?= get_template_directory_uri(); ?>/src/js/responsive.js"></script>
</body>
</html>
