<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Contact</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    
</head>
<body style="background-color: #fbfbfb;"> <!-- Light grey background like standard modern sites to let white blocks pop -->
    <?php include '../component/menubar.php'; ?>
    
    <!-- CONTENT SECTION using layout_padding for unified spacing -->
    <div class="content-section layout_padding" style="padding-top: 120px; padding-bottom: 120px;">
         <div class="container">
            
            <div class="contact-container">
                <!-- Left Column: Contact Details -->
                <div class="contact-content">
                    <h1 class="contact-title">ติดต่อเรา</h1>
                    
                    <div class="contact-item" style="margin-top: 20px;">
                        <div class="contact-icon">
                            <!-- SVG Map Pin -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="contact-text-group">
                            <h4>ที่อยู่สำนักงาน</h4>
                            <p>742/5 หมู่ที่ 1 ตำบลหนองไผ่แก้ว<br>อำเภอบ้านบึง จ.ชลบุรี 20220</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <!-- SVG Phone -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="contact-text-group">
                            <h4>ติดต่อฝ่ายขาย</h4>
                            <p>089-8335550<br>090-9542354</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <!-- SVG Mail -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="contact-text-group">
                            <h4>อีเมล</h4>
                            <p>salesteam@koch-packaging.com</p>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Map -->
                <div class="contact-map-wrapper">
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps?q=13.161099,101.157816&hl=th&z=15&output=embed" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

         </div>
      </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
