<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show Form</title>
</head>

<body>
    <form method="post" action="/store_form">
        @csrf
        <div>
            <label for="exampleInputName">Имя</label>
            <br>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="exampleInputSurname">Фамилия</label>
            <br>
            <input type="text" name="surname">
        </div>
        <div>
            <label for="exampleInputEmail">Email</label>
            <br>
            <input type="email" name="email">
        </div>
        <br>
        <div>
            <input type="submit" name="newUser" value="Submit">
        </div>

    </form>
</body>

</html>
