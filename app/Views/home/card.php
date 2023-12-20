<div class="container">
<div class="row g-4 ml-2 mb-5 listroom" id="pp">
        <!-- Nút Previous -->
    <div>
        <div class="room-item">
        <button class="btn-card-navigation-previous btn-previous">&lt;</button>
        </div>
    </div>
<?php foreach($rooms as $room): ?>
            <div class="col-lg-4 col-md-6">
              <div class="room-item">
                <div class="position-relative">
                  <a href="hotel_rooms_page.html">
                    <?php foreach($detail_room as $img):?>
                    <img class="img-fluid" src="<?php echo $img['image_url']?>" alt="">
                    <?php endforeach?>
                  </a>
                  <i class="fas fa-heart position-absolute bottom-0 end-0 m-3 " style="font-size: 24px;color:white;"></i>
                </div>
                <div class="mt-2">
                  <div class="d-flex justify-content-between mb-1">
                    <h5 class="mb-0"><?php echo $room['name']?></h5>
                    <div id="ratingContainer">
                    <i class="fa-solid fa-star" style="color: #3A8CED;"></i><?php echo $room['rating']?>
                    </div>
                  </div>
                  <p><?php echo $room['description'] ?></p>
                  <div class="d-flex mb-3">
                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-secondary me-2">
                      </i>Bed</small>
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-secondary me-2">
                      </i>Bath</small>
                    <small><i class="fa fa-wifi text-secondary me-2">
                      </i>Wifi</small>
                  </div>

                  <div class="d-flex justify-content-between mt-4">
                    <h4 style="color: #3568A4;">$50/night</h4>
                    <input type="button" class="btn_card_booking" name="booking"  value="Booking now">
                  </div>
                </div>
              </div>
            </div>
<?php endforeach?>
    <!-- Nút Next -->
    <div >
      <div class="room-item">
        <button class="btn-card-navigation-next btn-next" onclick="showNextCards()">&gt;</button>
      </div>
    </div>
</div>
</div>
</div>