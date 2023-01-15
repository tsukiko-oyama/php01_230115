<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/sample.css">
    <link rel="stylesheet" href="css/reset.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
    <div class="title-wrapper">
        <h1>Movie Review</h1>
    </div>
        <form method ="post" action="write.php">
            <p>お名前:<input type="text" name="name"></p>
            <p>EMAIL:<input type="text" name="email"></p>
            <p>おすすめの映画:<input type="text" name="moviename"></p>
            <input type="submit" value="送信">
    </form>
</body>
</html>