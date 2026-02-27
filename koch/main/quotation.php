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

    <main>
        <section class="quotation-section layout_padding"
            style="padding-top: 60px; padding-bottom: 60px; background-color: #f9f9f9;">
            <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
                <div class="quotation-card">
                    <h2 class="form-title">ขอใบเสนอราคา</h2>
                    <form action="#" method="POST" enctype="multipart/form-data" class="quotation-form">

                        <div class="form-row row-3">
                            <div class="form-group">
                                <label>First Name (ชื่อ) <span class="required">*</span></label>
                                <input type="text" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name (นามสกุล) <span class="required">*</span></label>
                                <input type="text" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label>Nick name (ชื่อเล่น) <span class="required">*</span></label>
                                <input type="text" name="nick_name" required>
                            </div>
                        </div>

                        <div class="form-row row-2">
                            <div class="form-group">
                                <label>Mobile Phone Number (เบอร์มือถือ) <span class="required">*</span></label>
                                <input type="tel" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-row row-2">
                            <div class="form-group">
                                <label>Items inside your box (ประเภทสินค้าที่บรรจุ) <span
                                        class="required">*</span></label>
                                <select name="product_type" required>
                                    <option value="" disabled selected>เลือกประเภทสินค้าที่บรรจุ</option>
                                    <option value="Engine Parts">ชิ้นส่วนเครื่องยนต์ (Engine Parts)</option>
                                    <option value="Body Parts">ชิ้นส่วนตัวถัง (Body Parts)</option>
                                    <option value="Suspension and Transmission">ชิ้นส่วนช่วงล่างและระบบส่งกำลัง
                                        (Suspension & Transmission)</option>
                                    <option value="Electrical Parts">ชิ้นส่วนระบบไฟฟ้า (Electrical Parts)</option>
                                    <option value="Car Accessories">อุปกรณ์ตกแต่งรถยนต์ (Car Accessories)</option>
                                    <option value="Other Auto Parts">ชิ้นส่วนรถยนต์อื่นๆ (Other Auto Parts)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Total Weight (น้ำหนักสินค้า) <span class="required">*</span></label>
                                <input type="text" name="weight" placeholder="น้ำหนักรวมสินค้า (กก.) ที่บรรจุภายในกล่อง"
                                    required>
                            </div>
                        </div>

                        <div class="form-row row-2">
                            <div class="form-group">
                                <label>Brand name (ชื่อแบรนด์) <span class="required">*</span></label>
                                <input type="text" name="brand" placeholder="Mazda, Toyota, Honda, Isuzu, BMW" required>
                            </div>
                            <div class="form-group">
                                <label>Packaging Type (ประเภทบรรจุภัณฑ์) <span class="required">*</span></label>
                                <select name="packaging_type" required>
                                    <option value="" disabled selected>เลือกประเภทบรรจุภัณฑ์</option>
                                    <option value="Paper Box">กล่องกระดาษ (Paper Box)</option>
                                    <option value="Wooden Packaging">บรรจุภัณฑ์ไม้ (Wooden Packaging)</option>
                                    <option value="Plastic Packaging">บรรจุภัณฑ์พลาสติก (Plastic Packaging)</option>
                                    <option value="Steel Packaging">บรรจุภัณฑ์เหล็ก (Steel Packaging)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row row-2">
                            <div class="form-group">
                                <label>Box Size (ขนาดกล่องที่ต้องการ) <span class="required">*</span></label>
                                <div style="display: flex; gap: 8px; align-items: center;">
                                    <input type="number" step="0.01" name="box_width" placeholder="กว้าง" required
                                        style="min-width: 0;">
                                    <span style="color: #666; font-size: 14px;">x</span>
                                    <input type="number" step="0.01" name="box_length" placeholder="ยาว" required
                                        style="min-width: 0;">
                                    <span style="color: #666; font-size: 14px;">x</span>
                                    <input type="number" step="0.01" name="box_height" placeholder="สูง" required
                                        style="min-width: 0;">
                                    <select name="box_unit" required style="min-width: 70px; padding: 10px 8px;">
                                        <option value="cm">ซม.</option>
                                        <option value="mm">มม.</option>
                                        <option value="inch">นิ้ว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Order quantity (จำนวนสั่งซื้อ) <span class="required">*</span></label>
                                <input type="number" name="quantity" min="1" required>
                            </div>
                        </div>

                        <div class="form-row row-1">
                            <div class="form-group file-group">
                                <label>Reference (แนบไฟล์ตัวอย่างอ้างอิงที่ชอบ)</label>
                                <div class="file-upload-wrapper">
                                    <input type="file" name="reference_file" id="reference_file" class="file-input"
                                        accept="image/*, .pdf">
                                    <span class="file-hint">Max. file size: 128 MB.</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row row-1">
                            <div class="form-group">
                                <label>Other Comments (อื่นที่ต้องการแจ้งทีมงาน) <span class="required">*</span></label>
                                <textarea name="comments" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="submit-btn">ส่งข้อมูลขอใบเสนอราคา</button>
                        </div>
                    </form>
                </div>
            </div>

            <style>
                .quotation-card {
                    background: #ffffff;
                    padding: 40px 50px;
                    border-radius: 4px;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
                    border: 1px solid #ebebeb;
                }

                .form-title {
                    text-align: center;
                    font-family: 'Sarabun', sans-serif;
                    font-weight: 500;
                    font-size: 28px;
                    margin-bottom: 35px;
                    color: #333;
                }

                .form-row {
                    display: grid;
                    gap: 20px;
                    margin-bottom: 20px;
                }

                .row-3 {
                    grid-template-columns: 1fr 1fr 1fr;
                }

                .row-2 {
                    grid-template-columns: 1fr 1fr;
                }

                .row-1 {
                    grid-template-columns: 1fr;
                }

                .form-group {
                    display: flex;
                    flex-direction: column;
                }

                .form-group label {
                    font-family: 'Sarabun', sans-serif;
                    font-size: 14px;
                    font-weight: 600;
                    color: #111;
                    margin-bottom: 8px;
                }

                .form-group .required {
                    color: #e82433;
                    /* KOCH red */
                    margin-left: 2px;
                }

                .form-group input[type="text"],
                .form-group input[type="tel"],
                .form-group input[type="email"],
                .form-group input[type="number"],
                .form-group select,
                .form-group textarea {
                    width: 100%;
                    padding: 10px 15px;
                    border: 1px solid #c2c2c2;
                    border-radius: 0px;
                    font-family: 'Sarabun', sans-serif;
                    font-size: 14px;
                    color: #333;
                    background-color: #fff;
                    transition: all 0.2s ease;
                    box-sizing: border-box;
                }

                .form-group input:focus,
                .form-group select:focus,
                .form-group textarea:focus {
                    border-color: #e82433;
                    outline: none;
                }

                .form-group input::placeholder,
                .form-group textarea::placeholder {
                    color: #999;
                }

                .file-upload-wrapper {
                    display: flex;
                    flex-direction: column;
                    gap: 5px;
                }

                .file-input {
                    font-family: 'Sarabun', sans-serif;
                    font-size: 13px;
                    color: #333;
                }

                .file-input::file-selector-button {
                    padding: 4px 10px;
                    border: 1px solid #aaa;
                    border-radius: 2px;
                    background-color: #efefef;
                    color: #000;
                    font-family: 'Sarabun', sans-serif;
                    font-size: 12px;
                    cursor: pointer;
                    margin-right: 10px;
                }

                .file-input::file-selector-button:hover {
                    background-color: #dfdfdf;
                }

                .file-hint {
                    font-size: 12px;
                    color: #666;
                    font-family: 'Sarabun', sans-serif;
                    margin-top: 2px;
                }

                .form-submit {
                    margin-top: 35px;
                    text-align: center;
                }

                .submit-btn {
                    background-color: #e82433;
                    color: #fff;
                    border: none;
                    padding: 12px 45px;
                    font-family: 'Sarabun', sans-serif;
                    font-weight: 500;
                    font-size: 16px;
                    border-radius: 2px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                .submit-btn:hover {
                    background-color: #c51d2a;
                }

                /* Responsive */
                @media (max-width: 991px) {
                    .quotation-card {
                        padding: 30px 20px;
                    }

                    .row-3 {
                        grid-template-columns: 1fr;
                        gap: 15px;
                    }
                }

                @media (max-width: 767px) {
                    .row-2 {
                        grid-template-columns: 1fr;
                        gap: 15px;
                    }

                    /* Ensure inputs with flex layout for Box Size wrap and don't overflow */
                    .form-group>div[style*="display: flex"] {
                        flex-wrap: wrap;
                    }

                    .form-group>div[style*="display: flex"]>input[type="number"] {
                        flex: 1;
                        /* allow inputs to grow */
                        min-width: 80px !important;
                    }
                }
            </style>
        </section>
    </main>
    <?php include '../component/footer.php'; ?>
</body>

</html>