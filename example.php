<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
input
{
    font-family:tahoma;
    font-size:9pt;
}
body
{
    font-family:tahoma;
    font-size:9pt;
}
</style>
</head>
<body bgcolor="white">
<div style="border:1pt solid black; padding:4pt; background: #00e300; width: 400pt;">

    <div style="border:1pt solid #00c300; background:#00d300; text-align:center; color:yellow; font-weight:bold; font-family:arial;font-size:9pt;">
        MySQL Translator example
    </div>

    <div style="height:15pt;">
    </div>

<form method="post" action="example.php" name="exampleform">

      Insert below the query and choose the language<br/>      
      <input size="60" name="queryINPUT" value="">
      
      <select name="langCOMBO">
<?php

$native_lang = $_POST['langCOMBO'] ;

if ( strcmp( $native_lang, "fr" ) == 0 ) echo "<option selected value=\"fr\">French";
else echo "<option value=\"fr\">French"; 

if ( strcmp( $native_lang, "en" ) == 0 ) echo "<option selected value=\"en\">English";
else echo "<option value=\"en\">English"; 

if ( strcmp( $native_lang, "de" ) == 0 ) echo "<option selected value=\"de\">German";
else echo "<option value=\"de\">German"; 

if ( strcmp( $native_lang, "it" ) == 0 ) echo "<option selected value=\"it\">Italian";
else echo "<option value=\"it\">Italian"; 

if ( strcmp( $native_lang, "mx" ) == 0 ) echo "<option selected value=\"mx\">Mexican";
else echo "<option value=\"mx\">Mexican"; 

if ( strcmp( $native_lang, "pl" ) == 0 ) echo "<option selected value=\"pl\">Portuguese";
else echo "<option value=\"pl\">Portuguese"; 

?>

      </select>

      <input type="submit" value="Submit">
</form>

<?php

$query = $_POST['queryINPUT'] ;
$native_lang = $_POST['langCOMBO'] ;

if ( strlen( $query ) == 0 ) return ;

////////////// Embedding MySQL translator class into this code //////////
require_once('mysql_babel.php');

$tr = new mysql_babel( "localhost", "sample", "root", "f1r5t3d" );
$lang = new languages( $native_lang );

if ( !( $lang->isClassOperative() ) )
{
    echo "<font color=\"red\"><b>".$lang->getErrMsg()."</b></font>" ;
    return ;
}

$tr->insert_language_code( $native_lang );

######################################################
# Optional code to retrieve information about
# the dictionary file being currently loaded and used

echo "<hr noshade size=1 />\n";

require_once("lngs/".$native_lang.".php");

echo "<font color=\"blue\"><b>Optional data</b></font><br/><br/>";
echo "Dictionary original name : <b>".get_dict_original_name()."</b><br/>" ;
echo "Dictionary (english) name : <b>".get_dict_english_name()."</b><br/>" ;
echo "Dictionary ISO code : <b>".get_dict_ISO_code()."</b><br/>" ;
echo "Dictionary file version : <b>".get_dict_version()."</b><br/>" ;
echo "Dictionary file name : <b>".get_dict_file_name()."</b><br/>" ;
echo "Dictionary author : <b>".get_dict_author()."</b><br/>" ;

echo "<hr noshade size=1 />\n";

######################################################

$tr->native_dictionary_array = $lang->get_native_dictionary() ;
$tr->mysql_dictionary_array = $lang->get_mysql_dictionary() ;
$tr->errors_messages_array = $lang->get_errors_array() ;

$tr->insert_mysql_source_cmdline( $query );

$tr->translate();

$sqlQRY = $tr->get_mysql_translated_cmdline() ;
$query = $tr->get_mysql_source_cmdline() ;

echo "NATIVE LANGUAGE FILE : <b>$native_lang.php</b><br/>\n" ;
echo "ORIGINAL QUERY FORM : <b>$query</b><br/>\n" ;
echo "MYSQL QUERY FORM : <b>$sqlQRY</b><br/><br/>\n" ;

$tr->run_query( true );

?>

</div>
</body>
</html>
