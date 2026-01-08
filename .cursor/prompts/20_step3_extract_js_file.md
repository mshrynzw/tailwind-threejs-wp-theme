# Step 3：three.jsコードをJSファイルに分離する（日本語・丁寧語で回答してください）

## 目的
Step 2 で HTMLブロックに書いていた three.js コードを、テーマ配下のJSファイルへ分離してください。

### 出力先（例）
- `wp-content/themes/{theme-or-child}/assets/js/webgl-hero.js`

## 言語
- 回答はすべて日本語で、丁寧語（です・ます調）で記述してください。

## 要件
- HTMLブロック側には、コンテナとcanvas（＋必要なら文字要素）だけを残してください。
- JSファイル側で以下を行ってください。
  - canvas を ID で取得
  - scene/camera/renderer 初期化
  - resize処理（必須）
  - requestAnimationFrame によるアニメーション（必須）
- 「貼り付けるだけで動く」レベルの完成度で提示してください。

## 出力
1) `webgl-hero.js` の **全文**
2) 分離後のカスタムHTMLブロック（最小）  
3) どのフォルダに作るか（Local環境での探し方）も簡潔に説明してください
