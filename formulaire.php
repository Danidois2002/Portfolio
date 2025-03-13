<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/styleFormulaire.css">
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
    <h1>Contactez-moi</h1>
</header>

<main>
    <?php
    $messageEnvoye = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $messageEnvoye = true;
    }
    ?>

    <div class="form-container">
        <form action="formulaire.php" method="post" class="contact-form">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>

            <?php if ($messageEnvoye): ?>
                <div class="success-message">
                    ✅ Votre message a bien été envoyé !
                </div>
            <?php endif; ?>
        </form>
    </div>
</main>

<footer class="footer">
    <ul class="social-links">
        <li>
            <a href="https://www.instagram.com/dbitar77_" target="_blank">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="6" fill="url(#paint0_linear)"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7.3C9.657 7.3 7.7 9.257 7.7 11.6S9.657 15.9 12 15.9 16.3 13.943 16.3 11.6 14.343 7.3 12 7.3Zm0 6.6a2.7 2.7 0 1 1 0-5.4 2.7 2.7 0 0 1 0 5.4ZM17.9 7.8a.9.9 0 1 1-1.8 0 .9.9 0 0 1 1.8 0ZM18.9 11.6c0 4.172-3.028 7.3-6.9 7.3S5.1 15.772 5.1 11.6 8.128 4.3 12 4.3s6.9 3.128 6.9 7.3ZM12 5.5c-3.337 0-6.1 2.763-6.1 6.1s2.763 6.1 6.1 6.1 6.1-2.763 6.1-6.1-2.763-6.1-6.1-6.1Z" fill="white"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="1" y1="1" x2="23" y2="23" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F58529"/>
                            <stop offset="0.5" stop-color="#DD2A7B"/>
                            <stop offset="1" stop-color="#8134AF"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/dbitar77" target="_blank">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12C24 5.373 18.627 0 12 0S0 5.373 0 12c0 5.989 4.388 10.954 10.125 11.854V15.468H7.078V12h3.047V9.356c0-3.007 1.792-4.668 4.533-4.668 1.312 0 2.686.235 2.686.235v2.953h-1.513c-1.49 0-1.953.928-1.953 1.878V12h3.328l-.532 3.468h-2.796v8.386C19.612 22.954 24 17.989 24 12z" fill="#1877F2"/>
                    <path d="M16.671 15.468L17.203 12H13.875V9.756c0-.95.463-1.878 1.953-1.878h1.513V4.925s-1.374-.235-2.686-.235c-2.741 0-4.533 1.661-4.533 4.668V12H7.078v3.468h3.047v8.386c.63.098 1.281.146 1.938.146s1.308-.048 1.938-.146v-8.386h2.796z" fill="white"/>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/daniel-bitar-992ab3258" target="_blank">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="6" fill="#0A66C2"/>
                    <path d="M6.75 6.75a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM6 9.75h1.5v7.5H6v-7.5ZM10.5 9.75H12v1.125c.375-.563 1.125-1.125 2.25-1.125 2.25 0 2.625 1.5 2.625 3.375v4.125H15V13.5c0-.75 0-2.25-1.5-2.25-1.5 0-1.5 1.5-1.5 2.25v3.75h-1.5v-7.5Z" fill="white"/>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://github.com/Danidois2002" target="_blank">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.387.6.11.82-.26.82-.577v-2.17c-3.338.726-4.043-1.61-4.043-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729 1.205.085 1.84 1.237 1.84 1.237 1.07 1.835 2.805 1.304 3.49.997.107-.775.418-1.304.762-1.605-2.665-.303-5.466-1.333-5.466-5.93 0-1.31.467-2.382 1.235-3.22-.123-.303-.535-1.523.117-3.176 0 0 1.007-.322 3.3 1.23a11.52 11.52 0 0 1 3.003-.404c1.02.004 2.045.137 3.003.404 2.29-1.552 3.295-1.23 3.295-1.23.655 1.653.243 2.873.12 3.176.77.838 1.233 1.91 1.233 3.22 0 4.61-2.807 5.623-5.48 5.92.43.37.823 1.1.823 2.22v3.293c0 .32.218.694.825.577C20.565 21.796 24 17.3 24 12c0-6.627-5.373-12-12-12Z" fill="black"/>
                </svg>
            </a>
        </li>
    </ul>
</footer>

<script src="assets/JS/menu.js"></script>

</body>
</html>