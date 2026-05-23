<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="แผนกวิชาสามัญสัมพันธ์ วิทยาลัยเทคนิคเทิง">
    <title>แผนกวิชาสามัญสัมพันธ์</title>
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
                url('./img/section/gen.png') center/cover no-repeat;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <main class="section-page section-page--factory">
        <section class="section-hero">
            <div class="section-shell">
                <div class="section-hero__content">
                    <h1>แผนกวิชาสามัญสัมพันธ์</h1>
                    <div class="section-hero__top">
                        <span class="section-badge">Department General Studies</span>
                        <div class="section-actions section-actions--hero">
                            <a href="kru_general.php" class="section-btn section-btn--ghost">ครูประจำแผนก</a>
                            <!--<a href="https://www.facebook.com/share/1FMdoMgZpR/" class="section-btn section-btn--facebook">
                                <span class="section-btn__icon" aria-hidden="true">f</span>
                                <span>เพจแผนก</span>
                            </a>-->
                            <a href="#" class="section-btn section-btn--primary">สื่อการสอนแผนก</a>
                        </div>
                    </div>
                    <p>
                        “พัฒนาทักษะด้านวิชาสามัญ การคิดวิเคราะห์ การสื่อสาร และการบูรณาการความรู้ประยุกต์ใช้ในชีวิตประจำวันและการทำงาน เสริมสร้างพื้นฐานทางวิชาการและทักษะ สู่สายอาชีพและการศึกษาระดับสูงในโลกยุคใหม่”
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
                            <img src="./img/ข้อมูลทั่วไปสถานการศึกษา.jpg" alt="แผนกวิชาสามัญสัมพันธ์">
                        </div>

                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพ</span>
                            <div class="section-card__top">
                                <h3>รายวิชาสามัญ (ปวช.)</h3>
                            </div>
                            <p class="section-card__lead">
                                เน้นให้ผู้เรียน เข้าใจหลักการและประยุกต์ใช้ ภาษาไทย ภาษาอังกฤษ สังคมศึกษา วิทยาศาสตร์ คณิตศาสตร์ สุขศึกษา และพลศึกษา ในการพัฒนาตนเองและวิชาชีพ
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4 style="font-size: 18px;">📚 การเรียนการสอน</h4>
                                    <ul>
                                        <li>ภาษาไทยเพื่อการสื่อสารในชีวิตประจำวัน</li>
                                        <li>ภาษาอังกฤษพื้นฐานเพื่อการสื่อสาร</li>
                                        <li>ภาษาจีนพื้นฐานเพื่อการสื่อสาร</li>
                                        <li>คณิตศาสตร์พื้นฐานและการคำนวณเบื้องต้น</li>
                                        <li>วิทยาศาสตร์พื้นฐานในชีวิตประจำวัน</li>
                                        <li>สังคมศึกษา ศาสนา และหน้าที่พลเมือง</li>
                                        <li>สุขศึกษาและพลศึกษา</li>
                                        <li>เทคโนโลยีสารสนเทศเบื้องต้น</li>
                                        <li>การคิดวิเคราะห์และการแก้ปัญหา</li>
                                        <li>ทักษะชีวิตและการทำงานร่วมกับผู้อื่น</li>
                                        <li>คุณธรรม จริยธรรม และวินัยในการเรียน</li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </article>

                    <article class="section-card" id="higher-vocational">
                        <div class="section-card__media">
                            <img src="./img/ตึก.jpg" alt="แผนกวิชาสามัญสัมพันธ์1">
                        </div>
                        <div class="section-card__body">
                            <span class="section-card__tag">ประกาศนียบัตรวิชาชีพชั้นสูง</span>
                            <div class="section-card__top">
                                <h3>รายวิชาสามัญ (ปวส.)</h3>
                            </div>
                            <p class="section-card__lead">
                                ต่อยอดทักษะสู่การคิดวิเคราะห์ การสื่อสาร และการบูรณาการความรู้ เพื่อเตรียมความพร้อมสู่การทำงานและการดำเนินชีวิตอย่างมีคุณภาพ
                            </p>

                            <div class="section-grid">
                                <section class="section-info">
                                    <h4>การเรียนการสอน</h4>
                                    <ul>
                                        <li>ภาษาไทยเพื่อการสื่อสารและงานอาชีพ</li>
                                        <li>ภาษาอังกฤษเพื่อการสื่อสารในงานอาชีพ</li>
                                        <li>ภาษาจีนเพื่อการสื่อสารในงานอาชีพ</li>
                                        <li>คณิตศาสตร์ประยุกต์ในงานอาชีพ</li>
                                        <li>วิทยาศาสตร์เพื่อพัฒนาทักษะอาชีพ</li>
                                        <li>สังคมศึกษาและหน้าที่พลเมือง</li>
                                        <li>เทคโนโลยีสารสนเทศและดิจิทัลพื้นฐาน</li>
                                        <li>การคิดวิเคราะห์และแก้ปัญหา</li>
                                        <li>ทักษะการสื่อสารและการทำงานเป็นทีม</li>
                                        <li>คุณธรรม จริยธรรม และจรรยาบรรณวิชาชีพ</li>
                                        <li>การเรียนรู้แบบบูรณาการกับสาขาวิชาชีพ</li>
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