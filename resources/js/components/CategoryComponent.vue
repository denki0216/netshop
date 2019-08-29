<style lang="scss" scoped>
.card {
  .list-group {
    color: #666;
    .list-group-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      i {
        transition-duration: 0.2s;
      }
    }
    .sub-menu {
      ul {
        padding: 5px 15px;
        li {
          padding: 5px 15px;
          border-bottom: 1px dotted #ccc;
          color: #999;
          font-size: .8rem;
          cursor: pointer;
          &:nth-last-child(1) {
              border-bottom: none;
          }
          &:hover {
              background-color: #f4f4f4;
          }
        }
      }
    }
  }
}
</style>

<template>
  <section class="card">
    <div class="card-header">
      <i class="fas fa-store"></i> カテゴリー
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item" v-on:click="toggleSubMenu">
        <span>野菜</span>
        <i class="fas fa-angle-down"></i>
      </li>
      <div class="collapse sub-menu" id="category-sub-1">
        <ul class="list-unstyled">
          <li><i class="fas fa-caret-right"></i> イモ類</li>
          <li><i class="fas fa-caret-right"></i> 根菜</li>
          <li><i class="fas fa-caret-right"></i> キノコ類</li>
        </ul>
      </div>
      <li class="list-group-item">
        <span>果物</span>
        <i class="fas fa-angle-down"></i>
      </li>
      <li class="list-group-item">
        <span>お肉</span>
        <i class="fas fa-angle-down"></i>
      </li>
    </ul>
  </section>
</template>

<script>
export default {
  methods: {
    toggleSubMenu: function() {
      $("#category-sub-1").collapse("toggle");
      $("#category-sub-1").on("shown.bs.collapse", function() {
        $(this)
          .prev()
          .children("i")
          .css("transform", "rotate(180deg)");
      });
      $("#category-sub-1").on("hidden.bs.collapse", function() {
        $(this)
          .prev()
          .children("i")
          .css("transform", "rotate(0deg)");
      });
    }
  }
};
</script>