<link rel="stylesheet" href="public/css/bill.css">

<body>
    <div class="container">
        <div class="title d-flex justify-content-around">
            <img id="logo_hotel" src="public/images/logo_hotel.png" alt="">
            <h2 class="title_hotel">SEASIDE PARADISE RETREAT</h2>
        </div>
        <h1>Bill</h1>
        <div class="row">
            <div class="invoice-details col-md-6">
                <p><strong>Invoice Number:</strong><?php echo "INV" . $bill_information['bill_id'] ?></p>
                <p><strong>Date:</strong><?php echo " " . $bill_information['date'] ?></p>
                <p><strong>Customer's code:</strong><?php echo "MKH" . $_SESSION['id'] ?></p>
                <p><strong>Customer Name:</strong><?php echo " " . $bill_information['name'] ?></p>
            </div>
            <div class="col-md-6">
                <p><strong class="scan_the_code_to_pay">Scan the code to pay</strong></p>
                <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=2|99||Duong Thi Hong Lam||0|0|10000000|Payment_room|transfer_myqr|88314077&choe=UTF-8" title="Link to Payment" />
            </div>
        </div>
        <table>
            <tr>
                <th>Room</th>
                <th>Date check in</th>
                <th>Date check out</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?php echo $bill_information['room_name'] ?></td>
                <td><?php echo $bill_information['check_in_date'] ?></td>
                <td><?php echo $bill_information['check_out_date'] ?></td>
                <td><?php echo $bill_information['price'] . "VND" ?></td>
            </tr>
            <tr>
                <td colspan="3" class="total-label">Total:</td>
                <td class="total-amount"><?php echo " " . $bill_information['total_price'] . "VND" ?></td>
            </tr>
        </table>
        <div class="button-back-print">
            <div class="button-container">
                <a href="/"><button type="button">Back</button></a>
            </div>
            <div class="button-container">
                <button>Print Bill</button>
            </div>
        </div>
    </div>
</body>