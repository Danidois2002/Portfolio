<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/styleIndex.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/menu.css">
</head>

<body>

<header>
    <div class="menu-toggle">☰</div>
    <nav class="nav-menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="competences.php">Compétences</a></li>
            <li><a href="projects.php">Projets</a></li>
            <li><a href="formulaire.php">Contact</a></li>
        </ul>
    </nav>

    <h1>Bienvenu sur mon Portfolio</h1>
</header>

<main>
    <div class="main-container">
        <section class="photo-section">
            <div class="photo-container">
                <img class="photo" src="assets/images/maPhoto.jpg" alt="Ma photo">
            </div>
        </section>

        <section class="description-section">
            <div class="description">
                <h2>À propos de moi</h2>
                <p>Bonjour, je m'appelle <strong>Danial Bitar</strong> et je suis passionné par le développement web et le back-end.
                    Mon parcours en programmation a commencé fin 2022 et depuis, j'ai continué à approfondir mes compétences pour devenir un développeur back-end.</p>

                <p>En plus de la programmation, je suis également **polyglotte**. Je parle couramment <strong>français, anglais, arabe et arménien</strong>, ce qui me permet de communiquer et de travailler dans des environnements multiculturels.</p>

                <p>**Mes hobbies :**
                    J’aime passer du temps à explorer **de nouveaux langages et frameworks** en programmation, mais aussi à me détendre avec mes passions :
                    - **Jeux vidéo**, où je découvre de nouveaux univers et défis stratégiques.
                    - **Football**, un sport que j'apprécie aussi bien sur le terrain qu'en tant que spectateur.
                    - **Musique**, qui m’accompagne souvent dans mes sessions de code et mes moments de détente.
                </p>

                <h3>📚 Mon parcours</h3>
                <ul class="parcours">
                    <li><strong>2021 :</strong> Obtention du <em>CESS</em> à l'Athénée Royal Bastogne-Houffalize.</li>
                    <li><strong>Déc. 2022 - Mars 2023 :</strong> Formation chez <em>Technifutur</em> - Initiation à l'informatique et définition de projet personnel.</li>
                    <li><strong>2023 - 2024 :</strong> Première année en <em>Bachelier en Informatique de Gestion</em>.</li>
                    <li><strong>2024 - 2025 :</strong> Formation en <em>développement web</em> en cours du soir avec une spécialisation prévue l'année prochaine en back-end.</li>
                </ul>

                <h3>🚀 Mes ambitions</h3>
                <p>Je souhaite me spécialiser en <strong>back-end</strong> et approfondir mes compétences en développement d'architectures robustes,
                    gestion de bases de données et optimisation des performances serveurs.</p>
                </ul>

                <a href="competences.php" class="btn">Mes compétences</a>
                <a href="projects.php" class="btn">Mes projets</a>
                <a href="formulaire.php" class="btn">Contactez-moi</a>
            </div>
        </section>
    </div>
</main>

<script src="assets/JS/photo.js"></script>
<script src="assets/js/menu.js"></script>

</body>
</html>