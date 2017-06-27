<template>
    <div class="home padding-attribute">
        <!---->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active">1</li>
                <li data-target="#myCarousel" data-slide-to="1">2</li>
                <li data-target="#myCarousel" data-slide-to="2">3</li>
                <li data-target="#myCarousel" data-slide-to="3">4</li>
            </ul>
            <div class="carousel-inner">
                <div class="item" v-for="(item, index) in slideList" :class="{active: index == 0}">
                    <img :src="item.img" alt="First slide">
                    <div class="slide-img-content container text-center">
                        <h1>{{ item.title }}</h1>
                        <p class="content">{{ item.intro }} <span>{{ item.discount }}</span>。</p>
                    </div>
                </div>
            </div>
        </div>
        <!--新品上架-->
        <div class="new-product">
            <div class="container">
                <div>
                    <router-link :to="{ name: 'product-details' }" class="col-sm-3 row-content row-margin"
                                 v-for="(item, index) in newProduct" :key="index">
                        <div class="img-box">
                            <img :src="item.img" alt="">
                        </div>
                        <div class="product">
                            <p class="name">{{ item.title }}</p>
                            <p class="intro"><span>{{ item.name }}</span> <span class="money">&yen; <i>{{ item.price
                                }}</i></span></p>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
        <!--限时秒杀-->
        <div class="time-spike">
            <div class="container">
                <div class="title clearfix">
                    <h3><i class="icon iconfont icon-miaosha"></i>限时秒杀</h3>
                    <p>还有&nbsp;<span>13</span><i>:</i><span>22</span><i>:</i><span>07</span>&nbsp;结束</p>
                </div>
                <div class="spike-content row">
                    <router-link :to="{ name: 'product-details' }" v-for="(item, index) in spikeList" :key="index">
                        <dl class="col col-line">
                            <dt><img :src="item.img"></dt>
                            <dd>
                                <p class="name">{{ item.name }}</p>
                                <p class="new-price">￥{{item.price1}}<s class="pre-price">￥{{item.price2}}</s></p>
                            </dd>
                        </dl>
                    </router-link>
                </div>
            </div>
        </div>
        <!--品质推荐-->
        <div class="product-recommend">
            <div class="container">
                <div class="product-recommend-model product-recommen">
                    <div class="recommend-name"><i class="icon iconfont icon-dianzan"></i>{{ recommendList.title1 }}
                    </div>
                    <div class="recommend-content clearfix">
                        <router-link class="recommend-content-model" v-for="(item, index) in recommendList.recommen1" :key="index"
                                     :to="{name: 'product-details'}">
                            <div class="content-model text-center">
                                <p class="name">{{ item.title }}</p>
                                <p class="intro">{{ item.intro }}</p>
                            </div>
                            <div class="intro-img">
                                <img :src="item.img" alt="">
                            </div>
                        </router-link>
                    </div>
                </div>
                <div class="product-recommend-model product-offer">
                    <div class="recommend-name"><i class="icon iconfont icon-tejiache"></i>{{ recommendList.title2 }}
                    </div>
                    <div class="recommend-content">
                        <div class="content-top clearfix">
                            <router-link class="recommend-content-model" v-for="(item, index) in recommendList.recommen2" :key="index"
                                         :to="{name: 'product-details'}">
                                <div class="content-model text-center">
                                    <p class="name">年末特惠</p>
                                    <p class="intro">满300减50优惠折扣</p>
                                </div>
                                <div class="intro-img">
                                    <img src="../assets/images/img_04.png" alt="">
                                </div>
                            </router-link>
                        </div>
                        <div class="content-img">
                            <img src="../assets/images/product-offer-img.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="product-recommend-model product-kinds">
                    <div class="recommend-name"><i class="icon iconfont icon-xing"></i>{{ recommendList.title3 }}</div>
                    <div class="recommend-content clearfix">
                        <router-link class="recommend-content-model" v-for="(item, index) in recommendList.recommen3" :key="index"
                                     :to="{name: 'product-details'}">
                            <div class="content-model text-center">
                                <p class="name">年末特惠</p>
                                <p class="intro">满300减50优惠折扣</p>
                            </div>
                            <div class="intro-img">
                                <img src="../assets/images/img_04.png" alt="">
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
        <!--年末特惠-->
        <div class="year-offer">
            <div class="container">
                <router-link class="year-offer-model offer-margin" v-for="(item, index) in yearOfferList" to="/" :key="index">
                    <div class="offer-content">
                        <span class="top-line"></span>
                        <p class="name">{{ item.title }}</p>
                        <p class="intro">{{ item.intro }}</p>
                        <p class="more"><a href="">MORE>></a></p>
                    </div>
                    <div class="offer-img">
                        <img :src="item.img" alt="">
                    </div>
                </router-link>
            </div>
        </div>
        <!--女装外套1-->
        <div id="wowen-clothing" class="wowen-clothing">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList1.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList1.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList1.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="(item, index) in typeList.typeList1.newProduct" :key="index">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList1.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--2-->
        <div id="baby-place" class="wowen-clothing baby-place">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList2.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList2.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList2.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList2.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList2.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--3-->
        <div id="cotton-material" class="wowen-clothing cotton-material">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList3.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList3.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList3.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList3.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList3.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--4-->
        <div id="care-makeups" class="wowen-clothing care-makeups">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList4.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList4.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList4.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList4.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList4.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--5-->
        <div id="underwear-clothing" class="wowen-clothing underwear-clothing">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList5.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList5.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList5.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList5.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList5.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--6-->
        <div id="baby-food" class="wowen-clothing baby-food">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList6.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList6.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList6.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList6.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList6.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--7-->
        <div id="baby-paper" class="wowen-clothing baby-paper">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList7.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList7.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList7.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList7.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList7.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--8-->
        <div id="baby-toys" class="wowen-clothing baby-toys">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList8.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList8.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList8.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList8.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList8.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--9-->
        <div id="baby-experience" class="wowen-clothing baby-experience">
            <div class="container">
                <div class="wowen-clothing-model">
                    <div class="recommend-name">
                        <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList9.module
                            }}
                        </div>
                        <div class="model-content">
                            <ul class="product-kinds">
                                <li v-for="(item, index) in typeList.typeList9.module_item">
                                    <a href="">{{ item }}<span>|</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clothing-content">
                        <router-link class="content-left-img" to="/home">
                            <img :src="typeList.typeList9.module_img" alt="">
                        </router-link>
                        <div class="content-right-model">
                            <div class="content">
                                <ul class="model-content">
                                    <li class="content-item item-line" v-for="item in typeList.typeList9.newProduct">
                                        <router-link :to="{name: 'product-details'}">
                                            <div class="img-box">
                                                <img :src="item.img" alt="">
                                            </div>
                                            <div class="product">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span
                                                    class="money"></span></p>
                                            </div>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-offer">
                                <div class="content-item item-line" v-for="item in typeList.typeList9.offerList">
                                    <router-link class="product" :to="{name: 'product-details'}">
                                        <p class="name">{{ item.title }}</p>
                                        <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                    </router-link>
                                    <router-link class="img-box" :to="{name: 'product-details'}">
                                        <img :src="item.img" alt="">
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--需要 浏览推荐-->
        <need-browse></need-browse>
        <!--楼层导航-->
        <nav class="bs-js-navbar-scrollspy">
            <ul class="floor nav">
                <li><a href="#wowen-clothing">女装外套</a></li>
                <li><a href="#baby-place">母婴专区</a></li>
                <li><a href="#cotton-material">棉品寝卧</a></li>
                <li><a href="#care-makeups">护理美妆</a></li>
                <li><a href="#underwear-clothing">内衣服饰</a></li>
                <li><a href="#baby-food">婴儿食品</a></li>
                <li><a href="#baby-paper">婴儿纸品</a></li>
                <li><a href="#baby-toys">幼儿玩具</a></li>
                <li><a href="#baby-experience">育婴心得</a></li>
                <li><a href="#ios">其他分类</a></li>
                <li @click="toTop">
                    <a href="javascript:void (0)">
                        <p>TOP</p>
                        <i class="icon iconfont icon-top"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <right-side></right-side>
    </div>
