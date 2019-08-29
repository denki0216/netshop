<style lang="scss" scoped>
section {
    margin-bottom: 20px;
}
.title {
  color: #38c172;
  height: 45px;
  line-height: 45px;
  font-size: 18px;
  font-weight: bold;
  border-bottom: 2px solid #38c172;
  margin-bottom: 20px;
}
svg {
  font-size: 1.125rem;
  text-anchor: middle;
}
.card {
    .item-name {
        font-size: 16px;
    }
    .item-price {
        text-align: right;
        color: #f6993f;
        font-size: 20px;
        font-weight: bold;
    }
    .item-misc {
        display: flex;
        align-items: center;
        justify-content: space-between;
        .favorate {
            color: #ddd;
            font-size: 24px;
        }
    }
}
</style>

<template>
  <section>
    <div class="title">
      <i class="fas fa-star"></i> おすすめ商品
    </div>
    <div class="row">
      <div class="col-3">
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" height="150" version="1.1">
            <rect width="100%" height="150" style="fill:#38c172;" />
            <text x="50%" y="50%" fill="#fff" dy=".8em">Item image</text>
          </svg>
          <div class="card-body">
              <div class="item-name">紀文調製豆乳</div>
              <div class="item-price">1380円</div>
              <div class="item-misc">
                  <div class="favorate"><i class="far fa-heart"></i></div>
                  <button class="btn btn-outline-success"><i class="fas fa-shopping-cart"></i> カートへ</button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" height="150" version="1.1">
            <rect width="100%" height="150" style="fill:#38c172;" />
            <text x="50%" y="50%" fill="#fff" dy=".8em">Item image</text>
          </svg>
          <div class="card-body">
              <div class="item-name">紀文調製豆乳</div>
              <div class="item-price">1380円</div>
              <div class="item-misc">
                  <div class="favorate"><i class="far fa-heart"></i></div>
                  <button class="btn btn-warning">カートへ</button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" height="150" version="1.1">
            <rect width="100%" height="150" style="fill:#38c172;" />
            <text x="50%" y="50%" fill="#fff" dy=".8em">Item image</text>
          </svg>
          <div class="card-body">
              <div class="item-name">紀文調製豆乳</div>
              <div class="item-price">1380円</div>
              <div class="item-misc">
                  <div class="favorate"><i class="far fa-heart"></i></div>
                  <button class="btn btn-warning">カートへ</button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" height="150" version="1.1">
            <rect width="100%" height="150" style="fill:#38c172;" />
            <text x="50%" y="50%" fill="#fff" dy=".8em">Item image</text>
          </svg>
          <div class="card-body">
              <div class="item-name">紀文調製豆乳</div>
              <div class="item-price">1380円</div>
              <div class="item-misc">
                  <div class="favorate"><i class="far fa-heart"></i></div>
                  <button class="btn btn-warning">カートへ</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>