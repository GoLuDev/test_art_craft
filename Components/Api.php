<?php

include 'ConnectDB.php';
class Api
{
    public function api()
    {
        header('Content-Type: application/json');
        if(empty($_GET['api_key']))
        {
            echo 'Ошибка Api_key пустой';
        }
        else
        {
            $connect = new ConnectDB();
            $connect->connect();
            $api_key = $_GET['api_key'];
            $result = $connect->pdo->query("SELECT api_key FROM user WHERE api_key = '$api_key'");
            $row = $result->fetch();
            if (!empty($row))
            {
                $result = $connect->pdo->query("SELECT * FROM user ");
                if ($result)
                {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        $row = [
                            'id' => $row['id'],
                            'name' => $row['name'],
                            'email' => $row['email']
                        ];
                        echo json_encode($row);
                    }
                }
                else
                {
                    echo 'Проблемка';
                }
            }
            else
            {
                echo 'Такого Api_key нет в БД';
            }
        }
    }
}


