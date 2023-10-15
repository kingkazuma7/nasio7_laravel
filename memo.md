## sec02
- resources/views/components/tests/card.blade.php
  - コンポーネントを作成
    - コンポーネント側で変数を設定
  - resources/views/tests/component-test1.blade.phpでcardコンポ使用
- app/Http/Controllers/ComponentTestController.php コントローラー
  - コントローラーに変数
  - `:message="$message"` 属性じゃないので先頭に`:`