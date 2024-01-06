<!DOCTYPE html>
<html>
<head>
  <title>Đánh giá phòng khách sạn</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .rating-container {
      text-align: center;
      margin-top: 20px;
    }

    .rating-stars {
      display: inline-block;
      font-size: 24px;
      color: #888;
      cursor: pointer;
    }

    .rating-stars:hover,
    .rating-stars:hover ~ .rating-stars {
      color: #ffc107;
    }

    .rating-stars.selected {
      color: #ffc107;
    }

    #review {
      width: 100%;
      height: 150px;
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: none;
    }

    #submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    #submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Đánh giá phòng khách sạn</h1>
    <div class="rating-container">
      <span class="rating-stars">&#9733;</span>
      <span class="rating-stars">&#9733;</span>
      <span class="rating-stars">&#9733;</span>
      <span class="rating-stars">&#9733;</span>
      <span class="rating-stars">&#9733;</span>
    </div>
    <textarea id="review" placeholder="Nhận xét về phòng khách sạn"></textarea>
    <button id="submit-btn">Gửi đánh giá</button>
  </div>

  <script>
    const stars = document.querySelectorAll(".rating-stars");
    const reviewTextarea = document.getElementById("review");
    const submitButton = document.getElementById("submit-btn");

    stars.forEach((star, index) => {
      star.addEventListener("click", () => {
        removeSelectedStars();
        addSelectedStars(index);
      });
    });

    function removeSelectedStars() {
      stars.forEach((star) => {
        star.classList.remove("selected");
      });
    }

    function addSelectedStars(index) {
      for (let i = 0; i <= index; i++) {
        stars[i].classList.add("selected");
      }
    }

    submitButton.addEventListener("click", () => {
      const rating = document.querySelectorAll(".rating-stars.selected").length;
      const review = reviewTextarea.value;

      // Gửi đánh giá và xử lý logic tiếp theo
      // ...

      // Reset đánh giá và nhận xét
      removeSelectedStars();
      reviewTextarea.value = "";
    });
  </script>
</body>
</html>