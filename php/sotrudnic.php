<?php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="./css/style.css" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

        <title>Планировщик недели</title>
    </head>

    <body>
        <header class="header">
            <h1 class="title">Планировщик рабочей недели!!!</h1>
        </header>

        <section class="cont">
            <section class="colCont">
                <div class="panel">
                    <div class="btn">
                        <a class="clickbtn" href="index.html">Планировщик</a>
                    </div>
                    <div class="btn">
                        <a class="clickbtn" href="Sotrudnic.html">Сотрудники</a>
                    </div>
                </div>
                <div class="centerios">
                    <div class="infor">
                        <table class="table" id="tbl">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <td scope="col">Имя</td>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="minus">[-]</a></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="edit">Edit</a>                                       
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btnadd">
                        <form action="" method="POST">
                            <input class="plusProject" type="button" value="+">
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </body>
</html>
?>