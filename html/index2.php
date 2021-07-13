<?php
  $mysqliPointer = new mysqli( "localhost" , "hayato210663" , "K3PEAT2h" , "hayato210663" );
  if( empty( $mysqliPointer ) ) {
    echo "db connection error.";
    exit;
  }

  $query = "SELECT ID , Name , syasinurl , setumeibun FROM card ";
  $result = $mysqliPointer->query( $query );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポンタカード</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>

<body>
  <h1>ポンタカードの種類</h1>
  <h2><a href="https://point.recruit.co.jp/point/">公式webサイトはこちら</a></h2>

<?php for ($i = 0; $i < 2; $i++){ ?>
  <div class="row row-cols-1 row-cols-md-4 g-2">
  <?php for ($j = 0; $j < 4; $j++){ ?>
    <div class="col">
      <div class="card h-70">
        <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/shell_ponta01.png" 
        class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">シェル</h5>
          <p class="card-text">シェルのポンタカード</p>
        </div>
        <div class="card-footer">         
            <a href="detail.html">商品ページ</a>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
<?php } ?>
<div class="row row-cols-1 row-cols-md-4 g-2">
  <?php while( $row = $result->fetch_assoc() ) { ?>
    <div class="col-3">
      <div class="card h-70">
        <img src="<?php echo $row[ 'syasinurl' ]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row[ 'Name' ]; ?></h5>
          <p class="card-text"><?php echo $row[ 'setumeibun' ]; ?></p>
        </div>
        <div class="card-footer">
          <a href="detail.html">商品ページ</a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

    <!-- <div class="row row-cols-1 row-cols-md-4 g-2">
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/shell_ponta01.png" 
          class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">シェル</h5>
            <p class="card-text">シェルのポンタカード</p>
          </div>
          <div class="card-footer">         
              <a href="detail.html">商品ページ</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/lowson_ponta01.png" 
          class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ローソン</h5>
            <p class="card-text">ローソンのポンタカード</p>
          </div>
          <div class="card-footer">
             <a href="ro-son.html">商品ページ</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/geo_ponta01.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ゲオ</h5>
            <p class="card-text">ゲオのポンタカード</p>
          </div>
          <div class="card-footer">
            <a href="geo.html">商品ページ</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/uniliv_ponta01.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ユニデイ</h5>
            <p class="card-text">ユニデイのポンタカード</p>
          </div>
          <div class="card-footer">
            <a href="yunidei.html">商品ページ</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/onix_ponta01.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ONIX</h5>
            <p class="card-text">ONIXのポンタカード</p>
          </div>
          <div class="card-footer">
            <a href="onix.html">商品ページ</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/routeinn_hotels_ponta01.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ルートインホテル</h5>
            <p class="card-text">ルートインホテルのポンタカード</p>
          </div>
          <div class="card-footer">
            <a href="ru-toin.html">商品ページ</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/himaraya_ponta01.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">スポーツヒマラヤ</h5>
            <p class="card-text">スポーツヒマラヤのポンタカード</p>
          </div>
          <div class="card-footer">
            <a href="himaraya.html">商品ページ</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/jal_ponta01.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">JAL</h5>
            <p class="card-text">JALのポンタカード</p>
          </div>
          <div class="card-footer">
            <a href="jal.html">商品ページ</a>
          </div>
        </div>
      </div>
    </div> -->
</body>
</html>