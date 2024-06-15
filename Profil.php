<section id="profil">
    <h2>Profil</h2>
    <form method="POST" action="">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="hp">Nomor HP:</label>
        <input type="text" name="hp" id="hp" required>
        <input type="submit" name="submit_profil" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit_profil'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];

        echo "
        <h3>Informasi Profil</h3>
        <table>
            <tr>
                <td><strong>NIM</strong></td>
                <td>$nim</td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td>$nama</td>
            </tr>
            <tr>
                <td><strong>Kelas</strong></td>
                <td>$kelas</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>$email</td>
            </tr>
            <tr>
                <td><strong>Nomor HP</strong></td>
                <td>$hp</td>
            </tr>
        </table>";
    }
    ?>
</section>
