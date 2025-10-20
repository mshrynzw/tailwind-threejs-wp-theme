# Sample Theme

A modern WordPress theme featuring glassmorphism design, Tailwind CSS, and a Three.js starfield background.

## Features

- **Glassmorphism UI**: Dark theme with glass-like panels and backdrop blur effects
- **Three.js Starfield**: Animated starfield background with gentle parallax effect
- **Tailwind CSS**: Utility-first CSS framework for rapid styling
- **Responsive Design**: Mobile-first approach that works on all devices
- **Accessibility**: WCAG AA compliant with proper ARIA labels and keyboard navigation
- **Smooth Animations**: Fade-in on scroll with IntersectionObserver
- **One-page Layout**: Landing page style with smooth scrolling between sections

## Requirements

- Node.js (v14 or higher)
- npm
- WordPress 5.0 or higher

## Installation

### 1. Install Dependencies

```bash
npm install
```

### 2. Build CSS

For production (minified):
```bash
npm run build
```

For development (with watch mode):
```bash
npm run dev
```

### 3. Deploy to WordPress

1. Zip the entire `sample-theme` folder
2. Go to WordPress Admin → Appearance → Themes
3. Click "Add New" → "Upload Theme"
4. Upload the zip file and activate

## File Structure

```
sample-theme/
├── assets/
│   └── logo.svg              # Site logo
├── js/
│   ├── three-scene.js        # Three.js starfield animation
│   └── fade-in.js            # Scroll-based fade-in animations
├── src/
│   └── styles.css            # Tailwind source (input)
├── style.css                 # WordPress theme header + compiled CSS (output)
├── index.php                 # Main template file
├── header.php                # Header template
├── footer.php                # Footer template
├── functions.php             # Theme functions and enqueues
├── tailwind.config.js        # Tailwind configuration
├── postcss.config.js         # PostCSS configuration
├── package.json              # npm dependencies and scripts
└── README.md                 # This file
```

## Development

### CSS Development

The theme uses Tailwind CSS. All Tailwind directives are in `src/styles.css`, and the compiled output goes to `style.css` (the root file).

To start developing with live CSS updates:

```bash
npm run dev
```

This watches for changes in PHP and JS files and rebuilds Tailwind automatically.

### JavaScript

- **Three.js** is loaded from CDN (jsDelivr)
- `three-scene.js` creates the starfield background
- `fade-in.js` handles scroll-based fade-in animations

Both scripts respect `prefers-reduced-motion` settings.

## Customization

### Colors

Edit `tailwind.config.js` to customize colors, spacing, and other design tokens.

### Content

Edit `index.php` to change the landing page content. The theme includes three main sections:

1. **Hero**: Main headline and call-to-action
2. **About**: Self-introduction section (自己紹介)
3. **Contact**: Contact information (お問い合わせ)

### Three.js Starfield

Modify `js/three-scene.js` to adjust:
- Star count (default: 3000)
- Animation speed
- Star colors and sizes
- Camera position

## Accessibility

The theme follows accessibility best practices:

- Semantic HTML5 elements
- Proper heading hierarchy
- ARIA labels where needed
- Keyboard navigation support
- Focus indicators
- Respects `prefers-reduced-motion`
- WCAG AA color contrast

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- WebGL support required for starfield (gracefully degrades if unavailable)
- Responsive breakpoints: mobile, tablet, desktop

## License

MIT License

## Credits

- Built with [Tailwind CSS](https://tailwindcss.com/)
- 3D graphics powered by [Three.js](https://threejs.org/)
- Created by Bolt.new
