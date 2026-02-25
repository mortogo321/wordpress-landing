<?php
/**
 * Template Name: Landing Page - ล้างแอร์ Premium
 *
 * @package flavor-developer-test
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$line_url = get_theme_mod( 'fdt_line_url', 'https://line.me/R/ti/p/@your-line-id' );
$phone    = get_theme_mod( 'fdt_phone', '02-xxx-xxxx' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="บริการล้างแอร์บ้านแบบ Premium โดยช่างมืออาชีพ สะอาดลึกถึงข้างใน รับประกัน 30 วัน จองคิววันนี้!">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'landing-page' ); ?>>
<?php fdt_gtm_body(); ?>

<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="container">
        <div class="hero__badge">Premium Service</div>
        <h1 class="hero__title">ล้างแอร์สะอาดลึกถึงข้างใน<br><span class="hero__highlight">มั่นใจด้วยมาตรฐานช่างมืออาชีพ</span></h1>
        <p class="hero__subtitle">รับประกันงาน 30 วัน | ช่างผ่านการอบรม | ตรงต่อเวลา</p>
        <div class="hero__cta-group">
            <a href="#booking" class="btn btn--primary btn--lg" data-tracking="hero-cta-booking">
                <svg class="btn__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                จองคิวล้างแอร์วันนี้
            </a>
            <a href="<?php echo esc_url( $line_url ); ?>" class="btn btn--line btn--lg" target="_blank" rel="noopener" data-tracking="hero-cta-line">
                <svg class="btn__icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.271.173-.508.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/></svg>
                แอดไลน์เช็คราคา
            </a>
        </div>
        <div class="hero__trust-quick">
            <span>&#9733; 4.9/5 จากรีวิว 2,400+</span>
            <span>&#10003; ช่างมืออาชีพ 50+ คน</span>
            <span>&#10003; บริการแล้ว 15,000+ หลัง</span>
        </div>
    </div>
</section>

<!-- Pain Points Section -->
<section class="pain-points" id="problems">
    <div class="container">
        <h2 class="section__title">แอร์บ้านคุณมีปัญหาเหล่านี้ไหม?</h2>
        <div class="pain-points__grid">
            <div class="pain-card">
                <div class="pain-card__icon">&#x1F321;&#xFE0F;</div>
                <h3 class="pain-card__title">แอร์ไม่เย็น</h3>
                <p class="pain-card__text">เปิดแอร์ทั้งวันแต่ห้องไม่เย็น ค่าไฟพุ่งสูงทุกเดือน</p>
            </div>
            <div class="pain-card">
                <div class="pain-card__icon">&#x1F927;</div>
                <h3 class="pain-card__title">มีกลิ่นอับ</h3>
                <p class="pain-card__text">เปิดแอร์แล้วมีกลิ่นเหม็นอับ เชื้อราสะสม อันตรายต่อสุขภาพ</p>
            </div>
            <div class="pain-card">
                <div class="pain-card__icon">&#x1F4A7;</div>
                <h3 class="pain-card__title">น้ำหยด</h3>
                <p class="pain-card__text">แอร์มีน้ำหยด ท่อน้ำทิ้งอุดตัน สร้างความเสียหายให้พื้นและผนัง</p>
            </div>
            <div class="pain-card">
                <div class="pain-card__icon">&#x1F6AB;</div>
                <h3 class="pain-card__title">หาช่างไว้ใจไม่ได้</h3>
                <p class="pain-card__text">เรียกช่างแล้วทิ้งงาน มาไม่ตรงเวลา ล้างไม่สะอาด</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Highlights Section -->
<section class="highlights" id="services">
    <div class="container">
        <h2 class="section__title">ทำไมต้องเลือกเรา?</h2>
        <p class="section__subtitle">มาตรฐานบริการ Premium ที่คุณวางใจได้</p>
        <div class="highlights__grid">
            <div class="highlight-card">
                <div class="highlight-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                </div>
                <h3 class="highlight-card__title">ล้างด้วยน้ำยาฆ่าเชื้อระดับโรงพยาบาล</h3>
                <p class="highlight-card__text">น้ำยาฆ่าเชื้อโรคและแบคทีเรียได้ถึง 99.9% ปลอดภัยต่อเด็กและสัตว์เลี้ยง ไม่ทิ้งสารตกค้าง</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.5"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 class="highlight-card__title">ช่างผ่านการตรวจประวัติและอบรม</h3>
                <p class="highlight-card__text">ช่างทุกคนผ่านการตรวจประวัติอาชญากรรม อบรมมาตรฐานเทคนิคล้างแอร์ แต่งตัวสุภาพ สะอาด</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3 class="highlight-card__title">ตรงต่อเวลา นัดเวลาไหนมาเวลานั้น</h3>
                <p class="highlight-card__text">ระบบนัดคิวอัตโนมัติ แจ้งเตือนก่อนถึง 30 นาที ไม่ต้องรอ ไม่เสียเวลา มาตรงเวลา 100%</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works" id="how">
    <div class="container">
        <h2 class="section__title">ขั้นตอนง่ายๆ แค่ 3 ขั้นตอน</h2>
        <div class="steps">
            <div class="step">
                <div class="step__number">1</div>
                <h3 class="step__title">จองคิวออนไลน์</h3>
                <p class="step__text">กรอกข้อมูลหรือแอดไลน์ ทีมงานจะติดต่อกลับภายใน 30 นาที</p>
            </div>
            <div class="step__arrow" aria-hidden="true">&#8594;</div>
            <div class="step">
                <div class="step__number">2</div>
                <h3 class="step__title">ช่างเข้าบริการ</h3>
                <p class="step__text">ช่างมาตรงเวลา ล้างแอร์สะอาดลึกถึงข้างใน ใช้เวลา 45-60 นาที</p>
            </div>
            <div class="step__arrow" aria-hidden="true">&#8594;</div>
            <div class="step">
                <div class="step__number">3</div>
                <h3 class="step__title">รับประกัน 30 วัน</h3>
                <p class="step__text">มีปัญหาแจ้งกลับ เราเข้าซ่อมฟรีภายใน 30 วัน ไม่มีค่าใช้จ่ายเพิ่ม</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing" id="pricing">
    <div class="container">
        <h2 class="section__title">ราคาโปรโมชั่นพิเศษ</h2>
        <p class="section__subtitle">ราคาสุดคุ้มสำหรับทุกประเภทแอร์</p>
        <div class="pricing__grid">
            <div class="price-card">
                <div class="price-card__type">แอร์ผนัง (Wall Type)</div>
                <div class="price-card__size">ขนาดไม่เกิน 18,000 BTU</div>
                <div class="price-card__price">
                    <span class="price-card__original">1,200.-</span>
                    <span class="price-card__current">590.-</span>
                </div>
                <ul class="price-card__features">
                    <li>&#10003; ล้างคอยล์เย็น + ถาดน้ำทิ้ง</li>
                    <li>&#10003; ฆ่าเชื้อแบคทีเรีย</li>
                    <li>&#10003; ตรวจเช็คระบบ</li>
                    <li>&#10003; รับประกัน 30 วัน</li>
                </ul>
                <a href="#booking" class="btn btn--primary" data-tracking="pricing-cta-wall">จองคิวเลย</a>
            </div>
            <div class="price-card price-card--featured">
                <div class="price-card__badge">ยอดนิยม</div>
                <div class="price-card__type">แอร์ผนัง (Wall Type)</div>
                <div class="price-card__size">ขนาด 18,001 - 36,000 BTU</div>
                <div class="price-card__price">
                    <span class="price-card__original">1,800.-</span>
                    <span class="price-card__current">890.-</span>
                </div>
                <ul class="price-card__features">
                    <li>&#10003; ล้างคอยล์เย็น + คอยล์ร้อน</li>
                    <li>&#10003; ฆ่าเชื้อแบคทีเรีย</li>
                    <li>&#10003; ตรวจเช็คน้ำยาแอร์</li>
                    <li>&#10003; ตรวจเช็คระบบไฟฟ้า</li>
                    <li>&#10003; รับประกัน 30 วัน</li>
                </ul>
                <a href="#booking" class="btn btn--primary" data-tracking="pricing-cta-wall-lg">จองคิวเลย</a>
            </div>
            <div class="price-card">
                <div class="price-card__type">แอร์แขวน / แอร์ฝัง (Cassette)</div>
                <div class="price-card__size">ทุกขนาด</div>
                <div class="price-card__price">
                    <span class="price-card__original">2,500.-</span>
                    <span class="price-card__current">1,290.-</span>
                </div>
                <ul class="price-card__features">
                    <li>&#10003; ล้างคอยล์เย็นแบบถอดล้าง</li>
                    <li>&#10003; ฆ่าเชื้อแบคทีเรีย</li>
                    <li>&#10003; ตรวจเช็คน้ำยาแอร์</li>
                    <li>&#10003; ตรวจเช็คระบบไฟฟ้า</li>
                    <li>&#10003; รับประกัน 30 วัน</li>
                </ul>
                <a href="#booking" class="btn btn--primary" data-tracking="pricing-cta-cassette">จองคิวเลย</a>
            </div>
        </div>
    </div>
</section>

<!-- Trust Signals / Reviews Section -->
<section class="trust" id="reviews">
    <div class="container">
        <h2 class="section__title">ลูกค้ากว่า 15,000 หลังไว้วางใจ</h2>
        <div class="trust__stats">
            <div class="trust__stat">
                <div class="trust__stat-number">4.9<span class="trust__stat-star">&#9733;</span></div>
                <div class="trust__stat-label">คะแนนรีวิวเฉลี่ย</div>
            </div>
            <div class="trust__stat">
                <div class="trust__stat-number">15,000+</div>
                <div class="trust__stat-label">หลังที่บริการแล้ว</div>
            </div>
            <div class="trust__stat">
                <div class="trust__stat-number">98%</div>
                <div class="trust__stat-label">ลูกค้าแนะนำต่อ</div>
            </div>
        </div>
        <div class="reviews__grid">
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"ช่างมาตรงเวลามาก แต่งตัวสุภาพ ล้างแอร์สะอาดมาก น้ำที่ล้างออกมาดำมาก เปิดแอร์ทีนี้เย็นฉ่ำเลย คุ้มค่ามากๆ"</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">ส</div>
                    <div>
                        <div class="review-card__name">คุณสมใจ ว.</div>
                        <div class="review-card__location">คอนโด ลุมพินี สุขุมวิท</div>
                    </div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"ใช้บริการมา 3 ครั้งแล้ว ทุกครั้งประทับใจ ช่างอธิบายทุกขั้นตอน บอกปัญหาที่เจอ แนะนำวิธีดูแลแอร์ด้วย ดีมากค่ะ"</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">น</div>
                    <div>
                        <div class="review-card__name">คุณนภา ก.</div>
                        <div class="review-card__location">บ้านเดี่ยว รามอินทรา</div>
                    </div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"จองผ่านไลน์ ได้คิวภายในวันรุ่งขึ้นเลย ช่างมาตรงเวลา ทำงานเรียบร้อย ปูผ้ากันเลอะ หลังล้างเสร็จทำความสะอาดให้ด้วย"</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">พ</div>
                    <div>
                        <div class="review-card__name">คุณพิชัย ม.</div>
                        <div class="review-card__location">ทาวน์โฮม บางนา</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trust Badges -->
        <div class="trust__badges">
            <div class="trust__badge">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <span>รับประกันงาน 30 วัน</span>
            </div>
            <div class="trust__badge">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <span>ช่างผ่านการตรวจประวัติ</span>
            </div>
            <div class="trust__badge">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="1.5"><rect x="1" y="3" width="15" height="13"/><polygon points="23 7 16 12 16 2 23 7"/></svg>
                <span>มีรูปก่อน-หลัง ทุกงาน</span>
            </div>
        </div>
    </div>
</section>

<!-- Booking / Lead Form Section -->
<section class="booking" id="booking">
    <div class="container">
        <div class="booking__wrapper">
            <div class="booking__info">
                <h2 class="section__title section__title--light">จองคิวล้างแอร์วันนี้</h2>
                <p class="booking__desc">กรอกข้อมูลด้านล่าง ทีมงานจะติดต่อกลับภายใน 30 นาที เพื่อยืนยันนัดหมายและประเมินราคา</p>
                <div class="booking__benefits">
                    <div class="booking__benefit">&#10003; ประเมินราคาฟรี ไม่มีค่าใช้จ่าย</div>
                    <div class="booking__benefit">&#10003; จองวันนี้ รับส่วนลดพิเศษ</div>
                    <div class="booking__benefit">&#10003; ยกเลิกได้ฟรีก่อน 24 ชั่วโมง</div>
                </div>
            </div>
            <div class="booking__form-wrapper">
                <form id="leadForm" class="lead-form" novalidate>
                    <div class="lead-form__group">
                        <label for="lead_name" class="lead-form__label">ชื่อ - นามสกุล</label>
                        <input type="text" id="lead_name" name="lead_name" class="lead-form__input" placeholder="เช่น สมชาย ใจดี" required autocomplete="name">
                    </div>
                    <div class="lead-form__group">
                        <label for="lead_phone" class="lead-form__label">เบอร์โทรศัพท์</label>
                        <input type="tel" id="lead_phone" name="lead_phone" class="lead-form__input" placeholder="เช่น 081-234-5678" required autocomplete="tel" inputmode="tel">
                    </div>
                    <input type="hidden" name="action" value="fdt_lead_form">
                    <input type="hidden" name="fdt_nonce" value="<?php echo esc_attr( wp_create_nonce( 'fdt_lead_form' ) ); ?>">
                    <button type="submit" class="btn btn--primary btn--lg btn--full" data-tracking="form-cta-submit" id="submitBtn">
                        <span id="submitText">จองคิวล้างแอร์วันนี้ - ฟรีประเมินราคา</span>
                        <span id="submitLoading" class="btn__loading" style="display:none;">กำลังส่ง...</span>
                    </button>
                    <div id="formMessage" class="lead-form__message" style="display:none;"></div>
                </form>
                <p class="booking__disclaimer">ข้อมูลของคุณจะถูกเก็บเป็นความลับ ใช้เพื่อติดต่อกลับเท่านั้น</p>
                <div class="booking__or">
                    <span>หรือ</span>
                </div>
                <a href="<?php echo esc_url( $line_url ); ?>" class="btn btn--line btn--lg btn--full" target="_blank" rel="noopener" data-tracking="form-cta-line">
                    <svg class="btn__icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.271.173-.508.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/></svg>
                    แอดไลน์เช็คราคาโปรโมชั่น
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq" id="faq">
    <div class="container">
        <h2 class="section__title">คำถามที่พบบ่อย</h2>
        <div class="faq__list">
            <details class="faq__item">
                <summary class="faq__question">ล้างแอร์ใช้เวลานานเท่าไหร่?</summary>
                <p class="faq__answer">โดยปกติใช้เวลาประมาณ 45-60 นาทีต่อเครื่อง ขึ้นอยู่กับสภาพแอร์และความสกปรก</p>
            </details>
            <details class="faq__item">
                <summary class="faq__question">ต้องเตรียมอะไรก่อนช่างมาไหม?</summary>
                <p class="faq__answer">ไม่ต้องเตรียมอะไรเลยค่ะ ช่างจะนำอุปกรณ์มาเองทั้งหมด แค่เปิดให้ช่างเข้าถึงตัวแอร์ได้</p>
            </details>
            <details class="faq__item">
                <summary class="faq__question">รับประกันอะไรบ้าง?</summary>
                <p class="faq__answer">รับประกันงาน 30 วัน หากหลังล้างแอร์แล้วยังมีปัญหาเดิม เราเข้าบริการซ้ำฟรี ไม่มีค่าใช้จ่ายเพิ่มเติม</p>
            </details>
            <details class="faq__item">
                <summary class="faq__question">พื้นที่ให้บริการครอบคลุมที่ไหนบ้าง?</summary>
                <p class="faq__answer">ให้บริการทั่วกรุงเทพฯ และปริมณฑล (นนทบุรี, ปทุมธานี, สมุทรปราการ) ไม่คิดค่าเดินทาง</p>
            </details>
            <details class="faq__item">
                <summary class="faq__question">ชำระเงินอย่างไร?</summary>
                <p class="faq__answer">ชำระหลังงานเสร็จ รับทั้งเงินสด โอนผ่านธนาคาร และ PromptPay สะดวกทุกช่องทาง</p>
            </details>
        </div>
    </div>
</section>

<!-- Sticky CTA (Mobile) -->
<div class="sticky-cta" id="stickyCta">
    <a href="#booking" class="btn btn--primary btn--sm" data-tracking="sticky-cta-booking">จองคิวล้างแอร์</a>
    <a href="tel:<?php echo esc_attr( str_replace( '-', '', $phone ) ); ?>" class="btn btn--outline btn--sm" data-tracking="sticky-cta-call">
        <svg class="btn__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        โทรเลย
    </a>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> บริการล้างแอร์ Premium. สงวนลิขสิทธิ์.</p>
        <p class="footer__contact">โทร: <a href="tel:<?php echo esc_attr( str_replace( '-', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a> | <a href="<?php echo esc_url( $line_url ); ?>" target="_blank" rel="noopener">LINE: @cleanair-premium</a></p>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Conversion Tracking Script (dataLayer push) -->
<script>
window.dataLayer = window.dataLayer || [];
</script>
</body>
</html>
