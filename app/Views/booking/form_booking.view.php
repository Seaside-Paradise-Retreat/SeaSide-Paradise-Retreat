<link rel="stylesheet" href="public/css/booking.css">
<div class="body--content container">
    <div class="title">     
        <h3 id="title-booking-room">BOOKING ROOM</h3>
    </div>
    <form action="" method="post">
        <div class="content__text row">
            <div class="left-content col-lg-6 col-12">
                <div class="infor">
                    <div class="input--group row">
                        <label for="" class="label">Name</label>
                        <input type="text" id="in" name="name" placeholder="name" class="name-booking" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
                    </div>
                    <div class="input--group row">
                        <div class="check-date  col-6 ">
                            <label for="" class="label">Check in</label>
                            <input type="datetime-local" name="check_in" class="input__check-date"  id="check_in" required>
                        </div>
                        <div class="check-date col-6">
                            <label for="" class="label">Check out</label>
                            <input type="datetime-local" name="check_out" class="input__check-date"id="check_out" required>
                        </div>
                    </div>
                    <div class="text_input">
                        <textarea id="message" name="message" rows="4" cols="66" required></textarea> 
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/"><button type="button" class="button">Back</button></a>
                        <button type="submit" class="button">Booking</button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col"></div>
            <!-- total price -->
            <div class="right-content col-lg-5 col-12">
                <div class="div-right">
                <?php
                if (!empty($images)) {
                    $image = $images[0]['image_url'];
                ?>
                    <div class="div-infor--room row d-flex justify-content-center align-items-center">
                        <img src="<?php echo $image; ?>" alt="image artistic_lounge_retreat room" class="col-7 img--infor" id="image_room">
                    </div>
                <?php
                }
                ?>
                    <div class="div-price-detail">
                        <p class="title-small">Prices Detail</p>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="d-flex ">
                                    <p><?php echo "$" . $room['price']?></p><span>&nbsp; X &nbsp;</span> <p id="nights"></p> <p id="nights">/nights</p> 
                                </div>
                                <p>Cleaning fee</p>
                                <p>Tax</p>
                            </div>
                            <div class="col-5 text-end">
                                <p id="totalroom">$0</p>
                                <p>$3</p>
                                <p>$10</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="div-total-price d-flex justify-content-between align-content-center ">
                        <p class="title-small">Total (USD)</p>
                        <input type="text" name="total_price" id="sum" readonly>$
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<script>
    // Lấy các phần tử input và phần tử hiển thị tổng giá tiền
    var checkInInput = document.getElementById('check_in');
    var checkOutInput = document.getElementById('check_out');
    var sumElement = document.getElementById('sum');
    var nightsElement = document.getElementById('nights');
    var totalroomElement = document.getElementById('totalroom');

    // Gắn sự kiện change cho ô input check_in và check_out
    checkInInput.addEventListener('change', calculateTotal);
    checkOutInput.addEventListener('change', calculateTotal);

    function calculateTotal() {
        var checkInValue = checkInInput.value;
        var checkOutValue = checkOutInput.value;
        // Kiểm tra xem cả hai input đã được điền đầy đủ giá trị hay chưa
        if (checkInValue && checkOutValue) {
            //chuyển thành giá trị date
            var checkInDate = new Date(checkInValue);
            var checkOutDate = new Date(checkOutValue);
            // Tính nights 
            var timeDiff = Math.abs(checkOutDate.getTime() - checkInDate.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            var nights = diffDays;

            // Tính tổng giá tiền
            var pricePerNight = <?php echo $room['price']; ?>;
            var cleaningFee = 3;
            var tax = 10;
            var totalroom = pricePerNight * diffDays;
            var total = (pricePerNight * diffDays) + cleaningFee + tax;

            // Gán kết quả vào phần tử có id = sum
            sumElement.value = total;
            nightsElement.textContent = nights;
            totalroomElement.textContent = totalroom ;
        }
    }
</script>

