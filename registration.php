<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="user_data.php" method="POST">
    <label for="name">
            Name: <input type="text" name="name">
        </label><br>
        <label for="email">
            Email: <input type="text" name="email">
        </label><br>
        <label for="birthday">
            Date of Birth: <input type="date" name="birthday">
        </label><br>
        <fieldset>
            <legend>Gender</legend>
            <label for="male">Male </label>
            <input type="radio" name="gender" value="male">

            <label for="female">Female </label>
            <input type="radio" name="gender" value="female">
        </fieldset>

        <label for="country">
            Country: <input type="country" name="country">
        </label><br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>
