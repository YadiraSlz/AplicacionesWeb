<?php
include "includes/headers.php"; // Changed to relative path
require "includes/config/connectDB.php"; // Changed to relative path

$db = connectdb();

$query_sellers = "SELECT id, name FROM SELLERS";
$seller_result = mysqli_query($db, $query_sellers);

// Check if the query was successful
if (!$seller_result) {
    die("Error fetching sellers: " . mysqli_error($db));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = mysqli_real_escape_string($db, $_POST["title"]);
    $price = mysqli_real_escape_string($db, $_POST["price"]);
    $image = mysqli_real_escape_string($db, $_POST["image"]);
    $description = mysqli_real_escape_string($db, $_POST["description"]);
    $rooms = mysqli_real_escape_string($db, $_POST["rooms"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $garage = mysqli_real_escape_string($db, $_POST["garage"]);
    $timeStamp = mysqli_real_escape_string($db, $_POST["timeStamp"]);
    $id_Seller = mysqli_real_escape_string($db, $_POST["id_Seller"]); 

    $query = "INSERT INTO PROPERTIES (title, price, image, description, rooms, wc, garage, timeStamp, id_Seller) 
              VALUES ('$title', '$price', '$image', '$description', '$rooms', '$wc', '$garage', '$timeStamp', '$id_Seller')";

    $insert_response = mysqli_query($db, $query);

    if ($insert_response) {
        echo "Property created successfully :)"; // Success message
    } else {
        echo "Error creating the property: " . mysqli_error($db); // Error message
    }
}
?>

<link rel="stylesheet" href="css/styles.css">

<section>
    <h2>Property Form</h2> 

    <div>
        <form action="createProperties.php" method="post">
            <fieldset>
                <legend>Complete all fields to create a new property</legend>
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Property title" required>
                </div>

                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" placeholder="$100000" required>
                </div>

                <div>
                    <label for="image">Image URL</label>
                    <input type="url" id="image" name="image" placeholder="https://example.com/image.jpg" required>
                </div>

                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Property description" required></textarea>
                </div>

                <div>
                    <label for="rooms">Number of Rooms</label>
                    <input type="number" name="rooms" id="rooms" required>
                </div>

                <div>
                    <label for="wc">Number of Bathrooms</label>
                    <input type="number" name="wc" id="wc" required>
                </div>

                <div>
                    <label for="garage">Number of Garages</label>
                    <input type="number" name="garage" id="garage" required>
                </div>

                <div>
                    <label for="timeStamp">Date</label>
                    <input type="date" name="timeStamp" id="timeStamp" required>
                </div>

                <div>
                    <label for="id_Seller">Seller</label>
                    <select id="id_Seller" name="id_Seller" required>
                        <?php while ($seller = mysqli_fetch_assoc($seller_result)) : ?>
                            <option value="<?php echo $seller['id']; ?>"><?php echo $seller['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div>
                    <button type="submit">Create New Property</button>
                </div>
            </fieldset>
        </form>
        <a href="createSellers.php">Create New Seller</a>
    </div>
</section>

<?php include "includes/footer.php"; ?>
