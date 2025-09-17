<?php

# Datentypen

// Zeichenkette
print gettype(value: 'Hello');  // string
print '<br>';

// Ganzzahl
print gettype(value: 123456);  // integer
print '<br>';

// Fließkommazahl
print gettype(value: 123.789);  // double
print '<br>';

// Unterstrich als Tausendertrenner
print 123_456.789_333;  // 123456.789333
print '<br>';
print 1_000_000_000;  // 1000000000
print '<br>';

// Wahrheitswert
print gettype(value: true);  // boolean
print '<br>';

// Identisch-Operator ===
// Testet die Werte UND den Datentyp
print 123 == '123';  // 1
print '<br>';
var_dump(123 == '123');  // bool(true)
print '<br>';
var_dump(123 === '123');  // bool(false)
