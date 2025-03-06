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
			<section class="section">
				<h2>Certification Sololearn</h2>
				<p> <strong>Certification HTML</strong></p>
				<br/>
				<div class="gallery">
			
					<iframe src="CertificationHtmlSololearn.pdf" class="pdf-viewer" title="Certification HTML Sololearn"></iframe>
					<br/>
					<p> <strong>Certification SQL</strong></p>
					<br/>
					<iframe src="CertificationSQLSololearn.pdf" class="pdf-viewer" title="Certification SQL Sololearn"></iframe>
	
				</div>
			</section>
			<section class="section">
				<h2>Certification Secnum Academie</h2>
				<p> <strong>Certification Secnum Academie</strong></p>
				<br/>
				<div class="gallery">
			
					<iframe src="Certification-Secnumacademie.pdf" class="pdf-viewer" title="Certification Secnum Academie"></iframe>
	
				</div>
			</section>
			<section class="section">
				<h2>Certification CNIL RGPD</h2>
				<p> <strong>Certification CNIL RGPD</strong></p>
				<br/>
				<div class="gallery">
			
					<iframe src="CNILRGPD1.pdf" class="pdf-viewer" title="Certification HTML Sololearn"></iframe>
					<iframe src="CNILRGPD2.pdf" class="pdf-viewer" title="Certification CNIL RGPD"></iframe>
					<iframe src="CNILRGPD3.pdf" class="pdf-viewer" title="Certification CNIL RGPD"></iframe>
					<iframe src="CNILRGPD4.pdf" class="pdf-viewer" title="Certification CNIL RGPD"></iframe>
					<iframe src="CNILRGPD5.pdf" class="pdf-viewer" title="Certification CNIL RGPD"></iframe>
				</div>
			</section>
			
			<section class="section">
				<h2>Certification CISCO</h2>
				<p> <strong>Certification Introduction Packet Tracer</strong></p>
				<br/>
				<div class="gallery">
			
					<iframe src="FantaDiallo-Intro PT-certificate.pdf" class="pdf-viewer" title="Certification HTML Sololearn"></iframe>
					<br/>
					<p> <strong>Certification Introduction à la cybersecurité</strong></p>
					<br/>
					<iframe src="FantaDiallo-Introduction to -certificate.pdf" class="pdf-viewer" title="Certification CNIL RGPD"></iframe>
					<iframe src="Introduction_to_Cybersecurity_certificate.pdf" class="pdf-viewer" title="Certification CNIL RGPD"></iframe>
					
				</div>
			</section>
	</div>

		<footer>
			<p>&copy; 2024 Fanta Diallo. Tous droits réservés.</p>
		</footer>
	</body>
</html>