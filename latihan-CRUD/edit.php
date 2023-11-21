<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM homepage WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("cant find!");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <header>
        <h3>Edit Data</h3>
    </header>

    <form action="editAction.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="full name" value="<?php echo $mahasiswa['name'] ?>" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"><?php echo $mahasiswa['address'] ?></textarea>
        </p>
        <p>
            <label for="gender">Gender: </label>
            <?php $jk = $mahasiswa['gender']; ?>
            <label><input type="radio" name="gender" value="men" <?php echo ($jk == 'men') ? "checked": "" ?>> gender</label>
            <label><input type="radio" name="gender" value="women" <?php echo ($jk == 'women') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="religion">Religion: </label>
            <?php $agama = $mahasiswa['religion']; ?>
            <select name="religion">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Christian') ? "selected": "" ?>>Christian</option>
                <option <?php echo ($agama == 'Hinduism') ? "selected": "" ?>>Hinduism</option>
                <option <?php echo ($agama == 'Buddh') ? "selected": "" ?>>Buddh</option>
                <option <?php echo ($agama == 'Atheist') ? "selected": "" ?>>Atheist</option>
            </select>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email" value="<?php echo $mahasiswa['email'] ?>" />
        </p>
        <p>
            <input type="add" value="add" name="add" />
        </p>

        </fieldset>


    </form>

    </body>
</html>