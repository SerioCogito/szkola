<?php
    $conn = mysqli_connect("localhost", "root", "", "baza"); //laczy sie z baza

    $data = $_POST['data'];         //zmienna data
    $osoby = $_POST['osoby'];       //zmeinna osoby
    $telefon = $_POST['telefon'];   //zmeinna telefon

    $sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$osoby', '$telefon')";    //zapytanie sql

    mysqli_query($conn, $sql);          //wysyla zapytanie do bazy i je wykonuje

    echo "dodano rezerwacje do bazy";   //wyswietla komunikat

    mysqli_close($conn);                //zamyka polaczenie z baza
?>
