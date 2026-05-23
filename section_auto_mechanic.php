<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาช่างยนต์ วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาช่างยนต์</title>
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
                url('./img/section/at.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาช่างยนต์</h1>
                    <div class="section-hero__top">
                        <span class="section-badge"> Department of Auto Mechanic</span>
                        <div class="section-actions section-actions--hero">
                            <a href="kru_auto_mechanic.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <a href="https://www.facebook.com/profile.php?id=100054345259806&locale=th_TH" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะด้านงานช่างยนต์ การตรวจสอบ ซ่อมบำรุง และวิเคราะห์ระบบเครื่องยนต์ การใช้เครื่องมือและเทคโนโลยียานยนต์สมัยใหม่อย่างมีประสิทธิภาพและปลอดภัย สู่สายอาชีพและการศึกษาระดับสูงในสายงานยานยนต์ยุคใหม่”
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
                            <img src="./img/section/ปวชยน.png" alt="แผนกวิชาช่างยนต์ ปวช.">
                            <img src="./img/section/ปวชยน.png" alt="แผนกวิชาช่างยนต์ ปวช.">
                            <img src="./img/section/ปวชยน.png" alt="แผนกวิชาช่างยนต์ ปวช.">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาช่างยนต์ (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานงานซ่อมบำรุงและตรวจสอบเครื่องยนต์ การบำรุงรักษาชิ้นส่วนรถยนต์ งานวัดและตรวจสอบอย่างละเอียด รวมถึงการใช้เครื่องมือและอุปกรณ์อย่างปลอดภัย เพื่อเตรียมพร้อมสู่การทำงานจริงในอุตสาหกรรมยานยนต์
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานเครื่องยนต์และระบบยานยนต์</li>
                                        <li>งานตรวจเช็กและบำรุงรักษารถยนต์</li>
                                        <li>ระบบเครื่องยนต์ (เบนซิน / ดีเซล)</li>
                                        <li>ระบบไฟฟ้ารถยนต์</li>
                                        <li>ระบบส่งกำลัง (เกียร์ คลัตช์ เพลา)</li>
                                        <li>ระบบช่วงล่างและบังคับเลี้ยว</li>
                                        <li>ระบบเบรกและความปลอดภัย</li>
                                        <li>การใช้เครื่องมือช่างและอุปกรณ์ตรวจวัด</li>
                                        <li>การวิเคราะห์และแก้ไขปัญหาเครื่องยนต์</li>
                                        <li>การฝึกปฏิบัติในอู่ / โครงงานช่างยนต์</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4 style="font-size: 18px;"> แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างซ่อมรถยนต์ในอู่ / ศูนย์บริการ</li>
                                        <li>ช่างเครื่องยนต์ (เบนซิน / ดีเซล)</li>
                                        <li>ช่างไฟฟ้ารถยนต์</li>
                                        <li>ช่างช่วงล่างและระบบเบรก</li>
                                        <li>เจ้าหน้าที่ศูนย์บริการรถยนต์ (Service Advisor)</li>
                                        <li>เจ้าหน้าที่ตรวจสภาพรถ (Inspection)</li>
                                        <li>พนักงานบริษัทผลิต/ประกอบรถยนต์</li>
                                        <li>ช่างเทคนิคประจำโรงงานอุตสาหกรรมยานยนต์</li>
                                        <li>ผู้ช่วยช่าง / ช่างฝึกหัด</li>
                                        <li>ผู้ประกอบการเปิดอู่ซ่อมรถยนต์</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 10,000 – 13,000 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 12,000 – 18,000 บาท/เดือน</li>
                                        <li>🔧 งานช่างในศูนย์บริการ/อู่ (มีทักษะ): ประมาณ 15,000 – 20,000+ บาท/เดือน (รวม OT/ค่าคอม)</li>
                                        <li>🚗 อาชีพอิสระ (เปิดอู่ / รับงาน): รายได้ ไม่แน่นอน (ขึ้นกับฝีมือและลูกค้า)</li>
                                    </ul>
                                    <br>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับ ปวส.</p>
                                        <li>สาขาช่างยนต์</li>
                                        <li>สาขาเทคนิคยานยนต์</li>
                                        <li>สาขาเมคคาทรอนิกส์</li>
                                        <li>สาขาเทคโนโลยียานยนต์</li>
                                        <br>
                                        <p> 🎓 ระดับปริญญาตรี</p>
                                        <li>วิศวกรรมยานยนต์</li>
                                        <li>วิศวกรรมเครื่องกล</li>
                                        <li>เทคโนโลยีอุตสาหกรรม</li>
                                        <br>
                                    </ul>


                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวสยน.png" alt="แผนกวิชาช่างยนต์ ปวส.">
                            <img src="./img/section/ปวสยน.png" alt="แผนกวิชาช่างยนต์ ปวส.">
                            <img src="./img/section/ปวสยน.png" alt="แผนกวิชาช่างยนต์ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาเทคโนโลยีบริการยานยนต์ (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                ต่อยอดทักษะสู่การวิเคราะห์และควบคุมงานซ่อมบำรุง การตรวจสอบคุณภาพรถยนต์ และการบริหารงานบริการยานยนต์ เพื่อเตรียมความพร้อมสู่ตำแหน่งช่างเทคนิคและหัวหน้างานในอุตสาหกรรมยานยนต์
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานเทคโนโลยียานยนต์และความปลอดภัยในการทำงาน</li>
                                        <li>ระบบเครื่องยนต์สันดาปภายใน (เบนซิน / ดีเซล)</li>
                                        <li>ระบบไฟฟ้าและอิเล็กทรอนิกส์ในรถยนต์</li>
                                        <li>ระบบส่งกำลัง ช่วงล่าง และเบรก</li>
                                        <li>ระบบปรับอากาศและอุปกรณ์อำนวยความสะดวก</li>
                                        <li>การใช้เครื่องมือและอุปกรณ์ตรวจวัดทันสมัย</li>
                                        <li>การวิเคราะห์และแก้ไขปัญหารถยนต์เชิงเทคนิค</li>
                                        <li>การบำรุงรักษาและซ่อมแซมยานยนต์</li>
                                        <li>การจัดการศูนย์บริการและงานบริการลูกค้า</li>
                                        <li>การฝึกปฏิบัติในศูนย์บริการและโครงงานวิชาชีพ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเทคนิคยานยนต์ในศูนย์บริการและอู่ซ่อม</li>
                                        <li>ช่างเครื่องยนต์และระบบส่งกำลัง</li>
                                        <li>ช่างไฟฟ้าและอิเล็กทรอนิกส์รถยนต์</li>
                                        <li>ช่างระบบปรับอากาศและอุปกรณ์อำนวยความสะดวก</li>
                                        <li>เจ้าหน้าที่ตรวจสภาพรถ (Inspection)</li>
                                        <li>เจ้าหน้าที่วางแผนงานซ่อมบำรุง (Maintenance Planner)</li>
                                        <li>เจ้าหน้าที่ฝ่ายบริการลูกค้าในศูนย์บริการ</li>
                                        <li>ช่างเทคนิคระบบอัตโนมัติและยานยนต์สมัยใหม่</li>
                                        <li>ผู้ช่วยช่าง / ช่างฝึกหัด</li>
                                        <li>ผู้ประกอบการอู่ซ่อมรถยนต์หรือธุรกิจบริการยานยนต์</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 13,000 – 16,700 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 15,000 – 20,000 บาท/เดือน</li>
                                        <li>🔧 งานศูนย์บริการ / ช่างเทคนิค (มีทักษะ): ประมาณ 18,000 – 25,000+ บาท/เดือน (รวม OT/ค่าคอม)</li>
                                        <li>🚗 อาชีพอิสระ (เปิดอู่ / รับงานบริการ): รายได้ ไม่แน่นอน ขึ้นกับฝีมือและจำนวนลูกค้า
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับปริญญาตรี (สายตรง)</p>
                                        <li>วิศวกรรมยานยนต์</li>
                                        <li>วิศวกรรมเครื่องกล</li>
                                        <li>เทคโนโลยีอุตสาหกรรม</li>
                                        <li>เมคคาทรอนิกส์และระบบอัตโนมัติ</li>
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