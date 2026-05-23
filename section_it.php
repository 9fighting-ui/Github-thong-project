<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาคอมพิวเตอร์เทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาคอมพิวเตอร์เทคโนโลยีสารสนเทศ</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="./css/section.css">
    <!-- <link rel="stylesheet" href="./css/section_olde.css"> -->
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
                url('./img/section/it.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาคอมพิวเตอร์เทคโนโลยีสารสนเทศ</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Department of Information Technology</span>
                        <div class="section-actions section-actions--hero">
                            <a href="./kru_it.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <a href="https://www.facebook.com/ITthoeng?locale=th_TH" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะ ด้านคอมพิวเตอร์เทคโนโลยีสารสนเทศ พัฒนาซอฟต์แวร์ การจัดการเครือข่ายและฐานข้อมูล ประยุกต์ใช้เทคโนโลยีดิจิทัลอย่างมีประสิทธิภาพ สู่สายอาชีพและการศึกษาระดับสูงในสายงานเทคโนโลยีสารสนเทศยุคใหม่”
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
                            <img src="./img/section/ปวชคอม.png" alt="แผนกวิชาเทคโนโลยีธุรกิจดิจิทัล ระดับ ปวช.">
                            <img src="./img/section/ปวชคอม.png" alt="แผนกวิชาเทคโนโลยีธุรกิจดิจิทัล ระดับ ปวช.">
                            <img src="./img/section/ปวชคอม.png" alt="แผนกวิชาเทคโนโลยีธุรกิจดิจิทัล ระดับ ปวช.">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานด้านเทคโนโลยีดิจิทัล การพัฒนาระบบงานธุรกิจออนไลน์ การจัดการข้อมูลและสารสนเทศ การใช้เครื่องมือดิจิทัลอย่างมีประสิทธิภาพและปลอดภัย เพื่อเตรียมความพร้อมสู่การทำงานจริงในภาคธุรกิจดิจิทัลและอุตสาหกรรมสมัยใหม่
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>ใช้โปรแกรมสำหรับการพัฒนาระบบ เลือกใช้คำสั่งการทำงาน ร่างหน้าจอ(GUI)</li>
                                        <li>พื้นฐานธุรกิจดิจิทัล (E-Commerce / โมเดลธุรกิจ)</li>
                                        <li>การตลาดออนไลน์ (Social Media, Ads, Content)</li>
                                        <li>การสร้างและบริหารร้านค้าออนไลน์</li>
                                        <li>การใช้โปรแกรมสำนักงาน (Word, Excel, PowerPoint)</li>
                                        <li>การออกแบบสื่อดิจิทัล (Canva / Photoshop / วิดีโอ)</li>
                                        <li>การพัฒนาเว็บไซต์เบื้องต้น (HTML, CSS)</li>
                                        <li>การจัดการข้อมูลและความปลอดภัยไซเบอร์</li>
                                        <li>การเป็นผู้ประกอบการ (วางแผนธุรกิจ / สร้างแบรนด์)</li>
                                        <li>การฝึกปฏิบัติจริง (Project / ฝึกงาน / ขายจริง)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4 style="font-size: 18px;"> แนวทางอาชีพ</h4>
                                    <p>💻 สาย IT (ทำเว็บ / ระบบ) </p>
                                    <p>📈 สายการตลาด (ยิงแอด / ทำคอนเทนต์) </p>
                                    <p> 💼 สายธุรกิจ (ขายของ / บริหารร้าน) </p><br>
                                    <p><b>1. สายงานด้านธุรกิจดิจิทัล (Digital Business)</b></p>
                                    <ul>
                                        <li>เจ้าหน้าที่ธุรกิจออนไลน์ (E-Commerce Officer)</li>
                                        <li>ผู้ดูแลร้านค้าออนไลน์ (Shopee / Lazada / TikTok Shop)</li>
                                        <li>เจ้าหน้าที่จัดการคำสั่งซื้อ (Order Management)</li>
                                        <li>แอดมินเพจ / แอดมินร้านค้าออนไลน์</li>
                                        <li>เจ้าของธุรกิจด้านคอมพิวเตอร์</li>
                                    </ul>
                                    <p><b>2. สายการตลาดดิจิทัล (Digital Marketing)</b></p>
                                    <ul>
                                        <li>นักการตลาดออนไลน์ (Digital Marketer)</li>
                                        <li>ผู้ดูแลโซเชียลมีเดีย (Social Media Admin)</li>
                                        <li>นักทำโฆษณาออนไลน์ (Facebook Ads / Google Ads)</li>
                                        <li>นักวิเคราะห์ข้อมูลการตลาด (Marketing Analytics เบื้องต้น)</li>
                                    </ul>
                                    <p><b>3. สายงานออกแบบและคอนเทนต์ (Content & Design)</b></p>
                                    <ul>
                                        <li>นักออกแบบกราฟิก (Graphic Designer)</li>
                                        <li>Content Creator / TikToker / YouTuber</li>
                                        <li>ผู้ตัดต่อวิดีโอ (Video Editor)</li>
                                        <li>UX/UI Designer (ระดับเริ่มต้น)</li>
                                    </ul>
                                    <p><b>4. สายงานเทคโนโลยีสารสนเทศ (IT Support / Dev เบื้องต้น)</b></p>
                                    <ul>
                                        <li>เจ้าหน้าที่ IT Support</li>
                                        <li>Web Developer (HTML, CSS, JavaScript, PHP)</li>
                                        <li>ผู้ดูแลเว็บไซต์ (Web Admin)</li>
                                        <li>Data Entry / Data Management</li>
                                    </ul>
                                    <p><b>5. สายงานธุรการดิจิทัล (Digital Office)</b></p>
                                    <ul>
                                        <li>เจ้าหน้าที่สำนักงาน (ใช้โปรแกรม Office / ระบบออนไลน์)</li>
                                        <li>เจ้าหน้าที่บัญชีเบื้องต้น (ใช้โปรแกรมบัญชี)</li>
                                        <li>เจ้าหน้าที่งานเอกสารดิจิทัล</li>
                                    </ul>
                                    <p><b>6. สายผู้ประกอบการ (Entrepreneur)</b></p>
                                    <ul>
                                        <li>เจ้าของร้านค้าออนไลน์</li>
                                        <li>ธุรกิจ Dropship</li>
                                        <li>ขายสินค้า / บริการผ่านแพลตฟอร์มดิจิทัล</li>
                                        <li>สร้างแบรนด์ส่วนตัว (Personal Brand)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <p>🏛️ 1. ภาครัฐ (ราชการ / พนักงานราชการ)</p>
                                    <p>ประมาณ 10,000 – 13,000 บาท/เดือน</p><br>
                                    <p>🏢 2. ภาคเอกชน (บริษัท / ธุรกิจทั่วไป)</p>
                                    <ul>
                                        <li>ประมาณ 11,000 – 18,000 บาท/เดือน</li>
                                        <li>ถ้ามีทักษะ (เช่น ทำเว็บ / ยิงแอด / ออกแบบ) อาจได้👉 15,000 – 22,000+ บาท </li>
                                    </ul>
                                    <br>
                                    <p>💻 3. สาย IT / ดิจิทัลเฉพาะทาง (มีสกิล)</p>
                                    <ul>
                                        <li>ประมาณ 15,000 – 25,000 บาท/เดือน</li>
                                        <li>เช่น</li>
                                        <ul>
                                            <li>Web Developer</li>
                                            <li>ยิงโฆษณา (Ads Specialist)</li>
                                            <li>ทำ SEO / Data</li>
                                        </ul>
                                    </ul>
                                    <br>
                                    <p>🚀 4. สายอิสระ / ธุรกิจส่วนตัว</p>
                                    <ul>
                                        <li>❗ ไม่มีเพดาน (0 – 50,000+ บาท/เดือน)</li>
                                        <li>เช่น</li>
                                        <ul>
                                            <li>ขายของออนไลน์</li>
                                            <li>รับทำเว็บไซต์</li>
                                            <li>รับออกแบบ / ตัดต่อวีดีโอ</li>
                                        </ul>
                                    </ul>
                                    <br>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <li>ปวส. สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล/ สาขาวิชาเทคโนโลยีสารสนเทศ/ </li>
                                        <li>ปริญญาตรี เช่น</li>
                                        <ul>
                                            <li>บริหารธุรกิจ (Digital Marketing / E-Business)</li>
                                            <li>เทคโนโลยีสารสนเทศ (IT)</li>
                                            <li>นิเทศศาสตร์ (สื่อดิจิทัล)</li>
                                        </ul>
                                    </ul>
                                    <br>
                                    <p>สามารถศึกษาต่อในระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) หรือหลักสูตรที่เกี่ยวข้องในสายงานเทคโนโลยีสารสนเทศ'</p>
                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวสคอม.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวส.">
                            <img src="./img/section/ปวสคอม.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวส.">
                            <img src="./img/section/ปวสคอม.png" alt="แผนกวิชาช่างกลโรงงาน ระดับ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาขาวิชาคอมพิวเตอร์เทคโนโลยีสารสนเทศ (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นทักษะสู่การพัฒนาระบบสารสนเทศ การวิเคราะห์และออกแบบระบบงาน การจัดการฐานข้อมูล และการรักษาความมั่นคงปลอดภัยของข้อมูล เพื่อเตรียมความพร้อมสู่ตำแหน่งนักเทคโนโลยีสารสนเทศ นักพัฒนาระบบ และผู้ดูแลระบบในองค์กรยุคดิจิทัล
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li> การใช้คอมพิวเตอร์และระบบปฏิบัติการ</li>
                                        <li>โปรแกรมสำนักงาน (Word, Excel, PowerPoint)</li>
                                        <li>การใช้อินเทอร์เน็ตและสื่อดิจิทัล</li>
                                        <li>การจัดการข้อมูล (Database เบื้องต้น)</li>
                                        <li>การเขียนโปรแกรมเบื้องต้น</li>
                                        <li>การพัฒนาเว็บไซต์พื้นฐาน</li>
                                        <li>ความปลอดภัยทางไซเบอร์</li>
                                        <li>จริยธรรมและกฎหมายด้าน IT</li>
                                        <li>การประยุกต์ใช้ IT ในงานอาชีพ</li>

                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li> เจ้าหน้าที่ IT Support / Helpdesk</li>
                                        <li> ผู้ดูแลระบบเครือข่าย (Network Admin เบื้องต้น)</li>
                                        <li> ผู้ดูแลเว็บไซต์ (Web Admin)</li>
                                        <li> นักพัฒนาเว็บไซต์ (Web Developer)</li>
                                        <li>โปรแกรมเมอร์ (Programmer ระดับเริ่มต้น)</li>
                                        <li>เจ้าหน้าที่จัดการข้อมูล (Data Entry / Data Management)</li>
                                        <li> นักทดสอบระบบ (Software Tester)</li>
                                        <li> นักออกแบบกราฟิกดิจิทัล</li>
                                        <li> เจ้าหน้าที่ธุรการด้าน IT</li>
                                        <li> ผู้ประกอบอาชีพอิสระ (รับทำเว็บไซต์ / ซ่อมคอม / งาน IT ทั่วไป)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 9,400 – 10,500 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 12,000 – 18,000 บาท/เดือน</li>
                                        <li>💻 สาย IT (มีทักษะ เช่น IT Support / Web): ประมาณ 18,000 – 25,000 บาท/เดือน</li>
                                        <li>🚀 อาชีพอิสระ: รายได้ ไม่แน่นอน (ขึ้นอยู่กับความสามารถและงานที่รับ)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <p>🎓 ระดับปริญญาตรี</p>
                                    <ul>
                                        <li>เทคโนโลยีสารสนเทศ (IT)</li>
                                        <li>วิทยาการคอมพิวเตอร์ (Computer Science)</li>
                                        <li>วิศวกรรมคอมพิวเตอร์</li>
                                        <li>เทคโนโลยีมัลติมีเดีย / สื่อดิจิทัล</li>
                                        <li>ระบบสารสนเทศ (Information Systems)</li>
                                        <ul>
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