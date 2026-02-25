<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Warehouse</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <?php include '../component/menubar.php'; ?>
    
    <!-- Main Content -->
    <div class="content-section layout_padding" style="margin-top: 100px;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; flex-direction: row-reverse;">
            <!-- Right: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box shape-angle-3">
                    <img src="../img/other/index/about/box_about.png" alt="Warehouse Management" style="width:100%; position:relative; z-index:2; transform: scaleX(-1);">
                </div>
            </div>
            <!-- Left: Details -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title">Warehouse & Operation</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px;">บริหารจัดการคลังสินค้าและงานปฏิบัติการมืออาชีพ</h2>
                <p class="details-desc">
                    ดูแลคลังสินค้าครบวงจรตั้งแต่การรับเข้า จัดเก็บ สุ่มตรวจ และกระจายสินค้า ด้วยมาตรฐานระดับสากล เพื่อให้กระบวนการผลิตของคุณไม่สะดุด
                </p>
                <ul class="details-desc" style="margin-top: 15px; padding-left: 20px;">
                    <li>ระบบจัดเก็บสินค้าอย่างเป็นหมวดหมู่และเข้าถึงง่าย (Smart Storage)</li>
                    <li>การทำงานที่รวดเร็ว ถูกต้อง และแม่นยำ (Fast Operation)</li>
                    <li>บุคลากรที่มีความเชี่ยวชาญเฉพาะด้าน (Professional Staff)</li>
                    <li>บูรณาการข้อมูลร่วมกับระบบซัพพลายเชนของคุณ</li>
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
                        <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">ระบบจัดเก็บสินค้าเป็นหมวดหมู่และเข้าถึงง่าย</h3>
                        <p style="font-size: 16px; line-height: 1.6; color: #555;">ออกแบบพื้นที่จัดเก็บอย่างเป็นระบบ แบ่งหมวดหมู่ชัดเจนตามประเภทสินค้าและความถี่ในการใช้งาน ช่วยให้ค้นหาและเบิกจ่ายได้รวดเร็ว ลดความผิดพลาด และเพิ่มประสิทธิภาพในการบริหารพื้นที่คลังสินค้าอย่างคุ้มค่าสูงสุด</p>
                    </div>
                    <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
                        <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
                        <div class="image-wrapper" style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
                            <div style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;"></div>
                            <img src="../img/other/service/warehouse/product_storage.jpeg" alt="In-house Engineering Image" style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 2 -->
            <section id="dev-section2" style="margin-bottom: 40px;">
                <!-- สลับด้านรูปภาพให้อยู่ซ้าย ข้อความอยู่ขวา จะได้ดูมีมิติลูกเล่น -->
                <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center; flex-direction: row-reverse;">
                    <div style="flex: 1; min-width: 300px;">
                        <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">การทำงานที่รวดเร็ว ถูกต้อง และแม่นยำ</h3>
                        <p style="font-size: 16px; line-height: 1.6; color: #555;">ดำเนินงานภายใต้มาตรฐานขั้นตอนที่ชัดเจน พร้อมระบบสนับสนุนที่ช่วยลดความซ้ำซ้อนและข้อผิดพลาด เพิ่มความรวดเร็วในการปฏิบัติงาน ควบคุมคุณภาพได้อย่างต่อเนื่อง และตอบสนองความต้องการลูกค้าได้อย่างตรงเวลา</p>
                    </div>
                    <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
                        <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
                        <div class="image-wrapper" style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
                            <div style="position: absolute; top: -5%; left: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%); z-index: 1;"></div>
                            <img src="../img/other/service/warehouse/fast_work.jpeg" alt="Digital System & Innovation Image" style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 3 -->
            <section id="dev-section3" style="margin-bottom: 0px;">
                <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                    <div style="flex: 1; min-width: 300px;">
                        <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;">บุคลากรที่มีความเชี่ยวชาญเฉพาะด้าน</h3>
                        <p style="font-size: 16px; line-height: 1.6; color: #555;">ทีมงานผ่านการอบรมและมีประสบการณ์ตรงในสายงานโลจิสติกส์และคลังสินค้า เข้าใจขั้นตอนการทำงานอย่างละเอียด สามารถวิเคราะห์ปัญหาและแก้ไขสถานการณ์ได้อย่างมืออาชีพ เพื่อให้การดำเนินงานเป็นไปอย่างราบรื่นและมีประสิทธิภาพสูงสุด</p>
                    </div>
                    <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
                        <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
                        <div class="image-wrapper" style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
                            <div style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #E82433; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;"></div>
                            <img src="../img/other/service/warehouse/personnel.jpeg" alt="Advanced Tools Image" style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
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
      <img src="../img/other/service/development/tool2.jpeg" alt="A vivid display of the aurora borealis." loading="lazy" />
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
        รองรับการขนส่งชิ้นส่วนยานยนต์ที่มีความละเอียดอ่อน
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
      <img src="../img/other/service/transportation/transport.jpeg" alt="Beautiful sunset over horizon" loading="lazy" />
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
