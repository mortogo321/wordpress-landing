# WordPress Landing Page - Premium AC Cleaning Service

A coding assessment: a landing page for a "Premium home AC cleaning by professional technicians" service, built with a custom WordPress theme (no page builder).

## Tech Stack

- **WordPress 6.9** + custom theme (no page builder)
- **Mobile-first CSS** — system fonts, CSS custom properties
- **Vanilla JavaScript** — no jQuery, ~4KB
- **Docker Compose** — WordPress + MySQL, ready to run

## Quick Start

```bash
# Start services
docker compose up -d

# Open browser
open http://localhost:8080
```

1. Complete the standard WordPress install
2. Go to **Appearance → Themes → activate "Flavor Developer Test - Landing Page"**
3. Go to **Customize → Landing Page Settings** to set the LINE URL, phone number, and GTM ID

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

| Requirement | Implementation |
|---|---|
| **Trust Signals** | 3x five-star reviews, trust badges, stats counter (15,000+ homes served, 4.9 rating) |
| **Service Highlights** | Sanitizing solution, background-checked technicians, punctuality |
| **Clear CTA** | "Book AC cleaning today" + "Add LINE for pricing" buttons + sticky mobile CTA |
| **Lead Form / Contact** | Name/phone AJAX form + LINE OA button + direct call button |

### Technical Requirements

| Requirement | Solution |
|---|---|
| **Mobile-First** | Mobile-first CSS, sticky CTA, touch-friendly 48px+ tap targets |
| **PageSpeed 85+** | No jQuery, system fonts, inline SVG, removed emoji/block-library/wp_head bloat, deferred scripts |
| **Tracking Setup** | GTM via Customizer, `dataLayer.push()` on every CTA click and form submit |

### Additional Details

- **Lead CPT** — customer submissions stored under a "Leads" menu in WP Admin
- **AJAX Form** — submits without a page refresh, with Thai phone number validation
- **FAQ** — native `<details>` element (accessible, no JS)
- **Pricing Section** — 3 promotional packages with a "Most Popular" badge

## Layout Strategy

Sections are ordered along the sales funnel to drive conversions:

1. **Hero** — key message + immediate CTA for ready-to-buy visitors
2. **Pain Points** — surfaces the problems the service solves (creates urgency)
3. **Highlights** — answers "why choose us" (builds value)
4. **How It Works** — 3 simple steps (lowers the barrier to entry)
5. **Pricing** — promotional pricing with the original price struck through (creates urgency)
6. **Reviews + Trust** — social proof before the form (overcomes objections)
7. **Booking Form** — the main conversion point (captures the lead)
8. **FAQ** — answers remaining questions (reduces friction)
9. **Sticky CTA** — stays on screen on mobile (never misses a conversion)

## Customizer Settings

| Setting | Description |
|---|---|
| LINE OA URL | Link to the LINE Official Account |
| Phone Number | Contact phone number |
| GTM Container ID | Google Tag Manager ID (e.g. GTM-XXXXXXX) |
