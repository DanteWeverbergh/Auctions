<?php


class Auction {

    public static function getAllAuctions() {
        global $db;

        $sql = 'SELECT * FROM auction';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();

        return $sql_statement->fetchAll();
    }

    public static function getAuctionByCategory($category_id) {
        global $db;

        $sql = 'SELECT * FROM auction 
                INNER JOIN category
                ON auction.category_id = category.category_id 
                WHERE auction.category_id = :category_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':category_id' => $category_id,
        ]);

        return $sql_statement->fetchAll();
        
    }

    public static function getAuctionById($auction_id) {
        global $db;

        $sql = 'SELECT * FROM auction
                WHERE auction_id = :auction_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':auction_id' => $auction_id,
        ]);

        return $sql_statement->fetchObject();
    }

   
}