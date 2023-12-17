<?php
$rating = 4.5; // Đánh giá của phòng

if ($rating >= 0 && $rating <= 5) {
    echo '<div class="rating">';
    echo '<span>' . $rating . '</span>';
    echo '</div>';
}
?>