<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Development</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js" defer></script>

</head>
<body>
    <?php include '../component/menubar.php'; ?>
    
    <!-- Main Content Hero (Fixed Missing HTML Tags) -->
    <!-- ส่วนหัวของหน้า (Hero Section) แสดงภาพรวมและคำอธิบายเบื้องต้นของการพัฒนาบรรจุภัณฑ์ -->
    <!-- ใช้ Flexbox ในการจัดวางให้ภาพอยู่ซ้ายและข้อความอยู่ขวา -->
    <div class="content-section layout_padding" style="margin-top: 150px; margin-bottom: 50px;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
            <!-- Left: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box shape-angle-4">
                    <img src="../img/other/index/about/box_about.png" alt="Packaging Development" style="width:100%; position:relative; z-index:2; filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));">
                </div>
            </div>
            <!-- Right: Details -->
            <div style="flex: 1.2; min-width: 300px;">
                <h1 class="details-title" style="font-size: 36px; font-weight: bold; color: #E82433; margin-bottom: 10px;">Packaging Development</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 0px;">นวัตกรรมการออกแบบบรรจุภัณฑ์ครบวงจร</h2>
                <div style="width: 50px; height: 4px; background-color: #E82433; margin: 20px 0;"></div>
                <p class="details-desc" style="font-size: 16px; line-height: 1.6; color: #555;">
                   ให้บริการพัฒนาและออกแบบบรรจุภัณฑ์สำหรับอุตสาหกรรมยานยนต์แบบครบวงจร ครอบคลุมวัสดุหลากหลายประเภท เช่น กระดาษ เหล็ก ไม้ และพลาสติก โดยมุ่งเน้นการออกแบบที่แข็งแรง ปลอดภัย และเหมาะสมกับการขนส่งและการจัดเก็บ

กระบวนการพัฒนาบรรจุภัณฑ์ของบริษัทดำเนินงานอย่างเป็นระบบ ตั้งแต่การออกแบบแนวคิด การสร้างต้นแบบ การทดสอบใช้งานจริง ไปจนถึงการอนุมัติใช้งาน ภายใต้กรอบระยะเวลาการทำต้นแบบภายใน 7 วัน เพื่อความรวดเร็วและแม่นยำในการตอบสนองความต้องการของลูกค้า
                </p>
            </div>
        </div>
    </div>

    <!-- Scrolling Feature Section -->
    <!-- ส่วนแสดงคุณสมบัติแบบเลื่อน (Scroll) โดยข้อความด้านซ้ายจะเลื่อนตามหน้าจอ ขณะที่รูปภาพด้านขวาจะถูกยึดติดไว้ (Sticky) -->
    <div class="development-scroll-container">
        <!-- Texts -->
        <!-- คอนเทนเนอร์สำหรับข้อความที่จะเลื่อนตามการกวาดหน้าจอ -->
        <div class="scroll-text-container">
            <section id="dev-section1">
                <div class="grid-text">
                    <div>
                        <h3>การออกแบบเชิงโครงสร้าง (Structural Design)</h3>
                        <p>ดึงศักยภาพของวัสดุมาออกแบบให้มีความมั่นคงแข็งแรง รองรับน้ำหนักและกันกระแทกได้ดีเยี่ยม พร้อมทั้งประหยัดพื้นที่จัดเก็บและต้นทุนการขนส่ง (Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequuntur officia laboriosam error.)</p>
                    </div>
                </div>
            </section>
            <section id="dev-section2">
                <div class="grid-text">
                    <div>
                        <h3>นวัตกรรมวัสดุ (Material Innovation)</h3>
                        <p>เราคัดสรรและใช้วัสดุที่ล้ำสมัย เป็นมิตรต่อสิ่งแวดล้อม และสอดคล้องกับมาตรฐานอุตสาหกรรมระดับโลก เพื่อให้บรรจุภัณฑ์ของคุณพรีเมียมและยั่งยืน (Illum numquam est labore suscipit deserunt voluptate aspernatur dolorem, ipsam recusandae cupiditate.)</p>
                    </div>
                </div>
            </section>
            <section id="dev-section3">
                <div class="grid-text">
                    <div>
                        <h3>การทดสอบและประเมิน (Testing & Validation)</h3>
                        <p>ผ่านกระบวนการทดสอบความแข็งแรง การตกกระแทก การสั่นสะเทือน หรือสภาพอากาศ เพื่อให้มั่นใจได้ว่าสินค้าจะถึงมือผู้รับอย่างปลอดภัย (Itaque omnis eum fuga iste expedita perspiciatis provident animi et soluta.)</p>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Image Sticky Area -->
        <!-- พื้นที่แสดงรูปภาพหลัก โดยใช้คุณสมบัติ CSS (Sticky) เพื่อให้รูปภาพไม่ขยับตามเวลาเลื่อนหน้าจอ -->
        <div class="scroll-image-container">
            <!-- Padded container ensures the red background is clearly visible behind the solid image -->
            <!-- สร้างแบคกราวด์สีแดงด้านหลังและจัดตำแหน่งด้วย position -->
            <div class="image-wrapper" style="position: relative; width: 100%; max-width: 500px; padding: 30px; box-sizing: border-box;">
                <!-- Formal, right-aligned red angled background -->
                <div style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;"></div>
                
                <!-- Main Sticky Image -->
                <img id="sticky-dev-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg" alt="Development Service Image" style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
        </div>
    </div>


    <!-- CARDS COMPONENT         
         Semantic HTML structure with accessibility features:
         - External links open in new tab (target="_blank")
         - Security: rel="noopener noreferrer" prevents vulnerabilities
         - Performance: loading="lazy" defers off-screen images
         - SEO: Descriptive alt text for all images
    -->
    <!-- ส่วนของการ์ดรูปภาพ (Cards) แสดงผลรูปสไตล์ Responsive แบบทันสมัย -->
