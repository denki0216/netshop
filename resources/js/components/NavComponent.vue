<style lang='scss' scoped>
.navbar {
  margin-bottom: 20px;
  border-radius: 3px;
  border-bottom: 1px solid #fff;
}
.form-inline .form-control {
  width: 300px;
}
.nav-link {
  color: #fff;
}
.cart-icon {
  position: relative;
  float: left;
}
.cart-icon i {
  color: #38c172;
  font-size: 24px;
}
.cart-icon span {
  background-color: #f6993f;
  color: #fff;
  width: 18px;
  height: 18px;
  line-height: 18px;
  text-align: center;
  border-radius: 50%;
  display: block;
  position: absolute;
  top: -2px;
  right: -10px;
}
.price-area {
  background-color: #fff;
  padding: 3px 5px;
  border-radius: 5px;
  width: 180px;
  /* line-height: 30px; */
  color: #f6993f;
  font-size: 20px;
  font-weight: bold;
  text-align: right;
  margin: 0 20px;
  position: relative;
  cursor:pointer;
}
.price-area span {
  font-size: 14px;
}
.cart-pop {
  position: absolute;
  left: unset;
  right: 0;
  top: 45px;
  padding: 15px;
  width: 600px;
  max-width: 600px;
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.4);
  display: none;
  cursor:auto;
}
.nav-item:nth-child(1) {
    border-left: 1px solid #9bd1b1;
}
.nav-item {
    border-right: 1px solid #9bd1b1;
    padding: 0 10px;
}
.popover .arrow {
  margin-left: 415px;
}
.cart-pop-header {
  font-size: 16px;
  color: #666;
  border-bottom: 1px solid #ccc;
  padding-bottom: 10px;
  margin-bottom: 0;
  position: relative;
  .cart-close {
      width: 20px;
      height: 20px;
      position: absolute;
      top: 0;
      right: 0;
      text-align: center;
      cursor: pointer;
      font-size: 28px;
      line-height: 20px;
      color:#999;
      &:hover{
          color: #38c172;
      }
  }
}
.cart-pop-body {
  min-height: 85px;
  max-height: 350px;
  overflow: auto;
}
.cart-pop-body ul {
  padding: 0;
}
.cart-pop-body li {
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 5px;
  border-bottom: 1px dotted #ddd;
}
.cart-pop-body li:nth-last-child(1) {
  border-bottom: none;
}
.cart-pop-body .item-img {
  margin-right: 10px;
}
.cart-pop-body .item-name {
  font-size: 14px;
  color: #666;
  width: 160px;
  max-height: 53px;
  overflow: hidden;
}
.cart-pop-body .item-price {
  margin-right: 15px;
  width: 100px;
  text-align: right;
  .item-price-sigle {
    color: #666;
    font-size: 16px;
  }
}
.cart-pop-body .item-count {
  margin-right: 10px;
  letter-spacing: -3px;
  display: flex;
  align-items: center;
  input {
    border-radius: unset;
    width: 58px;
    height: 28px;
    margin-top: 1px;
    text-align: center;
    border-color: #38c172;
    border-left: none;
    border-right: none;
  }
  button:nth-child(1) {
    border-radius: 3px 0 0 3px;
    width: 28px;
    height: 28px;
    margin-top: 1px;
  }
  button:nth-child(3) {
    border-radius: 0 3px 3px 0;
    width: 28px;
    height: 28px;
    margin-top: 1px;
  }
}
.cart-pop-body .item-del {
  text-align: right;
}
.cart-footer {
    border-top: 1px solid #ccc;
    padding: 15px 5px 0 5px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    .price-total {
        font-size: 14px;
        color: #666;
        text-align: right;
        span {
            color:#f6993f;
            font-size: 20px;
        }
    }
    .price-left {
        color: #999;
        font-weight: normal;
        text-align: right;
    }
    button {
        margin-left: 20px;
        width: 150px;
    }
}
</style>

