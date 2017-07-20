<?php
# MySQL Babel
# version 0.0.1
# coded by Alessandro Rosa
# e-mail : zandor_zz@yahoo.it
# site : http://alessandrorosa.altervista.org

# Copyright (C) 2005  Alessandro Rosa

# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 3 of the License, or
# any later version.

# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.

# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software Foundation,
# Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA

# Compiled with PHP 4.4.0


class languages
{
    function languages( $lng_code )
    {
          $this->loadMySql() ;
    
          if ( strlen( $lng_code ) != 2 ) $this->errNo = 0 ;
          else
          {
              $this->language_code = $lng_code;
          
              $lng_code = strtolower($lng_code);
          
              $this->dynamic_file_path = $this->lngs_dir_path."$lng_code.php" ;

              if ( file_exists( $this->dynamic_file_path ) )
              {
                  require_once ( $this->dynamic_file_path );
                  
                  $this->native_language_array = load_language() ;
                  $this->errors_messages_array = load_errors() ;
                  $this->errNo = -1 ;
              }
              else $this->errNo = 1 ;
          }
    }

    function loadMySql()
    {
        $this->mysql_dictionary_array = array();

    $this->mysql_dictionary_array[0][0] = "," ;           $this->mysql_dictionary_array[0][1] = "0001" ;
    $this->mysql_dictionary_array[1][0] = "" ;            $this->mysql_dictionary_array[1][1] = "0002" ;
    $this->mysql_dictionary_array[2][0] = "TRUNCATE" ;    $this->mysql_dictionary_array[2][1] = "0003" ;
    $this->mysql_dictionary_array[3][0] = "ALTER" ;       $this->mysql_dictionary_array[3][1] = "0004" ;
    $this->mysql_dictionary_array[4][0] = "ADD" ;         $this->mysql_dictionary_array[4][1] = "0005" ;
    $this->mysql_dictionary_array[5][0] = "COLUMN" ;      $this->mysql_dictionary_array[5][1] = "0006" ;
    $this->mysql_dictionary_array[6][0] = "RENAME" ;      $this->mysql_dictionary_array[6][1] = "0007" ;
    $this->mysql_dictionary_array[7][0] = "TO" ;          $this->mysql_dictionary_array[7][1] = "0008" ;
    $this->mysql_dictionary_array[8][0] = "FROM" ;        $this->mysql_dictionary_array[8][1] = "0009" ;
    $this->mysql_dictionary_array[9][0] = "GROUP" ;       $this->mysql_dictionary_array[9][1] = "0010" ;
    $this->mysql_dictionary_array[10][0] = "USE" ;        $this->mysql_dictionary_array[10][1] = "0011" ;
    $this->mysql_dictionary_array[11][0] = "SELECT" ;     $this->mysql_dictionary_array[11][1] = "0012" ;
    $this->mysql_dictionary_array[12][0] = "WHERE" ;      $this->mysql_dictionary_array[12][1] = "0013" ;
    $this->mysql_dictionary_array[13][0] = "ORDER" ;      $this->mysql_dictionary_array[13][1] = "0014" ;
    $this->mysql_dictionary_array[14][0] = "SHOW" ;       $this->mysql_dictionary_array[14][1] = "0015" ;
    $this->mysql_dictionary_array[15][0] = "TABLE" ;      $this->mysql_dictionary_array[15][1] = "0016" ;
    $this->mysql_dictionary_array[16][0] = "TABLES" ;     $this->mysql_dictionary_array[16][1] = "0017" ;
    $this->mysql_dictionary_array[17][0] = "FIELDS" ;     $this->mysql_dictionary_array[17][1] = "0018" ;
    $this->mysql_dictionary_array[18][0] = "LIKE" ;       $this->mysql_dictionary_array[18][1] = "0019" ;
    $this->mysql_dictionary_array[19][0] = "=" ;          $this->mysql_dictionary_array[19][1] = "0020" ;
    $this->mysql_dictionary_array[20][0] = "<" ;          $this->mysql_dictionary_array[20][1] = "0021" ;
    $this->mysql_dictionary_array[21][0] = ">" ;          $this->mysql_dictionary_array[21][1] = "0022" ;
    $this->mysql_dictionary_array[22][0] = "CREATE" ;     $this->mysql_dictionary_array[22][1] = "0023" ;
    $this->mysql_dictionary_array[23][0] = "DROP" ;       $this->mysql_dictionary_array[23][1] = "0024" ;
    $this->mysql_dictionary_array[24][0] = "DELETE" ;     $this->mysql_dictionary_array[24][1] = "0025" ;
    $this->mysql_dictionary_array[25][0] = "UPDATE" ;     $this->mysql_dictionary_array[25][1] = "0026" ;
    $this->mysql_dictionary_array[26][0] = "SET" ;        $this->mysql_dictionary_array[26][1] = "0027" ;
    $this->mysql_dictionary_array[27][0] = "INSERT" ;     $this->mysql_dictionary_array[27][1] = "0028" ;
    $this->mysql_dictionary_array[28][0] = "REPLACE" ;    $this->mysql_dictionary_array[28][1] = "0029" ;
    $this->mysql_dictionary_array[29][0] = "INTO" ;       $this->mysql_dictionary_array[29][1] = "0030" ;
    $this->mysql_dictionary_array[30][0] = "VALUES" ;     $this->mysql_dictionary_array[30][1] = "0031" ;
    $this->mysql_dictionary_array[31][0] = "ASC" ;        $this->mysql_dictionary_array[31][1] = "0032" ;
    $this->mysql_dictionary_array[32][0] = "DESC" ;       $this->mysql_dictionary_array[32][1] = "0033" ;
    $this->mysql_dictionary_array[33][0] = "ISTANCE" ;    $this->mysql_dictionary_array[33][1] = "0034" ;
    $this->mysql_dictionary_array[34][0] = "ISTANCES" ;   $this->mysql_dictionary_array[34][1] = "0035" ;
    $this->mysql_dictionary_array[35][0] = "OPTION" ;     $this->mysql_dictionary_array[35][1] = "0036" ;
    $this->mysql_dictionary_array[36][0] = "OPTIONS" ;    $this->mysql_dictionary_array[36][1] = "0037" ;
    $this->mysql_dictionary_array[37][0] = "DATABASE" ;   $this->mysql_dictionary_array[37][1] = "0038" ;
    $this->mysql_dictionary_array[38][0] = "BY" ;         $this->mysql_dictionary_array[38][1] = "0039" ;
    $this->mysql_dictionary_array[39][0] = "AVG" ;        $this->mysql_dictionary_array[39][1] = "0040" ;
    $this->mysql_dictionary_array[40][0] = "*" ;          $this->mysql_dictionary_array[40][1] = "0041" ;
    $this->mysql_dictionary_array[41][0] = "SUM" ;        $this->mysql_dictionary_array[41][1] = "0042" ;
    $this->mysql_dictionary_array[42][0] = "MAX" ;        $this->mysql_dictionary_array[42][1] = "0043" ;
    $this->mysql_dictionary_array[43][0] = "MIN" ;        $this->mysql_dictionary_array[43][1] = "0044" ;
    $this->mysql_dictionary_array[44][0] = "AND" ;        $this->mysql_dictionary_array[44][1] = "0045" ;
    $this->mysql_dictionary_array[45][0] = "AS" ;         $this->mysql_dictionary_array[45][1] = "0046" ;
    $this->mysql_dictionary_array[46][0] = "!=" ;         $this->mysql_dictionary_array[46][1] = "0047" ;

    }
    
