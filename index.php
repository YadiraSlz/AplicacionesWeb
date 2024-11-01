<?php
    include "includes/headers.php";
    require "includes/config/connectDB.php";
    $db = connectDB();
?>

<link rel="stylesheet" href="/css/styles.css">

<section>
    <h2>Sale of Luxury Exclusive Houses and Apartments</h2>
    <img src="https://imgs.search.brave.com/Xyqp-ilQpXWbKa1meJGJdY_xkzmUMKFTkMwV6U8BBQs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/Zm9yYmVzLmNvbS5t/eC8yMDE4LzA0L2lu/c3BpcmF0by1WaXJn/aW4tR29yZGEuanBn" alt="House and apartment for sale">

    <h2>More About Us</h2>
    <div class="about-us-container">
        <div class="about-us-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
            </svg>
            <p>Our contracts are totally confidential and our sellers are professionals.</p>
        </div>
        
        <div class="about-us-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-dollar" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                <path d="M12 3v3m0 12v3" />
            </svg>
            <p>We handle the most competitive prices in the area in addition to the best properties.</p>
        </div>

        <div class="about-us-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-2" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />
                <path d="M12 7v5l3 3" />
                <path d="M4 12h1" />
                <path d="M19 12h1" />
                <path d="M12 19v1" />
            </svg>
            <p>The receipt times of our properties are immediate. We are always available to help you.</p>
        </div>
    </div>
</section>

<main>
<section>
    <h2>Last house published for sale</h2>
        <div>
            <div class="left">
                    <img src="https://imgs.search.brave.com/TY03vUmOixoPgbNJuNZxPtpz3oa4iYsMXQERxcY9DB0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9ncHZp/dmllbmRhLmNvbS9i/bG9nL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDIzLzAzL2RpZ2l0/YWwtbWFya2V0aW5n/LWFnZW5jeS1udHdy/ay1nMzlwMWtEanZT/WS11bnNwbGFzaC0x/LmpwZw" width="100%" alt="Luxury House by the Lake">
                    <div class="icons">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                                <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                                <path d="M4 21l1 -1.5" />
                                <path d="M20 21l-1 -1.5" />
                            </svg>
                            3
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car-garage" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M15 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M5 20h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                                <path d="M3 6l9 -4l9 4" />
                            </svg>
                            2
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M22 17v-3h-20" />
                                <path d="M2 8v9" />
                                <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                            </svg>
                            3
                        </div>
                    </div>
            </div>

            <div class="right">
                <h3 class="title">Luxury Finished House</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae deserunt ea impedit ab veritatis, corrupti, alias hic sapiente toeam vero enim necessitatibus expedita, beatae a quo. Recusandae, exercitationem dolores?
                </p>
                <p class="price">$111,111,111</p>
            </div>
        <a href="listing.php">See all the properties</a>   
        </div>
    </section>
</main>

<section class="dream-house">
    <h2>Find your dream house</h2>
    <p>We can help you to find your very special dream house on an amazing price</p>
    <a href="contact.php">Contact us</a>
</section>

<section class="latest-blog">
    <h2>Our last blog</h2>
    <div>
        <h3>Roof Terrace for Your Home</h3>
        <img src="https://imgs.search.brave.com/87Eyqe1U_v1IuuruGo_ERjb8EeSg8PQYKaJNqlPNN8E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTcx/MTU5NDQ0L3Bob3Rv/L3Jvb2Z0b3AtZ2Fy/ZGVuLWluLXRoZS1s/b29wLWRvd250b3du/LWNoaWNhZ28uanBn/P3M9NjEyeDYxMiZ3/PTAmaz0yMCZjPS1L/cXAwMzJFNnNTal9W/cWgwZmtQOVlueGs1/aVlHbjR0MnhDa1RW/VXBQWFU9" alt="Roof Terrace for Your Home" class="blog-image">
        <p>Published on: "2024-01-10" by: "Real Estate"</p>
        <a href="blog.php">Read more</a>
    </div>
</section>
