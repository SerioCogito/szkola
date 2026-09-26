<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <a href="islandia.php">
            <h1>Zwiedzaj Islandie</h1>
        </a>
    </header>
    <main>
        <section>
            <h2>Galeria</h2>
        </section>
    </main>
    <nav>
        <h3>Do zwiedzania</h3>
            <ul>
                <li>wodospady
                    <ol>
                       <?php
                        $conn = mysqli_connect("localhost", "root", "", "islandia");                                                        //polaczenie z baza (server, uzytkownik, haslo, nazwa bazy)
                        $wynik = mysqli_query($conn, "SELECT obiekty.nazwa FROM obiekty WHERE panstwo = 'Islandia' AND idRodzaj = 10");     //wysyla zapytanie np 3 odpowiada zapytaniiu 3 z baz danych
                        while($w = mysqli_fetch_assoc($wynik)){                                                                             //wypisuje kazda nazwe jako element listy
                            echo "<li>" . $w['nazwa'] . "</li>";                                                                            //$w['nazwa'] to wartosc kolumny nazwa. musi sie nazywac tak samo jak kolumna w SELECT
                        }
                        mysqli_close($conn);                                                                                                //zamyka polaczenie z baza
                       ?>
                    </ol>
                </li>
                <li>Siedliska zwierzat
                    <ol>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "islandia");
                        $wynik = mysqli_query($conn, "SELECT ")
                        ?>
                    </ol>
                </li>
</ul>
            
       
    </nav>

    <footer>
            <hr>
    <p>Autor: 238750256hdfb§5</p>
    </footer>
</body>

</html>