    //////////////////////////////////////////////////////////
    function getErrMsg()
    {
        $errMsg = "" ;
        
        switch ( $this->errNo )
        {
            case -1:
              $errMsg = "no errors" ;
            break;
            case 0:
              $errMsg = "error: incorrect language code syntax" ;
            break;
            case 1:
              $errMsg = "error: unsupported language code" ;
            break;
            default:
            break;
        }
    
        return $errMsg ;
    }

    //////////////////////////////////////////////////////////
    function isClassOperative()            { return ( $this->errNo == -1 ) ? true : false ;  }
    //////////////////////////////////////////////////////////
    function get_native_dictionary()       { return $this->native_language_array ;     }
    function get_mysql_dictionary()        { return $this->mysql_dictionary_array ;    }
    function get_errors_array()            { return $this->errors_messages_array ;     }
    //////////////////////////////////////////////////////////
    function get_lngs_dir_path()            { return $this->lngs_dir_path ;            }
    function insert_lngs_dir_path( $ldp )   { $this->lngs_dir_path = $ldp ;            }
    //////////////////////////////////////////////////////////

    var $errNo ;

    var $native_language_array ;
    var $mysql_dictionary_array ;
    var $errors_messages_array ;
    
    var $language_code ;
    var $lngs_dir_path = "lngs/" ;
    var $dynamic_file_path ;
}


