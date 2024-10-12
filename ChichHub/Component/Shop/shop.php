<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChicHub - ร้านค้า</title>
  <!-- ลิงก์ไปยัง Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- ลิงก์ไปยังไฟล์ CSS -->
  <link rel="stylesheet" href="../styles/styles.css">
  <style>
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 80px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 999;
    }
  </style>
</head>

<body>
  <!-- ส่วนหัว (Header) -->
  <header>
    <div class="container-header">
      <div class="logo">
        <h1 class="chic-hub"><a href="../Home/home.php">ChicHub</a></h1>
      </div>
      <nav>
        <ul class="nav-links">
          <li><a href="../Home/home.php">หน้าหลัก</a></li>
          <li><a href="../Shop/shop.html">ร้านค้า</a></li>
          <li><a href="#">โปรโมชั่น</a></li>
          <li><a href="../Contact-us/contact-us.html">ติดต่อเรา</a></li>
          <li><a href="../Sign-In/signin.html"><i class="fas fa-user"></i> เข้าสู่ระบบ</a></li>
          <li><a href="../Cart/cart.html"><i class="fas fa-shopping-cart"></i> รถเข็น</a></li>
        </ul>
        <!-- ปุ่ม Hamburger สำหรับมือถือ -->
        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
      </nav>
    </div>
  </header>

  <!-- Blur Background -->
  <div class="blur-background"></div>

  <div class="shop-container">
    <!-- ส่วนค้นหาสินค้า -->
    <div class="search-section">
      <input type="text" placeholder="ค้นหาสินค้า...">
      <button>ค้นหา</button>
    </div>

    <div class="shop-content">
      <!-- การกรองสินค้า -->
      <aside class="filter-sidebar">
        <h3>กรองสินค้า</h3>
        <div class="filter-category">
          <label>หมวดหมู่</label>
          <select>
            <option value="ทั้งหมด">ทั้งหมด</option>
            <option value="เสื้อยืด">เสื้อยืด</option>
            <option value="กางเกง">กางเกง</option>
          </select>
        </div>
        <div class="filter-color">
          <label>สี</label>
          <select>
            <option value="ทั้งหมด">ทั้งหมด</option>
            <option value="แดง">แดง</option>
            <option value="ดำ">ดำ</option>
          </select>
        </div>
        <div class="filter-size">
          <label>ขนาด</label>
          <select>
            <option value="select">-- size --</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
        </div>
        <div class="filter-price">
          <label>ราคา</label>
          <input type="number" min="0">
        </div>
      </aside>

      <!-- แสดงสินค้าทั้งหมด -->
      <section class="product-list">
        <div class="product-item">
          <img src="https://via.placeholder.com/300x400" alt="product">
          <h4>เสื้อยืดคลาสสิค</h4>
          <p>฿500</p>
          <button class="add-to-cart" data-name="เสื้อยืดคลาสสิค" data-price="500">เพิ่มในรถเข็น</button>
        </div>
        <div class="product-item">
          <img src="https://via.placeholder.com/300x400" alt="product">
          <h4>กางเกงยีนส์</h4>
          <p>฿1200</p>
          <button class="add-to-cart" data-name="กางเกงยีนส์" data-price="1200">เพิ่มในรถเข็น</button>
        </div>
        <div class="product-item">
          <img src="https://via.placeholder.com/300x400" alt="product">
          <h4>เสื้อแจ็คเก็ต</h4>
          <p>฿1500</p>
          <button class="add-to-cart" data-name="เสื้อแจ็คเก็ต" data-price="1500">เพิ่มในรถเข็น</button>
        </div>
      </section>
    </div>
  </div>

  <!-- ฟุตเตอร์ (Footer) -->
  <footer>
    <div class="container">
      <div class="footer-links">
        <a href="#">เกี่ยวกับเรา</a>
        <a href="#">นโยบายความเป็นส่วนตัว</a>
        <a href="#">เงื่อนไขการใช้งาน</a>
        <a href="#">ติดต่อเรา</a>
      </div>
      <div class="social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <p>&copy; 2024 ChicHub. สงวนลิขสิทธิ์.</p>
    </div>
  </footer>

  <script>
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const blurBackground = document.querySelector('.blur-background');
    
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      blurBackground.classList.toggle('active'); // เบลอพื้นหลังเมื่อเมนูเปิด
    });

    blurBackground.addEventListener('click', () => {
      navLinks.classList.remove('active');
      blurBackground.classList.remove('active');
    });

    // เพิ่มสินค้าลงในรถเข็น
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
      button.addEventListener('click', () => {
        const productName = button.dataset.name;
        const productPrice = button.dataset.price;
        
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        
        // ตรวจสอบว่ามีสินค้าในรถเข็นแล้วหรือยัง
        const existingItem = cartItems.find(item => item.name === productName);
        if (existingItem) {
          existingItem.quantity += 1; // เพิ่มจำนวนสินค้า
        } else {
          cartItems.push({
            name: productName,
            price: productPrice,
            quantity: 1
          });
        }

        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        alert(`${productName} ถูกเพิ่มในรถเข็น`);
      });
    });
  </script>
</body>

</html>
