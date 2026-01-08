# デバッグ・チェックリスト（日本語・丁寧語で回答してください）

## 言語
- 回答はすべて日本語で、丁寧語（です・ます調）で記述してください。

## 目的
three.js / Tailwind が期待通りに動かない場合に、上から順に確認できるチェックリストを提示してください。
各項目は「何を見るか」「よくある原因」「具体的な直し方」を含めてください。

## チェック順（例）
1) Local側：サイトが START になっているか
2) WordPress：対象ページに正しいブロックが入っているか
3) ブラウザ：コンソール（F12）エラー確認
4) canvas：高さが0になっていないか（表示領域があるか）
5) 読み込み：Networkタブで three.module.js / webgl-hero.js が取得できているか
6) パス：テーマの assets/js 配下が正しいか
7) キャッシュ：Ctrl+F5 のハードリロード
8) 競合：プラグインや最適化（minify）との競合

## よくあるエラーに対する対処（必須）
- "Cannot use import statement outside a module"
- "THREE is not defined"
- 画面が真っ白（canvasの高さ0 / rendererサイズ問題）
- file:// 起因のCORS（Localの http:// で見るべき）