class mysql_babel
{
    ///////////////////////////////////////
    //////// MEMBER METHODS  //////////////
    ///////////////////////////////////////

# One might want to use the basic constructor in one's code
# so it was commented for optional application.

/*
    function mysql_babel()   // basic constructor
    {
          $mysql_server = "" ;
          $mysql_dbname = "" ;
          $mysql_user = "" ;
          $mysql_psw = "" ;
          
          $bOperative = false ;
          $errNo = 0 ;
    }
*/

// The following input constructor was preferred because of class
// both instantiation and initialization occur at once.
// In any case, insert/retrieve parameters were implemented
// in order to change them if required.

    function mysql_babel( $server, $dbname, $user, $psw )   // input constructor
    {
          $this->mysql_server = $server ;
          $this->mysql_dbname = $dbname ;
          $this->mysql_user = $user ;
          $this->mysql_psw = $psw ;
    
          $err_chk = 0 ;          $this->errNo = 0 ;
    
          if ( strlen( $this->mysql_server ) <= 0 &&
               strlen( $this->mysql_dbname ) <= 0 &&
               strlen( $this->mysql_user ) <= 0 &&
               strlen( $this->mysql_psw ) <= 0 )
          {
              $err_chk++ ;        $this->errNo = 1 ;
          }
          else if ( strlen( $this->mysql_server ) <= 0 )
          {
              $err_chk++ ;        $this->errNo = 2 ;
          }
          else if ( strlen( $this->mysql_dbname ) <= 0 )
          {
              $err_chk++ ;        $this->errNo = 3 ;
          }
          else if ( strlen( $this->mysql_user ) <= 0 )
          {
              $err_chk++ ;        $this->errNo = 4 ;
          }
          else if ( strlen( $this->mysql_psw ) <= 0 )
          {
              $err_chk++ ;        $this->errNo = 5 ;
          }
    
          $this->bOperative = ( $err_chk == 0 ) ? true : false ;
    }

    function isClassOperative()
    {
        return $this->bOperative ;
    }
    
    function getErrNo()
    {
        return $this->errNo ;
    }

    function getErrMsg()
    {
        $errIndex = $this->errNo ;

        $errMsg = $this->errors_messages_array[ $errIndex ] ;

        return $errMsg ;
    }
    
    ////////////////////////////////////////////////////////////
    // input functions ////////////////////////////////////////
    ////////////////////////////////////////////////////////////
    function insert_mysql_server( $server ) {   $this->mysql_server = $server ;   }
    function insert_mysql_dbname( $dbname ) {   $this->mysql_dbname = $dbname ;   }
    function insert_mysql_user( $user )     {   $this->mysql_user = $user ;       }
    function insert_mysql_psw( $psw )       {   $this->mysql_psw = $psw ;         }

    function insert_mysql_source_cmdline( $cmdline )       {   $this->native_expression_string = $cmdline ; }

