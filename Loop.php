<section id="loop">
    <h2>Loop</h2>
    <form method="POST" action="">
        <label for="teks">Teks:</label>
        <input type="text" name="teks" id="teks" required>
        <label for="jumlah">Jumlah Perulangan:</label>
        <input type="number" name="jumlah" id="jumlah" required>
        <input type="submit" name="submit_loop" value="Loop">
    </form>
    <?php
    if (isset($_POST['submit_loop'])) {
        $teks = $_POST['teks'];
        $jumlah = $_POST['jumlah'];
        for ($i = 0; $i < $jumlah; $i++) {
            echo $teks . "<br>";
        }
    }
    ?>
</section>
