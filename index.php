<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PHP</title>
    <link rel="stylesheet" href="style/beranda.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/loop.css">
    <link rel="stylesheet" href="style/profil.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#login">Login</a></li>
                <li><a href="#loop">Loop</a></li>
                <li><a href="#profil">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="beranda">
            <h2>Beranda</h2>
            <p>Saefullah MI22B</p>
        </section>

        <section id="login">
            <?php include 'login.php'; ?>
        </section>

        <section id="loop">
            <?php include 'loop.php'; ?>
        </section>

        <section id="profil">
            <?php include 'profil.php'; ?>
        </section>
    </main>

    <footer>
        <script src="scripts.js"></script>
    </footer>
</body>
</html>
