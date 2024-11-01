<?php
    include "includes/headers.php";
?>

<link rel="stylesheet" href="css/styles.css">

<section>
    <h2>Contact</h2> 
</section>

<section class="contact">
    <h2>Fill out the contact form</h2>  
    <div>
        <form method="post">
            <fieldset>
                <legend>Personal Information</legend>  
                <div>
                    <label for="name">Name</label>  
                    <input type="text" name="name" id="name" placeholder="Your name" required>
                </div>
                <div>
                    <label for="email">Email</label>  
                    <input type="email" name="email" id="email" placeholder="you@email.com" required>
                </div>
                <div>
                    <label for="phone">Phone</label>  
                    <input type="tel" name="phone" id="phone" placeholder="000 000 0000" required>
                </div>
                <div>
                    <label for="msg">Message</label>  
                    <textarea name="msg" id="msg" placeholder="Write your message" required></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>  
                <div>
                    <label for="sellbuy">Sell or Buy?</label>  
                    <select name="sellbuy" id="sellbuy" required>
                        <option value="" disabled selected>Select an option</option>  
                        <option value="sell">Sell</option>  
                        <option value="buy">Buy</option>  
                    </select>
                </div>
                <div>
                    <label for="quantity">Quantity</label>  
                    <input type="number" name="quantity" id="quantity" min="1" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Contact Preference</legend>  
                <div>
                    <label>Contact Method</label>  
                    <div>
                        <input type="radio" name="contactform" value="telephone" id="tel" required>
                        <label for="tel">Phone</label>  
                    </div>
                    <div>
                        <input type="radio" name="contactform" value="email" id="mail" required>
                        <label for="mail">Email</label>  
                    </div>
                </div>
                <div>
                    <label for="date">Contact Date</label>  
                    <input type="date" name="date" id="date" required>
                </div>
                <div>
                    <label for="time">Contact Time</label>  
                    <input type="time" name="time" id="time" required>
                </div>
            </fieldset>

            <div>
                <button type="submit">Contact Me</button>  
            </div>
        </form>
    </div>
</section>

<?php
    include "includes/footer.php";
?>
