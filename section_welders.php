<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาช่างเชื่อมโลหะ วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาช่างเชื่อมโลหะ</title>
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
                url('./img/section/wd.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาช่างเชื่อมโลหะ</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Department of Welding</span>
                        <div class="section-actions section-actions--hero">
                            <a href="kru_welders.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <a href="https://www.facebook.com/share/1Dt4pBSnNg/" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะด้านงานเชื่อมโลหะ การเชื่อมด้วยกระบวนการต่าง ๆ การอ่านแบบงานโครงสร้าง การใช้เครื่องมือและอุปกรณ์เชื่อมอย่างถูกต้องและปลอดภัย สู่สายอาชีพและการศึกษาระดับสูงในสายงานอุตสาหกรรมโลหะยุคใหม่”
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
                            <img src="./img/section/ปวชเชื่อม.png" alt="แผนกช่างเชื่อมโลหะ ระดับ ปวช.">
                            <img src="./img/section/ปวชเชื่อม.png" alt="แผนกช่างเชื่อมโลหะ ระดับ ปวช.">
                            <img src="./img/section/ปวชเชื่อม.png" alt="แผนกช่างเชื่อมโลหะ ระดับ ปวช.">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาช่างเชื่อมโลหะ (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานงานเชื่อมโลหะ การผลิตชิ้นงาน การวัดตรวจสอบ และการใช้เครื่องมืออย่างปลอดภัย เพื่อเตรียมพร้อมสู่การทำงานจริงในอุตสาหกรรมโลหะ
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานงานช่างและความปลอดภัยในการเชื่อม</li>
                                        <li>ความรู้เกี่ยวกับโลหะและคุณสมบัติของวัสดุ</li>
                                        <li>การอ่านแบบและเขียนแบบงานเชื่อม</li>
                                        <li>การเชื่อมโลหะด้วยวิธีต่างๆ (MIG, TIG, Arc)</li>
                                        <li>การตัดและเตรียมชิ้นงานโลหะ</li>
                                        <li>การตรวจสอบและควบคุมคุณภาพงานเชื่อม</li>
                                        <li>การใช้เครื่องมือและอุปกรณ์เชื่อม</li>
                                        <li>การแก้ไขปัญหางานเชื่อมเบื้องต้น</li>
                                        <li>การฝึกปฏิบัติงานในห้องปฏิบัติการและโครงงานช่างเชื่อม</li>
                                        <li>การบำรุงรักษาเครื่องมือและอุปกรณ์เชื่อม</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4 style="font-size: 18px;"> แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเชื่อมโลหะในอุตสาหกรรมทั่วไป</li>
                                        <li>ช่างเชื่อมในงานก่อสร้างและโครงสร้างเหล็ก</li>
                                        <li>ช่างเชื่อมในอู่ซ่อมอุตสาหกรรมและยานยนต์</li>
                                        <li>ช่างตรวจสอบงานเชื่อม (Welding Inspector)</li>
                                        <li>ช่างเชื่อมระบบท่อและงานระบบอุตสาหกรรม</li>
                                        <li>ช่างเชื่อมในโรงงานผลิตเครื่องจักรและชิ้นส่วนโลหะ</li>
                                        <li>เจ้าของอู่ซ่อม / รับงานเชื่อมอิสระ</li>
                                        <li>ผู้ช่วยช่างเชื่อม / ช่างฝึกหัด</li>
                                        <li>เจ้าหน้าที่ควบคุมคุณภาพงานเชื่อม</li>
                                        <li>ช่างเทคนิคเชื่อมสำหรับงานโครงการพิเศษหรืองานสั่งทำ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 12,000 – 15,000 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 13,000 – 18,000 บาท/เดือน</li>
                                        <li>🔧 งานช่างฝีมือ / โรงงานอุตสาหกรรม: ประมาณ 15,000 – 22,000+ บาท/เดือน (รวม OT / ค่าคอม)</li>
                                        <li>🚀 อาชีพอิสระ / รับงานเชื่อม: รายได้ ไม่แน่นอน ขึ้นกับฝีมือและจำนวนงาน</li>
                                    </ul>
                                    <br>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับ ปวส.</p>
                                        <li>สาขาช่างเชื่อมโลหะ</li>
                                        <li>สาขาเทคนิคโลหะ</li>
                                        <li>สาขาเทคนิคการผลิต</li>
                                        <li>สาขาเมคคาทรอนิกส์ / ระบบอัตโนมัติ</li>
                                        <br>
                                        <p> 🎓 ระดับปริญญาตรี</p>
                                        <li>วิศวกรรมเครื่องกล</li>
                                        <li>วิศวกรรมยานยนต์</li>
                                        <li>วิศวกรรมอุตสาหการ / การผลิต</li>
                                        <li>เทคโนโลยีอุตสาหกรรม</li>
                                        <br>
                                    </ul>


                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวสเชื่อม.png" alt="แผนกช่างเชื่อมโลหะ ระดับ ปวส.">
                            <img src="./img/section/ปวสเชื่อม.png" alt="แผนกช่างยนต์ ระดับ ปวส.">
                            <img src="./img/section/ปวสเชื่อม.png" alt="แผนกช่างยนต์ ระดับ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาเทคนิคโลหะ (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                ต่อยอดทักษะสู่การวิเคราะห์งานเชื่อมและโลหะ การควบคุมคุณภาพชิ้นงาน และการบริหารงานเชิงเทคนิค เพื่อเตรียมพร้อมสู่ตำแหน่งช่างเทคนิคและหัวหน้างานในอุตสาหกรรมโลหะ
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานวิศวกรรมโลหะและวัสดุศาสตร์</li>
                                        <li>การวิเคราะห์คุณสมบัติของโลหะและการเลือกใช้วัสดุ</li>
                                        <li>การผลิตชิ้นส่วนโลหะด้วยวิธีต่างๆ (กลึง, กลึง CNC, กัด, ปั๊ม)</li>
                                        <li>การเชื่อมโลหะและการตัดโลหะขั้นสูง</li>
                                        <li>การออกแบบและอ่านแบบวิศวกรรม</li>
                                        <li>การควบคุมคุณภาพและตรวจสอบชิ้นงานโลหะ</li>
                                        <li>การใช้เครื่องมือและอุปกรณ์เทคนิคโลหะ</li>
                                        <li>การบำรุงรักษาเครื่องจักรและอุปกรณ์</li>
                                        <li>การฝึกปฏิบัติในโรงงาน/ห้องปฏิบัติการ</li>
                                        <li>การทำโครงงานวิชาชีพด้านโลหะและการผลิต</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเทคนิคโลหะในโรงงานอุตสาหกรรม</li>
                                        <li>ช่างกลึง / ช่างกัด / ช่าง CNC</li>
                                        <li>ช่างเชื่อมและประกอบชิ้นส่วนโลหะ</li>
                                        <li>เจ้าหน้าที่ควบคุมคุณภาพงานโลหะ (QC / QA)</li>
                                        <li>เจ้าหน้าที่วางแผนการผลิต (Production Planner)</li>
                                        <li>ช่างเทคนิคงานโครงสร้างและเครื่องจักร</li>
                                        <li>ผู้ช่วยช่าง / ช่างฝึกหัด</li>
                                        <li>ผู้ประกอบการผลิตชิ้นส่วนโลหะหรือเครื่องจักร</li>
                                        <li>ช่างเทคนิคบำรุงรักษาเครื่องจักรโลหะ</li>
                                        <li>วิศวกรเทคนิคโลหะ (ต่อยอดการศึกษา ปวส. → ปริญญาตรี)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 13,000 – 16,700 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 15,000 – 20,000 บาท/เดือน</li>
                                        <li>🔧 งานช่างเทคนิคโลหะ / CNC / การผลิตชิ้นส่วน: ประมาณ 18,000 – 25,000+ บาท/เดือน (รวม OT/โบนัส)</li>
                                        <li>🚀 อาชีพอิสระ / ผลิตชิ้นส่วนโลหะ: รายได้ ไม่แน่นอน ขึ้นกับทักษะและจำนวนลูกค้า</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับปริญญาตรี (สายตรง)</p>
                                        <li>วิศวกรรมเครื่องกล</li>
                                        <li>วิศวกรรมอุตสาหการ / การผลิต</li>
                                        <li>วิศวกรรมโลหะและวัสดุ</li>
                                        <li>เทคโนโลยีอุตสาหกรรม</li>
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