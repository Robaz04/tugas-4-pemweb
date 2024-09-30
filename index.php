<?php
$npm = $name = $alamat = $tpt_lahir = $tgl_lahir = $gender = $hobbies = "";
$npmErr = $nameErr = $alamatErr = $tpt_lahirErr = $tgl_lahirErr = $genderErr = $hobbiesErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["npm"])) {
        $npmErr = "*NPM tidak boleh kosong.";
    } else {
        $npm = $_POST["npm"];
    }

    if (empty($_POST["name"])) {
        $nameErr = "*Nama tidak boleh kosong.";
    } else {
        $name = strtoupper($_POST["name"]);
    }

    if (empty($_POST["address"])) {
        $alamatErr = "*Alamat tidak boleh kosong.";
    } else {
        $alamat = strtoupper($_POST["address"]);
    }

    if (empty($_POST["place"])) {
        $tpt_lahirErr = "*Tempat lahir tidak boleh kosong.";
    } else {
        $tpt_lahir = $_POST["place"];
    }

    if (empty($_POST["date"])) {
        $tgl_lahirErr = "*Tanggal lahir tidak boleh kosong.";
    } else {
        $tgl_lahir = $_POST["date"];
    }

    if (empty($_POST["gender"])) {
        $genderErr = "*Jenis kelamin tidak boleh kosong.";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["hobi"])) {
        $hobbiesErr = "*Hobi tidak boleh kosong.";
    } else {
        $hobbies = $_POST["hobi"];
    }
}
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulir Data Mahasiswa</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="gaya.css">
    </head>

    <body>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$npmErr && !$nameErr && !$alamatErr && !$tpt_lahirErr && !$tgl_lahirErr && !$genderErr && !$hobbiesErr): ?>
        <div class="container-2">
            <h1>Data Mahasiswa</h1>
            <table>
                <tr>
                    <th>NPM</th>
                    <td><?php echo $npm; ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo $alamat; ?></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td><?php echo $tpt_lahir; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo $tgl_lahir; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td><?php echo $hobbies; ?></td>
                </tr>
            </table>
        </div>
        <?php else: ?>
        <div class="container">
            <div class="input">
                <h1>Formulir Data Mahasiswa</h1>
                <form method="post" action="" class="form">
                    <label for="npm">Masukkan NPM Anda: </label>
                    <input type="text" name="npm" placeholder="<?php echo $npmErr ? $npmErr : ''; ?>"
                        value="<?php echo htmlspecialchars($npm); ?>"
                        style="<?php echo $npmErr ? 'border: 1px solid red' : 'border: none'; ?>">

                    <label for=" name">Masukkan Nama Anda: </label>
                    <input type="text" name="name" placeholder="<?php echo $nameErr ? $nameErr : ''; ?>"
                        value="<?php echo htmlspecialchars($name); ?>"
                        style="<?php echo $nameErr ? 'border: 1px solid red' : 'border: none'; ?>">

                    <label for="address">Masukkan Alamat Anda: </label>
                    <textarea name="address"
                        style="<?php echo $alamatErr ? 'border: 1px solid red' : 'border: none'; ?>"
                        placeholder="<?php echo $alamatErr ? $alamatErr : ''; ?>"><?php echo htmlspecialchars($alamat); ?></textarea>

                    <label for="place">Masukkan Tempat Lahir Anda: </label>
                    <input type="text" name="place" placeholder="<?php echo $tpt_lahirErr ? $tpt_lahirErr : ''; ?>"
                        value="<?php echo htmlspecialchars($tpt_lahir); ?>"
                        style="<?php echo $tpt_lahirErr ? 'border: 1px solid red' : 'border: none'; ?>">

                    <label for="date">Masukkan Tanggal Lahir Anda: </label>
                    <input type="date" name="date" placeholder="<?php echo $tgl_lahirErr ? $tgl_lahirErr : ''; ?>"
                        value="<?php echo htmlspecialchars($tgl_lahir); ?>"
                        style="<?php echo $tgl_lahirErr ? 'border: 1px solid red' : 'border: none'; ?>">

                    <label for="gender">Pilih Jenis Kelamin Anda: </label>
                    <div class="jk">
                        <input type="radio" name="gender" value="Laki-laki"
                            <?php echo ($gender == "Laki-laki") ? "checked" : ""; ?>> Laki-laki
                        <input type="radio" name="gender" value="Perempuan"
                            <?php echo ($gender == "Perempuan") ? "checked" : ""; ?>> Perempuan
                    </div>

                    <label for="hobi">Masukkan Hobi Anda</label>
                    <input type="text" name="hobi" placeholder="<?php echo $hobbiesErr ? $hobbiesErr : ''; ?>"
                        value="<?php echo htmlspecialchars($hobbies); ?>"
                        style="<?php echo $hobbiesErr ? 'border: 1px solid red' : 'border: none'; ?>">

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <?php endif; ?>

    </body>

    </html>