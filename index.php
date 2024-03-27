<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
    <title>Accueil</title>
</head>
<body>
    <?php
    include_once('includes/form.php');
    ?>
    <!-- Header -->
    <header>
        <div id="header_fond">
            <div class="five_rub flex">
                <a href="#presentation">
                    <div id="grey_circle">
                        <img src="ressources/logo.png" id="logo" >
                    </div>
                </a>
                <div id="skills" class="dealerplate title"><a href="#myskills"><h1>Compétences</h1></a></div>
                <div id="works" class="dealerplate title"><a href="#myworks"><h1>Réalisations</h1></a></div>
                <div id="contact" class="dealerplate title"><a href="#sendmessage"><h1>Contact</h1></a></div>
                <div id="resume" class="dealerplate2 title">
                    <a href="ressources/CV_LE_MOIL_Arno.pdf" download="ressources/CV_LE_MOIL_Arno.pdf">
                        <h1 class="myresume">Mon CV</h1>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Première partie -->
    <section id="presentation">
        <div id="titre_div"><h2 id="titre">Salut ! Je suis</h2></div>
        <div id="arno"><h1 id="nom">Le Moil Arno</h1></div>
        <div id="presentation_content">
            <div id="black_border">
                <img src="ressources/profil.png" id="profil">
            </div>
            <p id="presentation_text">Je suis un étudiant en BUT Métiers du multimédia et de l'Internet. Je suis passionné par le développement web, et j'aimerai devenir développeur full stack dans le futur.</p>
        </div>
    </section>
    <!-- Deuxième partie -->
    <section id="myskills">
        <div data-aos="fade-right" id="titre2_div"><h1 id="titre2">COMPÉTENCES</h1></div>
        <div id="myskills_text_div">
            <p data-aos="fade-up-left" id="myskills_text">J'ai des connaissances en front-end et en back-end, mais aussi en base données.</p>
        </div>
        <div class="exemples flex">
            <div data-aos="fade-right" id="languages_div">
                <ul id="languages">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>SQL</li>
                </ul>
            </div>
            <div data-aos="fade-up-left" id="languages_img_div">
                <div class="flex">
                    <img id="sql" src="ressources/sql.png" alt="sql">
                    <img id="php" src="ressources/php.png" alt="php">
                </div>
                <div class="flex">
                    <img id="javascript" src="ressources/javascript.png" alt="javascript">
                    <img id="html" src="ressources/html.png" alt="html">
                    <img id="css" src="ressources/css.png" alt="css">
                </div>
            </div>
        </div>
    </section>
    <!-- Troisième partie -->
    <section id="myworks">
        <div data-aos="fade-right" id="titre3_div"><h1 id="titre3">MES RÉALISATIONS</h1></div>
        <div id="myworks_text_div">
            <p data-aos="fade-up-left" id="myworks_text">Voici quelques-unes de mes réalisations, cliquez sur les rubriques pour les voir plus en détail !</p>
        </div>
        <div data-aos="fade-up-left" id="works_content" class="works_content flex">
            <div class="works">
                <h2 class="works_title">SITE WEB</h2>
                <p class="works_text">Un site web de réservation de matériel</p>
                <input class="works_button" type="button" value="Voir plus" onclick="works()">
            </div>
            <div class="works">
                <h2 class="works_title">PLANCHE D'INSPIRATION</h2>
                <p class="works_text">Voici une des mes création, sur un thème blanc et noir</p>
                <input class="works_button" type="button" value="Voir plus" onclick="works2()">
            </div>
            <div class="works">
                <h2 class="works_title">AFFICHE PUBLICITAIRE</h2>
                <p class="works_text">Lorem ipsum dolor. Donec blandit molestie.</p>
                <input class="works_button" type="button" value="Voir plus" onclick="works3()">
            </div>
        </div>
        <!--Works JS-->
        <div data-aos="fade-up-left" id="sae203_js" class="cache">
            <img id="sae203" src="ressources/sae203.jpg">
            <div id="close">
                <a class="button_close"><input class="x" type="button" value="X" onclick="works()"></a>
            </div>
            <div id="content_js">
                <h2 id="titre_js">Site de réservation</h2>
                <p id="text_js">Ce site web pourrait permettre aux étudiants du BUT de Meaux de réserver du matériel audiovisuel. Il a été réalisé en binôme, en 2 mois.<br><br><strong>Date de réalisation : Avril - Juin 2023</strong>
                </p>
            </div>
        </div>
        <div data-aos="fade-up-left" id="proverbe_js" class="cache">
            <img id="proverbe" src="ressources/proverbe.jpg">
            <div id="close">
                <a class="button_close"><input class="x" type="button" value="X" onclick="works2()"></a>
            </div>
            <div id="content2_js">
                <h2 id="titre_js">PLANCHE D'INSPIRATION</h2>
                <p id="text_js">J'ai réalisé cette planche sur un thème noir et blanc. L'objectif était de mettre en forme une expression française de notre choix de manière artistique<br><br><strong>Date de réalisation : 20/04/2023</strong>
                </p>
            </div>
        </div>
        <div data-aos="fade-up-left" id="affiche_js" class="cache">
            <img id="affiche" src="ressources/affiche.jpg">
            <div id="close">
                <a class="button_close"><input class="x" type="button" value="X" onclick="works3()"></a>
            </div>
            <div id="content3_js">
                <h2 id="titre_js">AFFICHE PUBLICITAIRE</h2>
                <p id="text_js">Cette affiche était inclue dans un grand projet, et avait pour but de promouvoir le service de téléportation de notre entreprise imaginaire<br><br><strong>Date de réalisation : 13/04/2023</strong>
                </p>
            </div>
        </div>
    </section>
      <!-- Quatrième partie -->
    <section id="sendmessage">
        <div data-aos="fade-right" id="titre4_div"><h1 id="titre4">CONTACTEZ-MOI</h1></div>
        <div>
            <form class="flex" action="index.php" method="POST">
                <div data-aos="fade-right" id="sendmessage_name_div"> 
                    <p class="sendmessage_text">Nom</p>
                    <textarea class="sendmessage_input" type="text" placeholder="Entrez votre nom" name="name"></textarea>
                    <p class="sendmessage_text">Mail</p>
                    <textarea class="sendmessage_input" type="text" placeholder="Entrez votre mail" name="mail"></textarea>
                    <input id="form_button" class="form_button" type="submit" value="Envoyer">
                </div>
                <div data-aos="fade-up-left" id="sendmessage_message_div">
                    <p class="sendmessage_text">Message</p>
                    <textarea id="sendmessage_input2" type="text" placeholder="Écrivez votre message" name="message"></textarea>
                </div>
            </form>
        </div>
    </section>
    <!-- Header -->
    <footer>
        <div id="footer_fond">
            <div id="footer_content">
                <div id="footer_mail">
                    <p>My e-mail : arno.lemoil@gmail.com</p>
                </div>
                <div id="footer_phone">
                    <p>My phone : 07 66 88 52 23</p>
                </div>
                <div class="medias flex">
                    <a id="linkedin" href="https://www.linkedin.com/in/arno-le-moil-29b4b1256/"><img id="linkedin" src="ressources/linkedin.png"></a>
                    <a id="twitter" href="https://twitter.com/LemoilPro"><img id="twitter" src="ressources/twitter.png"></a>
                    <a id="instagram" href="https://twitter.com/LemoilPro"><img id="instagram" src="ressources/instagram.png"></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="javascript/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>