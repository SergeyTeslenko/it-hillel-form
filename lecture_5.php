<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lecture_5.css">
    <title>Form page</title>

</head>
<body>
<section class="contacts" id="contacts">
    <div class="container">
        <h2>Контакты</h2>
        <div class="info">
            <div class="form-left">
                <form action="server.php" method="POST" enctype="multipart/form-data" class="form">
                    <h3>Заполните форму, чтобы оказаться в нашей команде</h3>
                    <input type="text"  name="name" placeholder="Name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="tel" name="phone" placeholder="Phone" required="">
                    <label for="checkbox-1" class="checkbox">I agree</label>
                    <input type="checkbox" name="var[]" id="checkbox-1" value="checkbox-1">
                    <label for="checkbox-2" class="checkbox">Disagree</label>
                    <input type="checkbox" name="var[]" id="checkbox-2" value="checkbox-2">
                    <input type="submit" class="btn">
                </form>
            </div>
            <div class="phone-right">
                <img src="./image/communications%201.svg" alt="phone">
                <a href="tel:+7 (495) 234-43-65">+7 (495) 234-43-65</a>

            </div>

        </div>
    </div>
</section>
</body>
</html>