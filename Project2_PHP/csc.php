<!DOCTYPE html>
<head>
  <title>Hangman</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link href="test.css" rel="stylesheet" type="text/css" />

</head>
<body id ='content2'>
 <a href= "test.php">Home</a><br><br>
<?php
echo "You have chosen Computer Science";
$Group = "Computer Science";

$item ="DATA
CONNECTION
PROGRAMMING
JAVA
ECLIPSE
NETBEANS
SOFTWARE
HARDWARE
WEB PROGRAMMING
DATA ANALYSIS
DATABASE
EXCEL
MICROSOFT
PROGRAMMER
TECHNOLOGY
ERROR
DEVELOPER
APP DEVELOPMENT
MEMORY
APACHE
ASSEMBLY
BINARY
BOOLEAN
LIBRARY
MAPPING
CLIENT SERVER";
$special_letters = " -.,;!?%&0123456789";
$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$len_char = strlen($char);

if(isset($_GET["num"])) $num=$_GET["num"];
if(isset($_GET["characters"])) $characters=$_GET["characters"];
if(!isset($characters)) $characters="";
#The filename of the currently executing script, relative to the document root. For instance, $_SERVER['PHP_SELF'] in a script at the address 
if(isset($PHP_SELF)) $file=$PHP_SELF;
else $file=$_SERVER["PHP_SELF"];

$hlinks="";






$count=6;        
$item = strtoupper($item);
$s_words = explode("\n",$item); #The explode() function is used to split a   string. Sets the boundary string within the input string
srand ((double)microtime()*1000000);
$all_letters=$characters.$special_letters;
$total_wrong = 0;

echo "<P><B>Hangman Game</B> &nbsp;  &nbsp; &nbsp; &nbsp; <B>Subject: <B>$Group</B><BR>\n";

if (!isset($num)) { 
  $num = rand(1,count($s_words)) - 1; 
}
$word_line="";
$c_word = trim($s_words[$num]);
$finish = 1;
for ($a=0; $a < strlen($c_word); $a++)
{
  if (strstr($all_letters, $c_word[$a]))
  {
    if ($c_word[$a]==" ") $word_line.="&nbsp; "; else $word_line.=$c_word[$a];
  } 
  else { 
    $word_line.="_<font size=1>&nbsp;</font>"; #.=,Appends $txt2 to $txt1
    $finish = 0; 
  }

}

if (!$finish)
{

  for ($c=0; $c<$len_char; $c++)
  {
    if (strstr($characters, $char[$c]))
    {
      if (strstr($s_words[$num], $char[$c])) {
        $hlinks .= "\n<B>$char[$c]</B> "; 
      }
      else { 
        $hlinks .= "\n<font color=\"red\">$char[$c] </font>";
         $total_wrong++; 
      }
    
    }
    else
    {
     $hlinks .= "\n<A HREF=\"$file?characters=$char[$c]$characters&num=$num\">$char[$c]</A> "; 
   }
  
  }
  $numwrong=$total_wrong; 
  if ($numwrong>6) $numwrong=6;
  echo "\n<p><BR>\n<IMG SRC=\"Hangman-$numwrong.png\" ALIGN=\"MIDDLE\" BORDER=0 WIDTH=150 HEIGHT=150 >\n";

  if ($total_wrong >= $count)
  {
    $num++;
    if ($num>(count($s_words)-1)) $num=0;
    echo "<BR><BR><H1><font size=5>\n$word_line</font></H1>\n";
    echo "<p><BR><FONT color=\"red\"><BIG>SORRY, YOU ARE HANGED!!!</BIG></FONT><BR><BR>";
    echo "\n<p><BR>\n<IMG SRC=\"loser.jpeg\" ALIGN=\"MIDDLE\" BORDER=0 WIDTH=300 HEIGHT=300 ALT=\"Wrong: $total_wrong out of $count\">\n";

    if (strstr($c_word, " ")) $term="words"; else $term="word";
    echo "The $term was \"<B>$c_word</B>\"<BR><BR>\n";
    echo "<A HREF=$file?num=$num>Play again.</A>\n\n";
  }
  else
  {
    echo " &nbsp; You Have <B>" .($count-$total_wrong). " Guesses Left "."</B><BR>\n";
    echo "<H1><font size=5>\n$word_line</font></H1>\n";
    echo "<P><BR>Please choose a letter:<BR><BR>\n";
    echo "$hlinks\n";
  }
}
else
{
  $num++; 
  if ($num>(count($s_words)-1)) $num=0;
  echo "\n<p><BR>\n<IMG SRC=\"great_job.gif\" ALIGN=\"MIDDLE\" BORDER=0 WIDTH=500 HEIGHT=500 >\n";
  echo "<BR><BR><H1><font size=5>\n$word_line</font></H1>\n";
  echo "<P><BR><BR><B>Congratulations!!! &nbsp;You win!!!</B><BR><BR><BR>\n";
  echo "<A HREF=$file?num=$num>Play again</A>\n\n";
}
?>
</body>
</html>