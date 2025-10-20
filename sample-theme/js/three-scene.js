/**
 * Three.js Starfield Background
 */
(function() {
    'use strict';

    // Check for reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Get canvas element
    const canvas = document.getElementById('starfield-canvas');
    if (!canvas) return;

    // Check for WebGL support
    try {
        const testCanvas = document.createElement('canvas');
        const gl = testCanvas.getContext('webgl') || testCanvas.getContext('experimental-webgl');
        if (!gl) {
            console.warn('WebGL not supported, starfield disabled');
            return;
        }
    } catch (e) {
        console.warn('WebGL not available, starfield disabled');
        return;
    }

    // Scene setup
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: false
    });

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Create starfield
    const starsGeometry = new THREE.BufferGeometry();
    const starCount = 3000;
    const positions = new Float32Array(starCount * 3);
    const colors = new Float32Array(starCount * 3);

    for (let i = 0; i < starCount * 3; i += 3) {
        // Position stars in a sphere around the camera
        positions[i] = (Math.random() - 0.5) * 2000;
        positions[i + 1] = (Math.random() - 0.5) * 2000;
        positions[i + 2] = (Math.random() - 0.5) * 1000 - 200;

        // Subtle color variation (bluish-white)
        const brightness = 0.8 + Math.random() * 0.2;
        colors[i] = brightness * 0.9;
        colors[i + 1] = brightness * 0.95;
        colors[i + 2] = brightness;
    }

    starsGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    starsGeometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

    const starsMaterial = new THREE.PointsMaterial({
        size: 2,
        vertexColors: true,
        transparent: true,
        opacity: 0.8,
        sizeAttenuation: true
    });

    const stars = new THREE.Points(starsGeometry, starsMaterial);
    scene.add(stars);

    camera.position.z = 5;

    // Animation
    let animationId;
    const animationSpeed = prefersReducedMotion ? 0.0001 : 0.0002;

    function animate() {
        animationId = requestAnimationFrame(animate);

        // Gentle rotation
        if (!prefersReducedMotion) {
            stars.rotation.y += animationSpeed;
            stars.rotation.x += animationSpeed * 0.5;
        }

        renderer.render(scene, camera);
    }

    // Handle window resize
    function handleResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    }

    window.addEventListener('resize', handleResize);

    // Start animation
    animate();

    // Cleanup on page unload
    window.addEventListener('beforeunload', function() {
        if (animationId) {
            cancelAnimationFrame(animationId);
        }
        window.removeEventListener('resize', handleResize);
        renderer.dispose();
        starsGeometry.dispose();
        starsMaterial.dispose();
    });
})();
