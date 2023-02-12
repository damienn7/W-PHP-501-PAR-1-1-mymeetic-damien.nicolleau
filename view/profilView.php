<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My meetic - Mon profil</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <header class="header-container-home">
        <nav class="header-container_nav-container">
            <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/positive-75570a615a9.svg"
                class="header-container_nav-container_logo" alt="meetic logo">
            <ul class="header-container_nav-container_ul">
                <li class="header-container_nav-container_ul_li">Rechercher</li>
                <li class="header-container_nav-container_ul_li">Like</li>
            </ul>

            <img src="../avatar.jpg" class="header-container_nav-container_dropdown_img-top" alt="avatar picture">
            <div class="header-container_nav-container_dropdown">
                <ul class="header-container_nav-container_dropdown_ul">
                    <img src="../avatar.jpg" class="header-container_nav-container_dropdown_img-bottom"
                        alt="avatar picture">
                    <li class="header-container_nav-container_dropdown_ul_li">
                        <form action="../public/index.php" method="POST"
                            class="header-container_nav-container_dropdown_ul_li_form">
                            <button class="btn--dropdown" name="see-home" value="see-profil">
                                <span class="material-symbols-outlined">
                                    home
                                </span><span class="text">Accueil</span>
                            </button>
                            <button class="btn--dropdown" name="logout" value="logout">
                                <span class="material-symbols-outlined">
                                    logout
                                </span> <span class="text">Se deconnecter</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main-container-home">

    </main>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../public/js/script.js"></script>
</body>

</html>