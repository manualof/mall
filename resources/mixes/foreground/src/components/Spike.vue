<script>
    export default {
        data() {
            return {
                now: true,
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
    };
</script>
<template>
    <div class="spike">
        <div class="container">
            <ul class="time-list">
                <li class="spike-time pull-left" v-for="item in times" :active="now">
                    {{ item.time }}
                    <i class="end" v-if="!now">已经结束</i>
                    <i class="now" v-if="now">正在进行</i>
                </li>
            </ul>
        </div>
    </div>
</template>