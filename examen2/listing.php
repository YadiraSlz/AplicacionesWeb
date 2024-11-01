<?php 
require "includes/config/connectDB.php";
include "includes/headers.php";

$db = connectdb();

if (!$db) {
    die("Connection error: " . mysqli_connect_error());
}
?>

<link rel="stylesheet" href="css/styles.css">

<section class="property-listings">
    <h2 class="property-section-title">Listings</h2>
    <?php

    $result = mysqli_query($db, "SELECT p.id, p.title, p.price, p.image, p.description, p.rooms, p.wc, p.garage, s.name AS seller_name 
                                 FROM PROPERTIES p 
                                 JOIN SELLERS s ON p.id_Seller = s.id");

    if (mysqli_num_rows($result) > 0) {
        while ($property = mysqli_fetch_assoc($result)) {
            echo '<div class="property">';
            echo '<h3 class="property-title">' . htmlspecialchars($property['title']) . '</h3>';
            echo '<div class="property-image-container">';
            echo '<img src="' . htmlspecialchars($property['image']) . '" alt="' . htmlspecialchars($property['title']) . '" class="property-image">';
            echo '</div>';
            echo '<p class="seller">Seller: ' . htmlspecialchars($property['seller_name']) . '</p>';
            echo '<p class="description">' . htmlspecialchars($property['description']) . '</p>';
            echo '<p>Rooms: ' . htmlspecialchars($property['rooms']) . '</p>';
            echo '<p>Bathrooms: ' . htmlspecialchars($property['wc']) . '</p>';
            echo '<p>Garage: ' . htmlspecialchars($property['garage']) . '</p>';
            echo '<div class="price-row"><p class="price">Price: $' . number_format($property['price'], 2) . '</p></div>';
            echo '</div>';
        }
    } else {
        echo '<p>No properties found.</p>';
    }

    mysqli_close($db);
    ?>
    
    <a href="../createProperties.php" class="button">Register New Property</a>
</section>

<?php
include "includes/footer.php";
?>
