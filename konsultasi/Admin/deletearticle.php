<?php

include('layouts/header.php');

$id = $_GET['id'];
$result = mysqli_query($db, "DELETE FROM articles where id ='$id'");


?>
<script>
    location.href = 'list_article.php';
</script>