<div class="dev-cards-wrapper">
<div class="dev-cards">
  <!-- Card 1: Cliff Coast -->
  <div class="dev-card">
    <a href="https://picsum.photos/id/1015/800/600" target="_blank" rel="noopener noreferrer">
      <img src="https://picsum.photos/id/1015/800/600" alt="Mountain landscape with river" loading="lazy" />
      <div class="dev-card-title">Cliff Coast</div>
      <p class="dev-card-desc">
        Rocky shoreline with blue water and a wide sky.
      </p>
    </a>
  </div>

  <!-- Card 2: Forest Lights -->
  <div class="dev-card">
    <a href="https://picsum.photos/id/1022/800/600" target="_blank" rel="noopener noreferrer">
      <img src="https://picsum.photos/id/1022/800/600" alt="A vivid display of the aurora borealis." loading="lazy" />
      <div class="dev-card-title">Forest Lights</div>
      <p class="dev-card-desc">
        A vivid display of the aurora borealis.
      </p>
    </a>
  </div>

  <!-- Card 3: Nature Walk -->
  <div class="dev-card">
    <a href="https://picsum.photos/id/1035/800/600" target="_blank" rel="noopener noreferrer">
      <img src="https://picsum.photos/id/1035/800/600" alt="Person walking in nature" loading="lazy" />
      <div class="dev-card-title">Nature Walk</div>
      <p class="dev-card-desc">
        Explore the beauty of nature through peaceful trails.
      </p>
    </a>
  </div>

  <!-- Card 4: Mountain View -->
  <div class="dev-card">
    <a href="https://picsum.photos/id/1045/800/600" target="_blank" rel="noopener noreferrer">
      <img src="https://picsum.photos/id/1045/800/600" alt="City skyline at night" loading="lazy" />
      <div class="dev-card-title">Mountain View</div>
      <p class="dev-card-desc">
        Clouds drifting over a peaceful mountain landscape.
      </p>
    </a>
  </div>

  <!-- Card 5: Sunset -->
  <div class="dev-card">
    <a href="https://picsum.photos/id/1055/800/600" target="_blank" rel="noopener noreferrer">
      <img src="https://picsum.photos/id/1055/800/600" alt="Beautiful sunset over horizon" loading="lazy" />
      <div class="dev-card-title">Golden Sunset</div>
      <p class="dev-card-desc">
        Witness the golden hour as the sun sets on the horizon.
      </p>
    </a>
  </div>
</div>
</div>


    <?php include '../component/footer.php'; ?>

  
</body>
</html>