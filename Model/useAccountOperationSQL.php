<?php
$operation_db = "SELECT * from operation WHERE account_id = :page_id";
$operationStatement = $db->prepare($operation_db);
$operationStatement->execute(["page_id" => $id]);
$operation = $operationStatement->fetchAll();