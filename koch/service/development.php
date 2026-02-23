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

    <style>
        /* Hero Section Fixes */
        .content-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Scroll Interaction Section */
        .development-scroll-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            gap: 50px;
        }
        
        @media (max-width: 767px) {
            .development-scroll-container {
                display: flex;
                flex-direction: column-reverse;
                gap: 20px;
            }
        }

        .scroll-text-container section {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 0;
            opacity: 0.3;
            transition: opacity 0.5s ease;
        }

        .scroll-text-container section.active-text {
            opacity: 1;
        }

        /* Text Styling */
        .scroll-text-container p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }
        
        .scroll-text-container h3 {
            color: #E82433; 
            font-size: 28px; 
            margin-bottom: 15px;
            font-weight: bold;
        }

        /* Sticky Image Container */
        .scroll-image-container {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 767px) {
            .scroll-image-container {
                position: relative;
                height: 50vh;
                top: auto;
                margin-top: 50px;
            }
            .scroll-text-container section {
                min-height: auto;
                padding: 40px 0;
            }
        }

        .scroll-image-container img {
            width: 100%;
            max-width: 500px;
            display: block;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        /* Fade-in animation class */
        .fade-img {
            opacity: 0;
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <?php include '../component/menubar.php'; ?>
    
    <!-- Main Content Hero (Fixed Missing HTML Tags) -->
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
                    บริการออกแบบและพัฒนาบรรจุภัณฑ์ที่เน้นนวัตกรรมและความคิดสร้างสรรค์ เพื่อตอบโจทย์ความต้องการเฉพาะด้านของอุตสาหกรรมชิ้นส่วนยานยนต์
                </p>
                <ul class="details-desc" style="margin-top: 20px; padding-left: 25px; font-size: 16px; line-height: 1.8; color: #444; list-style-type: disc;">
                    <li>ออกแบบโครงสร้างบรรจุภัณฑ์ (Structural Design)</li>
                    <li>ทดสอบความแข็งแรงและประสิทธิภาพ (Performance Testing)</li>
                    <li>เลือกใช้วัสดุที่เหมาะสมและเป็นมิตรกับสิ่งแวดล้อม</li>
                    <li>ปรับแต่งบรรจุภัณฑ์ให้สอดคล้องกับระบบขนส่ง (Customization)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scrolling Feature Section -->
    <div class="development-scroll-container">
        <!-- Texts -->
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
        <div class="scroll-image-container">
            <!-- Padded container ensures the red background is clearly visible behind the solid image -->
            <div class="image-wrapper" style="position: relative; width: 100%; max-width: 500px; padding: 30px; box-sizing: border-box;">
                <!-- Red angled background spanning the full wrapper size -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #E82433; clip-path: polygon(0 6%, 100% 0, 100% 94%, 0 100%); z-index: 1;"></div>
                
                <!-- Main Sticky Image -->
                <img id="sticky-dev-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg" alt="Development Service Image" style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>

    <!-- Scroll Logic -->
    <script>
    $(document).ready(function() {
        // Define images for each section matching the original code
        const images = {
            'dev-section1': 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg',
            'dev-section2': 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/2fgvaqx-fxs-oskar-krawczyk.jpg',
            'dev-section3': 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/Great_Wave_off_Kanagawa2_cr.jpg'
        };

        const $sections = $('.scroll-text-container section');
        const $stickyImg = $('#sticky-dev-img');
        let currentSection = '';

        function onScroll() {
            var scrollPosition = $(window).scrollTop() + $(window).height() / 2;

            $sections.each(function() {
                var $this = $(this);
                var sectionTop = $this.offset().top;
                var sectionBottom = sectionTop + $this.outerHeight();

                // Check if scroll position is within this section
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    var id = $this.attr('id');
                    
                    // Add active class to text for highlighting effect
                    $sections.removeClass('active-text');
                    $this.addClass('active-text');

                    // If changed, animate the image src
                    if (currentSection !== id) {
                        currentSection = id;
                        
                        // Fade out
                        $stickyImg.addClass('fade-img');
                        
                        // After fade out, change src and fade in
                        setTimeout(function() {
                            $stickyImg.attr('src', images[id]);
                            $stickyImg.removeClass('fade-img');
                        }, 400); // 400ms matching css transition
                    }
                }
            });
        }

        $(window).on('scroll resize', onScroll);

        // Trigger scroll once on load to establish initial state
        setTimeout(onScroll, 100);
    });
    </script>
</body>
</html>