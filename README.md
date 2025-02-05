# PostalCode Library

郵便番号に関する問い合わせAPI

## 構成

[郵便局提供のデータ](http://www.post.japanpost.jp/zipcode/dl/roman-zip.html)を利用してデータを構築する。

がこのデータにはいくつか問題点もあるため、
これを1次データとしつつもいくつかの加工が必要

- とりあえずSJIS(古き良き日本の伝統)
- 正規化?なにそれ美味しいの?状態でくっそ重い(ボリューミー)
- 頭0始まりの郵便番号が、7桁以下で認識される(7桁に縛られない個性)
- 複数の住所地域を扱う住所が1丁目~6丁目みたいな表記になっているため、目視でパースしなくちゃいけない(とりあえずでも範囲を伝えてくれる優しさ)
- ローマ字表記には KEN とかが全部ついてて芋い(My name is Ken!)
- 全角スペース(バイト数で文字数とか計算する時に凄く楽)

内部的にはsqliteを使っているが、近いうちに全部fileベースに切り替えたい。
(EloquentがグローバルだからライブラリからbootEloquentするのは差支えがありそう)。

## Interface

### 郵便番号から住所を取得

get `code/{postalcode}`

->
address: Address

郵便番号の情報を照会する。


## To Be Implemented

- 郵便番号関連住所の用意とか(ソースは何処にある?)
- カスタムグルーピング情報の割り当て
- 住所入力からの郵便番号一覧表示
