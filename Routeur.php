<?php

require "Chat.php";
$chat = new Chat();

switch ($_GET["function"]) {
    case 'save':
        $chat->saveMessage($_POST);
        break;
    case 'get':
        $chat->getMessages();
        break;
    
    default:
        # code...
        break;
}