<link rel="stylesheet" href="public/css/bill.css">
<div class="container">
    <div class="title">
        <img id="logo_hotel" src="public/images/logo_hotel.png" alt="">
    </div>
    <div><h2 id="titel_bill">Bill information</h2></div>
    <div class="content">
        <div class="bill-info">
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
                <label>Price per Night:</label>
                <span><?php echo $bill_information['price'] ?></span>
            </div> 
            <div class="bill-info">
                <label>Total Amount:</label>
                <span><?php echo $bill_information['total_price'] ?></span>
            </div>
            <div class="button-container">
                <button>Print Bill</button>
            </div>
        </div>
    </div>