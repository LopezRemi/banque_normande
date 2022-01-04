<?php
if ($operation_type == "Dépot") {
    $sql = "UPDATE Account SET amount = amount + $operation_amount WHERE id = $id";
} else {
    $sql = "UPDATE Account SET amount = amount - $operation_amount WHERE id = $id";
}