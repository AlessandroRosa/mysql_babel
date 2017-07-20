<?php

# File name : en.php
# File description : German dictionary for MySQL Babel

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

function get_dict_original_name()   { return "Deutsch" ; }
function get_dict_english_name()    { return "German" ; }
function get_dict_version()         { return "0.1" ; }
function get_dict_ISO_code()        { return "de" ; }
function get_dict_file_name()       { return "de.php" ; }
function get_dict_author()          { return "enter your name" ; }
function get_dict_last_modified()   { return "Feb 23th 2006" ; }

# These are functions devoted to the translation process

function load_errors()
{
    $errors_array[0] = "keine Fehler" ;
    $errors_array[1] = "Verbindungsparameterfehler: alle Eingabedaten fehlen" ;
    $errors_array[2] = "Verbindungsparameterfehler: server trifft daneben" ;
    $errors_array[3] = "Verbindungsparameterfehler: database fehlt" ;
    $errors_array[4] = "Verbindungsparameterfehler: username fehlt" ;
    $errors_array[5] = "Verbindungsparameterfehler: password fehlt" ;
    $errors_array[6] = "Syntaxfehler: Quellenschnur fehlt" ;
    $errors_array[7] = "Syntaxfehler: Sattelschlepperdoppelpunkt fehlt" ;
    $errors_array[8] = "Syntaxfehler: mißlungene Frageeingabe" ;
    $errors_array[9] = "leere Frageeingabe" ;

    return $errors_array ;
}

