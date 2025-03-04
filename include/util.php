
<?php
function get_navigateur(): string
{
    if (preg_match('/MSIE/', $_SERVER["HTTP_USER_AGENT"])) {
        return "Internet explorer";
    } else if (preg_match('/^Mozilla\//', $_SERVER["HTTP_USER_AGENT"])) {
        return "Netscape";
    } else if (preg_match('/^Opera\//', $_SERVER["HTTP_USER_AGENT"])) {
        return "Opera";
    } else {
        return  "inconnu";
    }
}
?>
