<?php

# MySQL babel
# version 0.0.1
# coded by Alessandro Rosa
# e-mail : zandor_zz@yahoo.it
# site : http://malilla.supereva.it

require_once('mysql_babel.php');

$language = "fr" ;

$tr = new mysql_babel( "localhost", "sample", "root", "f1r5t3d" );
$lang = new languages( $language );

if ( !( $lang->isClassOperative() ) )
{
    echo $lang->getErrMsg() ;
    return ;
}

$tr->insert_language_code( $language );
$tr->native_dictionary_array = $lang->get_native_dictionary() ;
$tr->mysql_dictionary_array = $lang->get_mysql_dictionary() ;
$tr->errors_messages_array = $lang->get_errors_array() ;

$src_cmdline = "choisissez id et phone de la tableau exampletable où id est majeur que 3;" ;
$tr->insert_mysql_source_cmdline( $src_cmdline );
$tr->translate();

$sqlQRY = $tr->get_mysql_translated_cmdline() ;
$debugLine = $tr->get_debug_abstract_cmdline() ;

echo "<html>\n";
echo "<head>\n";
echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css"."\">\n";
echo "</head>\n";
echo "<body bgcolor=\"white\">\n";

echo "ORIGINAL QUERY FORM : <b>$src_cmdline</b><br/>\n" ;
echo "MYSQL QUERY FORM : <b>$sqlQRY</b><br/><br/>\n" ;

// echo "DEBUG LINE : <b>$debugLine</b><br/><br/>\n" ;

$tr->run_query( true );

//////////////////////////////////////////////////////////////
echo "</body>\n";
echo "</html>\n";

?>
