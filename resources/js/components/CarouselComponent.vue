<style lang="scss" scoped>
.carousel {
  margin-bottom: 20px;
  .carousel-indicators {
    align-items:baseline;
    li {
      box-sizing: content-box;
      flex: 0 1 auto;
      width: auto;
      height: 60px;
      margin-right: 3px;
      margin-left: 3px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #fff;
      opacity: 1;
      transition: 0.3s ease;
    }
    .active {
      border-bottom: 10px solid #fff;
    }
  }
}
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
}
.bd-placeholder-img-lg {
  font-size: 3.5rem;
}
</style>

<template>
  <section id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active">
        <svg
          class="bd-placeholder-img d-block w-100"
          width="100%"
          height="60"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
          role="img"
          aria-label="Placeholder: First slide"
        >
          <title>Placeholder</title>
          <rect width="100%" height="60px" fill="#38c172" />
          <text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
        </svg>
      </li>
      <li data-target="#carouselIndicators" data-slide-to="1">
        <svg
          class="bd-placeholder-img d-block w-100"
          width="100%"
          height="60"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
          role="img"
          aria-label="Placeholder: First slide"
        >
          <title>Placeholder</title>
          <rect width="100%" height="60px" fill="#ffed4a" />
          <text x="50%" y="50%" fill="#555" dy=".3em">Second slide</text>
        </svg>
      </li>
      <li data-target="#carouselIndicators" data-slide-to="2">
        <svg
          class="bd-placeholder-img d-block w-100"
          width="100%"
          height="60"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
          role="img"
          aria-label="Placeholder: First slide"
        >
          <title>Placeholder</title>
          <rect width="100%" height="60px" fill="#f6993f" />
          <text x="50%" y="50%" fill="#555" dy=".3em">Third slide</text>
        </svg>
      </li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg
          class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          width="800"
          height="400"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
          role="img"
          aria-label="Placeholder: First slide"
        >
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#38c172" />
          <text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
        </svg>
      </div>
      <div class="carousel-item">
        <svg
          class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          width="800"
          height="400"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
          role="img"
          aria-label="Placeholder: First slide"
        >
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#ffed4a" />
          <text x="50%" y="50%" fill="#555" dy=".3em">Second slide</text>
        </svg>
      </div>
      <div class="carousel-item">
        <svg
          class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          width="800"
          height="400"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
          role="img"
          aria-label="Placeholder: First slide"
        >
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#f6993f" />
          <text x="50%" y="50%" fill="#555" dy=".3em">Third slide</text>
        </svg>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </section>
</template>

<script>
export default {};
</script>