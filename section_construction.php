<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาช่างก่อสร้าง วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาช่างก่อสร้าง</title>
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
                url('./img/section/ct.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาช่างก่อสร้าง</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Department of Construction</span>
                        <div class="section-actions section-actions--hero">
                            <a href="kru_construction.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <a href="https://www.facebook.com/profile.php?id=100038756247004&locale=th_TH" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะด้านงานก่อสร้าง การอ่านแบบและเขียนแบบก่อสร้าง การควบคุมงานและบริหารโครงการก่อสร้าง การใช้เครื่องมือและเทคโนโลยีงานก่อสร้างอย่างถูกต้องและปลอดภัย สู่สายอาชีพและการศึกษาระดับสูงในสายงานก่อสร้างและอุตสาหกรรมยุคใหม่”
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
                            <img src="./img/section/ปวชก่อ.png" alt="แผนกวิชาก่อสร้าง ระดับ ปวช.">
                            <img src="./img/section/ปวชก่อ.png" alt="แผนกวิชาก่อสร้าง ระดับ ปวช.">
                            <img src="./img/section/ปวชก่อ.png" alt="แผนกวิชาก่อสร้าง ระดับ ปวช.">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาชาวิชาช่างก่อสร้าง (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานงานก่อสร้าง การผลิตชิ้นงาน การวัดตรวจสอบ และการใช้เครื่องมืออย่างปลอดภัย เพื่อเตรียมพร้อมสู่การทำงานจริงในงานก่อสร้าง
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานงานก่อสร้างและความปลอดภัย</li>
                                        <li>การอ่านแบบและเขียนแบบก่อสร้าง</li>
                                        <li>งานสำรวจและวัดพื้นที่</li>
                                        <li>วัสดุก่อสร้างและการใช้งาน</li>
                                        <li>งานโครงสร้าง (คอนกรีต เหล็ก ไม้)</li>
                                        <li>งานก่ออิฐ ฉาบปูน เทคอนกรีต</li>
                                        <li>การใช้เครื่องมือช่างก่อสร้าง</li>
                                        <li>การประมาณราคาเบื้องต้น</li>
                                        <li>การควบคุมงานก่อสร้างเบื้องต้น</li>
                                        <li>การฝึกปฏิบัติและโครงงานก่อสร้าง</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4 style="font-size: 18px;"> แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างก่อสร้าง</li>
                                        <li>ช่างปูน / ช่างไม้ / ช่างเหล็ก</li>
                                        <li>ผู้ช่วยวิศวกร / โฟร์แมน</li>
                                        <li>เจ้าหน้าที่ควบคุมงานก่อสร้าง</li>
                                        <li>เจ้าหน้าที่สำรวจ (Survey)</li>
                                        <li>ช่างเทคนิคในบริษัทรับเหมา</li>
                                        <li>เจ้าหน้าที่ประมาณราคา (Estimator)</li>
                                        <li>พนักงานบริษัทก่อสร้าง</li>
                                        <li>ผู้รับเหมาก่อสร้างรายย่อย</li>
                                        <li>ผู้ประกอบการงานก่อสร้าง</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: 10,000 – 13,000 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชน: 12,000 – 18,000 บาท/เดือน</li>
                                        <li>🏗️ งานช่างฝีมือ/ไซต์งาน: 15,000 – 20,000+ บาท/เดือน (มี OT/ค่าไซต์)</li>
                                        <li>🚀 อาชีพอิสระ: รายได้ ไม่แน่นอน (ขึ้นกับงานและประสบการณ์)</li>
                                    </ul>
                                    <br>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับ ปวส.</p>
                                        <li>สาขาวิชาก่อสร้าง</li>
                                        <li>สาขาวิชาโยธา</li>
                                        <li>สาขาสำรวจ</li>
                                        <br>
                                        <p> 🎓 ระดับปริญญาตรี</p>
                                        <li>วิศวกรรมโยธา</li>
                                        <li>เทคโนโลยีการก่อสร้าง</li>
                                        <li>วิศวกรรมโครงสร้าง</li>

                                    </ul>


                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวสก่อ.png" alt="แผนกก่อสร้าง ระดับ ปวส.">
                            <img src="./img/section/ปวสก่อ.png" alt="แผนกก่อสร้าง ระดับ ปวส.">
                            <img src="./img/section/ปวสก่อ.png" alt="แผนกก่อสร้าง ระดับ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาชาวิชาโยธา (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                ต่อยอดทักษะสู่การควบคุมงานก่อสร้าง การวิเคราะห์งาน และการจัดการคุณภาพ เพื่อเตรียมพร้อมสู่ช่างเทคนิคและหัวหน้างานในงานโยธา
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานวิศวกรรมโยธาและความปลอดภัย</li>
                                        <li>การอ่านแบบและเขียนแบบก่อสร้าง (CAD)</li>
                                        <li>วัสดุก่อสร้างและการทดสอบวัสดุ</li>
                                        <li>โครงสร้าง (คอนกรีต เหล็ก งานฐานราก)</li>
                                        <li>งานสำรวจและงานระดับ (Survey)</li>
                                        <li>การวางแผนและควบคุมงานก่อสร้าง</li>
                                        <li>การประมาณราคา (BOQ)</li>
                                        <li>การใช้เครื่องมือและอุปกรณ์สำรวจ</li>
                                        <li>การบริหารโครงการเบื้องต้น</li>
                                        <li>ฝึกงานในสถานประกอบการ / โครงงานวิชาชีพ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>ช่างเทคนิคโยธา</li>
                                        <li>โฟร์แมนควบคุมงานก่อสร้าง</li>
                                        <li>เจ้าหน้าที่ควบคุมงาน (Site Engineer ระดับต้น)</li>
                                        <li>เจ้าหน้าที่สำรวจ (Surveyor)</li>
                                        <li>เจ้าหน้าที่ประมาณราคา (Estimator)</li>
                                        <li>เจ้าหน้าที่ตรวจสอบคุณภาพงาน (QC)</li>
                                        <li>พนักงานบริษัทรับเหมาก่อสร้าง</li>
                                        <li>เจ้าหน้าที่หน่วยงานราชการด้านโยธา</li>
                                        <li>ผู้ช่วยวิศวกรโยธา</li>
                                        <li>ผู้ประกอบการรับเหมาก่อสร้าง</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: 13,000 – 16,700 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชน: 15,000 – 20,000 บาท/เดือน</li>
                                        <li>🏗️ งานไซต์งาน/มีประสบการณ์: 18,000 – 25,000+ บาท/เดือน (มีค่าไซต์/OT)</li>
                                        <li>🚀 อาชีพอิสระ: รายได้ ไม่แน่นอน (ขึ้นกับโครงการและประสบการณ์)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับปริญญาตรี </p>
                                        <li>วิศวกรรมโยธา</li>
                                        <li>วิศวกรรมโครงสร้าง</li>
                                        <li>เทคโนโลยีการก่อสร้าง</li>
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