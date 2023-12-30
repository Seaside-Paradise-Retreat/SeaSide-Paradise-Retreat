<link rel="stylesheet" href="public/css/booking.css">
<div class="body--content container">
    <div class="title">     
        <h3 id="title-booking-room">BOOKING ROOM</h3>
    </div>
    <div class="content__text row">
        <div class="left-content col-lg-6 col-12">
            <div class="infor">
                <div class="input--group row">
                    <label for="" class="label">Name</label>
                    <input type="text" id="in" placeholder="Your name" class="name-booking" required>
                </div>
                <div class="input--group row">
                    <div class="check-date  col-6 ">
                        <label for="" class="label">Check in</label>
                        <input type="date" name="" class="input__check-date" id="datepicker1">
                    </div>
                    <div class="check-date col-6">
                        <label for="" class="label">Check out</label>
                        <input type="date" name="" class="input__check-date"id="datepicker2">
                    </div>
                </div>
                <div class="input--group">
                    <input type="text" class="input-request" id="SpecialR_Request" placeholder="Special Request">
                </div>
                <div>
                    <button type="button" class="button" id="update_money" onclick="calculateDateDifference()">SAVE</button>
                </div>
                <hr>
            </div>
            <div class="general-standard">
                <p class="title-small">General standards</p>
                <p>We ask all guests to remember a few simple rules to be a great guest.</p>
                <ul>
                    <li>Comply with house rules</li>
                    <li>Maintain the house as if it were your home</li>
                </ul>
            </div>
            <div>
                <button id="Revervation_required" type="button" class="button" onclick="payment()">Revervation required</button>
            </div>
        </div>
        <div class="col"></div>
        <!-- total price -->
        <div class="right-content col-lg-5 col-12">
            <div class="div-right">
                <div class="div-infor--room row d-flex justify-content-center align-items-center">
                    <img src="public/images/artistic_lounge_retreat_room2.png" alt="image artistic_lounge_retreat room" class="col-7 img--infor">
                </div>
                <hr>
                <div class="div-price-detail">
                    <p class="title-small">Prices Detail</p>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-7">
                            <div class="d-flex ">
                                <p id="tinhngay">$50</p><span id="tinhngay1">&nbsp;x 1 <span id="n">/night</span></span>
                            </div>
                            <p>Cleaning fee</p>
                            <p>Tax</p>
                        </div>
                        <div class="col-5 text-end">
                            <p id="tongcoban">$50</p>
                            <p>$3</p>
                            <p>$10</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="div-total-price d-flex justify-content-between align-content-center ">
                    <p class="title-small">Total (USD)</p>
                    <p id="tong" class="price">$00</p>
                </div>
            </div>
        </div>
    </div>
    <div id="pp"></div>
</div>
