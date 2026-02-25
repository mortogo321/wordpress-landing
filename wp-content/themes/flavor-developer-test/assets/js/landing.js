/**
 * Flavor Developer Test - Landing Page JavaScript
 * Lightweight, no dependencies. Handles form submission, tracking, and sticky CTA.
 */
(function () {
    'use strict';

    /**
     * Sticky CTA - show after scrolling past hero.
     */
    function initStickyCta() {
        var stickyCta = document.getElementById('stickyCta');
        var hero = document.getElementById('hero');
        if (!stickyCta || !hero) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    stickyCta.classList.remove('visible');
                } else {
                    stickyCta.classList.add('visible');
                }
            });
        }, { threshold: 0 });

        observer.observe(hero);
    }

    /**
     * Lead Form Submission via AJAX.
     */
    function initLeadForm() {
        var form = document.getElementById('leadForm');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var nameInput = document.getElementById('lead_name');
            var phoneInput = document.getElementById('lead_phone');
            var submitBtn = document.getElementById('submitBtn');
            var submitText = document.getElementById('submitText');
            var submitLoading = document.getElementById('submitLoading');
            var formMessage = document.getElementById('formMessage');

            // Reset states
            nameInput.classList.remove('error');
            phoneInput.classList.remove('error');
            formMessage.style.display = 'none';

            // Validate
            var name = nameInput.value.trim();
            var phone = phoneInput.value.trim().replace(/[\s\-]/g, '');
            var hasError = false;

            if (!name) {
                nameInput.classList.add('error');
                hasError = true;
            }

            if (!phone || !/^0[0-9]{8,9}$/.test(phone)) {
                phoneInput.classList.add('error');
                hasError = true;
            }

            if (hasError) return;

            // Loading state
            submitBtn.disabled = true;
            submitText.style.display = 'none';
            submitLoading.style.display = 'inline-flex';

            // Send AJAX request
            var formData = new FormData(form);

            // Check if fdtAjax is available (WordPress environment)
            var ajaxUrl = (typeof fdtAjax !== 'undefined') ? fdtAjax.ajaxurl : '';

            if (ajaxUrl) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', ajaxUrl, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        submitBtn.disabled = false;
                        submitText.style.display = 'inline';
                        submitLoading.style.display = 'none';

                        var response;
                        try {
                            response = JSON.parse(xhr.responseText);
                        } catch (err) {
                            response = null;
                        }

                        if (xhr.status === 200 && response && response.success) {
                            showMessage(formMessage, response.data.message, 'success');
                            form.reset();
                            trackConversion('form_submit', { lead_id: response.data.lead_id });
                        } else {
                            var errorMsg = (response && response.data && response.data.message)
                                ? response.data.message
                                : 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง';
                            showMessage(formMessage, errorMsg, 'error');
                        }
                    }
                };
                xhr.send(formData);
            } else {
                // Fallback: simulate success for demo/non-WP environments
                setTimeout(function () {
                    submitBtn.disabled = false;
                    submitText.style.display = 'inline';
                    submitLoading.style.display = 'none';
                    showMessage(formMessage, 'ขอบคุณค่ะ! ทีมงานจะติดต่อกลับภายใน 30 นาที', 'success');
                    form.reset();
                    trackConversion('form_submit', {});
                }, 800);
            }
        });
    }

    /**
     * Show form message.
     */
    function showMessage(el, message, type) {
        el.textContent = message;
        el.className = 'lead-form__message lead-form__message--' + type;
        el.style.display = 'block';
    }

    /**
     * Conversion Tracking - pushes events to dataLayer for GTM.
     */
    function trackConversion(eventName, data) {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: eventName,
            conversion_type: 'lead',
            conversion_data: data
        });
    }

    /**
     * CTA Click Tracking.
     */
    function initClickTracking() {
        document.addEventListener('click', function (e) {
            var btn = e.target.closest('[data-tracking]');
            if (!btn) return;

            var trackingId = btn.getAttribute('data-tracking');
            trackConversion('cta_click', { cta_id: trackingId });
        });
    }

    /**
     * Smooth scroll for anchor links.
     */
    function initSmoothScroll() {
        document.addEventListener('click', function (e) {
            var link = e.target.closest('a[href^="#"]');
            if (!link) return;

            var targetId = link.getAttribute('href').substring(1);
            var target = document.getElementById(targetId);
            if (!target) return;

            e.preventDefault();
            var offset = 20;
            var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
            window.scrollTo({ top: targetPosition, behavior: 'smooth' });
        });
    }

    /**
     * Initialize all modules.
     */
    function init() {
        initStickyCta();
        initLeadForm();
        initClickTracking();
        initSmoothScroll();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
