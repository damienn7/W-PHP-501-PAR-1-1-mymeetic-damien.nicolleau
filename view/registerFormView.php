<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My meetic - Inscription</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
            <a href="../view/loginFormView.php" class="btn btn--green-outlined">
                Se connecter
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
        <form action="../public/index.php" method="POST" name="submit_register" class="main-container_form">
            <!-- <div class="main-container_form_div-first-part part">
                <button class="btn btn--green-filled" name="homme" value="homme">
                    Je recherche un homme
                </button>
                <button class="btn btn--green-filled" name="femme" value="autre">
                    Je recherche une femme
                </button>
                <button class="btn btn--green-filled" name="autre" value="autre">
                    Tout le monde
                </button>

            </div> -->
            <div class="main-container_form_div-second-part part">
                <div class="main-container_div-bot">
                    <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                        class="main-container_div-bot_img" alt="bot picture">
                    <div class="main-container_div-bot_div-column">
                        <span class="main-container_div-bot_div-column_span">Etes-vous un homme ou une<br> femme
                            ?</span>
                    </div>
                </div>
                <!-- <button class="btn btn--green-filled" name="homme" value="homme">
                    Je suis un homme
                </button> -->
                <div class="main-container_form_div-second-part_radio-div">
                    <div class="main-container_div-bot space">
                        <input type="radio" id="homme" name="genre" value="homme" class="radio">
                        <label for="homme" class="radio">Je suis un homme</label>
                    </div>
                    <!-- <button class="btn btn--green-filled" name="femme" value="autre">
                    Je suis une femme
                </button> -->
                    <div class="main-container_div-bot space">
                        <input type="radio" id="femme" name="genre" value="femme" class="radio">
                        <label for="femme" class="radio">Je suis une femme</label>
                    </div>
                </div>
                <!-- <button class="btn btn--green-filled margin-top">
                    Continuer
                </button> -->
            </div>
            <div class="main-container_form_div-third-part part">
                <div class="main-container_div-bot">
                    <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                        class="main-container_div-bot_img" alt="bot picture">
                    <div class="main-container_div-bot_column-div">
                        <div class="main-container_div-bot_div-column-height-plus">
                            <p class="main-container_div-bot_div-column_p">C'est noté, je vais vous aider à
                                trouver votre bonheur.
                                Donnez-moi votre <span class="main-container_div-bot_div-column_span">date de
                                    naissance</span> s'il vous plait.</p>
                        </div>
                        <!-- <div class="main-container_div-bot_div-column-show-ok margin-top">
                            <span class="main-container_div-bot_div-column_span--green ">Merci ! 👍</span>
                        </div> -->
                    </div>
                </div>
                <div class="main-container_form_div-third-part_row margin-top">
                    <select name="day" id="day" class="date-select">
                        <option disabled="" value="0">Jour</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="month" id="month" class="date-select">
                        <option disabled="" value="0">Mois</option>
                        <option value="1">Janvier</option>
                        <option value="2">Février</option>
                        <option value="3">Mars</option>
                        <option value="4">Avril</option>
                        <option value="5">Mai</option>
                        <option value="6">Juin</option>
                        <option value="7">Juillet</option>
                        <option value="8">Août</option>
                        <option value="9">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>s
                    </select>
                    <select name="year" id="year" class="date-select">
                        <option disabled="" value="0">Année</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                    </select>
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>


            </div>
            <div class="main-container_form_div-fourth-part part">
                <div class="main-container_div-bot">
                    <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                        class="main-container_div-bot_img" alt="bot picture">
                    <div class="main-container_div-bot_div-column">
                        <p class="main-container_div-bot_div-column_p">Après l'âge, le lieu !</p>
                        <span class="main-container_div-bot_div-column_span">Dans quelle ville habitez-vous ?</span>
                    </div>
                </div>
                <div class="main-container_form_div-fourth-part_row margin-top">
                    <input type="text" name="city" class="input-city" placeholder="Indiquez votre ville">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
            </div>
            <div class="main-container_form_div-fifth-part part">
                <div class="main-container_div-bot">
                    <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                        class="main-container_div-bot_img" alt="bot picture">
                    <div class="main-container_div-bot_div-column">
                        <p class="main-container_div-bot_div-column_p">Pouvez-vous m'indiquer votre <span
                                class="main-container_div-bot_div-column_span">prénom</span> et votre <span
                                class="main-container_div-bot_div-column_span">nom</span> ?</p>
                    </div>
                </div>
                <div class="main-container_form_div-fifth-part_row margin-top">
                    <input type="text" name="firstname" class="input-firstname" placeholder="Indiquez votre prenom">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
                <div class="main-container_form_div-fifth-part_row margin-top">
                    <input type="text" name="lastname" class="input-firstname" placeholder="Indiquez votre nom">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
            </div>
            <div class="main-container_form_div-sixth-part part">
                <div class="main-container_div-bot">
                    <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                        class="main-container_div-bot_img" alt="bot picture">
                    <div class="main-container_div-bot_div-column-height-max">
                        <p class="main-container_div-bot_div-column_p">PARFAIT ! J'ai des célibataires près de chez vous
                            ❤️. Pour vous montrer leur profil, je vais vous créer un compte gratuitement. Pouvez-vous
                            entrer <span class="main-container_div-bot_div-column_span">votre adresse email</span> ?</p>
                    </div>
                </div>
                <div class="main-container_form_div-fifth-part_row margin-top">
                    <input type="email" name="email" class="input-firstname" placeholder="Indiquez votre adresse email">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
            </div>
            <div class="main-container_form_div-seventh-part part">
                <div class="main-container_div-bot">
                    <img src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/conversational-bot-9d221733c14.png"
                        class="main-container_div-bot_img" alt="bot picture">
                    <div class="main-container_div-bot_div-column">
                        <p class="main-container_div-bot_div-column_p">Pouvez-vous m'indiquer votre <span
                                class="main-container_div-bot_div-column_span">mot de passe</span> ?</p>
                    </div>
                </div>
                <div class="main-container_form_div-fifth-part_row margin-top">
                    <input type="password" name="password" class="input-firstname"
                        placeholder="Indiquez votre mot de passe" value="">
                    <!-- <button class="btn btn--next"><img
                            src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/arrow-0de25f1a180.svg"
                            class="next-step" alt=""></button> -->
                </div>
                <button type="submit" class="btn btn--green-filled margin-top" name="submit_register" value="submit">
                    Creer mon compte (gratuit)
                </button>
            </div>
        </form>
    </main>
    <script src="../public/js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>