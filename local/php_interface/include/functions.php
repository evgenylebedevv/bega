<?
Function dump($var,$die=false,$all=false)
{
    global$USER;
    if($USER->IsAdmin()||($all==true))
    {
        ?>
        <pre><?var_dump($var)?></pre><br>
        <?
    }
    if($die)
    {
        die;
    }
}
?>