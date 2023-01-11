<?php

// Premiere ligne

function maFonction () {
    echo "Hello World!";
}

//Deuxieme ligne

maFonction();

//Troisieme ligne
/**
 * @param $fname string  name
 * @param $lname string  surname
 * @return mixed
 */
function maFonctionParam($fname, $lname) {
    echo $fname;
    return $lname;
}

maFonctionParam("joe", "cray");

