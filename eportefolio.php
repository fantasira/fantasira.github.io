
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Fanta Diallo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4; /* Fond gris clair pour un design épuré */
        }
        header {
            background: #dfcae1; /* Violet pastel */
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #d0b8c8; /* Violet pastel légèrement plus foncé pour la bordure */
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 400; /* Poids de police plus léger pour une apparence élégante */
        }
        nav {
            margin: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1em;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #c7a8b3; /* violet pastel clair pour les liens au survol */
        }
        .container {
            width: 85%;
            margin: auto;
            overflow: hidden;
        }
        .section {
            padding: 30px;
            margin: 20px 0;
            background: #ffffff; /* Fond blanc pour les sections */
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            color: #dfcae1; /* Violet pastel avec une touche de rose */
            border-bottom: 2px solid #d0b8c8; /* Bordure pour séparer le titre du contenu */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        form {
            background: #f7eaf5; /* Violet pastel très clair pour le formulaire */
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            margin-top: 15px;
            color: #333;
        }
        form input, form textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Assure que le padding ne dépasse pas la largeur définie */
        }
        form input[type="submit"] {
            background-color: #dfcae1; /* Violet pastel */
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 15px;
            font-size: 1.1em;
            transition: background-color 0.3s;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        form input[type="submit"]:hover {
            background-color: #c7a8b3; /* violet pastel clair pour le bouton au survol */
        }
        footer {
            background: #dfcae1; /* Violet pastel */
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-top: 2px solid #d0b8c8; /* Violet pastel légèrement plus foncé pour la bordure */
        }
        footer p {
            margin: 0;
        }
        .skills, .experience, .future {
            background: #ffffff; /* Fond blanc pour les sections */
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .skills h2, .experience h2, .future h2 {
            color: #dfcae1; /* Violet pastel */
        }
        .skills ul, .experience ul {
            list-style-type: none;
            padding: 0;
        }
        .skills li, .experience li {
            margin-bottom: 10px;
        }
        .skills li:before, .experience li:before {
            content: "•";
            color: #dfcae1; /* Violet pastel pour les puces */
            margin-right: 10px;
        }
        .pdf-viewer {
            width: 100%;
            height: 600px; /* Ajustez la hauteur selon vos besoins */
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php 
			
		include('header.php'); 
	?>

    <div class="container">
        <section id="accueil" class="section">
            <h2>Bienvenue</h2>
            <p>Bonjour, je suis Fanta Diallo, étudiante en 2e année de BTS services informatiques aux organisations (SIO) spécialisation SLAM. Découvrez ici mes projets, mon expérience professionnelle et mes compétences en développement.</p>
        </section>
		
		<section id="apropos" class="section">
            <h2>À Propos de Moi</h2>
            <p>Je suis passionnée par le développement web et les solutions logicielles. Mon parcours en BTS SIO, spécialisation SLAM, m'a permis d'acquérir des compétences solides en développement d'applications et en gestion de projets informatiques. Mon stage chez Nazario m'a offert une expérience pratique précieuse et a renforcé ma passion pour le développement web.</p>
        </section>



        <section id="competences" class="section">
            <h2>Compétences et Expériences</h2>
            <div class="skills">
                <h2>Compétences</h2>
                <ul>
                    <li>Langues : Espagnol, Anglais</li>
                    <li>Informatique : Excel, PowerPoint, Certification PIX</li>
                    <li>Travaille en équipe</li>
                    <li>Élaboration de statistiques</li>
                    <li>Sens des responsabilités</li>
                    <li>Capacité d'organisation et priorisation des tâches</li>
                    <li>Polyvalence</li>
                </ul>
            </div>
			<div class="skills">
				<h2>Développement</h2>
                <ul>
                    <li> HTML</li>
					<li> CSS</li>
					<li> Javascript</li>
					<li> PHP</li>
					<li> SQL</li>
					<li> Java/Python</li>
					<li> MySQL</li>
					<li> Adressage/Routage</li>
					<li> Protocoles réseaux</li>
					<li> OS/Virtualisation</li>
                </ul>
            </div>

            <div class="experience">
                <h2>Diplômes et Formations</h2>
                <ul>
                    <li>BTS SIO (Services informatiques aux organisations) - Depuis septembre 2023, Lycée Parc des Loges, Évry</li>
                    <li>Baccalauréat STMG - De septembre 2019 à juillet 2022, L'Essouriau, Les Ulis</li>
                </ul>

                <h2>Expériences Professionnelles</h2>
                <ul>
					<li>Stage Association Nazario - De janvier 2025 à février 2025</li>
					<li>Stage Association Nazario - De mai 2024 à juin 2024</li>
                    <li>Caissière chez Carrefour Ville du Bois - D'octobre 2023 à novembre 2023</li>
                    <li>Préparatrice de commande chez Adecco Amazon, Brétigny-sur-Orge - De mai 2023 à juillet 2023</li>
                    <li>Vendeuse chez Zara Home, Madeleine/Defense - D'avril 2023 à mai 2023</li>
                    <li>Assistante à la Mairie des Ulis - Août 2020</li>
                    <li>Stage d'observation au CNRS Orsay - De novembre 2018 à décembre 2018</li>
                </ul>
            </div>
        </section>

        <section id="formation" class="section">
            <h2>Formation et Poursuite d'Études</h2>
            <p>Après l'obtention de mon BTS SIO (services informatiques aux organisations), je prévois de poursuivre mes études pour obtenir un diplôme de niveau Bac+3 ou Bac+5 dans le domaine de l'informatique. Mes objectifs de formation incluent :</p>
            <ul>
                <li>Intégrer une licence professionnelle en développement web ou en systèmes d'information pour approfondir mes connaissances et compétences techniques.</li>
                <li>Explorer des spécialisations comme la cybersécurité afin d'élargir mes perspectives professionnelles.</li>
            </ul>
            <p>Concernant mes projets professionnels, je suis intéressée par les métiers suivants :</p>
            <ul>
                <li>Développeuse web : Créer des applications web dynamiques et fonctionnelles.</li>
                <li>Chef de projet informatique : Gérer des projets de développement logiciel et coordonner les équipes.</li>
            </ul>
            <p>Je suis également ouverte à d'autres opportunités dans le domaine de l'informatique, où je pourrais appliquer mes compétences et contribuer au développement de solutions innovantes.</p>
        </section>
		
		 <section id="projets" class="section">
            <h2>Projets Réalisés</h2>
            <h3>Refonte du Site Internet de l'Association Nazario</h3>
            <p>Lors de mon stage chez l'association Nazario, j'ai réalisé la refonte complète de leur site internet. Le projet a inclus la conception d'une nouvelle interface utilisateur, la mise à jour des fonctionnalités, et l'optimisation pour les performances et l'accessibilité.</p>
            <div class="gallery">
                <img src="nazario1.png" alt="Capture d'écran du site Nazario refondu">
                <!-- Ajoutez plus d'images du projet ici si disponible -->
            </div>
            <p>Pour plus de détails sur ce projet, veuillez consulter la section <a href="realisations.html" target="_blank">réalisation</a>.</p>
			
			
			<h3>Veille Technologique</h3>
            <p>Dans le cadre de l'obtention de mon diplome de BTS SIO (services informatiques aux organisations), j'ai dû créer un site en language php sur une veille technologique.</p>
            <div class="gallery">
                <img src="VeilleTechno.png" alt="Capture d'écran de la veille technologique">
                <!-- Ajoutez plus d'images du projet ici si disponible -->
            </div>
			<p>Pour plus de détails sur ce projet, veuillez consulter la section <a href="realisations.html" target="_blank">réalisation</a>.</p>
		</section>


        <section id="cv" class="section">
            <h2>Mon CV</h2>
            <p>Vous pouvez consulter et télécharger mon CV en cliquant sur le lien ci-dessous ou en visualisant le PDF intégré :</p>
            <a href="CV_2025-02-25_Fanta_Diallo.pdf" target="_blank">Télécharger mon CV (PDF)</a>
            <iframe src="CV_2025-02-25_Fanta_Diallo.pdf" class="pdf-viewer" title="CV de Fanta Diallo"></iframe>
        </section>

        <section id="contact" class="section">
            <h2>Contactez-moi</h2>
				

            <form action="mailto:fantasira001@gmail.com" method="post" enctype="text/plain">
				<label for="name">Nom :</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email :</label>
				<input type="email" id="email" name="email" required>

				<label for="message">Message :</label>
				<textarea id="message" name="message" rows="5" required></textarea>

				<input type="submit" value="Envoyer">
			</form>

        </section>
    </div>

    <footer>
        <p>&copy; 2024 Fanta Diallo. Tous droits réservés.</p>
    </footer>
</body>
</html>
