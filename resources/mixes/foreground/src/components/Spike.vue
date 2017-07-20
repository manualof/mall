<script>
    export default {
        data() {
            return {
                active: 1,
                now: 0,
                times: [
                    {
                        time: '08:00',
                    },
                    {
                        time: '12:00',
                    },
                    {
                        time: '14:00',
                    },
                    {
                        time: '16:00',
                    },
                    {
                        time: '22:00',
                    },
                ],
            };
        },
        methods: {
            switchTab(index) {
                this.active = index;
            },
        },
    };
</script>
<template>
    <div class="spike">
        <div class="container">
            <ul class="time-list clearfix">
                <li class="spike-time pull-left"
                    :class="{active:active===index}"
                    @click="switchTab(index)"
                    v-for="(item,index) in times">
                    <span :class="{now:now === index}">{{ item.time }}</span>
                    <i class="end" v-if="now > index">已经结束</i>
                    <i class="now" v-if="now === index">正在进行</i>
                    <i class="end" v-if="now < index">即将开始</i>
                </li>
            </ul>
        </div>
    </div>
</template>