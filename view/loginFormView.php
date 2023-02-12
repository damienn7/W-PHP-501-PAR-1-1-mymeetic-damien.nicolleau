<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My meetic - Connexion</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <header class="header-container">
        <nav class="header-container_nav-container">
            <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/positive-75570a615a9.svg"
                class="header-container_nav-container_logo" alt="meetic logo">
            <ul class="header-container_nav-container_ul">
                <li class="header-container_nav-container_ul_li">Soirees celibataires</li>
                <li class="header-container_nav-container_ul_li">Rencontres celibataires en France</li>
                <li class="header-container_nav-container_ul_li">Rencontrer des femmes</li>
                <li class="header-container_nav-container_ul_li">Rencontrer des hommes</li>
            </ul>
            <a href="../view/registerFormView.php" class="btn btn--green-outlined">
                S'inscrire &rarr;
            </a>
        </nav>
    </header>
    <main class="main-container">
        <div class="main-container_div-logo">
            <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/pinkwhite-44d5e901294.svg" width="290"
                height="90" class="main-container_div-logo_img" alt="logo meetic">
            <h1 class="main-container_div-logo_h1-slogan">Serious Dating, Crazy Love*</h1>
        </div>
        <!-- <div class="main-container_div-bot">
            <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                class="main-container_div-bot_img" alt="bot picture">
            <div class="main-container_div-bot_div-column">
                <p class="main-container_div-bot_div-column_p">Bonjour, je suis la coach Meetic.</p>
                <span class="main-container_div-bot_div-column_span">Que recherchez vous ?</span>
            </div>
        </div> -->
        <form action="../public/index.php" method="POST" name="submit_connection" class="main-container_form">
            <div class="main-container_form_div-sixth-part part">
                <div class="main-container_form_div-fifth-part_row margin-top">
                    <input type="email" name="email-login" class="input-firstname" placeholder="Indiquez votre adresse email">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
            </div>
            <div class="main-container_form_div-seventh-part part">
                <div class="main-container_form_div-fifth-part_row margin-top">
                    <input type="password" name="password-login" class="input-firstname"
                        placeholder="Indiquez votre mot de passe" value="motdepasse">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
                <button type="submit" class="btn btn--green-filled margin-top" name="submit_connection" value="submit">
                    Se connecter
                </button>
            </div>
        </form>
    </main>
    <script src="../public/js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>