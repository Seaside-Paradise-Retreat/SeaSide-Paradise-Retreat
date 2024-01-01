<div class="container">
  <div class="row g-4 ml-2 mb-5 listroom" id="pp">
    <?php foreach($rooms as $index => $room): //trong room này sẽ là đầy đủ thông tin của 1 phòng bao gồm id, name, images_url, convenient?> 
      <div class="col-lg-4 col-md-6 room-item">
        <div class="room-item">
          <div class="position-relative">
            <div id="imageCarousel<?php echo $index; ?>" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php $detailRoom = getRoomImages($room['id']) ?> 
                <?php $active = true; ?>
                <?php foreach($detailRoom as $imageIndex => $image): ?>
                  <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                  <!-- Trong vòng lặp foreach -->
                    <a href="/detail_room?id_room=<?php echo $room['id']; ?>">
                      <img id="img-card-room" src="<?php echo $image['image_url']?>" height="238px" alt="">
                    </a>
                    <div class="heart-container position-absolute bottom-0 end-0 m-3" title="Like">
                      <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                      <div class="svg-container">
                          <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                              </path>
                          </svg>
                          <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                              </path>
                          </svg>
                          <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                              <polygon points="10,10 20,20"></polygon>
                              <polygon points="10,50 20,50"></polygon>
                              <polygon points="20,80 30,70"></polygon>
                              <polygon points="90,10 80,20"></polygon>
                              <polygon points="90,50 80,50"></polygon>
                              <polygon points="80,80 70,70"></polygon>
                          </svg>
                      </div>
                    </div>
                    <!-- <i class="fas fa-heart position-absolute bottom-0 end-0 m-3" style="font-size: 24px;color:white;"></i> -->
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
                  <div class="d-flex justify-content-between mb-1">
                    <h5 class="mb-0"><?php echo $room['name']?></h5>
                    <div id="ratingContainer">
                    <i class="fa-solid fa-star" style="color: #3A8CED;"></i><?php echo $room['rating']?>
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
                  <h4 style="color: #3568A4;">$<?php echo $room['price']?></h4>
                  <?php if(!empty($_SESSION['email']) || !empty($_SESSION['password']) )  :?>
                    <a href="/booking_room?id_room=<?php echo $room['id']; ?>"><input type="button" class="btn_card_booking" name="booking"  value="Booking now"></a>
                    <?php else: ?>
                      <a href=""><input type="button" class="btn_card_booking" name="booking"  value="Booking now"></a>
                  <?php endif ?>
                  </div>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