<template>
  <nav class="navbar sticky-top navbar-expand-lg navbar-success bg-success">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="form-inline mr-4">
        <input
          class="form-control mr-sm-2"
          type="search"
          placeholder="キーワードを入力して検索する"
          aria-label="Search"
        />
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i> 検索
        </button>
      </form>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-heart"></i> お気に入り
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-calendar-alt"></i> 注文履歴
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-bookmark"></i> よく買う商品
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-sticky-note"></i> 買い物メモ
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-receipt"></i> レシピ
          </a>
        </li>
      </ul>
      <div class="navbar-nav">
        <div class="price-area" v-on:mouseenter="openCartPanel">
          <div class="cart-icon">
            <i class="fas fa-shopping-cart align-middle"></i>
            <span>9</span>
          </div>
          <b class="align-middle">9,999</b>
          <span>円</span>
          <div class="cart-pop popover bs-popover-bottom" id="cart-panel">
            <div class="arrow"></div>
            <h3 class="cart-pop-header">
              <i class="fas fa-shopping-cart"></i> カート内の商品
              <div class="cart-close" v-on:click="closeCartPanel">×</div>
            </h3>
            <div class="cart-pop-body">
              <ul>
                <li>
                  <div class="item-img">
                    <img src="/images/noimage.jpg" width="70" />
                  </div>
                  <div class="item-name">紀文調製豆乳</div>
                  <div class="item-price">
                    <div class="item-price-sigle">1680円</div>
                    <div class="item-price-sum">小計: 3760円</div>
                  </div>
                  <div class="item-count">
                    <button type="button" class="btn btn-outline-success btn-sm">-</button>
                    <input type="text" class="form-control form-control-sm" value="2" />
                    <button type="button" class="btn btn-outline-success btn-sm">+</button>
                  </div>
                  <div class="item-del">
                    <button type="button" class="btn btn-light btn-sm">削除</button>
                  </div>
                </li>
                <li>
                  <div class="item-img">
                    <img src="/images/noimage.jpg" width="70" />
                  </div>
                  <div class="item-name">紀文調製豆乳</div>
                  <div class="item-price">
                    <div class="item-price-sigle">1680円</div>
                    <div class="item-price-sum">小計: 3760円</div>
                  </div>
                  <div class="item-count">
                    <button type="button" class="btn btn-outline-success btn-sm">-</button>
                    <input type="text" class="form-control form-control-sm" value="2" />
                    <button type="button" class="btn btn-outline-success btn-sm">+</button>
                  </div>
                  <div class="item-del">
                    <button type="button" class="btn btn-light btn-sm">削除</button>
                  </div>
                </li>
                <li>
                  <div class="item-img">
                    <img src="/images/noimage.jpg" width="70" />
                  </div>
                  <div class="item-name">紀文調製豆乳</div>
                  <div class="item-price">
                    <div class="item-price-sigle">1680円</div>
                    <div class="item-price-sum">小計: 3760円</div>
                  </div>
                  <div class="item-count">
                    <button type="button" class="btn btn-outline-success btn-sm">-</button>
                    <input type="text" class="form-control form-control-sm" value="2" />
                    <button type="button" class="btn btn-outline-success btn-sm">+</button>
                  </div>
                  <div class="item-del">
                    <button type="button" class="btn btn-light btn-sm">削除</button>
                  </div>
                </li>
                <li>
                  <div class="item-img">
                    <img src="/images/noimage.jpg" width="70" />
                  </div>
                  <div class="item-name">紀文調製豆乳</div>
                  <div class="item-price">
                    <div class="item-price-sigle">1680円</div>
                    <div class="item-price-sum">小計: 3760円</div>
                  </div>
                  <div class="item-count">
                    <button type="button" class="btn btn-outline-success btn-sm">-</button>
                    <input type="text" class="form-control form-control-sm" value="2" />
                    <button type="button" class="btn btn-outline-success btn-sm">+</button>
                  </div>
                  <div class="item-del">
                    <button type="button" class="btn btn-light btn-sm">削除</button>
                  </div>
                </li>
                <li>
                  <div class="item-img">
                    <img src="/images/noimage.jpg" width="70" />
                  </div>
                  <div class="item-name">紀文調製豆乳</div>
                  <div class="item-price">
                    <div class="item-price-sigle">1680円</div>
                    <div class="item-price-sum">小計: 3760円</div>
                  </div>
                  <div class="item-count">
                    <button type="button" class="btn btn-outline-success btn-sm">-</button>
                    <input type="text" class="form-control form-control-sm" value="2" />
                    <button type="button" class="btn btn-outline-success btn-sm">+</button>
                  </div>
                  <div class="item-del">
                    <button type="button" class="btn btn-light btn-sm">削除</button>
                  </div>
                </li>
              </ul>
            </div>
            <div class="cart-footer">
                <div>
                    <div class="price-total">合計金額 (税込)：<span>1848円</span></div>
                    <div class="price-left">送料無料まで6666円</div>
                </div>
              <button type="button" class="btn btn-success btn-lg"><i class="fas fa-credit-card"></i> お会計へ</button>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-light"><i class="fas fa-credit-card"></i> お会計へ</button>
      </div>
    </div>
  </nav>
</template>

<script>
    export default {
        methods: {
            openCartPanel: function(){
                $('#cart-panel').show('fast');
            },
            closeCartPanel: function(){
                $('#cart-panel').hide('fast');
            }
        }
    };
    
    $(document).on('click',function(e){
        if ($('#cart-panel').attr('style')=='display: block;') {
            if( $.inArray(e.target, $('#cart-panel *')) == -1 ){  
                $('#cart-panel').hide('fast');  
            }  
        }
    }); 

</script>