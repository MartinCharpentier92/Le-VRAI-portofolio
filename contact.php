<?php require_once('_header.php') ?>


<main class="contact-main">

    <h1>Me contactez</h1>

    <div class="contact-main-container">

        <div class="contactbox contact-main-container1">
        
            <form class="contact-main1-form" action="" method="post">
                <ul>
                    <li>
                        <label for="name">Nom&nbsp;:</label>
                        <input class="contact-main1-form" type="text" id="name" name="user_name" placeholder="Entrez votre nom"/>
                    </li>
                    <li>
                        <label for="prenom">Prénom&nbsp;:</label>
                        <input class="contact-main1-form" type="prenom" id="prenom" name="user_surname" placeholder="Entrez votre prénom"/>
                    </li>
                    <li>
                        <label for="name">E-mail&nbsp;:</label>
                        <input class="contact-main1-form" type="text" id="name" name="user_name" placeholder="Entrez votre nom"/>
                    </li>
                    <li>
                        <label for="msg">Message&nbsp;:</label>
                        <textarea class="contact-main1-form" id="msg" name="user_message" placeholder="Entrez votre message"></textarea>
                    </li>
                
                    <li>
                        <button class="bouton" type="submit">Envoyer</button>
                    </li>
                </ul>
            </form>


        </div>

        <div class="contactbox contact-main-container2">

            <h2>Mes réseaux</h2>



            <div class="contact-main-container2-1">

                <div class="contact-main-container2-1-1">
                    <a href="">
                        <img src="img/logo/github-logo.png" alt="">
                    </a>
                </div>

                <div class="contact-main-container2-1-2">
                    <a href="">
                        <img src="img/logo/x-logo.png" alt="">
                    </a>
                </div>

                <div class="contact-main-container2-1-3">
                    <a href="">
                        <img src="img/logo/insta-logo.png" alt="">
                    </a>
                </div>

                <div class="contact-main-container2-1-4">
                    <a href="">
                        <img src="img/logo/linkedin-logo.png" alt="">
                    </a>
                </div>


            </div>

        </div>


    </div>





</main>



<?php require_once('_footer.php') ?>