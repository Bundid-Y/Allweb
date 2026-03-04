const fs = require('fs');
const path = require('path');

const translations = {
  th: {
    company: {
      title: "ข้อมูลบริษัท",
      subtitle: "ทำความรู้จักกับ KOCH Packaging",
      p1_strong: "Koch Packaging and Packing Services Co., Ltd.",
      p1: "เป็นบริษัทไทยที่ดำเนินธุรกิจด้าน การผลิตและให้บริการโซลูชันด้านบรรจุภัณฑ์ และซัพพลายเชนแบบครบวงจร ตั้งแต่การออกแบบ การจัดหาวัตถุดิบ การผลิต ไปจนถึงการบริหารคลังสินค้าและโลจิสติกส์อย่างมีประสิทธิภาพ",
      p2_1: "เริ่มต้นจากการให้บริการด้าน ผลิตและจำหน่ายผลิตภัณฑ์บรรจุภัณฑ์จากกระดาษกระดาษลอนลูกฟูกและกระดาษแข็งลอนลูกฟูก ซึ่งเป็นหัวใจของการปกป้องสินค้าในการขนส่งและจัดเก็บ จากนั้นได้พัฒนาให้บริการครอบคลุมทั้ง",
      p2_strong: "Packaging Supply Management System (VMI), Warehouse & Operation Management, Transportation (In-house Fleet & System)",
      p2_2: "และบริการด้านโลจิสติกส์อื่นๆ ที่เหมาะกับอุตสาหกรรมขนาดใหญ่ โดยเฉพาะอุตสาหกรรมยานยนต์และอิเล็กทรอนิกส์",
      p3_1: "ด้วยแนวคิดการพัฒนาอย่างต่อเนื่อง บริษัทมุ่งเน้นการปรับใช้",
      p3_strong: "เทคโนโลยีอัตโนมัติและการบริหารจัดการข้อมูล",
      p3_2: "เพื่อให้บริการลูกค้าได้อย่างแม่นยำ รวดเร็ว และมีมาตรฐานสูง พร้อมรองรับการเติบโตของธุรกิจทั้งในและต่างประเทศในอนาคต"
    },
    expertise: {
      title: "ความเชี่ยวชาญของเรา",
      subtitle: "ความเชี่ยวชาญเฉพาะด้าน (Our Expertise)",
      desc_strong: `"ยกระดับการจัดการซัพพลายเชนสู่อนาคต ด้วยความเชี่ยวชาญระดับมืออาชีพ"`,
      desc_p: `KOCH มุ่งมั่นสร้างสรรค์ระบบ Supply Chain ที่ "ฉลาด รวดเร็ว และยั่งยืน" สำหรับอุตสาหกรรมยานยนต์ในไทย เราพร้อมเป็นพันธมิตรเชิงกลยุทธ์ที่ช่วยคุณบริหารจัดการโลจิสติกส์และระบบ VMI อย่างเต็มรูปแบบ ด้วยโซลูชันด้านวิศวกรรมและเทคโนโลยีดิจิทัลที่ล้ำสมัยที่สุด`,
      item1_title: "Packaging Development",
      item1_desc: "เชี่ยวชาญในการออกแบบและพัฒนาบรรจุภัณฑ์สำหรับอุตสาหกรรมยานยนต์ ครอบคลุมวัสดุหลากหลายประเภท เช่น กระดาษ เหล็ก ไม้ และพลาสติก",
      item2_title: "Smart VMI System",
      item2_desc: "พัฒนาระบบ VMI เพื่อช่วยลูกค้าบริหารสต็อกบรรจุภัณฑ์ได้อย่างมีประสิทธิภาพ เชื่อมโยงข้อมูลการผลิต การสั่งซื้อ และการจัดส่งแบบอัตโนมัติ ช่วยลดต้นทุน ลดปริมาณสต็อกคงค้าง",
      item3_title: "Professional Warehouse",
      item3_desc: "ให้บริการบริหารคลังสินค้าในพื้นที่บ้านบึงและบ่อวิน รองรับทั้งงานบรรจุภัณฑ์และงานคลังสินค้าอุตสาหกรรม สามารถจัดเก็บ ควบคุม และกระจายสินค้าได้อย่างเป็นระบบ",
      item4_title: "Real-time Logistics",
      item4_desc: "ให้บริการขนส่งด้วยรถของบริษัทเอง พร้อมระบบบริหารจัดการการขนส่ง (TMS) ที่พัฒนาภายใน สามารถติดตามสถานะการขนส่งแบบ Real-time"
    },
    vision: {
      title: "วิสัยทัศน์และพันธกิจ",
      subtitle: "วิสัยทัศน์ (Vision)",
      p1_1: "โค้ช แพคเกจจิ้ง แอนด์ แพคกิ้ง เซอร์วิสเซส จำกัด",
      p1_2: "มุ่งมั่นก้าวสู่การเป็นผู้นำด้าน Supply Chain Services สำหรับอุตสาหกรรมยานยนต์ ด้วยการพัฒนาโซลูชันที่",
      p1_strong: "ชาญฉลาด (Smart) รวดเร็ว (Fast) และยั่งยืน (Sustainable)",
      p1_3: "เพื่อสนับสนุนการเติบโตของลูกค้าในทุกมิติของซัพพลายเชน",
      p2_1: "บริษัทมีเป้าหมายในการเชื่อมโยงงานด้าน",
      p2_strong: "การพัฒนาบรรจุภัณฑ์ ระบบบริหารจัดการบรรจุภัณฑ์ (VMI) การบริหารคลังสินค้า และการขนส่ง",
      p2_2: "เข้าด้วยกันอย่างเป็นระบบ เพื่อเพิ่มประสิทธิภาพ ลดต้นทุน และลดความซ้ำซ้อนในกระบวนการดำเนินงานของลูกค้า",
      p3_1: "ให้ความสำคัญกับการพัฒนา",
      p3_strong1: "ระบบวิศวกรรมภายใน (In-house Engineering)",
      p3_2: "และ",
      p3_strong2: "ระบบดิจิทัล",
      p3_3: "เพื่อยกระดับความแม่นยำ ความโปร่งใส และความสามารถในการควบคุมกระบวนการทำงานแบบเรียลไทม์ พร้อมทั้งมุ่งเน้นการเติบโตอย่างยั่งยืน ควบคู่ไปกับความรับผิดชอบต่อสิ่งแวดล้อมและสังคม"
    }
  },
  en: {
    company: {
      title: "Company Information",
      subtitle: "Get to Know KOCH Packaging",
      p1_strong: "Koch Packaging and Packing Services Co., Ltd.",
      p1: "is a Thai company operating in manufacturing and providing comprehensive packaging and supply chain solutions, from design, raw material sourcing, production, to efficient warehouse and logistics management.",
      p2_1: "Starting from manufacturing and selling corrugated and solid fiberboard packaging products, the heart of protecting goods in transit and storage, it has evolved to cover",
      p2_strong: "Packaging Supply Management System (VMI), Warehouse & Operation Management, Transportation (In-house Fleet & System)",
      p2_2: "and other logistics services suitable for large industries, especially automotive and electronics.",
      p3_1: "With a concept of continuous development, the company focuses on applying",
      p3_strong: "automated technology and data management",
      p3_2: "to serve customers accurately, quickly, and with high standards, ready to support domestic and international business growth in the future."
    },
    expertise: {
      title: "Our Expertise",
      subtitle: "Specialized Expertise",
      desc_strong: `"Elevating supply chain management to the future with professional expertise."`,
      desc_p: `KOCH is committed to creating a "Smart, Fast, and Sustainable" Supply Chain system for the automotive industry in Thailand. We are ready to be a strategic partner to help you fully manage logistics and VMI systems with the most advanced engineering and digital technology solutions.`,
      item1_title: "Packaging Development",
      item1_desc: "Expertise in designing and developing packaging for the automotive industry, covering a wide range of materials such as paper, steel, wood, and plastic.",
      item2_title: "Smart VMI System",
      item2_desc: "Developing VMI systems to help customers efficiently manage packaging stock. Linking production, purchasing, and delivery data automatically to reduce costs and excess inventory.",
      item3_title: "Professional Warehouse",
      item3_desc: "Providing warehouse management services in the Ban Bueng and Bo Win areas, supporting both packaging and industrial warehousing. Able to store, control, and distribute goods systematically.",
      item4_title: "Real-time Logistics",
      item4_desc: "Providing transportation services with the company's own fleet, along with an in-house developed Transportation Management System (TMS) to track transportation status in real-time."
    },
    vision: {
      title: "Vision and Mission",
      subtitle: "Vision",
      p1_1: "Koch Packaging and Packing Services Co., Ltd.",
      p1_2: "is committed to becoming a leader in Supply Chain Services for the automotive industry by developing solutions that are",
      p1_strong: "Smart, Fast, and Sustainable",
      p1_3: "to support customer growth in every dimension of the supply chain.",
      p2_1: "The company aims to systematically link",
      p2_strong: "Packaging Development, Packaging Supply Management System (VMI), Warehouse Management, and Transportation",
      p2_2: "together to increase efficiency, reduce costs, and reduce redundancy in customers' operational processes.",
      p3_1: "gives importance to developing",
      p3_strong1: "In-house Engineering",
      p3_2: "and",
      p3_strong2: "Digital Systems",
      p3_3: "to elevate accuracy, transparency, and the ability to control workflows in real-time, while focusing on sustainable growth alongside environmental and social responsibility."
    }
  },
  zh: {
    company: {
      title: "公司信息",
      subtitle: "了解KOCH包装",
      p1_strong: "Koch Packaging and Packing Services Co., Ltd.",
      p1: "是一家泰国公司，从事制造并提供全面的包装和供应链解决方案，从设计、原材料采购、生产，到高效的仓库和物流管理。",
      p2_1: "从生产和销售瓦楞纸板及硬纸板包装产品（运输和储存中保护货物的核心）起步，现已发展到涵盖",
      p2_strong: "包装供应管理系统（VMI）、仓库和运营管理、运输（内部车队及系统）",
      p2_2: "以及其他适合大型行业的物流服务，特别是汽车和电子行业。",
      p3_1: "秉承不断发展的理念，公司致力于应用",
      p3_strong: "自动化技术和数据管理",
      p3_2: "为客户提供精准、快捷的高标准服务，准备好支持未来国内外业务的增长。"
    },
    expertise: {
      title: "我们的专业知识",
      subtitle: "专业特长 (Our Expertise)",
      desc_strong: `"以专业水平将供应链管理提升至未来。"`,
      desc_p: `KOCH 致力于为泰国的汽车行业创建“智能、快速和可持续”的供应链系统。我们准备成为您的战略合作伙伴，通过最先进的工程和数字技术解决方案，帮助您全面管理物流和VMI系统。`,
      item1_title: "包装开发",
      item1_desc: "在为汽车行业设计和开发包装方面拥有丰富的专业知识，涵盖纸张、钢铁、木材和塑料等多种材料。",
      item2_title: "智能 VMI 系统",
      item2_desc: "开发 VMI 系统以帮助客户高效管理包装库存。自动链接生产、采购和交付数据，有助于降低成本并减少多余库存。",
      item3_title: "专业仓库",
      item3_desc: "在 Ban Bueng 和 Bo Win 地区提供仓库管理服务，支持包装和工业仓储。能够系统地存储、控制和分配货物。",
      item4_title: "实时物流",
      item4_desc: "使用公司自有的车队提供运输服务，并配有内部开发的运输管理系统 (TMS)，可实时跟踪运输状态。"
    },
    vision: {
      title: "愿景和使命",
      subtitle: "愿景 (Vision)",
      p1_1: "Koch Packaging and Packing Services Co., Ltd.",
      p1_2: "致力于通过开发以下解决方案成为汽车行业供应链服务的领导者：",
      p1_strong: "智能、快速、可持续",
      p1_3: "在供应链的各个维度支持客户增长。",
      p2_1: "公司的目标是将",
      p2_strong: "包装开发、包装供应管理系统 (VMI)、仓库管理和运输",
      p2_2: "系统地联系在一起，以提高效率、降低成本并减少客户运营流程中的冗余。",
      p3_1: "重视开发",
      p3_strong1: "内部工程",
      p3_2: "和",
      p3_strong2: "数字系统",
      p3_3: "以提高准确性、透明度和实时控制工作流程的能力，同时专注于伴随环境和社会责任的可持续增长。"
    }
  },
  jp: {
    company: {
      title: "会社概要",
      subtitle: "KOCHパッケージングについて",
      p1_strong: "Koch Packaging and Packing Services Co., Ltd.",
      p1: "はタイの企業であり、設計、原材料調達、生産から効率的な倉庫および物流管理まで、包括的なパッケージングおよびサプライチェーンソリューションを製造および提供しています。",
      p2_1: "輸送・保管時の製品保護の要となる段ボール・板紙包装製品の製造・販売から始まり、現在では",
      p2_strong: "包装供給管理システム(VMI)、倉庫・運用管理、輸送(自社フリートおよびシステム)",
      p2_2: "そして特に自動車や電子機器産業などの大規模産業に適したその他の物流サービスまで幅広く展開しています。",
      p3_1: "継続的な発展のコンセプトのもと、同社は",
      p3_strong: "自動化技術とデータ管理",
      p3_2: "を適用し、正確・迅速かつ高水準で顧客にサービスを提供することに注力しており、将来の国内外の事業成長を支援する準備が整っています。"
    },
    expertise: {
      title: "専門知識",
      subtitle: "専門知識 (Our Expertise)",
      desc_strong: `"プロフェッショナルの専門知識でサプライチェーン管理を未来へ引き上げます。"`,
      desc_p: `KOCHは、タイの自動車産業向けに「スマートで俊敏、かつ持続可能」なサプライチェーンシステムの構築に取り組んでいます。最先端のエンジニアリングおよびデジタル技術ソリューションにより、物流とVMIシステムを完全に管理する戦略的パートナーとなる準備ができています。`,
      item1_title: "パッケージング開発",
      item1_desc: "自動車産業向けのパッケージングの設計および開発における専門知識。紙、鉄、木材、プラスチックなど幅広い素材をカバーしています。",
      item2_title: "スマートVMIシステム",
      item2_desc: "お客様がパッケージング在庫を効率的に管理できるVMIシステムを開発。生産、購買、配送データを自動的にリンクし、コストと過剰在庫の削減を支援します。",
      item3_title: "プロフェッショナル倉庫",
      item3_desc: "バンブエンおよびボウィン地区で倉庫管理サービスを提供し、パッケージングおよび産業用倉庫の両方をサポートします。商品を体系的に保管、管理、流通することが可能です。",
      item4_title: "リアルタイム物流",
      item4_desc: "自社開発の輸送管理システム（TMS）とともに、当社の自社車両による輸送サービスを提供し、輸送状況をリアルタイムで追跡します。"
    },
    vision: {
      title: "ビジョンとミッション",
      subtitle: "ビジョン (Vision)",
      p1_1: "Koch Packaging and Packing Services Co., Ltd.",
      p1_2: "は、次のようなソリューションを開発することにより、自動車産業におけるサプライチェーンサービスのリーダーになることをお約束します：",
      p1_strong: "スマート、迅速、持続可能",
      p1_3: "サプライチェーンのあらゆる側面でお客様の成長をサポートします。",
      p2_1: "同社は、",
      p2_strong: "パッケージング開発、包装供給管理システム(VMI)、倉庫管理、および輸送",
      p2_2: "を体系的に結び付け、効率を高め、コストを削減し、お客様の運用プロセスにおける冗長性を削減することを目指しています。",
      p3_1: "は、",
      p3_strong1: "社内エンジニアリング",
      p3_2: "と",
      p3_strong2: "デジタルシステム",
      p3_3: "の開発を重視し、正確性、透明性、およびリアルタイムでワークフローを制御する能力を高めるとともに、環境および社会的責任と並行して持続可能な成長に焦点を当てています。"
    }
  }
};

const dirs = ['tnb', 'koch'];
for (const dir of dirs) {
  for (const lang of Object.keys(translations)) {
    const filePath = path.join(dir, 'lang', lang + '.json');
    if (fs.existsSync(filePath)) {
      const data = JSON.parse(fs.readFileSync(filePath, 'utf8'));
      data.company = translations[lang].company;
      data.expertise = translations[lang].expertise;
      data.vision = translations[lang].vision;
      fs.writeFileSync(filePath, JSON.stringify(data, null, 2), 'utf8');
      console.log('Updated ' + filePath);
    }
  }
}
