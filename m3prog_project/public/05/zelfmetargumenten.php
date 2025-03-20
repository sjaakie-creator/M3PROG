<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) {
    echo "Amount: $amount, From: $fromCurrency, To: $toCurrency\n";
}

function sendEmail($to, $from, $subject, $message) {
    echo "To: $to, From: $from, Subject: $subject, Message: $message\n";
}

function generateRandomString($length) {
    echo "Length: $length\n";
}

function calculateArea($length, $width) {
    echo "Length: $length, Width: $width\n";
}


convertCurrency(100, "USD", "EUR");
sendEmail("test@example.com", "no-reply@example.com", "Hello", "This is a test email.");
generateRandomString(10);
calculateArea(5, 10);

?>




<!-- http://localhost:88/05/zelfmetargumenten.php -->