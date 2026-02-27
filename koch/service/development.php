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
      <div style="flex: 1.2; min-width: 300px; display: flex; justify-content: center;">
        <div class="image-wrapper" style="position: relative; width: 100%; padding: 20px; box-sizing: border-box;">
          <div
            style="position: absolute; top: -5%; left: -5%; width: 95%; height: 110%; background-color: #E82433; clip-path: polygon(0 5%, 85% 0, 85% 100%, 0 95%); z-index: 1;">
          </div>
          <img src="../img/other/service/development/development.jpeg" alt="Packaging Development"
            style="display: block; width: 100%; height: 480px; object-fit: cover; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
        </div>
      </div>
      <!-- Right: Details -->
      <div style="flex: 1; min-width: 300px;">
        <h1 class="details-title" style="font-size: 36px; font-weight: bold; color: #E82433; margin-bottom: 10px;">
          Packaging Development</h1>
        <h2 style="font-size: 24px; color: #325662; margin-top: 0px;">นวัตกรรมการออกแบบบรรจุภัณฑ์ครบวงจร</h2>
        <div style="width: 50px; height: 4px; background-color: #E82433; margin: 20px 0;"></div>
        <p class="details-desc" style="font-size: 16px; line-height: 1.6; color: #555;">
          ให้บริการพัฒนาและออกแบบบรรจุภัณฑ์สำหรับอุตสาหกรรมยานยนต์แบบครบวงจร ครอบคลุมวัสดุหลากหลายประเภท เช่น กระดาษ
          เหล็ก ไม้ และพลาสติก โดยมุ่งเน้นการออกแบบที่แข็งแรง ปลอดภัย และเหมาะสมกับการขนส่งและการจัดเก็บ

          กระบวนการพัฒนาบรรจุภัณฑ์ของบริษัทดำเนินงานอย่างเป็นระบบ ตั้งแต่การออกแบบแนวคิด การสร้างต้นแบบ
          การทดสอบใช้งานจริง ไปจนถึงการอนุมัติใช้งาน ภายใต้กรอบระยะเวลาการทำต้นแบบภายใน 7 วัน
          เพื่อความรวดเร็วและแม่นยำในการตอบสนองความต้องการของลูกค้า
        </p>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="content-section layout_padding">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

      <!-- Section 1 -->
      <section id="dev-section1" style="margin-bottom: 40px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">งานวิศวกรรมภายใน</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
              เปี่ยมด้วยประสบการณ์และความเชี่ยวชาญ
              โดยทีมงานของเราไม่ได้ทำหน้าที่เพียงแค่การผลิตบรรจุภัณฑ์ทั่วไป
              แต่เป็นการออกแบบโซลูชันเชิงวิศวกรรมที่ปรับแต่งให้เหมาะสมกับความต้องการเฉพาะของแต่ละโครงการอย่างใกล้ชิด</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/development/inhouse.jpeg" alt="In-house Engineering Image"
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
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">การพัฒนาระบบดิจิทัลและนวัตกรรม</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
              การพัฒนาระบบซอฟต์แวร์บริหารจัดการการขนส่ง (TMS
              System) ขึ้นด้วยทีมงานภายในของเราเอง
              เพื่อให้มั่นใจว่าระบบจะสามารถสอดคล้องกับข้อกำหนดและความต้องการที่หลากหลายของลูกค้าแต่ละรายได้อย่างไร้รอยต่อ
            </p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; left: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/development/tms.jpeg" alt="Digital System & Innovation Image"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section id="dev-section3" style="margin-bottom: 0px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">เครื่องมือและเทคโนโลยีขั้นสูง</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
              การใช้ซอฟต์แวร์มาตรฐานโลกอย่าง AutoCAD และ
              SolidWorks 3D เพื่อสร้างสรรค์โครงสร้างบรรจุภัณฑ์ที่มีความแม่นยำและซับซ้อนสูง
              จากนั้นจึงนำระบบการตัดด้วยดิจิทัล (Digital-Cutting Optimization System)
              มาใช้ในกระบวนการเตรียมวัสดุเพื่อลดการสูญเสียและเพิ่มความรวดเร็วในการผลิต</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/development/tool.jpeg" alt="Advanced Tools Image"
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
        <a href="https://picsum.photos/id/1015/800/600" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/supply/inventory.jpeg" alt="Mountain landscape with river" loading="lazy" />
          <div class="dev-card-title">Cliff Coast</div>
          <p class="dev-card-desc">
            บริหารจัดการสินค้าคงคลังบรรจุภัณฑ์
          </p>
        </a>
      </div>

      <!-- Card 2: Forest Lights -->
      <div class="dev-card">
        <a href="https://picsum.photos/id/1022/800/600" target="_blank" rel="noopener noreferrer">
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
        <a href="https://picsum.photos/id/1035/800/600" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/warehouse/personnel.jpeg" alt="Person walking in nature" loading="lazy" />
          <div class="dev-card-title">Nature Walk</div>
          <p class="dev-card-desc">
            บุคลากรที่มีความเชี่ยวชาญเฉพาะด้าน
          </p>
        </a>
      </div>

      <!-- Card 4: Mountain View -->
      <div class="dev-card">
        <a href="https://picsum.photos/id/1045/800/600" target="_blank" rel="noopener noreferrer">
          <img src="../img/other/service/warehouse/box.jpeg" alt="City skyline at night" loading="lazy" />
          <div class="dev-card-title">Mountain View</div>
          <p class="dev-card-desc">
            รองรับการขนส่งชิ้นส่วนยานยนต์ที่มีความละเอียดอ่อน
          </p>
        </a>
      </div>

      <!-- Card 5: Sunset -->
      <div class="dev-card">
        <a href="https://picsum.photos/id/1055/800/600" target="_blank" rel="noopener noreferrer">
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