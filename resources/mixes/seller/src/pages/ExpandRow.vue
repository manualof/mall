<template>
    <div>
        <row class="expand-row">
            <i-col span="8">
                <span class="expand-key">职业：</span>
                <span class="expand-value">{{ row.job }}</span>
            </i-col>
            <i-col span="8">
                <span class="expand-key">兴趣：</span>
                <span class="expand-value">{{ row.interest }}</span>
            </i-col>
            <i-col span="8">
                <span class="expand-key">生日：</span>
                <span class="expand-value">{{ row.birthday }}</span>
            </i-col>
        </row>
    </div>
</template>
<script>
    export default {
        props: {
            row: Object,
        },
    };
</script>