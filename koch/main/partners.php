<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Partners</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    <style>
        /* --- Basic Grid System --- */
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            box-sizing: border-box;
        }
        @media (min-width: 576px) { .container { max-width: 540px; } }
        @media (min-width: 768px) { .container { max-width: 720px; } }
        @media (min-width: 992px) { .container { max-width: 960px; } }
        @media (min-width: 1200px) { .container { max-width: 1140px; } }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            align-items: center; /* Center vertically */
        }

        .col-md-6 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            box-sizing: border-box;
        }
        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /* --- Cycle Section Styles --- */
        .cycle_section_3 {
            width: 100%;
            float: left;
            padding-bottom: 90px;
            padding-top: 130px; /* Increased to prevent overlap with menubar */
            overflow: hidden;
            position: relative;
        }

        /* Text Styles */
        .cycles_text {
            width: 100%;
            float: left;
            font-size: 40px;
            color: #1c1c1c;
            font-weight: bold;
            text-align: left;
            padding-top: 0;
            margin-top: 0; /* Clear default margin */
            position: relative;
            margin-bottom: 10px;
        }

        .cycles_text:after {
            content: '';
            position: absolute;
            width: 100px;
            height: 3px;
            background-color: #d1d1d1; /* Light grey line */
            left: 240px; /* Position next to text */
            top: 50%;
            display: none; /* Hide for now as per image logic, or adjust */
        }

        .lorem_text {
            width: 100%;
            float: left;
            font-size: 16px;
            color: #1c1c1c;
            margin: 0px; 
            padding-top: 20px;   
            text-align: left;
            line-height: 1.6;
        }

        /* Tech List */
        .tech_list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
            text-align: left;
        }
        .tech_list li {
            margin-bottom: 20px;
            font-size: 16px;
            color: #1c1c1c;
            line-height: 1.6;
        }
        .tech_list li strong {
            color: #000;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            font-size: 18px;
        }

        /* Right Side - Red Shape & Logos */
        .box_main_3 {
            width: 100%;
            position: relative;
            z-index: 1;
            /* Allow extending outside container */
        }
        
        /* Red Background Shape - Absolute to screen right */
        .red-shape-bg {
            position: absolute;
            top: -50px;
            right: calc((100vw - 100%) / -2); /* Extend to right edge */
            width: 140%; /* Make it wide enough */
            height: 120%;
            background-color: #ff0000;
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
            z-index: -1;
            display: none; /* Use distinct styling below instead */
        }
        
        /* Specific styling for the Red Shape Container */
        .right-graphic-container {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
        
        .red-block {
            background-color: #ff0000;
            width: 140%; /* Significantly wider to extend left */
            height: 600px;
            position: relative;
            right: 0; /* Anchor to right edge */
            /* Mirrored style from About Us section */
            clip-path: polygon(100% 0, 25% 8%, 25% 80%, 100% 100%);
            display: flex;
            align-items: center;
            justify-content: center; /* Center logo loop */
            padding-left: 20%; /* Add padding to push logos to visually center relative to visible shape */
        }

        /* Responsive */
        @media (max-width: 992px) {
            .red-block {
                width: 100%;
                right: 0;
                clip-path: none;
                height: auto;
                padding: 40px 0;
            }
            .cycles_text {
                font-size: 32px;
            }
        }
        
        @media (max-width: 767px) {
            .cycles_text { text-align: center; }
            .lorem_text { text-align: left; }
            .tech_list { text-align: left; }
            .red-block {
                width: 100%;
                right: 0;
                clip-path: none;
                margin-top: 40px;
            }
            .cycle_section_3 {
                padding-top: 100px;
            }
        }
        
        /* Spacing for Loop Items - Scoped to track to avoid conflict with Navbar Login */
        .login-track .login-item {
            margin-bottom: 40px; /* More space */
        }
        .login-track .login-item img {
            padding: 15px; 
            background: white; 
            object-fit: contain; 
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php include '../component/menubar.php'; ?>
    
    <div class="cycle_section_3 layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="cycles_text">พันธมิตร</h1>

                
                    <ul class="tech_list">
                        <li>ได้รับความไว้วางใจจากพันธมิตรและลูกค้าในอุตสาหกรรมยานยนต์และอุตสาหกรรมที่เกี่ยวข้องอย่างต่อเนื่อง ทั้งผู้ผลิตรถยนต์ (OEM) และซัพพลายเออร์ระดับ Tier 1 ทั่วประเทศ

เราทำหน้าที่มากกว่าผู้ให้บริการบรรจุภัณฑ์ โดยเป็นพันธมิตรที่ร่วมพัฒนาโซลูชันด้าน Packaging, VMI, Warehouse และ Logistics เพื่อสนับสนุนการดำเนินงานของลูกค้าให้มีประสิทธิภาพสูงสุด

ความร่วมมือครอบคลุมตั้งแต่การออกแบบบรรจุภัณฑ์ที่เหมาะสมกับชิ้นงาน ไปจนถึงการบริหารจัดการคลังสินค้าและการขนส่งแบบครบวงจรทุกกระบวนการถูกออกแบบให้สอดคล้องกับการผลิตที่ต้องการความแม่นยำ ความรวดเร็ว และการส่งมอบตรงเวลา

เราพร้อมเติบโตไปพร้อมพันธมิตร และร่วมสร้างความสำเร็จอย่างยั่งยืนในระยะยาว</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="right-graphic-container">
                        <div class="red-block">
                            <!-- Logo Loop Inside Red Block -->
                            <section class="loop-images-quotation vertical" style="background-color: transparent !important; --bg: transparent; height: 100%; min-height: 500px; padding: 20px 0; width: 100%;">
                                <div class="login-track vertical" style="--time: 40s; --total: 24; --top: -300rem;">
                                    <div class="login-item" style="--i: 1;"><img src="../img/customer_logo/Mazda.png" alt="Mazda"></div>
                                    <div class="login-item" style="--i: 2;"><img src="../img/customer_logo/Suzuki.png" alt="Suzuki"></div>
                                    <div class="login-item" style="--i: 3;"><img src="../img/customer_logo/Changan.png" alt="Changan"></div>
                                    <div class="login-item" style="--i: 4;"><img src="../img/customer_logo/Kn.webp" alt="Kn"></div>
                                    <div class="login-item" style="--i: 5;"><img src="../img/customer_logo/Honda.png" alt="Honda"></div>
                                    <div class="login-item" style="--i: 6;"><img src="../img/customer_logo/Alpla.png" alt="Alpla"></div>
                                    <div class="login-item" style="--i: 7;"><img src="../img/customer_logo/BROSE_Excellence.png" alt="Brose"></div>
                                    <div class="login-item" style="--i: 8;"><img src="../img/customer_logo/nhk.webp" alt="NHK"></div>
                                    <div class="login-item" style="--i: 9;"><img src="../img/customer_logo/siamgoshi.jpg" alt="Siam Goshi"></div>
                                    <div class="login-item" style="--i: 10;"><img src="../img/customer_logo/dn.png" alt="DN"></div>
                                    <div class="login-item" style="--i: 11;"><img src="../img/customer_logo/lat.png" alt="LAT"></div>
                                    <div class="login-item" style="--i: 12;"><img src="../img/customer_logo/mitsuboshi.png" alt="Mitsuboshi"></div>
                                    <!-- Duplicates -->
                                    <div class="login-item" style="--i: 13;"><img src="../img/customer_logo/Mazda.png" alt="Mazda"></div>
                                    <div class="login-item" style="--i: 14;"><img src="../img/customer_logo/Suzuki.png" alt="Suzuki"></div>
                                    <div class="login-item" style="--i: 15;"><img src="../img/customer_logo/Changan.png" alt="Changan"></div>
                                    <div class="login-item" style="--i: 16;"><img src="../img/customer_logo/Kn.webp" alt="Kn"></div>
                                    <div class="login-item" style="--i: 17;"><img src="../img/customer_logo/Honda.png" alt="Honda"></div>
                                    <div class="login-item" style="--i: 18;"><img src="../img/customer_logo/Alpla.png" alt="Alpla"></div>
                                    <div class="login-item" style="--i: 19;"><img src="../img/customer_logo/BROSE_Excellence.png" alt="Brose"></div>
                                    <div class="login-item" style="--i: 20;"><img src="../img/customer_logo/nhk.webp" alt="NHK"></div>
                                    <div class="login-item" style="--i: 21;"><img src="../img/customer_logo/siamgoshi.jpg" alt="Siam Goshi"></div>
                                    <div class="login-item" style="--i: 22;"><img src="../img/customer_logo/dn.png" alt="DN"></div>
                                    <div class="login-item" style="--i: 23;"><img src="../img/customer_logo/lat.png" alt="LAT"></div>
                                    <div class="login-item" style="--i: 24;"><img src="../img/customer_logo/mitsuboshi.png" alt="Mitsuboshi"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Section: Thanks Partners -->
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-size: 36px; font-weight: bold; margin-bottom: 40px; color: #1c1c1c;">พันธมิตรทั้งหมดของเรา</h2>
            </div>
        </div>
        
        <style>
            .partner-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr); /* Mobile: 2 cols */
                gap: 30px;
                justify-items: center;
                align-items: center;
            }
            .partner-logo {
                width: 100%;
                max-width: 180px;
                height: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s ease;
            }
            .partner-logo img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain;
                /* No filter - full color always */
            }
            .partner-logo:hover {
                transform: scale(1.05);
            }
            
            @media (min-width: 768px) {
                .partner-grid {
                    grid-template-columns: repeat(3, 1fr); /* Tablet: 3 cols */
                }
            }
            @media (min-width: 992px) {
                .partner-grid {
                    grid-template-columns: repeat(4, 1fr); /* Desktop: 4 cols */
                    gap: 50px;
                }
            }
        </style>
        
        <div class="partner-grid">
            <div class="partner-logo"><img src="../img/customer_logo/Mazda.png" alt="Mazda"></div>
            <div class="partner-logo"><img src="../img/customer_logo/Suzuki.png" alt="Suzuki"></div>
            <div class="partner-logo"><img src="../img/customer_logo/Changan.png" alt="Changan"></div>
            <div class="partner-logo"><img src="../img/customer_logo/Kn.webp" alt="Kn"></div>
            <div class="partner-logo"><img src="../img/customer_logo/Honda.png" alt="Honda"></div>
            <div class="partner-logo"><img src="../img/customer_logo/Alpla.png" alt="Alpla"></div>
            <div class="partner-logo"><img src="../img/customer_logo/BROSE_Excellence.png" alt="Brose"></div>
            <div class="partner-logo"><img src="../img/customer_logo/nhk.webp" alt="NHK"></div>
            <div class="partner-logo"><img src="../img/customer_logo/siamgoshi.jpg" alt="Siam Goshi"></div>
            <div class="partner-logo"><img src="../img/customer_logo/dn.png" alt="DN"></div>
            <div class="partner-logo"><img src="../img/customer_logo/lat.png" alt="LAT"></div>
            <div class="partner-logo"><img src="../img/customer_logo/mitsuboshi.png" alt="Mitsuboshi"></div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
