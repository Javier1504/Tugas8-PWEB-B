<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>

<body>
    <header>
        <h3>Form</h3>
    </header>

    <form action="addAction.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Name: </label>
            <input type="text" name="name" placeholder="full name" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"></textarea>
        </p>
        <p>
            <label for="gender">gender: </label>
            <label><input type="radio" name="gender" value="men"> men</label>
            <label><input type="radio" name="gender" value="women"> women</label>
        </p>
        <p>
            <label for="religion">Religion: </label>
            <select name="religion">
                <option>Islam</option>
                <option>Christian</option>
                <option>Hinduism</option>
                <option>Buddh</option>
                <option>Atheist</option>
            </select>
        </p>
        <p>
            <label for="email">email: </label>
            <input type="text" name="email" placeholder="email" />
        </p>
        <p>
            <input type="submit" value="add" name="add" />
        </p>

        </fieldset>

    </form>

    </body>
</html>