<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koch Packaging - Login</title>
  <!-- Login Page Specific Styles & Script -->
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js" defer></script>
</head>

<body>
  <?php include '../component/menubar.php'; ?>

  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <div class="login-page-wrapper">
    <div class="login-container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form login-form">
            <h2 class="login-title">เข้าสู่ระบบ</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="ชื่อผู้ใช้" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="รหัสผ่าน" />
            </div>
            <input type="submit" value="เข้าสู่ระบบ" class="login-btn solid" />
            <p class="social-text">หรือเข้าสู่ระบบด้วยแพลตฟอร์มโซเชียล</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-line"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form login-form">
            <h2 class="login-title">ลงทะเบียน</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="ชื่อผู้ใช้" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="อีเมล" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="รหัสผ่าน" />
            </div>
            <input type="submit" class="login-btn" value="ลงทะเบียน" />
            <p class="social-text">หรือลงทะเบียนด้วยแพลตฟอร์มโซเชียล</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-line"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>เพิ่งมาใหม่ใช่ไหม?</h3>
            <p>
              ค้นพบโลกแห่งความเป็นไปได้!
              เข้าร่วมกับเราและสำรวจชุมชนที่มีชีวิตชีวาที่ความคิดเติบโตและการเชื่อมต่อเจริญก้าวหน้า
            </p>
            <button class="login-btn transparent" id="sign-up-btn">
              ลงทะเบียน
            </button>
          </div>
          <img src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>หนึ่งในสมาชิกที่ทรงคุณค่าของเรา</h3>
            <p>
              ขอบคุณที่เป็นส่วนหนึ่งของชุมชนของเรา การปรากฏตัวของคุณช่วยเติมเต็มประสบการณ์ที่มีร่วมกันของเรา
              มาสานต่อการเดินทางนี้ไปด้วยกัน!
            </p>
            <button class="login-btn transparent" id="sign-in-btn">
              เข้าสู่ระบบ
            </button>
          </div>
          <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png" class="image" alt="" />
        </div>
      </div>
    </div>
  </div>



  <?php include '../component/footer.php'; ?>
</body>

</html>
