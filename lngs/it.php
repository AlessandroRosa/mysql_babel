<?php

# File name : it.php
# File description : Italian dictionary for MySQL Babel

# This third-part dictionary is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 3 of the License, or
# any later version.

# This third-part dictionary is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.

# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

# These functions retrieve identikit data for each dictionary

function get_dict_original_name()   { return "Italiano" ; }
function get_dict_english_name()    { return "Italian" ; }
function get_dict_version()         { return "0.1" ; }
function get_dict_ISO_code()        { return "it" ; }
function get_dict_file_name()       { return "it.php" ; }
function get_dict_author()          { return "enter your name" ; }
function get_dict_last_modified()   { return "Feb 23th 2006" ; }

# These are functions devoted to the translation process

function load_errors()
{
    $errors_array[0] = "nessun errore" ;
    $errors_array[1] = "errore dei parametri di connessione: tutti i parametri mancanti" ;
    $errors_array[2] = "errore dei parametri di connessione: server mancante" ;
    $errors_array[3] = "errore dei parametri di connessione: nome del database mancante" ;
    $errors_array[4] = "errore dei parametri di connessione: username mancante" ;
    $errors_array[5] = "errore dei parametri di connessione: password mancante" ;
    $errors_array[6] = "errore di sintassi: stringa di input mancante" ;
    $errors_array[7] = "errore di sintassi: punto e virgola mancante" ;
    $errors_array[8] = "errore di sintassi: query non corretta" ;
    $errors_array[9] = "errore: il risultato della query é vuoto" ;

    return $errors_array ;
}

