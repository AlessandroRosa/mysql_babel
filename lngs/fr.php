<?php

# File name : fr.php
# File description : French dictionary for MySQL Babel

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

function get_dict_original_name()   { return "Fran&ccedil;ois" ; }
function get_dict_english_name()    { return "French" ; }
function get_dict_version()         { return "0.1" ; }
function get_dict_ISO_code()        { return "fr" ; }
function get_dict_file_name()       { return "fr.php" ; }
function get_dict_author()          { return "enter your name" ; }
function get_dict_last_modified()   { return "Feb 23th 2006" ; }

# These are functions devoted to the translation process

function load_errors()
{
    $errors_array[0] = "il n'y a pas d'erreurs" ;
    $errors_array[1] = "erreur du paramètre du connexion: tout le donnée manquer" ;
    $errors_array[2] = "erreur du paramètre du connexion: serveur manquer" ;
    $errors_array[3] = "erreur du paramètre du connexion: base de données manquer" ;
    $errors_array[4] = "erreur du paramètre du connexion: utilisateur manquer" ;
    $errors_array[5] = "erreur du paramètre du connexion: mot de passe manquer" ;
    $errors_array[6] = "erreur de la syntaxe: source ficelle manquer" ;
    $errors_array[7] = "erreur de la syntaxe: point-virgule manquer" ;
    $errors_array[8] = "erreur de la syntaxe: production de la query manquée" ;
    $errors_array[9] = "production de la query vide" ;

    return $errors_array ;
}

