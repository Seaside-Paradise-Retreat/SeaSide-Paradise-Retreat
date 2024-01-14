<link rel="stylesheet" href="public/css/booking_history.css">
<div class="body--content container">
    <div class="title">     
        <h3 id="title-booking-history-room">BOOKING HISTORY ROOM</h3>
    </div>
</div>

<?php foreach ($booked_rooms_information as $room) :?>
<?php if($room['availability']) :?>
<div class="card-room-booking-history row container">
    <div class="col-md-2"></div>
    <?php 
        $images = getRoomImages($room['room_id']); 
        if(!empty($images)):
    ?>
    <div class="card-left col-md-5 justify-content-end">
        <a href="/detail_room?id_room=<?php echo $room['room_id'] ?>"><img id="image-room" src="<?php echo $images[0]['image_url'] ?>" alt="image-room"></a>
    </div>
    <?php endif ?>
    <div class="row col-md-5">
        <div class="col-md-10">
            <h5><?php echo $room['room_name'] ?></h5>
            <p><?php echo $room['description'] ?></p>
            <p></p>
        </div>
        <div class="col-md-1" id="ratingContainer"><i class="fa-solid fa-star" style="color:yellow; font-size:22px"></i><?php echo round($rating = selectAVGRatingRoom($room['id']),1);?></div>
        <div class="d-flex mb-3">
            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-secondary me-2">
                </i>Bed</small> 
            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-secondary me-2">
                </i>Bath</small>
            <small><i class="fa fa-wifi text-secondary me-2">
                </i>Wifi</small>
        </div>
        <div>
            <h4 class="col-md-6" style="color: #3568A4;">Total: <?php echo $room['total_price'] ?> VND</h4>
            <input type="submit" onclick="submitContactForm()" id="requestButton" class="btn_card_cancel btn-primary" value="Request Update booking">
        </div>    
        <p id="booking_date">Book date: <?php echo $room['date']  ?></p>
    </div> 
</div>
<?php endif?>
<?php endforeach ?>


<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
    (function(){
    //    emailjs.init("Go7__wfcQuNzv_yXH"); //use your USER ID
           emailjs.init("iKBLtTA0WO64DZb28"); //use your USER ID
    })();

    function submitContactForm() { 
        var name = '<?php echo $_SESSION["name"]; ?>';
        var emailAddress = '<?php echo $_SESSION["email"]; ?>';
        var phone = '<?php echo $_SESSION["phone"]; ?>';
        var nameroom = '<?php echo $room["room_name"]; ?>';
        var date = '<?php echo $room["date"]; ?>';
        if (name == "" || emailAddress == "" || phone == "") {
            alert("Please re-enter");
            return;
        }
      
        var templateParams = {
            fullName: name,
            phoneNumber: phone,
            email: emailAddress,
            name_room : nameroom,
            datebooked : date
        };

        emailjs.send('service_6ctah1c', 'template_4ql7sg8', templateParams) //use your Service ID and Template ID
            .then(function(response) {
                alert("Email has been sent");
                btn.style.backgroundColor = "gray"; // Restore the default background color
                btn.innerHTML = "The request is being processed"
            }, function(error) {
                alert("Email has not been sent");
            });
    }
</script>