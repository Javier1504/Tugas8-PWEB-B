<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>form</title>
</head>

<body>
    <header>
        <h3>added</h3>
    </header>

    <nav>
        <a href="add.php">[+] add new</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM homepage";
        $query = mysqli_query($db, $sql);

        while($mahasiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mahasiswa['id']."</td>";
            echo "<td>".$mahasiswa['name']."</td>";
            echo "<td>".$mahasiswa['address']."</td>";
            echo "<td>".$mahasiswa['gender']."</td>";
            echo "<td>".$mahasiswa['religion']."</td>";
            echo "<td>".$mahasiswa['email']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$mahasiswa['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$mahasiswa['id']."'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>