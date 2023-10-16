## sec02
- resources/views/components/tests/card.blade.php
  - コンポーネントを作成
    - コンポーネント側で変数を設定
  - resources/views/tests/component-test1.blade.phpでcardコンポ使用
- app/Http/Controllers/ComponentTestController.php コントローラー
  - コントローラーに変数
  - `:message="$message"` 属性じゃないので先頭に`:`
- クラスベース作成
  - php artisan make:component TestClassBase
  - `app/View/Components/TestClassBase.php`
  - `resources/views/components/tests/test-class-base-component.blade.php`
  - 基本bladeコンポ
  - 変数分離ならクラスベース

## sec03
- ライフサイクル
  - サービスコンテナ 重要
  - web.phpでRoute コントローラー追記
   -  php artisan make:controller LifeCycleTestController　作成
   - コントローラーのなかでshowServiceContainerTestメソッドが必要