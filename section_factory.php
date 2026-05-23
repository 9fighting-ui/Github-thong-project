<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาช่างกลโรงงาน วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาช่างกลโรงงาน</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="./css/section.css">
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
                url('./img/section/ftr.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาช่างกลโรงงาน</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Department of Industrial Mechanics</span>
                        <div class="section-actions section-actions--hero">
                            <a href="./kru_factory.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <a href="https://www.facebook.com/profile.php?id=61569513845849&locale=th_TH" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>

                    <p>
                        "พัฒนาทักษะด้านการผลิต งานเครื่องมือกล การควบคุมเครื่องจักร และงานอุตสาหกรรมสมัยใหม่
                        พร้อมต่อยอดสู่สายอาชีพและการศึกษาระดับสูงในโลกการผลิตยุคใหม่"
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
                            <img src="./img/section/กล.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวช.">
                            <img src="./img/section/กล.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวช.">
                            <img src="./img/section/กล.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวช.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาช่างกลโรงงาน (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานงานเครื่องมือกล งานผลิตชิ้นส่วน งานวัดละเอียด และการใช้เครื่องจักรอย่างปลอดภัย
                                เพื่อเตรียมพร้อมสู่การทำงานจริงในภาคอุตสาหกรรม
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานงานช่างกลและความปลอดภัยในการทำงาน </li>
                                        <li>การอ่านแบบและเขียนแบบเครื่องกล</li>
                                        <li>งานวัดละเอียดและเครื่องมือวัด</li>
                                        <li>งานเครื่องมือกล (กลึง กัด เจาะ ไส)</li>
                                        <li>งานเชื่อมโลหะเบื้องต้น</li>
                                        <li>วัสดุช่างและคุณสมบัติของโลหะ</li>
                                        <li>การประกอบชิ้นส่วนเครื่องจักร</li>
                                        <li>การบำรุงรักษาเครื่องจักรเบื้องต้น</li>
                                        <li>การควบคุมคุณภาพงานผลิต</li>
                                        <li>การฝึกปฏิบัติในโรงงาน / โครงงานช่าง</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเครื่องกลในโรงงานอุตสาหกรรม</li>
                                        <li>ช่างกลึง / ช่างกัด / ช่าง CNC</li>
                                        <li>ช่างซ่อมบำรุงเครื่องจักร (Maintenance)</li>
                                        <li>ช่างเชื่อมโลหะ</li>
                                        <li>ช่างประกอบชิ้นส่วนเครื่องจักร</li>
                                        <li>เจ้าหน้าที่ควบคุมเครื่องจักรการผลิต</li>
                                        <li>เจ้าหน้าที่ตรวจสอบคุณภาพ (QC)</li>
                                        <li>ช่างเทคนิคในโรงงาน</li>
                                        <li>ผู้รับจ้างงานช่าง (Freelance / รับเหมา)</li>
                                        <li>ผู้ประกอบการด้านงานเครื่องกล</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 11,000 – 13,000 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 12,000 – 18,000 บาท/เดือน</li>
                                        <li>⚙️ งานโรงงาน/ช่างเทคนิค (มีทักษะ): ประมาณ 15,000 – 20,000+ บาท/เดือน (ขึ้นกับประสบการณ์และฝีมือ)</li>
                                        <li>🚀 อาชีพอิสระ (รับงานช่าง): รายได้ ไม่แน่นอน ขึ้นกับงานและฝีมือ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p> 🎓 ระดับ ปวส. (สายตรง)</p>
                                        <li>สาขาเทคนิคการผลิต</li>
                                        <li>สาขาเครื่องกล</li>
                                        <li>สาขาเทคโนโลยีแม่พิมพ์</li>
                                        <li>สาขาเมคคาทรอนิกส์</li><br>
                                        <P>🎓 ระดับปริญญาตรี</P>
                                        <li>วิศวกรรมเครื่องกล</li>
                                        <li>วิศวกรรมอุตสาหการ</li>
                                        <li>วิศวกรรมการผลิต</li>
                                        <li>เทคโนโลยีอุตสาหกรรม</li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/กล1.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวส.">
                            <img src="./img/section/กล1.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวส.">
                            <img src="./img/section/กล1.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาเทคนิคเครื่องกล (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                ต่อยอดทักษะสู่การควบคุมกระบวนการผลิต การวิเคราะห์งานอุตสาหกรรม และการจัดการคุณภาพ
                                เพื่อเตรียมความพร้อมสู่ตำแหน่งช่างเทคนิคและหัวหน้างานในโรงงาน
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานวิศวกรรมเครื่องกลและความปลอดภัยขั้นสูง</li>
                                        <li> การอ่านแบบและเขียนแบบเครื่องกล (CAD / เขียนแบบเทคนิค)</li>
                                        <li>งานเครื่องมือกลขั้นสูง (CNC / กลึง / กัด)</li>
                                        <li>งานออกแบบและผลิตชิ้นส่วนเครื่องจักร</li>
                                        <li>วัสดุวิศวกรรมและการเลือกใช้วัสดุ</li>
                                        <li>งานระบบอัตโนมัติและเมคคาทรอนิกส์เบื้องต้น</li>
                                        <li>การวางแผนการผลิต (Production Planning)</li>
                                        <li>การควบคุมคุณภาพ (QC / QA)</li>
                                        <li>การบำรุงรักษาเครื่องจักรเชิงป้องกัน (PM)</li>
                                        <li>การฝึกงานในสถานประกอบการ / โครงงานวิชาชีพ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเทคนิคเครื่องกลในโรงงานอุตสาหกรรม</li>
                                        <li>ช่าง CNC / โปรแกรมเมอร์เครื่อง CNC</li>
                                        <li>วิศวกรเทคนิค (Technical Engineer ระดับต้น)</li>
                                        <li> ช่างซ่อมบำรุงเครื่องจักร (Maintenance Technician)</li>
                                        <li>เจ้าหน้าที่วางแผนการผลิต (Production Planner)</li>
                                        <li>เจ้าหน้าที่ควบคุมคุณภาพ (QC / QA)</li>
                                        <li>เจ้าหน้าที่ออกแบบชิ้นส่วน (CAD / CAM)</li>
                                        <li>หัวหน้างานฝ่ายผลิต (Production Supervisor)</li>
                                        <li>ช่างเทคนิคระบบอัตโนมัติ / เมคคาทรอนิกส์</li>
                                        <li>ผู้ประกอบการ / รับงานเครื่องกล / งาน CNC</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 13,000 – 16,700 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 15,000 – 18,000 บาท/เดือน</li>
                                        <li>⚙️ งานช่างเทคนิค/โรงงาน (มีทักษะ): ประมาณ 15,000 – 22,000+ บาท/เดือน</li>
                                        <li>🚀 อาชีพอิสระ: รายได้ ไม่แน่นอน (ขึ้นกับฝีมือและงานที่รับ)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <P>🎓 ระดับปริญญาตรี</P>
                                        <li>วิศวกรรมเครื่องกล</li>
                                        <li>วิศวกรรมอุตสาหการ</li>
                                        <li>วิศวกรรมการผลิต</li>
                                        <li>เทคโนโลยีอุตสาหกรรม</li><br>
                                        <p>🎓 สายเทคโนโลยีเฉพาะทาง</p>
                                        <li>เมคคาทรอนิกส์ / ระบบอัตโนมัติ</li>
                                        <li>วิศวกรรมหุ่นยนต์</li>
                                        <li>CAD / CAM / CNC ขั้นสูง</li>
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