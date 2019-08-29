<style lang="scss" scoped>
.footer {
  margin-top: 20px;
  padding: 15px;
  border-top: solid 1px #38c172;
  ul {
    text-align: center;
    li {
      margin: 0 20px;
      a {
        color: #999;
        text-decoration: none;
        &:hover {
          color: #38c172;
        }
      }
    }
  }
  .copyright {
      color: #999;
      text-align: center;
  }
}
</style>

<template>
  <footer>
    <div class="footer">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">プライバシーポリシー</a>
        </li>
        <li class="list-inline-item">
          <a href="#">コミュニティガイドライン</a>
        </li>
        <li class="list-inline-item">
          <a href="#">会員規約</a>
        </li>
        <li class="list-inline-item">
          <a href="#">利用規約</a>
        </li>
        <li class="list-inline-item">
          <a href="#">特定商取引法に基づく表示</a>
        </li>
        <li class="list-inline-item">
          <a href="#">登録情報等の共同利用について</a>
        </li>
      </ul>
      <div class="copyright">2019 Net Shop</div>
    </div>
  </footer>
</template>

<script>
export default {};
</script>