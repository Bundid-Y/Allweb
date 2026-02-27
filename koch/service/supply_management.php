<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koch Packaging - Supply Management</title>
  <!-- Custom CSS & JS -->
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js" defer></script>
</head>

<body>
  <?php include '../component/menubar.php'; ?>

  <!-- Main Content -->
  <div class="content-section layout_padding" style="margin-top: 100px;">
    <div class="flex-row"
      style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; flex-direction: row-reverse;">
      <!-- Right: Image with custom red shape -->
      <div style="flex: 1; min-width: 300px;">
        <div class="image-wrapper" style="position: relative; width: 100%; padding: 20px; box-sizing: border-box;">
          <div
            style="position: absolute; top: -5%; right: -5%; width: 95%; height: 110%; background-color: #E82433; clip-path: polygon(15% 0, 100% 5%, 100% 95%, 15% 100%); z-index: 1;">
          </div>
          <img src="../img/other/service/supply/supply_management.jpeg" alt="Supply Management"
            style="display: block; width: 100%; height: 480px; object-fit: cover; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
        </div>
      </div>
      <!-- Left: Details -->
      <div style="flex: 1; min-width: 300px;">
        <h1 class="details-title">Supply Management</h1>
        <h2 style="font-size: 24px; color: #325662; margin-top: 10px;">ระบบบริหารจัดการบรรจุภัณฑ์อัจฉริยะ</h2>
        <p class="details-desc">
          ยกระดับการจัดการบรรจุภัณฑ์ด้วยระบบ (Packaging Supply Management System) ที่ครอบคลุม ติดตามได้อย่างแม่นยำ
          และลดต้นทุนแอบแฝงในกระบวนการผลิต
        </p>
        <ul class="details-desc" style="margin-top: 15px; padding-left: 20px; text-align: left;">
          <li>ติดตามสถานะบรรจุภัณฑ์หมุนเวียน (Returnable Packaging Tracking)</li>
          <li>บริหารจัดการสินค้าคงคลังบรรจุภัณฑ์ (Inventory Management)</li>
          <li>วิเคราะห์ข้อมูลและวางแผนการใช้งาน (Data Analytics & Planning)</li>
          <li>ลดความสูญเสียและบรรจุภัณฑ์สูญหายอย่างมีประสิทธิภาพ</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Features Section -->
  <div class="content-section layout_padding">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

      <!-- Section 1 -->
      <section id="dev-section1" style="margin-bottom: 40px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">ติดตามสถานะบรรจุภัณฑ์</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
              ติดตามการหมุนเวียนของบรรจุภัณฑ์แบบใช้ซ้ำได้อย่างเป็นระบบ ตั้งแต่การจ่ายออก การใช้งาน จนถึงการส่งคืน
              ช่วยลดการสูญหาย เพิ่มความโปร่งใส และควบคุมต้นทุนได้อย่างมีประสิทธิภาพ</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/supply/tracking.jpeg" alt="In-house Engineering Image"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 -->
      <section id="dev-section2" style="margin-bottom: 40px;">
        <!-- สลับด้านรูปภาพให้อยู่ซ้าย ข้อความอยู่ขวา จะได้ดูมีมิติลูกเล่น -->
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center; flex-direction: row-reverse;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">บริหารจัดการสินค้าคงคลังบรรจุภัณฑ์</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
              ควบคุมปริมาณบรรจุภัณฑ์คงคลังให้เหมาะสมกับปริมาณงานจริง ตรวจสอบสถานะคงเหลือแบบเรียลไทม์
              ลดปัญหาขาดแคลนหรือสต็อกเกินความจำเป็น</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; left: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/supply/inventory.jpeg" alt="Digital System & Innovation Image"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section id="dev-section3" style="margin-bottom: 0px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">วิเคราะห์ข้อมูลและวางแผนการใช้งาน</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
              นำข้อมูลการใช้งานมาวิเคราะห์แนวโน้มและประสิทธิภาพ
              เพื่อวางแผนการจัดสรรบรรจุภัณฑ์ให้สอดคล้องกับปริมาณงาน ช่วยเพิ่มความแม่นยำในการตัดสินใจและลดต้นทุนในระยะยาว
            </p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/supply/data_analytics.jpeg" alt="Advanced Tools Image"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

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
        <a href="../img/other/service/supply/inventory.jpeg" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/supply/inventory.jpeg" alt="Mountain landscape with river" loading="lazy" />
          <div class="dev-card-title">Cliff Coast</div>
          <p class="dev-card-desc">
            บริหารจัดการสินค้าคงคลังบรรจุภัณฑ์
          </p>
        </a>
      </div>

      <!-- Card 2: Forest Lights -->
      <div class="dev-card">
        <a href="../img/other/service/development/tool2.jpeg" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/development/tool2.jpeg" alt="A vivid display of the aurora borealis."
            loading="lazy" />
          <div class="dev-card-title">Forest Lights</div>
          <p class="dev-card-desc">
            นวัตกรรมการออกแบบบรรจุภัณฑ์ครบวงจร
          </p>
        </a>
      </div>

      <!-- Card 3: Nature Walk -->
      <div class="dev-card">
        <a href="../img/other/service/warehouse/personnel.jpeg" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/warehouse/personnel.jpeg" alt="Person walking in nature" loading="lazy" />
          <div class="dev-card-title">Nature Walk</div>
          <p class="dev-card-desc">
            รองรับการขนส่งชิ้นส่วนยานยนต์ที่มีความละเอียดอ่อน
          </p>
        </a>
      </div>

      <!-- Card 4: Mountain View -->
      <div class="dev-card">
        <a href="../img/other/service/warehouse/box.jpeg" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/warehouse/box.jpeg" alt="City skyline at night" loading="lazy" />
          <div class="dev-card-title">Mountain View</div>
          <p class="dev-card-desc">
            รองรับการขนส่งชิ้นส่วนยานยนต์ที่มีความละเอียดอ่อน
          </p>
        </a>
      </div>

      <!-- Card 5: Sunset -->
      <div class="dev-card">
        <a href="../img/other/service/transportation/transport.jpeg" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/transportation/transport.jpeg" alt="Beautiful sunset over horizon"
            loading="lazy" />
          <div class="dev-card-title">Golden Sunset</div>
          <p class="dev-card-desc">
            ครอบคลุมทุกเส้นทางอุตสาหกรรมในประเทศ
          </p>
        </a>
      </div>
    </div>
  </div>

  <?php include '../component/footer.php'; ?>
</body>

</html>