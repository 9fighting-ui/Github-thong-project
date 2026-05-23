<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="สาขาวิชาการบัญชี วิทยาลัยเทคนิคเทิง">
    <title>สาขาวิชาการบัญชี</title>
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
                url('./img/section/ac.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>สาขาวิชาการบัญชี</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Accounting Major</span>
                        <div class="section-actions section-actions--hero">
                            <a href="kru_accountants.php" class="section-btn section-btn--ghost">ครูประจำสาขาวิชา</a>
                            <a href="https://www.facebook.com/share/1FMdoMgZpR/" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจสาขาวิชา</span>
                            </a>
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนสาขาวิชา</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะด้านการบัญชี การจัดทำงบการเงิน การบันทึกบัญชีด้วยโปรแกรมสำเร็จรูป และการบริหารจัดการทางการเงินอย่างเป็นระบบ พร้อมต่อยอดสู่สายอาชีพและการศึกษาระดับสูงในสายงานบัญชีและธุรกิจยุคดิจิทัล”
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
                            <img src="./img/section/ปวชบช.png" alt="สาขาวิชาการบัญชี ระดับ ปวช.">
                            <img src="./img/section/ปวชบช.png" alt="สาขาวิชาการบัญชี ระดับ ปวช.">
                            <img src="./img/section/ปวชบช.png" alt="สาขาวิชาการบัญชี ระดับ ปวช.">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>สาชาวิชาการบัญชี (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นพื้นฐานงานบัญชี การบันทึกบัญชี การจัดทำเอกสารทางการเงิน การคำนวณต้นทุน และการใช้โปรแกรมบัญชีอย่างถูกต้องและปลอดภัย เพื่อเตรียมความพร้อมสู่การทำงานจริงในสถานประกอบการและภาคธุรกิจ
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>พื้นฐานการบัญชีและหลักการบัญชีเบื้องต้น</li>
                                        <li>การบันทึกรายการทางบัญชี (สมุดรายวัน / แยกประเภท)</li>
                                        <li>การจัดทำงบทดลองและงบการเงิน</li>
                                        <li>การคำนวณภาษีเบื้องต้น (เช่น VAT)</li>
                                        <li>การใช้โปรแกรมบัญชีคอมพิวเตอร์</li>
                                        <li>การวิเคราะห์รายการทางธุรกิจ</li>
                                        <li>ระบบเอกสารทางบัญชี</li>
                                        <li>จรรยาบรรณวิชาชีพบัญชี</li>
                                        <li>การจัดทำบัญชีธุรกิจขนาดเล็ก</li>
                                        <li>การฝึกปฏิบัติและทำแบบฝึกหัดจริง</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4 style="font-size: 18px;"> แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>เจ้าหน้าที่บัญชี (Accounting Clerk)</li>
                                        <li>ผู้ช่วยนักบัญชี (Assistant Accountant)</li>
                                        <li>เจ้าหน้าที่การเงิน (Finance Officer เบื้องต้น)</li>
                                        <li>เจ้าหน้าที่ธุรการบัญชี</li>
                                        <li>พนักงานบันทึกข้อมูลทางบัญชี (Data Entry)</li>
                                        <li>เจ้าหน้าที่จัดทำเอกสารภาษี</li>
                                        <li>พนักงานธนาคาร (ตำแหน่งเริ่มต้น)</li>
                                        <li>เจ้าหน้าที่ตรวจสอบเอกสาร (Audit Assistant เบื้องต้น)</li>
                                        <li>พนักงานบริษัท/องค์กรทั่วไปด้านบัญชี</li>
                                        <li>ผู้ประกอบการธุรกิจส่วนตัว (ทำบัญชีร้านค้าเอง)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>💰 รายได้เริ่มต้น (โดยประมาณ)</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 10,000 – 12,500 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 12,000 – 15,000 บาท/เดือน</li>
                                        <li>📊 งานบัญชีเริ่มต้น (บางบริษัท/มีทักษะ): อาจได้ 15,000 บาทขึ้นไป</li>
                                        <li>🚀 อาชีพอิสระ / รับทำบัญชี: รายได้ ไม่แน่นอน (ขึ้นกับลูกค้าและความสามารถ)</li>
                                    </ul>
                                    <br>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับ ปวส.</p>
                                        <li>สาขาการบัญชี</li>
                                        <li>สาขาการเงินและการธนาคาร</li>
                                        <li>สาขาคอมพิวเตอร์ธุรกิจ</li>
                                        <br>
                                        <p> 🎓 ระดับปริญญาตรี</p>
                                        <li>บัญชีบัณฑิต (การบัญชี)</li>
                                        <li>บริหารธุรกิจ (การเงิน / การจัดการ)</li>
                                        <li>ระบบสารสนเทศทางธุรกิจ</li>
                                        <br>
                                        <p>🏫 เรียนต่อแบบเทียบโอน</p>
                                        <li>ใช้วุฒิ ปวช. ต่อ ปวส. และต่อมหาวิทยาลัย</li>
                                        <li>ลดระยะเวลาเรียน</li>
                                    </ul>


                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/section/ปวสบช.png" alt="สาขาวิชาการบัญชี ระดับ ปวส.">
                            <img src="./img/section/ปวสบช.png" alt="สาขาวิชาการบัญชี ระดับ ปวส.">
                            <img src="./img/section/ปวสบช.png" alt="สาขาวิชาการบัญชี ระดับ ปวส.">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>สาชาวิชาการบัญชี (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                             ต่อยอดทักษะสู่การวิเคราะห์และวางแผนทางการเงิน การจัดทำและตรวจสอบงบการเงิน การบัญชีต้นทุนและการบริหารงบประมาณ รวมถึงการใช้เทคโนโลยีสารสนเทศทางบัญชี เพื่อเตรียมความพร้อมสู่ตำแหน่งนักบัญชี นักวิเคราะห์การเงิน และผู้ตรวจสอบบัญชีในองค์กรยุคใหม่
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>วางแผน ดําเนินงานตามหลักการและกระบวนการ โดยคํานึงถึงการบริหารงานคุณภาพ การอนุรักษ์พลังงาน ทรัพยากรและสิ่งแวดล้อม หลักอาชีวอนามัยและความปลอดภัย และกฎหมายที่เกี่ยวข้อง</li>
                                        <li>ปฏิบัติงานพื้นฐานอาชีพด้านการบัญชีตามหลักการและกระบวนการ</li>
                                        <li>เลือกใช้และบํารุงรักษาเครื่องมือ วัสดุอุปกรณ์ในงานอาชีพตามหลักการและกระบวนการโดยคํานึงถึงความประหยัดและความปลอดภัย</li>
                                        <li>ประยุกต์ใช้เทคโนโลยีคอมพิวเตอร์และสารสนเทศ เพื่อพัฒนาและสนับสนุนงานอาชีพ</li>
                                        <li>รวบรวมเอกสารและบันทึกบัญชีของธุรกิจบริการ ธุรกิจซื้อขายสินค้าและธุรกิจอุตสาหกรรมสําหรับกิจการเจ้าของคนเดียว ห้างหุ้นส่วนและบริษัทจํากัด ตามมาตรฐานรายงานทางการเงิน</li>
                                        <li>บันทึกบัญชีโดยใช้เทคโนโลยีสารสนเทศเพื่องานบัญชี</li>
                                        <li>จัดทําแบบแสดงรายการภาษีมูลค่าเพิ่ม ภาษีเงินได้บุคคลธรรมดา และภาษีเงินได้นิติบุคคล</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>แนวทางอาชีพ</h4>
                                    <ul>
                                        <li>นักบัญชี (Accountant ระดับต้น)</li>
                                        <li>เจ้าหน้าที่บัญชี / การเงิน (Accounting / Finance Officer)</li>
                                        <li>ผู้ช่วยผู้สอบบัญชี (Audit Assistant)</li>
                                        <li>เจ้าหน้าที่ภาษี (Tax Officer)</li>
                                        <li>เจ้าหน้าที่วิเคราะห์งบการเงินเบื้องต้น</li>
                                        <li>เจ้าหน้าที่บัญชีต้นทุน (Cost Accounting)</li>
                                        <li>เจ้าหน้าที่ธุรการด้านบัญชี</li>
                                        <li>พนักงานธนาคาร / สถาบันการเงิน</li>
                                        <li>เจ้าหน้าที่ตรวจสอบภายใน (Internal Audit)</li>
                                        <li>ผู้ประกอบการ / รับทำบัญชีอิสระ</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>รายได้เริ่มต้น</h4>
                                    <ul>
                                        <li>🏛️ ภาครัฐ: ประมาณ 13,000 – 16,700 บาท/เดือน</li>
                                        <li>🏢 ภาคเอกชนทั่วไป: ประมาณ 15,000 – 20,000 บาท/เดือน</li>
                                        <li>📊 งานบัญชีเฉพาะทาง (มีทักษะ เช่น ภาษี / โปรแกรมบัญชี / Excel): ประมาณ 18,000 – 25,000+ บาท/เดือน</li>
                                        <li>🚀 อาชีพอิสระ / รับทำบัญชี: รายได้ ไม่แน่นอน (ขึ้นกับลูกค้าและประสบการณ์)</li>
                                    </ul>
                                </section>

                                <section class="section-info">
                                    <h4>การศึกษาต่อ</h4>
                                    <ul>
                                        <p>🎓 ระดับปริญญาตรี (สายตรง)</p>
                                        <li>บัญชีบัณฑิต (การบัญชี)</li>
                                        <li>บริหารธุรกิจ (การเงิน / การบัญชี)</li>
                                        <li>ระบบสารสนเทศทางธุรกิจ</li><br>
                                        <p>🎓 สายเฉพาะทาง</p>
                                        <li>การสอบผู้ทำบัญชี / ผู้สอบบัญชี (CPA)</li>
                                        <li>ภาษีอากร / การวางแผนภาษี</li>
                                        <li>การบัญชีดิจิทัล / FinTech</li>
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