function load_language()
{

// add distinct terms

    $cmdsArray[0][0] = "e" ;               $cmdsArray[0][1] = "0001" ;
    $cmdsArray[1][0] = "é" ;               $cmdsArray[1][1] = "0002" ;
    $cmdsArray[2][0] = "a" ;               $cmdsArray[2][1] = "0002" ;
    $cmdsArray[3][0] = "con" ;             $cmdsArray[3][1] = "0002" ;
    $cmdsArray[4][0] = "o" ;               $cmdsArray[4][1] = "0002" ;
    $cmdsArray[5][0] = "il" ;              $cmdsArray[5][1] = "0002" ;
    $cmdsArray[6][0] = "lo" ;              $cmdsArray[6][1] = "0002" ;
    $cmdsArray[7][0] = "la" ;              $cmdsArray[7][1] = "0002" ;
    $cmdsArray[8][0] = "i" ;               $cmdsArray[8][1] = "0002" ;
    $cmdsArray[9][0] = "gli" ;             $cmdsArray[9][1] = "0002" ;
    $cmdsArray[10][0] = "le" ;             $cmdsArray[10][1] = "0002" ;
    $cmdsArray[11][0] = "da" ;             $cmdsArray[11][1] = "0009" ;
    $cmdsArray[12][0] = "usa" ;            $cmdsArray[12][1] = "0011" ;
    $cmdsArray[13][0] = "seleziona" ;      $cmdsArray[13][1] = "0012" ;
    $cmdsArray[14][0] = "mostra" ;         $cmdsArray[14][1] = "0015" ;
    $cmdsArray[15][0] = "dove" ;           $cmdsArray[15][1] = "0013" ;
    $cmdsArray[16][0] = "ordina" ;         $cmdsArray[16][1] = "0014" ;
    $cmdsArray[17][0] = "tabella" ;        $cmdsArray[17][1] = "0016" ;
    $cmdsArray[18][0] = "tabelle" ;        $cmdsArray[18][1] = "0017" ;
    $cmdsArray[19][0] = "campi" ;          $cmdsArray[19][1] = "0018" ;
    $cmdsArray[20][0] = "contiene" ;       $cmdsArray[20][1] = "0019" ;
    $cmdsArray[21][0] = "uguale" ;         $cmdsArray[21][1] = "0020" ;
    $cmdsArray[22][0] = "minore" ;         $cmdsArray[22][1] = "0021" ;
    $cmdsArray[23][0] = "maggiore" ;       $cmdsArray[23][1] = "0022" ;
    $cmdsArray[24][0] = "crea" ;           $cmdsArray[24][1] = "0023" ;
    $cmdsArray[25][0] = "elimina" ;        $cmdsArray[25][1] = "0024" ;
    $cmdsArray[26][0] = "cancella" ;       $cmdsArray[26][1] = "0025" ;
    $cmdsArray[27][0] = "aggiorna" ;       $cmdsArray[27][1] = "0026" ;
    $cmdsArray[28][0] = "impostando" ;     $cmdsArray[28][1] = "0027" ;
    $cmdsArray[29][0] = "inserisci" ;      $cmdsArray[29][1] = "0028" ;
    $cmdsArray[30][0] = "sostituisci" ;    $cmdsArray[30][1] = "0029" ;
    $cmdsArray[31][0] = "nel" ;            $cmdsArray[31][1] = "0030" ;
    $cmdsArray[32][0] = "campo" ;          $cmdsArray[32][1] = "0002" ;
    $cmdsArray[33][0] = "valori" ;         $cmdsArray[33][1] = "0031" ;
    $cmdsArray[34][0] = "ascendente" ;     $cmdsArray[34][1] = "0032" ;
    $cmdsArray[35][0] = "discendente" ;    $cmdsArray[35][1] = "0033" ;
    $cmdsArray[36][0] = "istanza" ;        $cmdsArray[36][1] = "0034" ;
    $cmdsArray[37][0] = "istanze" ;        $cmdsArray[37][1] = "0035" ;
    $cmdsArray[38][0] = "opzione" ;        $cmdsArray[38][1] = "0036" ;
    $cmdsArray[39][0] = "opzioni" ;        $cmdsArray[39][1] = "0037" ;
    $cmdsArray[40][0] = "database" ;       $cmdsArray[40][1] = "0038" ;
    $cmdsArray[41][0] = "tronca" ;         $cmdsArray[41][1] = "0003" ;
    $cmdsArray[42][0] = "altera" ;         $cmdsArray[42][1] = "0004" ;
    $cmdsArray[43][0] = "aggiungi" ;       $cmdsArray[43][1] = "0005" ;
    $cmdsArray[44][0] = "colonna" ;        $cmdsArray[44][1] = "0006" ;
    $cmdsArray[45][0] = "rinomina" ;       $cmdsArray[45][1] = "0007" ;
    $cmdsArray[46][0] = "include" ;        $cmdsArray[46][1] = "0019" ;
    $cmdsArray[47][0] = "raggruppa" ;      $cmdsArray[47][1] = "0010" ;
    $cmdsArray[48][0] = "per" ;            $cmdsArray[48][1] = "0039" ;
    $cmdsArray[49][0] = "di" ;             $cmdsArray[49][1] = "0002" ;
    $cmdsArray[50][0] = "fai" ;            $cmdsArray[50][1] = "0012" ;
    $cmdsArray[51][0] = "media" ;          $cmdsArray[51][1] = "0040" ;
    $cmdsArray[52][0] = "tutto" ;          $cmdsArray[52][1] = "0041" ;
    $cmdsArray[53][0] = "quindi" ;         $cmdsArray[53][1] = "0002" ;
    $cmdsArray[54][0] = "somma" ;          $cmdsArray[54][1] = "0042" ;
    $cmdsArray[55][0] = "trova" ;          $cmdsArray[55][1] = "0012" ;
    $cmdsArray[56][0] = "massimo" ;        $cmdsArray[56][1] = "0043" ;
    $cmdsArray[57][0] = "minimo" ;         $cmdsArray[57][1] = "0044" ;
    $cmdsArray[58][0] = "insieme" ;        $cmdsArray[58][1] = "0045" ;
    $cmdsArray[59][0] = "come" ;           $cmdsArray[59][1] = "0046" ;
    $cmdsArray[60][0] = "diverso" ;        $cmdsArray[60][1] = "0047" ;
    $cmdsArray[61][0] = "calcola" ;        $cmdsArray[61][1] = "0012" ;

// add synonyms

    $cmdsArray[62][0] = "in" ;             $cmdsArray[62][1] = "0030" ;
    $cmdsArray[63][0] = "dai" ;            $cmdsArray[63][1] = "0009" ;
    $cmdsArray[64][0] = "dal" ;            $cmdsArray[64][1] = "0009" ;
    $cmdsArray[65][0] = "dalla" ;          $cmdsArray[65][1] = "0009" ;
    $cmdsArray[66][0] = "della" ;          $cmdsArray[66][1] = "0009" ;
    $cmdsArray[67][0] = "scegli" ;         $cmdsArray[67][1] = "0012" ;
    $cmdsArray[68][0] = "visualizza" ;     $cmdsArray[68][1] = "0015" ;
    $cmdsArray[69][0] = "secondo" ;        $cmdsArray[69][1] = "0039" ;
    $cmdsArray[70][0] = "computa" ;        $cmdsArray[70][1] = "0012" ;
    $cmdsArray[71][0] = "modifica" ;       $cmdsArray[71][1] = "0004" ;
    $cmdsArray[72][0] = "simile" ;         $cmdsArray[72][1] = "0020" ;
    $cmdsArray[73][0] = "poi" ;            $cmdsArray[73][1] = "0002" ;
    $cmdsArray[74][0] = "nella" ;          $cmdsArray[74][1] = "0030" ;
    $cmdsArray[75][0] = "ed" ;             $cmdsArray[75][1] = "0002" ;
    $cmdsArray[76][0] = "al" ;             $cmdsArray[76][1] = "0002" ;

    return $cmdsArray ;
}

function pre_idiomatic( $strIn )
{
    $strOut = str_replace( "tutti i campi", "tutto", $strIn ) ;
    $strOut = str_replace( "tutti i dati", "tutto", $strIn ) ;
    $strOut = str_replace( "ogni campo", "tutto", $strOut ) ;
    $strOut = str_replace( "banca dati", "database", $strOut ) ;
    $strOut = str_replace( "parola", "", $strOut ) ;
    $strOut = str_replace( "frase", "", $strOut ) ;
    $strOut = str_replace( "ed insieme", "insieme", $strOut ) ;

    return $strOut ;
}

?>
