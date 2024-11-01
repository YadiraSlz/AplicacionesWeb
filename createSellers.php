<?php
include "includes/headers.php"; 
require "includes/config/connectDB.php"; 

$db = connectdb();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = mysqli_real_escape_string($db, $_POST["name"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $phone = mysqli_real_escape_string($db, $_POST["phone"]);


    $query = "INSERT INTO SELLERS (name, email, phone) VALUES ('$name', '$email', '$phone')";

    $response = mysqli_query($db, $query);

    if ($response) {
        echo "Seller created successfully :)"; 
    } else {
        echo "Error creating the seller: " . mysqli_error($db); 
    }
}
?>

<link rel="stylesheet" href="css/styles.css">

<section>
    <h2>Sellers Form</h2> 
    <div>
        <form action="createSellers.php" method="post"> 
            <fieldset>
                <legend>Fill all fields to create a new seller</legend> 
                <div>
                    <label for="name">Name</label> 
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div>
                    <label for="email">Email</label> 
                    <input type="email" id="email" name="email" placeholder="your@email.com" required>
                </div>

                <div>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="664 715 6350" required>
                </div>

                <div>
                    <button type="submit">Create a new seller</button> 
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
include "includes/footer.php";
?>