function load_language()
{

// add distinct terms

    $cmdsArray[0][0] = "und" ;              $cmdsArray[0][1] = "0001" ;
    $cmdsArray[1][0] = "ist" ;              $cmdsArray[1][1] = "0002" ;
    $cmdsArray[2][0] = "zu" ;               $cmdsArray[2][1] = "0002" ;
    $cmdsArray[3][0] = "mit" ;              $cmdsArray[3][1] = "0002" ;
    $cmdsArray[4][0] = "oder" ;             $cmdsArray[4][1] = "0002" ;
    $cmdsArray[5][0] = "das" ;              $cmdsArray[5][1] = "0002" ;
    $cmdsArray[6][0] = "die" ;              $cmdsArray[6][1] = "0002" ;
    $cmdsArray[7][0] = "die" ;              $cmdsArray[7][1] = "0002" ;
    $cmdsArray[8][0] = "die" ;              $cmdsArray[8][1] = "0002" ;
    $cmdsArray[9][0] = "die" ;              $cmdsArray[9][1] = "0002" ;
    $cmdsArray[10][0] = "die" ;             $cmdsArray[10][1] = "0002" ;
    $cmdsArray[11][0] = "von" ;             $cmdsArray[11][1] = "0009" ;
    $cmdsArray[12][0] = "benutzen" ;        $cmdsArray[12][1] = "0011" ;
    $cmdsArray[13][0] = "wählen" ;          $cmdsArray[13][1] = "0012" ;
    $cmdsArray[14][0] = "zeigen" ;          $cmdsArray[14][1] = "0015" ;
    $cmdsArray[15][0] = "wo" ;              $cmdsArray[15][1] = "0013" ;
    $cmdsArray[16][0] = "befehlen" ;        $cmdsArray[16][1] = "0014" ;
    $cmdsArray[17][0] = "Tisch" ;           $cmdsArray[17][1] = "0016" ;
    $cmdsArray[18][0] = "Tische" ;          $cmdsArray[18][1] = "0017" ;
    $cmdsArray[19][0] = "Felder" ;          $cmdsArray[19][1] = "0018" ;
    $cmdsArray[20][0] = "schließt" ;        $cmdsArray[20][1] = "0019" ;
    $cmdsArray[21][0] = "gleich" ;          $cmdsArray[21][1] = "0020" ;
    $cmdsArray[22][0] = "größer" ;          $cmdsArray[22][1] = "0021" ;
    $cmdsArray[23][0] = "kleiner" ;         $cmdsArray[23][1] = "0022" ;
    $cmdsArray[24][0] = "schaffen" ;        $cmdsArray[24][1] = "0023" ;
    $cmdsArray[25][0] = "tropfen" ;         $cmdsArray[25][1] = "0024" ;
    $cmdsArray[26][0] = "löschen" ;         $cmdsArray[26][1] = "0025" ;
    $cmdsArray[27][0] = "aktualisieren" ;   $cmdsArray[27][1] = "0026" ;
    $cmdsArray[28][0] = "setzten" ;         $cmdsArray[28][1] = "0027" ;
    $cmdsArray[29][0] = "einlegen" ;        $cmdsArray[29][1] = "0028" ;
    $cmdsArray[30][0] = "ersetzen" ;        $cmdsArray[30][1] = "0029" ;
    $cmdsArray[31][0] = "in" ;              $cmdsArray[31][1] = "0030" ;
    $cmdsArray[32][0] = "feld" ;            $cmdsArray[32][1] = "0002" ;
    $cmdsArray[33][0] = "Werte" ;           $cmdsArray[33][1] = "0031" ;
    $cmdsArray[34][0] = "aufsteigend" ;     $cmdsArray[34][1] = "0032" ;
    $cmdsArray[35][0] = "absteigend" ;      $cmdsArray[35][1] = "0033" ;
    $cmdsArray[36][0] = "Beispiel" ;        $cmdsArray[36][1] = "0034" ;
    $cmdsArray[37][0] = "Beispiele" ;       $cmdsArray[37][1] = "0035" ;
    $cmdsArray[38][0] = "Möglichkeit" ;     $cmdsArray[38][1] = "0036" ;
    $cmdsArray[39][0] = "Möglichkeiten" ;   $cmdsArray[39][1] = "0037" ;
    $cmdsArray[40][0] = "Datenbank" ;       $cmdsArray[40][1] = "0038" ;
    $cmdsArray[41][0] = "kürzen" ;          $cmdsArray[41][1] = "0003" ;
    $cmdsArray[42][0] = "andern" ;          $cmdsArray[42][1] = "0004" ;
    $cmdsArray[43][0] = "dazutun" ;         $cmdsArray[43][1] = "0005" ;
    $cmdsArray[44][0] = "Säule" ;           $cmdsArray[44][1] = "0006" ;
    $cmdsArray[45][0] = "benennen" ;        $cmdsArray[45][1] = "0007" ;
    $cmdsArray[46][0] = "enthält" ;         $cmdsArray[46][1] = "0019" ;
    $cmdsArray[47][0] = "gruppieren" ;      $cmdsArray[47][1] = "0010" ;
    $cmdsArray[48][0] = "durch" ;           $cmdsArray[48][1] = "0039" ;
    $cmdsArray[49][0] = "als" ;             $cmdsArray[49][1] = "0002" ;
    $cmdsArray[50][0] = "machen" ;          $cmdsArray[50][1] = "0012" ;
    $cmdsArray[51][0] = "Durchschnitt" ;    $cmdsArray[51][1] = "0040" ;
    $cmdsArray[52][0] = "alles" ;           $cmdsArray[52][1] = "0041" ;
    $cmdsArray[53][0] = "dann" ;            $cmdsArray[53][1] = "0002" ;
    $cmdsArray[54][0] = "Summe" ;           $cmdsArray[54][1] = "0042" ;
    $cmdsArray[55][0] = "finden" ;          $cmdsArray[55][1] = "0012" ;
    $cmdsArray[56][0] = "Max" ;             $cmdsArray[56][1] = "0043" ;
    $cmdsArray[57][0] = "Min" ;             $cmdsArray[57][1] = "0044" ;
    $cmdsArray[58][0] = "zusammen" ;        $cmdsArray[58][1] = "0045" ;
    $cmdsArray[59][0] = "wie" ;             $cmdsArray[59][1] = "0046" ;
    $cmdsArray[60][0] = "verschieden" ;     $cmdsArray[60][1] = "0047" ;
    $cmdsArray[61][0] = "rechnen" ;         $cmdsArray[61][1] = "0012" ;

// add synonyms

    $cmdsArray[62][0] = "auserlesen" ;      $cmdsArray[62][1] = "0012" ;
    $cmdsArray[63][0] = "ins" ;             $cmdsArray[63][1] = "0030" ;

    return $cmdsArray ;
}

function pre_idiomatic( $strIn )
{
    $strOut = str_replace( "alle Felder", "alles", $strIn ) ;
    $strOut = str_replace( "jedes Feld", "alles", $strOut ) ;
    $strOut = str_replace( "Datenbank", "database", $strOut ) ;
    $strOut = str_replace( "Wort", "", $strOut ) ;
    $strOut = str_replace( "Satz", "", $strOut ) ;
    $strOut = str_replace( "und zusammen", "zusammen", $strOut ) ;

    return $strOut ;
}
?>
