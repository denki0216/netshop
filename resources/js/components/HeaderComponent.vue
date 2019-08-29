<style scoped>
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
    }
    .user-panel span {
        color: #666;
        font-size: 16px;
        margin: 0 10px;
    }
    button {
        margin-left: 5px;
    }
    .logo {
        float: left;
        font-size: 44px;
        color: #28a745;
        font-weight: bold;
    }
    .logo span {
        font-size: 20px;
        margin-left: 10px;
    }
    .nav-link {
        padding: 0.5rem 0 0.5rem 2rem;
    }
    header {
        margin: 15px 0;
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
                <span><i class="fas fa-user"></i> Developer様</span>
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