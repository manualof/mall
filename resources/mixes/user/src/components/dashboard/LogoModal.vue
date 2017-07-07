<template>
    <div class="logoModal">
        <div class="container">
            <div class="logo col-md-4 col-xs-4 col-sm-4">
                <router-link :to="{name:'home'}">
                    <img src="../../assets/images/logo.png"/>
                </router-link>
            </div>
            <div class="search-input col-md-6 col-xs-6 col-sm-6">
                <div class="searchInput clearfix">
                    <input type="text" class="form-control" placeholder="洗衣机、电冰箱、洗碗机" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">
                        <router-link :to="{name:'search'}">搜索</router-link>
                    </span>
                </div>
                <p>买三免一&nbsp;&nbsp;促销&nbsp;&nbsp;五折起购&nbsp;&nbsp;满2000减300</p>
            </div>
            <div class="shopping-car col-md-2 col-xs-2 col-xs-2">
                <router-link :to="{ name: 'cart-settlement' }">
                    <i class="icon iconfont icon-gouwuche"></i>
                    购物车
                </router-link>
            </div>
        </div>
    </div>
</template>
