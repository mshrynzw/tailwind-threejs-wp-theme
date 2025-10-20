<?php get_header(); ?>

<canvas id="starfield-canvas" class="fixed inset-0 -z-10"></canvas>

<main>
    <!-- HERO Section -->
    <section class="relative min-h-screen flex items-center justify-center px-4 pt-24 pb-12">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0b0f19]/50 to-[#0b0f19]"></div>

        <div class="relative max-w-screen-lg mx-auto text-center fade-section">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Welcome to Sample Theme
            </h1>
            <p class="text-xl md:text-2xl text-white/80 mb-8 max-w-2xl mx-auto">
                モダンなデザインと美しいアニメーションで作られたWordPressテーマ
            </p>
            <a href="#about"
               class="inline-block bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-8 py-4 text-lg font-medium hover:bg-white/20 hover:ring-2 hover:ring-white/50 transition-all focus:outline-none focus:ring-2 focus:ring-white/50">
                もっと見る
            </a>
        </div>
    </section>

    <!-- ABOUT Section -->
    <section id="about" class="py-20 px-4">
        <div class="max-w-screen-lg mx-auto">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-lg p-8 md:p-12 fade-section">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">自己紹介</h2>
                <div class="prose prose-invert prose-lg max-w-none">
                    <p class="text-white/90 leading-relaxed mb-4">
                        Sample Themeは、最新のWeb技術を駆使して作られたWordPressテーマです。Tailwind CSSによる柔軟なスタイリング、Three.jsによる美しい星空の背景、そしてガラスモーフィズムデザインが特徴です。
                    </p>
                    <p class="text-white/90 leading-relaxed mb-4">
                        レスポンシブデザインを採用しており、モバイルからデスクトップまで、あらゆるデバイスで美しく表示されます。アクセシビリティにも配慮し、すべてのユーザーにとって使いやすいサイトを実現します。
                    </p>
                    <p class="text-white/90 leading-relaxed">
                        スムーズなスクロールアニメーション、視差効果、そして細部にまでこだわったインタラクションにより、訪問者に印象的な体験を提供します。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT Section -->
    <section id="contact" class="py-20 px-4 pb-32">
        <div class="max-w-screen-lg mx-auto">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-lg p-8 md:p-12 fade-section text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">お問い合わせ</h2>
                <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                    ご質問やご相談がございましたら、お気軽にお問い合わせください。できるだけ早くご返信いたします。
                </p>
                <a href="mailto:info@example.com"
                   class="inline-block bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-8 py-4 text-lg font-medium hover:bg-white/20 hover:ring-2 hover:ring-white/50 transition-all focus:outline-none focus:ring-2 focus:ring-white/50">
                    メールを送る
                </a>
            </div>
        </div>
    </section>
</main>

<style>
html {
    scroll-behavior: smooth;
}

@media (prefers-reduced-motion: reduce) {
    html {
        scroll-behavior: auto;
    }
}

.fade-section {
    opacity: 0;
    transform: translateY(12px);
    transition: opacity 1s cubic-bezier(0.4, 0, 0.2, 1),
                transform 1s cubic-bezier(0.4, 0, 0.2, 1);
}

.fade-section.is-inview {
    opacity: 1;
    transform: translateY(0);
}

@media (prefers-reduced-motion: reduce) {
    .fade-section {
        opacity: 1;
        transform: none;
        transition: none;
    }
}
</style>

<?php get_footer(); ?>
