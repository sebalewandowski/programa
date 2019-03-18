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
        Skills
        <ul>
            <li>
                PHP (MVC, OOP, REST)
            </li>
            <li>
                php Docker, phpUnit Symfony3 php Composer
            </li>
            <li>MySql, Redis</li>
            <li> GIT, Github Java Script</li>
            <li> React JS</li>
            <li>Python</li>
            <li>HTML, CSS (Bootstrap)</li>
            <li>Agile, SCRUM</li>
            <li>English German</li>
        </ul>
    </section>
    <section>
        Work Experience
        <ul>
            <li>
                Sept 2016 – currently Cork, IRELAND
                <b>Nitrosell Ltd. Software Engineer, Scrum Master</b>
                I was working as a fullstack software engineer for an integrated e-commerce platform that provides a
                SaaS solution to over 500 stores spread geographically from Australia to America.
                - The core product uses a LAMP stack with associated add-ons as required including a noSQL DB (Redis),
                SOAP and REST for third party integrations, Git/ GitHub for version control, templating for customer/
                design input, Javascript, jQuery, Bootstrap for front-end content presentation.
                - I started as an IT Support Specialist and climbed my way up to the software engineer position and was
                selected to be a Scrum Master recently (managing scrum sessions, in order to meet the business goals and
                deadlines). Was responsible for software development process.
                - The position required the maintenance of existing code, implementation of new functionalities,
                third-party integrations as part of structured product development using a one-team Scrum methodology
                (payment gateways, ebay integration)
                - I was responsible for improving functionality of existing software, as well as reproducing and solving
                existing issues (bug fixing), improving performance and database optimization
                - I was involved in process of recruiting and hiring Junior developers and have been mentoring some of
                them later on (mentoring sessions, trainings, code reviews)
            </li>
            <li>
                Jan 2015 – Sept 2016
                Poznan, POLAND
                <b>Nitrosell Ltd. Senior IT Support Specialist</b>
                - I was mostly responsible for Writing and debugging HTML, SQL, CSS, JavaScript, jQuery and maintaining
                documentation - preparing knowledge base and knowledge articles for customers from US and Australia
                - Analyzing raw data, drawing conclusions & developing recommendations - Elaborating customer needs and
                quires - Providing and managing customer through Amazon integration, Pplanning and improving service
                assets
            </li>
            <li>
                April 2013 – March 2014
                Poznan, POLAND
                <b>GlaxoSmithKline IT Associate in Contact Centre</b>
                - In my first job in IT I was working against ITIL processes not limited to: - Incident and Request
                Management, Crystal Reports, Data Loads using SQL queries, Facilitating conferences and calls. I was
                also engaged in additional projects like: Data Update (VITEC), GSK Products: Ribena & Lucozade, Mobile
                Apps Catalogue
            </li>
        </ul>
    </section>

    <section>
        Education
        <ul>
            <li>
                March 2014 – July 2015 Poznan University of Technology, Faculty of Computer Science </br>
                Computer Technologies in Management / Master of Science degree

            </li>
            <li>
                Oct 2009 - Feb 2014 Poznan University of Technology, Faculty of Computer Science
                Controlling Engineering and Robotics / Bachelor of Science degree
            </li>
        </ul>
    </section>

    <section>
        Achievements
        <ul>
            <li>
                2017/2018 Scrum Master
            </li>
            <li>
                Ceritificate ITIL v3 Foundation
            </li>
            <li>
                2010 - 2012 President of the Faculty Council of Student Government of computer science, Member of the
                Polish Republic Parliamentary Committee for the Innovation and New Technology, President of the
                Presidium of Technical University Council of Student Government
            </li>
        </ul>
    </section>

    <section>
        Hobbies and Interests
        NEW TECHNOLOGIES VOLLEYBALL, TRIATHLON TRAVELLING, COMPUTER GAMES
    </section>
    <br>
    <br>
    <footer>
        Sebastian Lewandowski
        <address>Polna 29/11, Poznań 61-141</address>
        <a href="mailto:sebalewandowski@gmail.com">Email Me</a>
    </footer>
</div>
<br>
<br>
<br>
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
        <input type="checkbox" name="zgoda" class="form-control"
               placeholder="Wyrażam zgode na przetwarzanie moich danych osobowych">
    </div>
    <div class="form-group">
        <input type="submit" value="Send">
    </div>
</form>
</body>
</html>