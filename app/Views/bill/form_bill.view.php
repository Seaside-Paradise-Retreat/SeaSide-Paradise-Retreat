<link rel="stylesheet" href="public/css/bill.css">
<div class="container">
    <div class="title">
        <img id="logo_hotel" src="public/images/logo_hotel.png" alt="">
    </div>
    <div><h2 id="titel_bill">Bill information</h2></div>
    <div class="content">
        <!-- <div class="row-left">
            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=2|99||Duong Thi Hong Lam||0|0|10000000|Payment_room|transfer_myqr|88314077&choe=UTF-8" title="Link to Payment" />
        </div> -->
        <div class="row-left">
            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=2|99||Duong Thi Hong Lam||0|0|<?php echo $bill_information['total_price'] ?>|Payment_room|transfer_myqr|88314077&choe=UTF-8" title="Link to Payment" />
        </div>
        <div class="bill-info row-right">
            <div>
                <label>Room Name:</label>
                <span><?php echo $bill_information['name'] ?></span>
            </div>
            <div class="bill-info">
                <label>Check-in Date:</label>
                <span><?php echo $bill_information['check_in_date'] ?></span>
            </div>
            <div class="bill-info">
                <label>Check-out Date:</label>
                <span><?php echo $bill_information['check_out_date'] ?></span>
            </div>
            <div class="bill-info">
                <label>Price:</label>
                <span><?php echo $bill_information['price'] ?>VND/Night</span>
            </div> 
            <div class="bill-info">
                <label>Total Amount:</label>
                <span><?php echo $bill_information['total_price'] ?>VND</span>
            </div>
            <div class="button-back-print">
                <div class="button-container">
                        <a href="/"><button type="button">Back</button></a>
                </div>
                <div class="button-container">
                    <button>Print Bill</button>
                </div>
            </div>
        </div>  
    </div>
</div>