function load_language()
{

// add distinct terms

    $cmdsArray[0][0] = "et" ;              $cmdsArray[0][1] = "0001" ;
    $cmdsArray[1][0] = "est" ;             $cmdsArray[1][1] = "0002" ;
    $cmdsArray[2][0] = "à" ;               $cmdsArray[2][1] = "0002" ;
    $cmdsArray[3][0] = "avec" ;            $cmdsArray[3][1] = "0002" ;
    $cmdsArray[4][0] = "ou" ;              $cmdsArray[4][1] = "0002" ;
    $cmdsArray[5][0] = "le" ;              $cmdsArray[5][1] = "0002" ;
    $cmdsArray[6][0] = "la" ;              $cmdsArray[6][1] = "0002" ;
    $cmdsArray[7][0] = "les" ;             $cmdsArray[7][1] = "0002" ;
    $cmdsArray[8][0] = "donc" ;            $cmdsArray[8][1] = "0002" ;
    $cmdsArray[9][0] = "de" ;              $cmdsArray[9][1] = "0009" ;
    $cmdsArray[10][0] = "utilisez" ;       $cmdsArray[10][1] = "0011" ;
    $cmdsArray[11][0] = "selectionez" ;    $cmdsArray[11][1] = "0012" ;
    $cmdsArray[12][0] = "montrez" ;        $cmdsArray[12][1] = "0015" ;
    $cmdsArray[13][0] = "où" ;             $cmdsArray[13][1] = "0013" ;
    $cmdsArray[14][0] = "rangez" ;         $cmdsArray[14][1] = "0014" ;
    $cmdsArray[15][0] = "tableau" ;        $cmdsArray[15][1] = "0016" ;
    $cmdsArray[16][0] = "tableaux" ;       $cmdsArray[16][1] = "0017" ;
    $cmdsArray[17][0] = "champs" ;         $cmdsArray[17][1] = "0018" ;
    $cmdsArray[18][0] = "inclut" ;         $cmdsArray[18][1] = "0019" ;
    $cmdsArray[19][0] = "égal" ;           $cmdsArray[19][1] = "0020" ;
    $cmdsArray[20][0] = "mineur" ;         $cmdsArray[20][1] = "0021" ;
    $cmdsArray[21][0] = "majeur" ;         $cmdsArray[21][1] = "0022" ;
    $cmdsArray[22][0] = "créez" ;          $cmdsArray[22][1] = "0023" ;
    $cmdsArray[23][0] = "laissez" ;        $cmdsArray[23][1] = "0024" ;
    $cmdsArray[24][0] = "rayez" ;          $cmdsArray[24][1] = "0025" ;
    $cmdsArray[25][0] = "actualisez" ;     $cmdsArray[25][1] = "0026" ;
    $cmdsArray[26][0] = "met" ;            $cmdsArray[26][1] = "0027" ;
    $cmdsArray[27][0] = "insérez" ;        $cmdsArray[27][1] = "0028" ;
    $cmdsArray[28][0] = "substitues" ;     $cmdsArray[28][1] = "0029" ;
    $cmdsArray[29][0] = "en" ;             $cmdsArray[29][1] = "0030" ;
    $cmdsArray[30][0] = "champ" ;          $cmdsArray[30][1] = "0002" ;
    $cmdsArray[31][0] = "valeurs" ;        $cmdsArray[31][1] = "0031" ;
    $cmdsArray[32][0] = "ascendant" ;      $cmdsArray[32][1] = "0032" ;
    $cmdsArray[33][0] = "descendant" ;     $cmdsArray[33][1] = "0033" ;
    $cmdsArray[34][0] = "istance" ;        $cmdsArray[34][1] = "0034" ;
    $cmdsArray[35][0] = "istances" ;       $cmdsArray[35][1] = "0035" ;
    $cmdsArray[36][0] = "option" ;         $cmdsArray[36][1] = "0036" ;
    $cmdsArray[37][0] = "options" ;        $cmdsArray[37][1] = "0037" ;
    $cmdsArray[38][0] = "database" ;       $cmdsArray[38][1] = "0038" ;
    $cmdsArray[39][0] = "vide" ;           $cmdsArray[39][1] = "0003" ;
    $cmdsArray[40][0] = "altère" ;         $cmdsArray[40][1] = "0004" ;
    $cmdsArray[41][0] = "ajoutes" ;        $cmdsArray[41][1] = "0005" ;
    $cmdsArray[42][0] = "colonne" ;        $cmdsArray[42][1] = "0006" ;
    $cmdsArray[43][0] = "renomme" ;        $cmdsArray[43][1] = "0007" ;
    $cmdsArray[44][0] = "contient" ;       $cmdsArray[44][1] = "0019" ;
    $cmdsArray[45][0] = "regroupe" ;       $cmdsArray[45][1] = "0010" ;
    $cmdsArray[46][0] = "pour" ;           $cmdsArray[46][1] = "0039" ;
    $cmdsArray[47][0] = "que" ;            $cmdsArray[47][1] = "0002" ;
    $cmdsArray[48][0] = "faites" ;         $cmdsArray[48][1] = "0012" ;
    $cmdsArray[49][0] = "moyenne" ;        $cmdsArray[49][1] = "0040" ;
    $cmdsArray[50][0] = "tout" ;           $cmdsArray[50][1] = "0041" ;
    $cmdsArray[51][0] = "alors" ;          $cmdsArray[51][1] = "0002" ;
    $cmdsArray[52][0] = "somme" ;          $cmdsArray[52][1] = "0042" ;
    $cmdsArray[53][0] = "trouve" ;         $cmdsArray[53][1] = "0012" ;
    $cmdsArray[54][0] = "maximum" ;        $cmdsArray[54][1] = "0043" ;
    $cmdsArray[55][0] = "minimum" ;        $cmdsArray[55][1] = "0044" ;
    $cmdsArray[56][0] = "simultanément" ;  $cmdsArray[56][1] = "0045" ;
    $cmdsArray[57][0] = "comme" ;          $cmdsArray[57][1] = "0046" ;
    $cmdsArray[58][0] = "distinct" ;       $cmdsArray[58][1] = "0047" ;
    $cmdsArray[59][0] = "calculer" ;       $cmdsArray[59][1] = "0012" ;

// add synonyms

    $cmdsArray[60][0] = "dans" ;           $cmdsArray[60][1] = "0030" ;
    $cmdsArray[61][0] = "simultanément" ;  $cmdsArray[61][1] = "0045" ;
    $cmdsArray[62][0] = "employez" ;       $cmdsArray[62][1] = "0011" ;
    $cmdsArray[63][0] = "visualisez" ;     $cmdsArray[63][1] = "0015" ;
    $cmdsArray[64][0] = "ordonnez" ;       $cmdsArray[64][1] = "0014" ;
    $cmdsArray[65][0] = "effacez" ;        $cmdsArray[65][1] = "0025" ;
    $cmdsArray[66][0] = "supprimez" ;      $cmdsArray[66][1] = "0025" ;
    $cmdsArray[67][0] = "établissant" ;    $cmdsArray[67][1] = "0027" ;
    $cmdsArray[68][0] = "computez" ;       $cmdsArray[68][1] = "0012" ;
    $cmdsArray[69][0] = "choisissez" ;     $cmdsArray[69][1] = "0012" ;

    return $cmdsArray ;
}

function pre_idiomatic( $strIn )
{
    $strOut = str_replace( "tout champs", "tout", $strIn ) ;
    $strOut = str_replace( "tout les champs", "tout", $strOut ) ;
    $strOut = str_replace( "chaque champ", "tout", $strOut ) ;
    $strOut = str_replace( "base de données", "database", $strOut ) ;
    $strOut = str_replace( "mot", "", $strOut ) ;
    $strOut = str_replace( "phrase", "", $strOut ) ;
    $strOut = str_replace( "et simultanément", "simultanément", $strOut ) ;

    return $strOut ;
}
?>
