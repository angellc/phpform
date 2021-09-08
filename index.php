<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="" ></script>
</head>
<body>
    <form class="contact" action="db.php" method="post">
        <div class="form-inner">
            <h1>Contact Us</h1>
            <input type="text" class="name" name="name" placeholder="Michael Jackson" required><br>
            <textarea name="desc" class="desc" cols="30" rows="10" placeholder="Tell me more about ..." required></textarea><br>
            <input type="number" step="any" class="price" name="price" placeholder="Price e.g. 0.00" required><br>
            <input type="submit" value="Submit" class="submit">
        </div>
    </form>
</body>
</html>