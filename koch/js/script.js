// Koch Script JS
console.log('Koch script loaded');

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // ตัวแปรสำหรับจัดการ Slider
    // ----------------------------------------------------
    const slides = document.querySelectorAll('.slide-item');
    const sliderWrapper = document.getElementById('sliderWrapper');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let current = 0;
    let autoSlideInterval;
    const totalSlides = slides.length;

    // ----------------------------------------------------
    // ฟังก์ชันคำนวณขนาด (Responsive)
    // ----------------------------------------------------
    function getDimensions() {
        const w = window.innerWidth;
        if (w >= 1200) {
            return { centerW: 900, centerH: 600, sideW: 500, sideH: 450, overlapPct: 0.15 };
        } else if (w >= 992) {
            return { centerW: 700, centerH: 500, sideW: 400, sideH: 380, overlapPct: 0.12 };
        } else if (w >= 600) {
            return { centerW: 450, centerH: 350, sideW: 280, sideH: 260, overlapPct: 0.10 };
        } else {
            return { centerW: 280, centerH: 220, sideW: 160, sideH: 140, overlapPct: 0.08 };
        }
    }

    // ----------------------------------------------------
    // ฟังก์ชันอัปเดตการแสดงผล Slider
    // ----------------------------------------------------
    function updateSlider() {
        const dim = getDimensions();
        
        // ปรับความสูงของ Container หลักให้พอดีกับภาพตรงกลาง
        if(sliderWrapper) {
             sliderWrapper.style.height = (dim.centerH + 40) + "px"; // +40 เผื่อเงา
        }

        const offset = (dim.centerW / 2) + (dim.sideW / 2) - (dim.sideW * dim.overlapPct);

        slides.forEach((slide, index) => {
            // Reset click event
            slide.onclick = null;

            // คำนวณ Index สำหรับ Loop
            const prevIndex = (current - 1 + totalSlides) % totalSlides;
            const nextIndex = (current + 1) % totalSlides;

            if (index === current) {
                // ภาพตรงกลาง (Active)
                setStyle(slide, {
                    width: dim.centerW,
                    height: dim.centerH,
                    zIndex: 10,
                    opacity: 1,
                    left: '50%',
                    transform: 'translate(-50%, -50%) scale(1)',
                    pointerEvents: 'none' // ไม่ให้กดตัวเองซ้ำ
                });
            } else if (index === prevIndex) {
                // ภาพซ้าย
                setStyle(slide, {
                    width: dim.sideW,
                    height: dim.sideH,
                    zIndex: 5,
                    opacity: 0.8,
                    left: `calc(50% - ${offset}px)`,
                    transform: 'translate(-50%, -50%) scale(1)',
                    pointerEvents: 'auto'
                });
                slide.onclick = () => { moveSlide(-1); };
            } else if (index === nextIndex) {
                // ภาพขวา
                setStyle(slide, {
                    width: dim.sideW,
                    height: dim.sideH,
                    zIndex: 5,
                    opacity: 0.8,
                    left: `calc(50% + ${offset}px)`,
                    transform: 'translate(-50%, -50%) scale(1)',
                    pointerEvents: 'auto'
                });
                slide.onclick = () => { moveSlide(1); };
            } else {
                // ภาพที่ซ่อนอยู่
                setStyle(slide, {
                    width: dim.sideW,
                    height: dim.sideH,
                    zIndex: 0,
                    opacity: 0,
                    left: '50%',
                    transform: 'translate(-50%, -50%) scale(0.5)',
                    pointerEvents: 'none'
                });
            }
        });
    }

    // ฟังก์ชันช่วยกำหนด Style
    function setStyle(element, styles) {
        element.style.width = styles.width + "px";
        element.style.height = styles.height + "px";
        element.style.zIndex = styles.zIndex;
        element.style.opacity = styles.opacity;
        element.style.left = styles.left;
        element.style.top = "50%"; // Center Vertically
        element.style.transform = styles.transform;
        element.style.pointerEvents = styles.pointerEvents;
    }

    // ----------------------------------------------------
    // ฟังก์ชันเลื่อนภาพ
    // ----------------------------------------------------
    function moveSlide(direction) {
        current = (current + direction + totalSlides) % totalSlides;
        updateSlider();
        resetAutoSlide();
    }

    // ----------------------------------------------------
    // ระบบเลื่อนอัตโนมัติ (Auto Slide)
    // ----------------------------------------------------
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            moveSlide(1);
        }, 5000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }

    // ----------------------------------------------------
    // Event Listeners
    // ----------------------------------------------------
    if(prevBtn) prevBtn.addEventListener('click', () => moveSlide(-1));
    if(nextBtn) nextBtn.addEventListener('click', () => moveSlide(1));

    if(sliderWrapper) {
        sliderWrapper.addEventListener('mouseenter', stopAutoSlide);
        sliderWrapper.addEventListener('mouseleave', startAutoSlide);
    }
    
    // จัดการเมื่อเปลี่ยนขนาดหน้าจอ (Resize)
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateSlider, 100);
    });

    // เริ่มต้นทำงาน
    if(slides.length > 0) {
        updateSlider();
        startAutoSlide();
    }

    // ----------------------------------------------------
    // ระบบ Infinite Loop สำหรับ Logo Carousel
    // — Duplicate items เพื่อให้ loop ไม่มีช่องว่าง
    // ----------------------------------------------------
    const carouselTrack = document.querySelector('.carousel-track');
    if (carouselTrack) {
        const items = carouselTrack.querySelectorAll('.carousel-item');
        // Clone ทุก item แล้วเพิ่มต่อท้าย เพื่อให้ CSS translateX(-50%) ทำงานต่อเนื่อง
        items.forEach(item => {
            const clone = item.cloneNode(true);
            carouselTrack.appendChild(clone);
        });
    }

    // ----------------------------------------------------
    // GSAP & Lenis Animations for Quotation Section การ์ดสไลด์ logo ลูกค้า
    // ----------------------------------------------------
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        // Note: SplitText is a GSAP Club plugin, ensure it's loaded if used.
        
        const lenis = new Lenis();
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);

        if (document.querySelector('.image-motion')) {
            gsap.set('.image-motion', {
                transform: 'rotatex(90deg)',
            });

            gsap.to('.image-motion', {
                transform: 'rotatex(0deg)',
                scrollTrigger: {
                    trigger: '.section2',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true,
                    markers: false,
                },
            });
        }

        if (document.querySelector('.section3')) {
            gsap.fromTo('.title', {
                opacity: 0,
                y: 50,
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.section3',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });

            gsap.fromTo('.subtitle', {
                opacity: 0,
                y: 30,
            }, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: 0.3,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.section3',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });
        }

        if (document.querySelector('.text-content') && typeof SplitText !== 'undefined') {
            const text = new SplitText('.text', {
                types: 'lines',
                mask: 'lines',
            });

            gsap.fromTo(text.lines, {
                opacity: 0,
                y: 30,
            }, {
                opacity: 1,
                y: 0,
                stagger: 0.2,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.text-content',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });
        }

        if (document.querySelector('.features')) {
            gsap.fromTo('.feature', {
                opacity: 0,
                y: 50,
                scale: 0.9,
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                stagger: 0.2,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.features',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });
        }
    }
});
