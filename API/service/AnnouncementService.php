<?php

namespace Service;

use Model\Announcement;
use PDO;

class AnnouncementService
{
    public function __construct($db)
    {
        $this->conn = $db;
        $this->obj = new Announcement();
    }

    //讀取
    public function read()
    {

        $query = 'SELECT * FROM ' . $this->obj->table . ' WHERE DeletedAt IS NULL';

        $stmt  = $this->conn->prepare($query);

        $result = $stmt->execute();

        $num = $stmt->rowCount();
        if ($num > 0) {
            $response_arr = array();
            $response_arr['data'] = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $data_item = array(
                    'AnnouncementId' => $AnnouncementId,
                    'Title' => $Title,
                    'Content' => $Content,
                    'CreatedAt' => $CreatedAt,
                    'UpdatedAt' => $UpdatedAt,
                    'DeletedAt' => $DeletedAt
                );
                array_push($response_arr['data'], $data_item);
            }
        } else {
            $response_arr = null;
        }

        return $response_arr;
    }

    //讀取單筆資料
    public function read_single($AnnouncementId)
    {
        $query = "SELECT *,u.Name
                    FROM announcement a,
                        users u
                    WHERE AnnouncementId = " . $AnnouncementId . " AND
                            a.Admin = u.Account AND
                        a.DeletedAt IS NULL;";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();


        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);

            $data = array(
                'AnnouncementId' => $AnnouncementId,
                'Title' => $Title,
                'Content' => $Content,
                'Admin' => $Admin,
                'Name' => $Name,
                'CreatedAt' => $CreatedAt,
                'UpdatedAt' => $UpdatedAt,
                'DeletedAt' => $DeletedAt
            );

            $response_arr = $data;
            return $response_arr;
        } else {
            $response_arr = null;
            return $response_arr;
        }
    }

    //上傳商品
    public function post($data)
    {

        date_default_timezone_set('Asia/Taipei');

        $query = "INSERT INTO " . $this->obj->table . "
                           (Title, 
                           Content,
                           Admin,
                           CreatedAt,
                           UpdatedAt) 
                  VALUES ( ? , ? , ? , ? , ? )";

        $stmt = $this->conn->prepare($query);

        $time = date('Y-m-d H:i:s');

        $result = $stmt->execute(array(
            $data['Title'],
            $data['Content'],
            $data['Admin'],
            $time,
            $time
        ));

        if ($result) {

            $id = $this->conn->lastInsertId();
            $response_arr = $this->read_single($id);
        } else {

            $response_arr['error'] = '資料新增失敗';
        }
        return $response_arr;
    }

    //更新商品
    public function update($AnnouncementId, $data)
    {
        date_default_timezone_set('Asia/Taipei');

        $query = $this->getupdatesql($AnnouncementId, $data);

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        if ($result) {
            return $response_arr['info'] = '資料更新成功';
        } else {
            return $response_arr['info'] = '資料更新失敗';
        }
    }

    //取得更新sql 
    public function getupdatesql($AnnouncementId, $data)
    {
        $query = "UPDATE " . $this->obj->table;
        $tempsql =  ' SET ';
        foreach ($data as $key => $value) {
            $tempsql .= $key . " = '" . $value . "', ";
        }
        $tempsql = substr($tempsql, 0, strrpos($tempsql, ','));
        $query .= $tempsql . " , UpdatedAt = '" . date('Y-m-d H:i:s') . "' WHERE AnnouncementId = " . $AnnouncementId . ";";
        return $query;
    }

    //刪除
    public function delete($AnnouncementId)
    {
        date_default_timezone_set('Asia/Taipei');
        $query = 'UPDATE ' . $this->obj->table . " SET DeletedAt = '" . date('Y-m-d H:i:s') . "' WHERE AnnouncementId = " . $AnnouncementId . ";";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        if ($result) {
            return $response_arr['info'] = '資料刪除成功';
        } else {
            return $response_arr['info'] = '資料刪除失敗';
        }
    }
}
