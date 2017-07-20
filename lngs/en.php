<?php

# File name : en.php
# File description : English dictionary for MySQL Babel

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

function get_dict_original_name()   { return "English" ; }
function get_dict_english_name()    { return "English" ; }
function get_dict_version()         { return "0.1" ; }
function get_dict_ISO_code()        { return "en" ; }
function get_dict_file_name()       { return "en.php" ; }
function get_dict_author()          { return "enter your name" ; }
function get_dict_last_modified()   { return "Feb 23th 2006" ; }

# These are functions devoted to the translation process

function load_errors()
{
    $errors_array[0] = "no errors" ;
    $errors_array[1] = "connection parameter error: all input data missing" ;
    $errors_array[2] = "connection parameter error: server missing" ;
    $errors_array[3] = "connection parameter error: database missing" ;
    $errors_array[4] = "connection parameter error: username missing" ;
    $errors_array[5] = "connection parameter error: password missing" ;
    $errors_array[6] = "syntax error: source string missing" ;
    $errors_array[7] = "syntax error: semi-colon missing" ;
    $errors_array[8] = "syntax error: failed query input" ;
    $errors_array[9] = "empty query input" ;

    return $errors_array ;
}

function load_language()
{

// add distinct terms

    $cmdsArray[0][0] = "and" ;              $cmdsArray[0][1] = "0001" ;
    $cmdsArray[1][0] = "is" ;               $cmdsArray[1][1] = "0002" ;
    $cmdsArray[2][0] = "to" ;               $cmdsArray[2][1] = "0002" ;
    $cmdsArray[3][0] = "with" ;             $cmdsArray[3][1] = "0002" ;
    $cmdsArray[4][0] = "or" ;               $cmdsArray[4][1] = "0002" ;
    $cmdsArray[5][0] = "the" ;              $cmdsArray[5][1] = "0002" ;
    $cmdsArray[6][0] = "from" ;             $cmdsArray[6][1] = "0009" ;
    $cmdsArray[7][0] = "use" ;              $cmdsArray[7][1] = "0011" ;
    $cmdsArray[8][0] = "select" ;           $cmdsArray[8][1] = "0012" ;
    $cmdsArray[9][0] = "show" ;             $cmdsArray[9][1] = "0015" ;
    $cmdsArray[10][0] = "where" ;           $cmdsArray[10][1] = "0013" ;
    $cmdsArray[11][0] = "order" ;           $cmdsArray[11][1] = "0014" ;
    $cmdsArray[12][0] = "table" ;           $cmdsArray[12][1] = "0016" ;
    $cmdsArray[13][0] = "tables" ;          $cmdsArray[13][1] = "0017" ;
    $cmdsArray[14][0] = "fields" ;          $cmdsArray[14][1] = "0018" ;
    $cmdsArray[15][0] = "includes" ;        $cmdsArray[15][1] = "0019" ;
    $cmdsArray[16][0] = "equal" ;           $cmdsArray[16][1] = "0020" ;
    $cmdsArray[17][0] = "greater" ;         $cmdsArray[17][1] = "0021" ;
    $cmdsArray[18][0] = "smaller" ;         $cmdsArray[18][1] = "0022" ;
    $cmdsArray[19][0] = "create" ;          $cmdsArray[19][1] = "0023" ;
    $cmdsArray[20][0] = "drop" ;            $cmdsArray[20][1] = "0024" ;
    $cmdsArray[21][0] = "delete" ;          $cmdsArray[21][1] = "0025" ;
    $cmdsArray[22][0] = "update" ;          $cmdsArray[22][1] = "0026" ;
    $cmdsArray[23][0] = "set" ;             $cmdsArray[23][1] = "0027" ;
    $cmdsArray[24][0] = "insert" ;          $cmdsArray[24][1] = "0028" ;
    $cmdsArray[25][0] = "replace" ;         $cmdsArray[25][1] = "0029" ;
    $cmdsArray[26][0] = "into" ;            $cmdsArray[26][1] = "0030" ;
    $cmdsArray[27][0] = "field" ;           $cmdsArray[27][1] = "0002" ;
    $cmdsArray[28][0] = "values" ;          $cmdsArray[28][1] = "0031" ;
    $cmdsArray[29][0] = "ascending" ;       $cmdsArray[29][1] = "0032" ;
    $cmdsArray[30][0] = "descending" ;      $cmdsArray[30][1] = "0033" ;
    $cmdsArray[31][0] = "istance" ;         $cmdsArray[31][1] = "0034" ;
    $cmdsArray[32][0] = "istances" ;        $cmdsArray[32][1] = "0035" ;
    $cmdsArray[33][0] = "option" ;          $cmdsArray[33][1] = "0036" ;
    $cmdsArray[34][0] = "options" ;         $cmdsArray[34][1] = "0037" ;
    $cmdsArray[35][0] = "database" ;        $cmdsArray[35][1] = "0038" ;
    $cmdsArray[36][0] = "truncate" ;        $cmdsArray[36][1] = "0003" ;
    $cmdsArray[37][0] = "alter" ;           $cmdsArray[37][1] = "0004" ;
    $cmdsArray[38][0] = "add" ;             $cmdsArray[38][1] = "0005" ;
    $cmdsArray[39][0] = "column" ;          $cmdsArray[39][1] = "0006" ;
    $cmdsArray[40][0] = "rename" ;          $cmdsArray[40][1] = "0007" ;
    $cmdsArray[41][0] = "contains" ;        $cmdsArray[41][1] = "0019" ;
    $cmdsArray[42][0] = "group" ;           $cmdsArray[42][1] = "0010" ;
    $cmdsArray[43][0] = "by" ;              $cmdsArray[43][1] = "0039" ;
    $cmdsArray[44][0] = "than" ;            $cmdsArray[44][1] = "0002" ;
    $cmdsArray[45][0] = "make" ;            $cmdsArray[45][1] = "0012" ;
    $cmdsArray[46][0] = "average" ;         $cmdsArray[46][1] = "0040" ;
    $cmdsArray[47][0] = "all" ;             $cmdsArray[47][1] = "0041" ;
    $cmdsArray[48][0] = "then" ;            $cmdsArray[48][1] = "0002" ;
    $cmdsArray[49][0] = "sum" ;             $cmdsArray[49][1] = "0042" ;
    $cmdsArray[50][0] = "find" ;            $cmdsArray[50][1] = "0012" ;
    $cmdsArray[51][0] = "max" ;             $cmdsArray[51][1] = "0043" ;
    $cmdsArray[52][0] = "min" ;             $cmdsArray[52][1] = "0044" ;
    $cmdsArray[53][0] = "together" ;        $cmdsArray[53][1] = "0045" ;
    $cmdsArray[54][0] = "as" ;              $cmdsArray[54][1] = "0046" ;
    $cmdsArray[55][0] = "distinct" ;        $cmdsArray[55][1] = "0047" ;
    $cmdsArray[56][0] = "calculate" ;       $cmdsArray[56][1] = "0012" ;

// add synonyms

    $cmdsArray[57][0] = "in" ;              $cmdsArray[57][1] = "0030" ;
    $cmdsArray[58][0] = "choose" ;          $cmdsArray[58][1] = "0012" ;
    $cmdsArray[59][0] = "compute" ;         $cmdsArray[59][1] = "0012" ;
    $cmdsArray[60][0] = "larger" ;          $cmdsArray[60][1] = "0022" ;
    $cmdsArray[61][0] = "display" ;         $cmdsArray[61][1] = "0012" ;
    $cmdsArray[62][0] = "visualize" ;       $cmdsArray[62][1] = "0015" ;
    $cmdsArray[63][0] = "like" ;            $cmdsArray[63][1] = "0019" ;

    return $cmdsArray ;
}

function pre_idiomatic( $strIn )
{
    $strOut = str_replace( "all fields", "all", $strIn ) ;
    $strOut = str_replace( "all the fields", "all", $strOut ) ;
    $strOut = str_replace( "every field", "all", $strOut ) ;
    $strOut = str_replace( "each field", "all", $strOut ) ;
    $strOut = str_replace( "word", "", $strOut ) ;
    $strOut = str_replace( "sentence", "", $strOut ) ;
    $strOut = str_replace( "phrase", "", $strOut ) ;
    $strOut = str_replace( "and together", "together", $strOut ) ;

    return $strOut ;
}
?>
