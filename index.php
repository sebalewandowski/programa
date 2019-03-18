<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="assets/file.js"></script>
    <title>CV</title>
</head>
<body>
<div id="menu">
    <header>
        Sebastian Lewandowski
    </header>
    <address>
        Polna 29/11, Poznań 61-141
        <a href="mailto:sebalewandowski@gmail.com">Email Me</a>
    </address>
    <hr>
    <section>
        Goals

    </section>
    <section>
        Skills
    </section>

    <section>
        Work Experience
    </section>

    <section>
        Education
    </section>

    <section>
        Achievements
    </section>

    <section>
        Hobbies and Interests
    </section>

    <footer></footer>
</div>

<form name="cv" method="post" onsubmit="return validateForm()">
    <div class="form-group">
        <label>Imie</label> <span id="error-imie"></span>
        <input type="text" name="imie" class="form-control" placeholder="Wpisz swoje imie">
    </div>
    <div class="form-group">
        <label>Nazwisko</label> <span id="error-nazwisko"></span>
        <input type="text" name="nazwisko" class="form-control" placeholder="Wpisz swoje nazwisko">
    </div>
    <div class="form-group">
        <label>Wiek</label> <span id="error-wiek"></span>
        <input type="number" name="wiek" class="form-control" placeholder="Wpisz swój wiek">
    </div>
    <div class="form-group">
        <label>Płeć</label> <span id="error-plec"></span>
        <input type="text" name="plec" class="form-control" placeholder="Wpisz swoja plec">
    </div>
    <div class="form-group">
        <label>Zgoda na przetwarzanie danych</label> <span id="error-zgoda"></span>
        <input type="checkbox" name="zgoda" class="form-control" placeholder="Wyrażam zgode na przetwarzanie moich danych osobowych">
    </div>
    <div class="form-group">
        <input type="submit" value="Send">
    </div>
</form>
</body>
</html>