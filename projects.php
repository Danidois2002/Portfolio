<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
    <link rel="stylesheet" href="assets/css/styleProjets.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/menu.css">
</head>

<body>

<?php
include 'db.php';

if (!$conn) {
    die("<p style='color: red; text-align: center;'>Erreur de connexion à la base de données.</p>");
}
?>

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
    <h1>Mes projets</h1>
</header>

<main>
    <section class="projets-section">
        <?php
        if ($conn) {
            $sql = "SELECT * FROM projets";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="projet">
                        <a href="' . htmlspecialchars($row['fichier']) . '" download>
                            <strong>' . htmlspecialchars($row['icone']) . ' ' . htmlspecialchars($row['titre']) . '</strong> - ' . htmlspecialchars($row['description']) . '
                        </a>
                    </div>';
                }
            } else {
                echo '<p>Aucun projet trouvé.</p>';
            }

            $conn->close();
        } else {
            echo '<p style="color: red;">Erreur de connexion à la base de données.</p>';
        }
        ?>
    </section>
</main>

<script src="assets/JS/projects.js"></script>
<script src="assets/JS/menu.js"></script>

</body>
</html>
