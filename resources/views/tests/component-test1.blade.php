<x-tests.app>
  <x-slot name="header">ヘッダー1</x-slot>
  コンポ1
  <x-tests.card title="タイトル1" content="コンテンツ1" :message="$message" />
  <x-tests.card title="初期値確認用タイトル" />
</x-tests.app>