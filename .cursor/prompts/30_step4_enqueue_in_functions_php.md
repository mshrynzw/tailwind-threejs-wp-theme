# Step 4：functions.php でJS/CSSを正しく読み込む（日本語・丁寧語で回答してください）

## 目的
分離したJSファイルを、WordPressの正しい方法で読み込んでください（enqueue）。
- `/assets/js/webgl-hero.js` を `functions.php` から読み込みたいです。

可能であれば、Tailwind CDN を「ページ全体」に効かせる方法も提示してください（ただし安全優先）。

## 言語
- 回答はすべて日本語で、丁寧語（です・ます調）で記述してください。

## 要件（重要）
- `wp_enqueue_script` を使ってください。
- handle名は固有（例：`kaori-webgl-hero`）にしてください。
- 可能ならフッター読み込み（`in_footer=true`）にしてください。
- 初心者が壊さないために、以下も必ず提示してください。
  - 変更前にバックアップする手順
  - どこに貼るか（functions.php の位置）
- 「Playgroundページのときだけ読み込む」条件分岐例（`is_page`）も可能なら提示してください。

## Tailwindについて
- 基本はフェーズ1（CDN）です。
- CDNをサイト全体に効かせる場合は、できるだけ安全な形（enqueueまたは最小の head 出力）で提示してください。

## 出力
- `functions.php` に貼るコードを、コピペ可能な形で提示してください。
