# WordPress Landing Page - บริการล้างแอร์บ้านแบบ Premium

แบบทดสอบตำแหน่ง WordPress Developer - สร้างหน้า Landing Page สำหรับบริการ "ล้างแอร์บ้านแบบ Premium โดยช่างมืออาชีพ"

## Tech Stack

- **WordPress 6.7** + Custom Theme (ไม่ใช้ Page Builder)
- **Mobile-First CSS** - System fonts, CSS Custom Properties
- **Vanilla JavaScript** - ไม่ใช้ jQuery, ~4KB
- **Docker Compose** - WordPress + MySQL พร้อมใช้งาน

## Quick Start

```bash
# Start services
docker compose up -d

# Open browser
open http://localhost:8080
```

1. ติดตั้ง WordPress ตามปกติ
2. ไปที่ **Appearance → Themes → Activate "Flavor Developer Test"**
3. ไปที่ **Customize → Landing Page Settings** → ตั้งค่า LINE URL, เบอร์โทร, GTM ID

## Project Structure

```
wp-content/themes/flavor-developer-test/
├── style.css                 # Theme metadata
├── functions.php             # Theme functions & performance optimizations
├── template-landing.php      # Landing page template
├── front-page.php            # Auto-loads landing page on homepage
├── index.php                 # Fallback template
└── assets/
    ├── css/landing.css       # Mobile-first stylesheet (~12KB)
    └── js/landing.js         # Form handling, tracking, sticky CTA (~4KB)
```

## Features

### Assets ตามบรีฟ

| Requirement | Implementation |
|---|---|
| **Trust Signals** | รีวิว 5 ดาว x3, trust badges, stats counter (15,000+ หลัง, 4.9 คะแนน) |
| **Service Highlights** | น้ำยาฆ่าเชื้อ, ช่างผ่านตรวจประวัติ, ตรงต่อเวลา |
| **Clear CTA** | ปุ่ม "จองคิวล้างแอร์วันนี้" + "แอดไลน์เช็คราคา" + Sticky CTA มือถือ |
| **Lead Form / Contact** | ฟอร์มชื่อ-เบอร์โทร (AJAX) + ปุ่ม LINE OA + ปุ่มโทรตรง |

### Technical Requirements

| Requirement | Solution |
|---|---|
| **Mobile-First** | CSS mobile-first, sticky CTA, touch-friendly 48px+ tap targets |
| **PageSpeed 85+** | No jQuery, system fonts, inline SVG, removed emoji/block-library/wp_head bloat, deferred scripts |
| **Tracking Setup** | GTM via Customizer, `dataLayer.push()` ทุก CTA click + form submit |

### เพิ่มเติม

- **Lead CPT** - ข้อมูลลูกค้าเก็บใน WP Admin เมนู "Leads"
- **AJAX Form** - ส่งฟอร์มไม่ต้อง refresh หน้า พร้อม validation เบอร์โทรไทย
- **FAQ** - ใช้ native `<details>` element (accessible, no JS)
- **Pricing Section** - ราคาโปรโมชั่น 3 แพ็กเกจ พร้อม "ยอดนิยม" badge

## Layout Strategy (Work Report)

วาง Layout ตาม Sales Funnel เพื่อปิดการขาย:

1. **Hero** → Hook ด้วย Key Message + CTA ทันที (คนพร้อมซื้อกดได้เลย)
2. **Pain Points** → กระตุ้นปัญหาที่ลูกค้าเจอ (สร้าง urgency)
3. **Highlights** → ตอบ "ทำไมต้องเลือกเรา" (build value)
4. **How It Works** → 3 ขั้นตอนง่ายๆ (lower barrier)
5. **Pricing** → ราคาโปร + ขีดฆ่าราคาเดิม (create urgency)
6. **Reviews + Trust** → Social proof ก่อนฟอร์ม (overcome objections)
7. **Booking Form** → จุด conversion หลัก (capture lead)
8. **FAQ** → ตอบข้อสงสัยสุดท้าย (reduce friction)
9. **Sticky CTA** → ติดหน้าจอมือถือตลอด (never miss conversion)

## Customizer Settings

| Setting | Description |
|---|---|
| LINE OA URL | ลิงก์ LINE Official Account |
| Phone Number | เบอร์โทรศัพท์ติดต่อ |
| GTM Container ID | Google Tag Manager ID (e.g. GTM-XXXXXXX) |