    function insert_language_code( $l_c )       {   $this->language_code = $l_c ; }
    ////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////
    // output functions ////////////////////////////////////////
    ////////////////////////////////////////////////////////////
    function get_mysql_server()     {   return $this->mysql_server ;   }
    function get_mysql_dbname()     {   return $this->mysql_dbname ;   }
    function get_mysql_user()       {   return $this->mysql_user ;     }
    function get_mysql_password()   {   return $this->mysql_psw ;      }
    
    function get_mysql_source_cmdline()       {   return $this->native_expression_string ; }
    function get_mysql_translated_cmdline()   {   return $this->mysql_query_string ;       }

    function get_debug_abstract_cmdline()     {   return $this->strDebugAbstractLine ; }

    function get_language_code( $l_c )        {   return $this->language_code ;          }
    ////////////////////////////////////////////////////////////
    function safe_data( $qry_input, $bLock )
    { 
        // the goal is to prevent string between quotes to be translated:
        // when $bLock is true, blank spaces between quotes are
        // turned into '@@' (an arbitrary often unused character),
        // otherwise '@@' turns back to the blank space for restoring
        // the original string.
    
        $len = strlen( $qry_input );
        $bQuotes = false ;
        $retString = "" ;
      
        for ( $i=0; $i < $len; $i++ )
        {
            $chr = substr( $qry_input, $i, 2 ) ;
            
            $onechr = $chr{0};
            
            if ( strcmp( $onechr, "'" ) == 0 || strcmp( $onechr, "\\\"" ) == 0 )
                $bQuotes = !$bQuotes ;

            if ( $bQuotes === true && $bLock === true )
            {
                if ( strcmp( $onechr, " " ) == 0 ) $retString .= "@@" ;
                else $retString .= $onechr ;
            }
            else if ( $bQuotes === true && $bLock === false )
            {
                if ( strcmp( $chr, "@@" ) == 0 ) $retString .= " " ;
                else $retString .= $onechr ;
            }
            else if ( $bQuotes === false ) $retString .= $onechr ;
        }
        
        $retString = str_replace( "\'", "'", $retString ) ;

        return $retString ;
    }

    function check_output_query( $qry_input )
    { 
        /*
            the resulting query is checked for commands
            retrieving tables (SELECT, SHOW)
        */
    
        if ( strstr( $qry_input, "SELECT" ) === false &&
             strstr( $qry_input, "SHOW" ) === false ) return false;
        else return true ;
    
    }

    function syntax( $strInput )
    {
        $strOutput = str_replace( "(", " (", $strInput ) ;
        $strOutput = str_replace( ")", ") ", $strOutput ) ;
        $strOutput = str_replace( ",", " , ", $strOutput ) ;
        $strOutput = str_replace( " ('", "( '", $strOutput ) ;
        $strOutput = str_replace( "')", "' ) ", $strOutput ) ;

        $strOutput = str_replace( "',", "' ,", $strOutput ) ;
        
        $strOutput = str_replace( "> =", ">=", $strOutput ) ;
        $strOutput = str_replace( "< =", "<=", $strOutput ) ;
        $strOutput = str_replace( "\\\"", "\"", $strOutput ) ;
        $strOutput = str_replace( "\'", "'", $strOutput ) ;
   
        return $strOutput ;
    }
    
