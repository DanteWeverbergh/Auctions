<?php


class Category {

    public static function getAllCategories() {
        global $db;

        $sql = 'SELECT * FROM category';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();

        return $sql_statement->fetchAll();
    }

    public static function getCategoryBySlug($slug) {
        global $db;

        $sql = 'SELECT * FROM category WHERE slug = :slug';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':slug' => $slug,
        ]);

    
        return $sql_statement->fetchObject();

    }
}