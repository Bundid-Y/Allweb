<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Login</title>
    <!-- Custom CSS & JS -->
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
                            ค้นพบโลกแห่งความเป็นไปได้! เข้าร่วมกับเราและสำรวจชุมชนที่มีชีวิตชีวาที่ความคิดเติบโตและการเชื่อมต่อเจริญก้าวหน้า
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
                            ขอบคุณที่เป็นส่วนหนึ่งของชุมชนของเรา การปรากฏตัวของคุณช่วยเติมเต็มประสบการณ์ที่มีร่วมกันของเรา มาสานต่อการเดินทางนี้ไปด้วยกัน!
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

<style>
/* Login Page Specific Styles */
.login-page-wrapper {
    margin-top: 0; /* Removed margin to let background go to top */
    padding-top: 80px; /* Space for menubar content */
    width: 100%;
    min-height: 100vh; /* Changed from calc(100vh - 80px) */
    display: flex;
    flex-direction: column;
}

.login-container {
  position: relative;
  width: 100%;
  flex: 1; 
  background-color: #fff;
  overflow: hidden;
  min-height: 100vh; /* Changed from calc(100vh - 80px) */
}

.forms-container {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.signin-signup {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  left: 75%;
  width: 50%;
  transition: 1s 0.7s ease-in-out;
  display: grid;
  grid-template-columns: 1fr;
  z-index: 5;
}

.login-form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0rem 5rem;
  transition: all 0.2s 0.7s;
  overflow: hidden;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

form.sign-up-form {
  opacity: 0;
  z-index: 1;
}

form.sign-in-form {
  z-index: 2;
}

.login-title {
  font-size: 2.2rem;
  color: #444;
  margin-bottom: 10px;
  font-weight: 700;
}

.input-field {
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #acacac;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
  font-family: 'Sarabun', sans-serif;
}

.social-text {
  padding: 0.7rem 0;
  font-size: 1rem;
}

.social-media {
  display: flex;
  justify-content: center;
}

.social-icon {
  height: 46px;
  width: 46px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 0.45rem;
  color: #333;
  border-radius: 50%;
  border: 1px solid #333;
  text-decoration: none;
  font-size: 1.1rem;
  transition: 0.3s;
}

.social-icon:hover {
  color: #e82433; /* Koch Red */
  border-color: #e82433;
}

.login-btn {
  width: 150px;
  background-color: #325662; /* Koch Dark Blue */
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
  font-family: 'Sarabun', sans-serif;
  font-size: 16px;
}

.login-btn:hover {
  background-color: #e82433; /* Koch Red on hover */
}

.panels-container {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.login-container:before {
  content: "";
  position: absolute;
  height: 3000px;
  width: 3000px;
  top: -50%;
  right: 48%; /* Adjusts the angle/position of the straight line */
  transform: translateY(-50%) rotate(15deg); /* Added rotation for the diagonal line */
  background-image: linear-gradient(-45deg, #e82433 0%, #325662 100%);
  transition: 1.8s ease-in-out;
  border-radius: 0; /* Changed from 50% to 0 for a straight edge */
  z-index: 6;
}

.image {
  width: 100%;
  transition: transform 1.1s ease-in-out;
  transition-delay: 0.4s;
}

.panel {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-around;
  text-align: center;
  z-index: 6;
}

.left-panel {
  pointer-events: all;
  padding: 3rem 17% 2rem 12%;
}

.right-panel {
  pointer-events: none;
  padding: 3rem 12% 2rem 17%;
}

.panel .content {
  color: #fff;
  transition: transform 0.9s ease-in-out;
  transition-delay: 0.6s;
}

.panel h3 {
  font-weight: 600;
  line-height: 1;
  font-size: 1.5rem;
}

.panel p {
  font-size: 0.95rem;
  padding: 0.7rem 0;
}

.login-btn.transparent {
  margin: 0;
  background: none;
  border: 2px solid #fff;
  width: 130px;
  height: 41px;
  font-weight: 600;
  font-size: 0.9rem;
}

.login-btn.transparent:hover {
  background-color: #fff;
  color: #325662;
}

.right-panel .image,
.right-panel .content {
  transform: translateX(800px);
}

/* ANIMATION */

.login-container.sign-up-mode:before {
  transform: translate(100%, -50%);
  right: 52%;
}

.login-container.sign-up-mode .left-panel .image,
.login-container.sign-up-mode .left-panel .content {
  transform: translateX(-800px);
}

.login-container.sign-up-mode .signin-signup {
  left: 25%;
}

.login-container.sign-up-mode form.sign-up-form {
  opacity: 1;
  z-index: 2;
}

.login-container.sign-up-mode form.sign-in-form {
  opacity: 0;
  z-index: 1;
}

.login-container.sign-up-mode .right-panel .image,
.login-container.sign-up-mode .right-panel .content {
  transform: translateX(0%);
}

.login-container.sign-up-mode .left-panel {
  pointer-events: none;
}

.login-container.sign-up-mode .right-panel {
  pointer-events: all;
}

@media (max-width: 870px) {
  .login-container {
    min-height: 800px;
    height: 100vh;
  }
  .signin-signup {
    width: 100%;
    top: 95%;
    transform: translate(-50%, -100%);
    transition: 1s 0.8s ease-in-out;
  }

  .signin-signup,
  .login-container.sign-up-mode .signin-signup {
    left: 50%;
  }

  .panels-container {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 2fr 1fr;
  }

  .panel {
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    padding: 2.5rem 8%;
    grid-column: 1 / 2;
  }

  .right-panel {
    grid-row: 3 / 4;
  }

  .left-panel {
    grid-row: 1 / 2;
  }

  .image {
    width: 200px;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.6s;
  }

  .panel .content {
    padding-right: 15%;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.8s;
  }

  .panel h3 {
    font-size: 1.2rem;
  }

  .panel p {
    font-size: 0.7rem;
    padding: 0.5rem 0;
  }

  .login-btn.transparent {
    width: 110px;
    height: 35px;
    font-size: 0.7rem;
  }

  .login-container:before {
    width: 1500px;
    height: 1500px;
    transform: translateX(-50%);
    left: 30%;
    bottom: 68%;
    right: initial;
    top: initial;
    transition: 2s ease-in-out;
  }

  .login-container.sign-up-mode:before {
    transform: translate(-50%, 100%);
    bottom: 32%;
    right: initial;
  }

  .login-container.sign-up-mode .left-panel .image,
  .login-container.sign-up-mode .left-panel .content {
    transform: translateY(-300px);
  }

  .login-container.sign-up-mode .right-panel .image,
  .login-container.sign-up-mode .right-panel .content {
    transform: translateY(0px);
  }

  .right-panel .image,
  .right-panel .content {
    transform: translateY(300px);
  }

  .login-container.sign-up-mode .signin-signup {
    top: 5%;
    transform: translate(-50%, 0);
  }
}

@media (max-width: 570px) {
  .login-form {
    padding: 0 1.5rem;
  }

  .image {
    display: none;
  }
  .panel .content {
    padding: 0.5rem 1rem;
  }
  .login-container {
    padding: 1.5rem;
  }

  .login-container:before {
    bottom: 72%;
    left: 50%;
  }

  .login-container.sign-up-mode:before {
    bottom: 28%;
    left: 50%;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const login_container = document.querySelector(".login-container");

    if(sign_up_btn && sign_in_btn && login_container) {
        sign_up_btn.addEventListener("click", () => {
            login_container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            login_container.classList.remove("sign-up-mode");
        });
    }
});
</script>  

    <?php include '../component/footer.php'; ?>
</body>
</html>