    function finalize( $strInput )
    {
        // check mysql command line for proper syntax
        
        $strOutput = str_replace( "SELECT TABLE", "SELECT", $strInput ) ;
        $strOutput = str_replace( "SELECT FIELDS", "SELECT", $strOutput ) ;
        $strOutput = str_replace( "SELECT FIELD", "SELECT", $strOutput ) ;
        $strOutput = str_replace( "SHOW *", "SHOW FIELDS", $strOutput ) ;
        $strOutput = str_replace( "INTO TABLE", "INTO", $strOutput ) ;
        $strOutput = str_replace( "FROM TABLE", "FROM", $strOutput ) ;
        $strOutput = str_replace( ", ORDER", " ORDER", $strOutput ) ;
        $strOutput = str_replace( "<> FROM", "<>", $strOutput ) ;
        $strOutput = str_replace( "!= FROM", "!=", $strOutput ) ;
        $strOutput = str_replace( "SUM (", "SUM(", $strOutput ) ;
        $strOutput = str_replace( "AVG (", "AVG(", $strOutput ) ;
        $strOutput = str_replace( "MAX (", "MAX(", $strOutput ) ;
        $strOutput = str_replace( "MIN (", "MIN(", $strOutput ) ;
        $strOutput = str_replace( "< , =", "<=", $strOutput ) ;
        $strOutput = str_replace( "> , =", ">=", $strOutput ) ;
        $strOutput = str_replace( "\'", "'", $strOutput ) ;
        $strOutput = str_replace( "\\\"", "\"", $strOutput ) ;
        $strOutput = str_replace( ", ", ",", $strOutput ) ;
        $strOutput = str_replace( " ,", ",", $strOutput ) ;
        $strOutput = str_replace( " , ", ",", $strOutput ) ;

        return $strOutput ;
    }

    function translate()
    {
        // check operative status before it goes ...
        if ( !( $this->isClassOperative() ) ) return false ;

        // do we have input data ?
        $srclen = strlen( $this->native_expression_string ) ;
        if ( $srclen <= 0 )
        {
             $this->errNo = 6 ;
             return false ;
        }
        else // check if semicolon closes the input mysql command line
        {
             $chr = substr( $this->native_expression_string, $srclen-1, 1 );
                          
             if ( strcmp( $chr, ";" ) != 0 )
             {
                 $this->errNo = 7 ;
                 return false ;
             }
             else
             {
             /* the semicolon is there, but we need to check that
                a blank space between it and the last token ! */
             
                $chr = substr( $this->native_expression_string, $srclen-2, 1 );
                if ( strcmp( $chr, " " ) != 0 )
                {
                    $this->native_expression_string = substr( $this->native_expression_string, 0, $srclen-1 )." ;" ;
                }
                
             }
        }
        
        // check all the standard syntax
        $this->native_expression_string = $this->syntax( $this->native_expression_string ) ;

        $work_str = $this->safe_data( $this->native_expression_string, true ) ;
        //////////////////////////////////////////////
        // now let's go with 'translation' process ...
        //////////////////////////////////////////////
        
        // let's make some scan for idiomatic expressions in order to find out
        // native ones which might be resumed into known tokens
        require_once( $this->lngs_dir_path.$this->language_code.".php" ) ;
        
        $work_str = pre_idiomatic( $work_str ) ;
        $this->work_str = $this->syntax( $work_str ) ;
        
        // split the whole command line into words separated by blank space
        $tokenized_array = explode( " ", $work_str );
        
        // turn all tokens/words into respective numerical codes
        // depending on the associated source language table
        // if not found, tokens are put into the resulting command
        // line as they originally are

        $coded_cmdline = "" ;

        foreach ( $tokenized_array as $token )
        {
            $bFound = false ;

            foreach( $this->native_dictionary_array as $entry )
            {
                $word = $entry[0] ;
                $code = $entry[1] ;
                
                if ( strcmp( $token, $word ) == 0 )
                {
                    $coded_cmdline .= "$code@@" ;
                    $bFound = true ;
                }
            }

            if ( !$bFound ) $coded_cmdline .= "$token@@" ;
        }

        // tracks the first passage in order to debug
        // the translation, especially when new dictionaries are built
        $this->strDebugAbstractLine = $coded_cmdline ;

        // now turn all special token words into mysql commands,
        // otherwise leave the token word as it is inside the
        // resulting mysql command line
        
        $tokenized_array = explode( "@@", $coded_cmdline );
        $this->mysql_query_string = "" ;
        
        // $tokenized_array is a uni-dimensional array including codes only
        // $mysql_dictionary_array is a bi-dimensional array including mysql commands and word

        foreach( $tokenized_array as $token )
        {
            $bFound = false ;
            
            foreach( $this->mysql_dictionary_array as $entry )
            {
                $word = $entry[0];
                $code = $entry[1];
                
                if ( strcmp( $token, $code ) == 0 )
                {
                    $bFound = true ;

                    if ( strcmp( $code, "0002" ) != 0 )
                        $this->mysql_query_string .= "$word " ;
                }
            }

            if ( !$bFound ) $this->mysql_query_string .= "$token " ;
        }
    
        $this->mysql_query_string = $this->safe_data( $this->mysql_query_string, false ) ;
        
        $this->mysql_query_string = $this->finalize( $this->mysql_query_string ) ;
        return $this->mysql_query_string ;
    }

