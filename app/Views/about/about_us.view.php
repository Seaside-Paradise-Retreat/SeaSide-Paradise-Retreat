<link rel="stylesheet" href="public/css/about_us.css">
<?php 
    require ("app/Views/layouts/header.php");
    require ("app/Views/layouts/navbar.php");
    require ("app/Views/auth/login.php");
    require ("app/Views/auth/register.view.php");
    ?>

<div class="body--content container">
    <div class="title">     
        <h3 id="title-about-us">ABOUT US</h3>
    </div>
    <div class="row about--introduce d-flex" >
        <div class="col-md-6 about--introduce--left">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="public/images/hotel1.jpg" class="d-block w-100" alt="hotel image">
                    </div>
                    <div class="carousel-item">
                    <img src="public/images/hotel2.jpg" class="d-block w-100" alt="hotel image">
                    </div>
                    <div class="carousel-item">
                    <img src="public/images/hotel3.jpg" class="d-block w-100" alt="hotel image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 about--introduce--right">
            <h3>Introduce</h3>
            <div class="row" >
                <div class="col-md-6 about--introduce--room">
                    <p class="about_introduce_number" style="color:blueviolet;"><?php echo "$countusers" ?> +</p>
                    <p class="about_introduce">Users</p>
                </div>
                <div class="col-md-6">
                    <p class="about_introduce_number" style="color: red;"> <?php echo "$countrooms" ?>  +</p>
                    <p class="about_introduce">Rooms</p>
                </div>
            </div>
        </div>
    </div>
        <div>
            <div><p class="title-about">About Seaside paradise retreat</p></div>
            <p>Booking Room is a leading online hotel booking website worldwide. With a user-friendly interface, you can easily search and book rooms from thousands of hotels, resorts, and apartments. The website provides detailed information on amenities, prices, and customer reviews. You can find accommodations in bustling cities to unique destinations. Booking Room is committed to providing a seamless and reliable booking experience.</p>
        </div>
        <!-- about us -->
        <div class="div-founders my-5">
            <div><p class="title-about">Founders</p></div>
            <div class="row founders justify-content-evenly">
                <div class="card col-lg-2  col-10 my-2  founders_card">
                    <img src="public/images/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-name">Dương Thị Hồng Lam</p> 
                        <p class="card-text">honglam@gmail.com</p>
                    </div>
                </div>
                <div class="card col-lg-2 col-10 my-2 founders_card">
                    <img src="public/images/card_hung.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-name">Trần Đức Hùng</p> 
                        <p class="card-text">hung@gmail.com</p>
                    </div>
                </div>
                <div class="card col-lg-2 col-10 my-2 founders_card">
                    <img src="public/images/card_hi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-name">Phạm Thị Hỉ</p> 
                        <p class="card-text">hi@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php require ("app/Views/layouts/footer.php") ?>