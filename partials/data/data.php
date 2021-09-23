<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
Stampare i numeri in pagina.

SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). 
Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.


BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida") -->

<?php

$class = [
    [
        'Nome' => 'Giuseppe',
        'Cognome' => 'Pisani',
        'Voti' => [8, 10, 9]
    ],
    [
        'Nome' => 'Giorgio',
        'Cognome' => 'Andrei',
        'Voti' => [5, 6, 8]
    ],
    [
        'Nome' => 'Pasquale',
        'Cognome' => 'Raso',
        'Voti' => [2, 6, 6]
    ]
];

?>