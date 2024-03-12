<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST['amount']; // Kwota kredytu
$years = $_REQUEST['years']; // Ile lat
$interest = $_REQUEST['interest']; // Oprocentowanie roczne

// Walidacja parametrów z przygotowaniem zmiennych dla widoku

$messages = [];

if (!isset($amount, $years, $interest)) {
    $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ($amount == "") {
    $messages[] = 'Nie podano kwoty kredytu';
}
if ($years == "") {
    $messages[] = 'Nie podano liczby lat';
}
if ($interest == "") {
    $messages[] = 'Nie podano oprocentowania';
}

if (empty($messages)) {
    if (!is_numeric($amount) || $amount <= 0) {
        $messages[] = 'Kwota kredytu nie jest poprawną liczbą dodatnią';
    }
    if (!is_numeric($years) || $years <= 0 || intval($years) != $years) {
        $messages[] = 'Liczba lat nie jest poprawną liczbą całkowitą dodatnią';
    }
    if (!is_numeric($interest) || $interest < 0) {
        $messages[] = 'Oprocentowanie nie jest poprawną wartością';
    }
}

if (empty($messages)) {
    $amount = floatval($amount);
    $years = intval($years);
    $interest = floatval($interest) / 100; // Konwersja procent na format dziesiętny

    // Obliczanie miesięcznej raty kredytu 
    $m = 12; // Liczba miesięcy w roku
    $n = $years * $m; // Łączna liczba rat
    $R = $amount * pow(1 + ($interest / $m), $n) * ($interest / $m) / (pow(1 + ($interest / $m), $n) - 1);

    $result = $R;
}

include 'calc_view.php';
