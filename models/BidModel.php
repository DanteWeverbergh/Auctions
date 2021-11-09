<?php

class Bid {

    public static function getBidsByAuctionId($auction_id) {
        global $db;

        $sql = 'SELECT * FROM bid
                WHERE auction_id = :auction_id
                ORDER BY price DESC';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':auction_id' => $auction_id,
        ]);

        return $sql_statement->fetchAll();
    }

    public static function getHighestBidder($auction_id) {
        global $db;

        $sql = 'SELECT MAX(price) as highest_price FROM  bid
                WHERE auction_id = :auction_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':auction_id' => $auction_id,
        ]);

        return $sql_statement->fetchColumn();
        
    }

    public static function placeBid ($data, $auction_id) {
        global $db;

        $name = $data['name'];
        $email = $data['email'];
        $price = $data['price'];
       
        $sql = 'INSERT INTO bid
                (name, email, price, created_on, auction_id)
                VALUES
                (:name, :email, :price, :created_on, :auction_id)';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':name' => $name,
            ':email' => $email,
            ':price' => $price,
            ':created_on' => date('Y-m-d H:i:s'),
            ':auction_id' => $auction_id,
        ]);

        $bid_id = $db->lastInsertId();


        return $bid_id;
    }
}