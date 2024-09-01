<?php 
namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion): array{

    $sql = "SELECT *
            FROM authors
            ORDER BY created_at
            Limit 3;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}