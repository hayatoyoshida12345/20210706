<?php while( $row = $result->fetch_assoc() ) { ?>
  <div class="col">
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
