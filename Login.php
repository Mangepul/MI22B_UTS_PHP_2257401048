<section id="login">
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" name="submit_login" value="Login">
    </form>
    <?php
    if (isset($_POST['submit_login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "admin") {
            echo "<p style='color: green;'>Login Berhasil</p>";
        } else {
            echo "<p style='color: red;'>Username/Password tidak sesuai</p>";
        }
    }
    ?>
</section>