</template>
<script>
    import image1 from '../assets/images/img_04.png';
    import image2 from '../assets/images/offer-img.png';
    import image3 from '../assets/images/img_06-1.png';
    import image4 from '../assets/images/kitty.png';
    import slideImg from '../assets/images/slide-img.png';

    import picture1 from '../assets/images/img_02-1.png';
    import picture2 from '../assets/images/img_02-2.png';
    import picture3 from '../assets/images/offer_img_01.png';

    import RightSide from './dashboard/RightSide';
    import NeedBrowse from './dashboard/NeedBrowse'

    export default {
        data () {
            return {
                recommendList: {
                    title1: '品质推荐',
                    title2: '特价优惠',
                    title3: '精选分类',
                    recommen1: [
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                    ],
                    recommen2: [
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                    ],
                    recommen3: [
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                        {
                            title: '年末特惠',
                            intro: '满300减50优惠折扣',
                            img: image1,
                        },
                    ],
                },
                yearOfferList: [
                    {
                        title: '年末特惠',
                        intro: '满300减50优惠折扣',
                        img: image2,
                    },
                    {
                        title: '年末特惠',
                        intro: '满300减50优惠折扣',
                        img: image2,
                    },
                    {
                        title: '年末特惠',
                        intro: '满300减50优惠折扣',
                        img: image2,
                    }
                ],
                typeList: {
                    typeList1: {
                        module: '女装外套',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList2: {
                        module: '母婴专区',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList3: {
                        module: '棉品寝卧',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList4: {
                        module: '护理美妆',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList5: {
                        module: '内衣服饰',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            }
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList6: {
                        module: '婴儿食品',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList7: {
                        module: '婴儿纸品',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            }
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList8: {
                        module: '幼儿玩具',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                    typeList9: {
                        module: '育婴心得',
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        module_img: picture1,
                        newProduct: [
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                            {
                                title: '新品上架',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture2,
                            },
                        ],
                        offerList: [
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                            {
                                title: '满减优惠',
                                intro: '舒适耐实用儿童睡椅',
                                img: picture3,
                            },
                        ],
                    },
                },
                newProduct: [
                    {
                        title: '新品上架',
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        img: image3,
                    },
                    {
                        title: '新品上架',
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        img: image3,
                    },
                    {
                        title: '新品上架',
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        img: image3,
                    },
                    {
                        title: '新品上架',
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        img: image3,
                    },
                ],
                spikeList: [
                    {
                        img: image4,
                        name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                        price1: 34.00,
                        price2: 98.00,
                    },
                    {
                        img: image4,
                        name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                        price1: 34.00,
                        price2: 98.00,
                    },
                    {
                        img: image4,
                        name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                        price1: 34.00,
                        price2: 98.00,
                    },
                    {
                        img: image4,
                        name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                        price1: 34.00,
                        price2: 98.00,
                    },
                    {
                        img: image4,
                        name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                        price1: 34.00,
                        price2: 98.00,
                    },
                    {
                        img: image4,
                        name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                        price1: 34.00,
                        price2: 98.00,
                    }
                ],
                slideList: [
                    {
                        img: slideImg,
                        title: '品质生活',
                        intro: '大牌低至大牌低至',
                        discount: '2折',
                    },
                    {
                        img: slideImg,
                        title: '品质生活',
                        intro: '大牌低至大牌低至',
                        discount: '2折',
                    },
                    {
                        img: slideImg,
                        title: '品质生活',
                        intro: '大牌低至大牌低至',
                        discount: '2折',
                    },
                    {
                        img: slideImg,
                        title: '品质生活',
                        intro: '大牌低至大牌低至',
                        discount: '2折',
                    },
                ],
            };
        },
        components: {
            RightSide,
            NeedBrowse,
        },
        methods: {
            toTop: function () {
                jQuery('body').animate({scrollTop: 0}, 1000);
                return false;
            }
        },
        mounted () {
            jQuery("body").scrollspy({target: ".bs-js-navbar-scrollspy"});
        },
    };
</script>
