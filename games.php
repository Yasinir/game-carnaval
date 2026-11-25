<?php include("database.php");

    $result = $conn->query("SELECT * FROM games");
    while($row = $result->fetch_assoc()):
?>
 
<div>

    <p> <?php echo htmlspecialchars($row["name"]); ?></p>
    <p> <?php echo number_format($row["price"]); ?>$</p>

</div>
<?php endwhile; ?>
