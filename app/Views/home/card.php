<div class="container">
  <div class="row g-4 ml-2 mb-5 listroom" id="pp">
    <?php foreach($rooms as $index => $room): //trong room này sẽ là đầy đủ thông tin của 1 phòng bao gồm id, name, images_url, convenient?>
      <?php if($room['availability'] == 1) : ?>
      <div class="col-lg-4 col-md-6 room-item" id="like_room<?php echo $room['id']?>">
        <div class="room-item">
          <div class="position-relative" >
            <div id="imageCarousel<?php echo $index; ?>" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php $detailRoom = getRoomImages($room['id']) ?> 
                <?php $active = true; ?>
                <?php foreach($detailRoom as $imageIndex => $image): ?>
                  <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                  <!-- Trong vòng lặp foreach -->
                    <a href="/detail_room?id_room=<?php echo $room['id']; ?>">
                      <img id="img-card-room" src="<?php echo $image['image_url']?>" height="300px" width="100%" alt="">
                    </a>
                  </div>
                  <?php $active = false; ?>
                <?php endforeach; ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel<?php echo $index; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel<?php echo $index; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="mt-2">
                  <div class="d-flex justify-content-between  mb-1">
                    <h5 class="mb-0"><?php echo $room['name']?></h5>
                    <div id="ratingContainer">
                    <?php if(!empty($_SESSION['isLogin']) && $_SESSION['isLogin']): ?>
                    <a href="/favorite?id_room=<?php echo $room['id']; ?>">
                        <button class="favorite-button" >
                          <i class="<?php $issAdded = isAdded($room['id'],$_SESSION['id']) ;if($issAdded) { echo "fas";} else {echo "far";} ?> fa-heart" ></i>
                        </button>
                    </a>
                    <?php else :?>
                      <a href="/favorite?id_room=<?php echo $room['id']; ?>">
                        <button class="favorite-button" >
                          <i class="far fa-heart" ></i>
                        </button>
                    </a>
                    <?php endif?>
                    </div>
                  </div>
                  <p class="convenient"><?php echo $room['convenient']?></p>
                  <p id="description"><?php echo $room['description'] ?></p>
                  <div class="d-flex mb-3">
                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-secondary me-2">
                      </i>Bed</small> 
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-secondary me-2">
                      </i>Bath</small>
                    <small><i class="fa fa-wifi text-secondary me-2">
                      </i>Wifi</small>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                  <h4 style="color: #3568A4;"><?php echo $room['price']?> VND</h4>
                  <?php
                      if(!empty($_SESSION['isLogin']) && $_SESSION['isLogin']):
                    ?>
                    <a href="/booking_room?id_room=<?php echo $room['id']; ?>"><input type="button" class="btn_card_booking" name="booking"  value="Booking now"></a>
                    <?php else: ?>
                      <a href=""><input type="button" class="btn_card_booking" name="booking"  value="Booking now"></a>
                  <?php endif ?>
                  </div>
          </div>
        </div>
      </div>
      <?php endif ?>
    <?php endforeach; ?>
  </div>
</div>