    function general_error_output()
    {
        // you can customize the output function style here
                
        if ( $this->errNo != 0 ) echo "<font color=\"red\">" ;
        else echo "<font color=\"blue\">" ;
        
        echo "<b>".$this->getErrMsg()."</b></font><br/>" ;
    }

    function run_query( $bDisplay )
    {
          $this->language_code = $native_lang ;
          
          if ( $this->errNo != 0 )
          {
              echo $this->general_error_output() ;
              return ;
          }
          
          
          $h_db = mysql_connect( $this->mysql_server, $this->mysql_user, $this->mysql_psw ) ;
          mysql_select_db( $this->mysql_dbname, $h_db );
          
          $h_qry = mysql_query( $this->mysql_query_string );

          if ( $h_qry === false )
          {
              $this->errNo = 8 ;
              $this->general_error_output();
              return;
          }
          
          $bOK = $this->check_output_query( $this->mysql_query_string ) ;
          
          if ( mysql_num_rows( $h_qry ) == 0 && $bOK === true )
          {
              $this->errNo = 9 ;
              $this->general_error_output();
              return;
          }
          else if ( mysql_num_rows( $h_qry ) == 0 && $bOK === false )
          {
              $this->errNo = 0 ;
              $this->general_error_output();
              return ;
          }
          
          if ( !$bDisplay )
          {
              mysql_close( $h_db ) ;
              return ;
          }
          
          // first display fields labels
          
          $i = 0;
          
          echo "<table class=\"example1\">\n" ;
          
          //////////////////////////////////////////////////////////////
          echo "<tr class=\"example1header\">\n";

          while ( $cols = mysql_fetch_field( $h_qry ) )
          { 
             echo "<td class=\"example1header\">";

             if ( $cols ) echo "$cols->name&nbsp;";

             echo "</td>\n";
          }

          echo "</tr>\n";
          //////////////////////////////////////////////////////////////
          // ... then display rows contents
          
          while ( $row = mysql_fetch_row($h_qry) )
          { 
                echo "<tr class=\"example1\">" ;
      
                    foreach ( $row as $entry )
                    { 
                         echo "<td class=\"example1row\">\n";
                         echo $entry ;
                         echo "</td>\n";
                    }
            
                echo "</tr>\n";
          }
          //////////////////////////////////////////////////////////////
          echo "</table>\n" ;
          //////////////////////////////////////////////////////////////
          mysql_close( $h_db ) ;
    }
    
    ///////////////////////////////////////
    //////// MEMBER VARIABLES /////////////
    ///////////////////////////////////////
    var $native_expression_string = "" ;
    var $mysql_query_string = "" ;
    var $strDebugAbstractLine = "";
    ///////////////////////////////////////
    var $native_dictionary_array ;
    var $mysql_dictionary_array ;
    var $errors_messages_array ;
    ///////////////////////////////////////
    var $mysql_server ;
    var $mysql_dbname ;
    var $mysql_user ;
    var $mysql_psw ;
    ///////////////////////////////////////
    var $bOperative ;
    var $errNo ;
    var $language_code ;
    ///////////////////////////////////////
    var $lngs_dir_path = "lngs/" ;
}

?>
