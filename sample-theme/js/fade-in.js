/**
 * Fade-in on Scroll Animation
 */
(function() {
    'use strict';

    // Check for reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // If reduced motion is preferred, show all sections immediately
    if (prefersReducedMotion) {
        const sections = document.querySelectorAll('.fade-section');
        sections.forEach(section => {
            section.classList.add('is-inview');
        });
        return;
    }

    // Intersection Observer options
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -10% 0px',
        threshold: 0.1
    };

    // Callback for intersection observer
    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-inview');
            }
        });
    };

    // Create observer
    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Observe all fade sections
    const sections = document.querySelectorAll('.fade-section');
    sections.forEach(section => {
        observer.observe(section);
    });

    // Cleanup on page unload
    window.addEventListener('beforeunload', function() {
        observer.disconnect();
    });
})();
