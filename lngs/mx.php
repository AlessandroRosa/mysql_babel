<?php

# File name : mx.php
# File description : Mexican/Spanish dictionary for MySQL Babel

# Credits : thanks to Miguel Guirao Aguilera (miguel.guirao@mail.telcel.com)
#           for taking care of generating the Mexican/Spanish dictionary

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

function get_dict_original_name()   { return "Mexicano" ; }
function get_dict_english_name()    { return "Mexican" ; }
function get_dict_version()         { return "0.1" ; }
function get_dict_ISO_code()        { return "mx" ; }
function get_dict_file_name()       { return "mx.php" ; }
function get_dict_author()          { return "enter your name" ; }
function get_dict_last_modified()   { return "Feb 23th 2006" ; }

# These are functions devoted to the translation process

function load_errors()
{
    $errors_array[0] = "ningún error" ;
    $errors_array[1] = "el error de parámetro de conexión: todo el datos extrañando" ;
    $errors_array[2] = "el error de parámetro de conexión: el servidor extrañando" ;
    $errors_array[3] = "el error de parámetro de onnection: database extrañando" ;
    $errors_array[4] = "el error de parámetro de conexión: el usuario extrañando" ;
    $errors_array[5] = "el error de parámetro de conexión: el contraseña extrañando" ;
    $errors_array[6] = "el error de la sintaxis: el fuente query extrañando" ;
    $errors_array[7] = "el error de la sintaxis: el punto y coma extrañando" ;
    $errors_array[8] = "el error de la sintaxis: el error de la pregunta fallado" ;
    $errors_array[9] = "el error de la pregunta vacío" ;

    return $errors_array ;
}

