<style scoped>
    .logo {
        float: left;
    }
    .right-side {
        float: right;
    }
    a {
        color:#999;
    }
    a:hover {
        color:#333;
    }
    .user-panel {
        text-align: right;
        padding: 0 7px;
    }
    .user-panel span {
        color: #666;
        font-size: 16px;
        margin: 0 10px;
    }
    button {
        margin: 0 5px;
    }
    .logo {
        line-height: 75px;
        font-size: 44px;
        color: #28a745;
        padding: 0 10px;
        font-weight: bold;
    }
    .logo span {
        font-size: 20px;
        margin-left: 10px;
    }
    header {
        padding: 5px 10px;
    }
</style>

<template>
    <header class="clearfix">
        <div class="logo">Net Shop<span>ネットショップ</span></div>
        <div class="right-side">
            <div class="sub-nav">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#">お知らせを見る</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">お買い物方法・ご注文方法</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">配達便について</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Q&A</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">お問い合せ</a></li>
                </ul>
            </div>
            <div class="user-panel">
                <span><i class="fas fa-user"></i> Test様</span>
                <span><i class="fab fa-product-hunt"></i> 999ポイント</span>
                <button type="button" class="btn btn-outline-success">ログイン</button>
                <button type="button" class="btn btn-success">新規会員登録</button>
            </div>
        </div> 
    </header>
    
</template>

<script>
    export default {}
</script>