<?php

$CONTENT = $_POST['Content'];

if ($CONTENT == 'home') {
    require_once('pages/'.$CONTENT.'.php');
} else if ($CONTENT == 'aboutMe') {
    require_once('pages/'.$CONTENT.'.php');
} else if ($CONTENT == 'projects') {
    require_once('pages/'.$CONTENT.'.php');
} else if ($CONTENT == 'contact') {
    require_once('pages/'.$CONTENT.'.php');
}  
?>