function load_language()
{

// add distinct terms

    $cmdsArray[0][0] = "y" ;               $cmdsArray[0][1] = "0001" ;
    $cmdsArray[1][0] = "es" ;              $cmdsArray[1][1] = "0002" ;
    $cmdsArray[2][0] = "a" ;               $cmdsArray[2][1] = "0002" ;
    $cmdsArray[3][0] = "con" ;             $cmdsArray[3][1] = "0002" ;
    $cmdsArray[4][0] = "o" ;               $cmdsArray[4][1] = "0002" ;
    $cmdsArray[5][0] = "el" ;              $cmdsArray[5][1] = "0002" ;
    $cmdsArray[6][0] = "la" ;              $cmdsArray[6][1] = "0002" ;
    $cmdsArray[7][0] = "las" ;             $cmdsArray[7][1] = "0002" ;
    $cmdsArray[8][0] = "los" ;             $cmdsArray[8][1] = "0002" ;
    $cmdsArray[9][0] = "desde" ;           $cmdsArray[9][1] = "0009" ;
    $cmdsArray[10][0] = "usa" ;            $cmdsArray[10][1] = "0011" ;
    $cmdsArray[11][0] = "selecciona" ;     $cmdsArray[11][1] = "0012" ;
    $cmdsArray[12][0] = "mostra" ;         $cmdsArray[12][1] = "0015" ;
    $cmdsArray[13][0] = "donde" ;          $cmdsArray[13][1] = "0013" ;
    $cmdsArray[14][0] = "ordena" ;         $cmdsArray[14][1] = "0014" ;
    $cmdsArray[15][0] = "tabla" ;          $cmdsArray[15][1] = "0016" ;
    $cmdsArray[16][0] = "tablas" ;         $cmdsArray[16][1] = "0017" ;
    $cmdsArray[17][0] = "campos" ;         $cmdsArray[17][1] = "0018" ;
    $cmdsArray[18][0] = "incluye" ;        $cmdsArray[18][1] = "0019" ;
    $cmdsArray[19][0] = "igual" ;          $cmdsArray[19][1] = "0020" ;
    $cmdsArray[20][0] = "mayor" ;          $cmdsArray[20][1] = "0021" ;
    $cmdsArray[21][0] = "menor" ;          $cmdsArray[21][1] = "0022" ;
    $cmdsArray[22][0] = "crea" ;           $cmdsArray[22][1] = "0023" ;
    $cmdsArray[23][0] = "deja" ;           $cmdsArray[23][1] = "0024" ;
    $cmdsArray[24][0] = "eliminar" ;       $cmdsArray[24][1] = "0025" ;
    $cmdsArray[25][0] = "actualiza" ;      $cmdsArray[25][1] = "0026" ;
    $cmdsArray[26][0] = "poniendo" ;       $cmdsArray[26][1] = "0027" ;
    $cmdsArray[27][0] = "inserta" ;        $cmdsArray[27][1] = "0028" ;
    $cmdsArray[28][0] = "reemplaza" ;      $cmdsArray[28][1] = "0029" ;
    $cmdsArray[29][0] = "en" ;             $cmdsArray[29][1] = "0030" ;
    $cmdsArray[30][0] = "campo" ;          $cmdsArray[30][1] = "0002" ;
    $cmdsArray[31][0] = "valores" ;        $cmdsArray[31][1] = "0031" ;
    $cmdsArray[32][0] = "ascendente" ;     $cmdsArray[32][1] = "0032" ;
    $cmdsArray[33][0] = "descendente" ;    $cmdsArray[33][1] = "0033" ;
    $cmdsArray[34][0] = "instancia" ;      $cmdsArray[34][1] = "0034" ;
    $cmdsArray[35][0] = "instancias" ;     $cmdsArray[35][1] = "0035" ;
    $cmdsArray[36][0] = "opción" ;         $cmdsArray[36][1] = "0036" ;
    $cmdsArray[37][0] = "opciones" ;       $cmdsArray[37][1] = "0037" ;
    $cmdsArray[38][0] = "database" ;       $cmdsArray[38][1] = "0038" ;
    $cmdsArray[39][0] = "trunca" ;         $cmdsArray[39][1] = "0003" ;
    $cmdsArray[40][0] = "altera" ;         $cmdsArray[40][1] = "0004" ;
    $cmdsArray[41][0] = "agroupa" ;        $cmdsArray[41][1] = "0005" ;
    $cmdsArray[42][0] = "columna" ;        $cmdsArray[42][1] = "0006" ;
    $cmdsArray[43][0] = "renombra" ;       $cmdsArray[43][1] = "0007" ;
    $cmdsArray[44][0] = "contiene" ;       $cmdsArray[44][1] = "0019" ;
    $cmdsArray[45][0] = "agrega" ;         $cmdsArray[45][1] = "0010" ;
    $cmdsArray[46][0] = "por" ;            $cmdsArray[46][1] = "0039" ;
    $cmdsArray[47][0] = "que" ;            $cmdsArray[47][1] = "0002" ;
    $cmdsArray[48][0] = "fabrica" ;        $cmdsArray[48][1] = "0012" ;
    $cmdsArray[49][0] = "promedio" ;       $cmdsArray[49][1] = "0040" ;
    $cmdsArray[50][0] = "todo" ;           $cmdsArray[50][1] = "0041" ;
    $cmdsArray[51][0] = "luego" ;          $cmdsArray[51][1] = "0002" ;
    $cmdsArray[52][0] = "entonces" ;       $cmdsArray[52][1] = "0002" ;
    $cmdsArray[53][0] = "suma" ;           $cmdsArray[53][1] = "0042" ;
    $cmdsArray[54][0] = "busca" ;          $cmdsArray[54][1] = "0012" ;
    $cmdsArray[55][0] = "maximo" ;         $cmdsArray[55][1] = "0043" ;
    $cmdsArray[56][0] = "minimo" ;         $cmdsArray[56][1] = "0044" ;
    $cmdsArray[57][0] = "junto" ;          $cmdsArray[57][1] = "0045" ;
    $cmdsArray[58][0] = "como" ;           $cmdsArray[58][1] = "0046" ;
    $cmdsArray[59][0] = "distinto" ;       $cmdsArray[59][1] = "0047" ;
    $cmdsArray[60][0] = "calcular" ;       $cmdsArray[60][1] = "0012" ;

// add synonyms

    $cmdsArray[61][0] = "pide" ;           $cmdsArray[61][1] = "0014" ;
    $cmdsArray[62][0] = "solta" ;          $cmdsArray[62][1] = "0024" ;
    $cmdsArray[63][0] = "baja" ;           $cmdsArray[63][1] = "0024" ;
    $cmdsArray[64][0] = "anula" ;          $cmdsArray[64][1] = "0025" ;
    $cmdsArray[65][0] = "borra" ;          $cmdsArray[65][1] = "0025" ;
    $cmdsArray[66][0] = "suprime" ;        $cmdsArray[66][1] = "0025" ;
    $cmdsArray[67][0] = "cambia" ;         $cmdsArray[67][1] = "0004" ;
    $cmdsArray[68][0] = "modifica" ;       $cmdsArray[68][1] = "0004" ;
    $cmdsArray[69][0] = "produce" ;        $cmdsArray[69][1] = "0012" ;
    $cmdsArray[70][0] = "compone" ;        $cmdsArray[70][1] = "0012" ;
    $cmdsArray[71][0] = "forma" ;          $cmdsArray[71][1] = "0012" ;
    $cmdsArray[72][0] = "encontra" ;       $cmdsArray[72][1] = "0012" ;
    $cmdsArray[73][0] = "computar" ;       $cmdsArray[73][1] = "0012" ;
    $cmdsArray[74][0] = "diferente" ;      $cmdsArray[74][1] = "0047" ;
    $cmdsArray[75][0] = "dentro" ;         $cmdsArray[75][1] = "0030" ;


    return $cmdsArray ;
}

function pre_idiomatic( $strIn )
{
    $strOut = str_replace( "todos campos", "todo", $strIn ) ;
    $strOut = str_replace( "todos los campos", "todo", $strOut ) ;
    $strOut = str_replace( "cada campo", "todo", $strOut ) ;
    $strOut = str_replace( "base de datos", "database", $strOut ) ;
    $strOut = str_replace( "banco de datos", "database", $strOut ) ;
    $strOut = str_replace( "palabra", "", $strOut ) ;
    $strOut = str_replace( "frase", "", $strOut ) ;
    $strOut = str_replace( "y junto con", "junto", $strOut ) ;

    return $strOut ;
}

?>
