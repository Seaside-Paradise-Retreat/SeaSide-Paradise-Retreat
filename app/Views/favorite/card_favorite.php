<link rel="stylesheet" href="public/css/favorite.css">
<div class="body--content container">
    <div class="title">     
        <h3 id="title-favorite-room">Favorite</h3>
    </div>
</div>
<div class="container">
  <div class="row g-4 ml-2 mb-5 listroom" id="pp">
    <?php 
    foreach($favorite_rooms as $favorite_room): 
        $favorite_room_detail = getRoomId($favorite_room['id']);
        $favorite_room_detail_images = getRoomImages($favorite_room['id']); 
        //list all danh sách phòng yêu thích
        //trong room này sẽ là đầy đủ thông tin của 1 phòng bao gồm id, name, images_url, convenient?> 
      <div class="col-lg-4 col-md-6 room-item">
        <div class="room-item">
          <div class="position-relative">
            <div id="imageCarousel<?php echo $index; ?>" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php 
                // $detailRoom = getRoomImages($room['id']) 
                ?> 
                <?php $active = true; ?>
                <?php foreach( $favorite_room_detail_images as $imageIndex => $image): //$favorite_room_detail_images list tất cả các ảnh của 1 phòng  ?> 
                  <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                  <!-- Trong vòng lặp foreach -->
                    <a href="/detail_room?id_room=<?php echo $favorite_room_detail['id']; ?>">
                      <img id="img-card-room" src="<?php echo $image['image_url']?>" height="238px" alt="">
                    </a>
                    <div class="heart-container position-absolute bottom-10 end-0 m-3" title="Like">
                      
                    </div>
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
                    <h5 class="mb-0"><?php echo $favorite_room_detail['name']?></h5>
                    <div id="ratingContainer">
                    <a href="/favorite?id_room=<?php echo $favorite_room_detail['id']; ?>">
                        <button  class="favorite-button" onclick="toggleFavorite(this)" >
                          <i class="fas fa-heart"  id="like_room<?php echo $favorite_room_detail['id']?>" ></i>
                        </button>
                    </a>
                      <i class="fa-solid fa-star" style="color: #3A8CED;"></i><?php echo $favorite_room_detail['rating']?>
                    </div>
                  </div>
                  <p class="convenient"><?php echo $favorite_room_detail['convenient']?></p>
                  <p id="description"><?php echo $favorite_room_detail['description'] ?></p>
                  <div class="d-flex mb-3">
                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-secondary me-2">
                      </i>Bed</small> 
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-secondary me-2">
                      </i>Bath</small>
                    <small><i class="fa fa-wifi text-secondary me-2">
                      </i>Wifi</small>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                  <h4 style="color: #3568A4;">$<?php echo $favorite_room_detail['price']?></h4>
                  <?php
                    // if(!empty($_SESSION['email']) || !empty($_SESSION['password']) )  :
                      if(!empty($_SESSION['isLogin']) && $_SESSION['isLogin']):
                    ?>
                    <a href="/booking_room?id_room=<?php echo $favorite_room_detail['id']; ?>"><input type="button" class="btn_card_booking" name="booking"  value="Booking now"></a>
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