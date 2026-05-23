<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาช่างไฟฟ้า วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาช่างไฟฟ้า</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="./css/section.css">
    <link rel="stylesheet" href="./css/kru_section.css">
    <!--<link rel="stylesheet" href="./css/section_olde.css"> -->
    <style>
        .section-hero {
            position: relative;
            overflow: hidden;
            padding-top: 150px;
            min-height: 420px;
            display: flex;
            align-items: flex-end;
            background:
                linear-gradient(130deg, rgba(78, 11, 13, 0.68), rgba(122, 19, 21, 0.48)),
                radial-gradient(circle at right top, rgba(242, 181, 68, 0.20), transparent 32%),
                url('./img/section/ep.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาช่างไฟฟ้า</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Department of Electrical Power</span>
                        <div class="section-actions section-actions--hero">
                            <a href="kru_electrical.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <a href="https://www.facebook.com/profile.php?id=100070705373071&locale=th_TH" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะด้านงานไฟฟ้า การติดตั้งและซ่อมบำรุงระบบไฟฟ้ากำลังและไฟฟ้าควบคุม การอ่านแบบวงจรและใช้เครื่องมือวัดทางไฟฟ้าอย่างถูกต้องและปลอดภัย สู่สายอาชีพและการศึกษาระดับสูงในสายงานไฟฟ้าและอุตสาหกรรมยุคใหม่”
                    </p>
                    <div class="section-hero__meta">
                        <div class="section-stat">
                            <strong>2 ระดับการศึกษา</strong>
                            <span>ระดับ ปวช. และ ปวส.</span>
                        </div>
                        <div class="section-stat">
                            <strong>Hands-on</strong>
                            <span>เรียนผ่านการปฏิบัติจริง</span>
                        </div>
                        <div class="section-stat">
                            <strong>10,000+</strong>
                            <span>รายได้เริ่มต้นโดยประมาณ</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-content">
            <div class="section-shell">
                <div class="section-panel">
                    <div class="section-panel__head">
                        <div>
                            <span class="section-eyebrow">หลักสูตร</span>
                            <h2>เลือกดูรายละเอียดหลักสูตร</h2>
                        </div>
                        <div class="section-switcher" role="tablist" aria-label="เลือกระดับการศึกษา">
                            <button class="section-switcher__btn is-active" type="button" data-target="vocational" aria-selected="true">
                                ปวช.
                            </button>
                            <button class="section-switcher__btn" type="button" data-target="higher-vocational" aria-selected="false">
                                ปวส.
                            </button>
                        </div>
                    </div>

                    <article class="section-card is-active" id="vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวชไฟฟ้า.png" alt="แผนกช่างไฟฟ้า ระดับ ปวช.">
                            <img src="./img/section/ปวชไฟฟ้า.png" alt="แผนกช่างไฟฟ้า ระดับ ปวช.">
                            <img src="./img/section/ปวชไฟฟ้า.png" alt="แผนกช่างไฟฟ้า ระดับ ปวช.">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาช่างไฟฟ้า (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานงานไฟฟ้า การติดตั้งและซ่อมบำรุง การวัดตรวจสอบ และการใช้เครื่องมืออย่างปลอดภัย เพื่อเตรียมพร้อมสู่การทำงานจริงในงานไฟฟ้า
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานไฟฟ้าและอิเล็กทรอนิกส์</li>
                                        <li>ความปลอดภัยในการทำงานไฟฟ้า</li>
                                        <li>การอ่านแบบและเขียนแบบไฟฟ้า</li>
                                        <li>งานติดตั้งระบบไฟฟ้าภายในอาคาร</li>
                                        <li>การใช้เครื่องมือและอุปกรณ์ไฟฟ้า</li>
                                        <li>การวัดและทดสอบวงจรไฟฟ้า</li>
                                        <li>งานควบคุมมอเตอร์ไฟฟ้าเบื้องต้น</li>
                                        <li>ระบบไฟฟ้ากำลังและแสงสว่าง</li>
                                        <li>การซ่อมบำรุงระบบไฟฟ้า</li>
                                        <li>การฝึกปฏิบัติและโครงงานไฟฟ้า</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4 style="font-size: 18px;"> แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างไฟฟ้าอาคาร</li>
                                        <li>ช่างติดตั้งระบบไฟฟ้า</li>
                                        <li>ช่างซ่อมบำรุงระบบไฟฟ้า (Maintenance)</li>
                                        <li>ช่างควบคุมเครื่องจักรไฟฟ้า</li>
                                        <li>ช่างติดตั้งระบบแสงสว่าง</li>
                                        <li>ช่างไฟฟ้าในโรงงานอุตสาหกรรม</li>
                                        <li>เจ้าหน้าที่ตรวจสอบระบบไฟฟ้า</li>
                                        <li>ผู้ช่วยช่างไฟฟ้า / ช่างฝึกหัด</li>
                                        <li>ผู้ประกอบการรับงานติดตั้งไฟฟ้า</li>
                                        <li>ช่างติดตั้งระบบโซลาร์เซลล์เบื้องต้น</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 10,300 – 12,500 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 12,000 – 15,000 บาท/เดือน</li>
                                        <li>🔧 งานช่างไฟฟ้า (มีทักษะเฉพาะ): ประมาณ 12,000 – 16,000 บาท/เดือน</li>
                                        <li>⚡ งานช่างฝีมือ/โรงงาน (มีประสบการณ์): อาจสูงถึง 15,000 – 22,000 บาท/เดือน</li>
                                    </ul>
                                    <br>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับ ปวส.</p>
                                        <li>สาขาไฟฟ้า</li>
                                        <li>สาขาไฟฟ้ากำลัง</li>
                                        <li>สาขาอิเล็กทรอนิกส์</li>
                                        <li>สาขาเมคคาทรอนิกส์ / ระบบอัตโนมัติ</li>
                                        <br>
                                        <p>🎓 ระดับปริญญาตรี</p>
                                        <li>วิศวกรรมไฟฟ้า</li>
                                        <li>วิศวกรรมอิเล็กทรอนิกส์</li>
                                        <li>วิศวกรรมเมคคาทรอนิกส์</li>
                                        <li>เทคโนโลยีไฟฟ้า / อุตสาหกรรม</li>
                                        <br>
                                    </ul>


                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวสไฟฟ้า.png" alt="แผนกช่างไฟฟ้า ระดับ ปวส.">
                            <img src="./img/section/ปวสไฟฟ้า.png" alt="แผนกช่างไฟฟ้า ระดับ ปวส.">
                            <img src="./img/section/ปวสไฟฟ้า.png" alt="แผนกช่างไฟฟ้า ระดับ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาไฟฟ้า (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                ต่อยอดทักษะสู่การควบคุมระบบไฟฟ้า วิเคราะห์งาน และจัดการคุณภาพ เพื่อเตรียมพร้อมสู่ช่างเทคนิคและหัวหน้างานในอุตสาหกรรมไฟฟ้า
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานวิศวกรรมไฟฟ้าและความปลอดภัยขั้นสูง</li>
                                        <li>การวิเคราะห์วงจรไฟฟ้า (AC/DC)</li>
                                        <li>ระบบไฟฟ้ากำลังและการจ่ายไฟฟ้า</li>
                                        <li>การควบคุมมอเตอร์และเครื่องจักรไฟฟ้า</li>
                                        <li>ระบบอัตโนมัติและ PLC เบื้องต้น</li>
                                        <li>การออกแบบและติดตั้งระบบไฟฟ้าอาคาร/โรงงาน</li>
                                        <li>การใช้เครื่องมือวัดและทดสอบขั้นสูง</li>
                                        <li>การบำรุงรักษาระบบไฟฟ้าเชิงป้องกัน (PM)</li>
                                        <li>พลังงานทดแทน (Solar Cell เบื้องต้น)</li>
                                        <li>การฝึกงานในสถานประกอบการ / โครงงานวิชาชีพ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเทคนิคไฟฟ้าในโรงงานอุตสาหกรรม</li>
                                        <li>ช่างควบคุมและซ่อมบำรุงระบบไฟฟ้า (Maintenance Technician)</li>
                                        <li>เจ้าหน้าที่ควบคุมระบบอัตโนมัติ / PLC</li>
                                        <li>เจ้าหน้าที่ออกแบบและติดตั้งระบบไฟฟ้า</li>
                                        <li>เจ้าหน้าที่พลังงานไฟฟ้า / ระบบโซลาร์เซลล์</li>
                                        <li>เจ้าหน้าที่ควบคุมเครื่องจักรไฟฟ้า</li>
                                        <li>เจ้าหน้าที่ตรวจสอบและทดสอบระบบไฟฟ้า</li>
                                        <li>หัวหน้างานฝ่ายไฟฟ้า (Electrical Supervisor)</li>
                                        <li>ผู้ประกอบการรับเหมาติดตั้งระบบไฟฟ้า</li>
                                        <li>วิศวกรเทคนิคไฟฟ้า (ต่อยอดการศึกษา)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 12,000 – 16,700 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 13,000 – 18,000 บาท/เดือน</li>
                                        <li> ⚡ งานช่างไฟฟ้า/เทคนิคเฉพาะทาง: ประมาณ 14,000 – 20,000+ บาท/เดือน</li>
                                        <li> 🚀 อาชีพอิสระ / รับงานไฟฟ้า: รายได้ ไม่แน่นอน (ขึ้นกับฝีมือและงานที่รับ)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับปริญญาตรี (สายตรง)</p>
                                        <li>วิศวกรรมไฟฟ้า</li>
                                        <li>วิศวกรรมไฟฟ้ากำลัง</li>
                                        <li>วิศวกรรมอิเล็กทรอนิกส์</li>
                                        <li>วิศวกรรมเมคคาทรอนิกส์</li>
                                        <li>เทคโนโลยีไฟฟ้า / อุตสาหกรรม</li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>



    </main>

    <script>
        (function() {
            const buttons = document.querySelectorAll('.section-switcher__btn');
            const cards = document.querySelectorAll('.section-card');

            const activate = (targetId) => {
                cards.forEach((card) => {
                    card.classList.toggle('is-active', card.id === targetId);
                });

                buttons.forEach((button) => {
                    const isActive = button.dataset.target === targetId;
                    button.classList.toggle('is-active', isActive);
                    button.setAttribute('aria-selected', isActive ? 'true' : 'false');
                });
            };

            buttons.forEach((button) => {
                button.addEventListener('click', () => activate(button.dataset.target));
            });
        }());
    </script>

    <?php include 'footer.php'; ?>
</body>

</html>