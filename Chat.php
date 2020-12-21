<?php

class Chat{

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=localhost:3306;dbname=sitesondages", 'root', '');
        session_start();
    }

    public function saveMessage($data)
    {
        $pseudo = $_SESSION['membre']['pseudo'];
        $prepare = $this->pdo->prepare("INSERT INTO messages (content, user) VALUES (:content, '$pseudo')");
        

        // $prepare->bindParam(":content", $data["content"]);
        $prepare->execute($data);

        echo json_encode("");
    }


    public function getMessages()
    {
        $query = $this->pdo->query("SELECT * FROM messages WHERE sendAt=(SELECT MAX(sendAt) FROM messages)");
        echo json_encode($query->fetchAll(\PDO::FETCH_ASSOC));
    }
}