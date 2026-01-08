# tailwind-threejs-wp-theme

このプロジェクトは、Tailwind CSS と Three.js を活用したカスタム WordPress テーマを開発するためのリポジトリです。
現在は `wp-content` ディレクトリ全体を管理対象としています。

## プロジェクトの概要

- **Tailwind CSS**: ユーティリティファーストなCSSフレームワークによる効率的なスタイリング。
- **Three.js**: WebGLを使用した3Dグラフィックスの実装。
- **WordPress**: コンコンテンツ管理システムとしての基盤。

## ディレクトリ構成

- `themes/`: テーマディレクトリ。開発中のメインテーマおよびデフォルトテーマが含まれます。
- `plugins/`: プロジェクトで使用するプラグイン。
- `uploads/`: アップロードされたメディアファイル（`.gitignore` により管理対象外）。

## 開発環境のセットアップ

1. **WordPressのインストール**:
   ローカル環境（Local, Dockerなど）にWordPressを展開し、このリポジトリの内容を `wp-content` として配置してください。

2. **依存関係のインストール**:
   テーマディレクトリ内で必要なパッケージをインストールします（テーマ作成後）。
   ```bash
   cd themes/your-theme-name
   npm install
   ```

3. **ビルドと開発**:
   開発サーバーの起動やビルドコマンドを実行します。
   ```bash
   npm run dev
   # または
   npm run build
   ```

## ライセンス

このプロジェクトは MIT ライセンス (または WordPress テーマの派生元に準拠した GPL) の下で公開されています。
