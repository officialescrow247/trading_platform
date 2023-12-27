<template>
    <div>
        <span
            :class="{
                'text-green': isProfitGreaterThanInitial(),
                'text-red': isProfitLessThanInitial(),
            }"
            >${{ currentProfit.toFixed(2) }}</span
        >
    </div>
</template>

<script>
export default {
    data() {
        return {
            initialProfit: 1000,
            currentProfit: 1000,
            changedProfits: [],
            changedCount: 0,
        };
    },
    mounted() {
        this.scheduleUpdate();
    },
    methods: {
        scheduleUpdate() {
            setTimeout(() => {
                this.updateProfit();
                this.scheduleUpdate();
            }, 5000);
        },
        updateProfit() {
            const randomChange = Math.random() * 200 - 100;
            let newProfit;

            if (this.changedCount % 5 < 3) {
                // Reduce the initial profit three times
                newProfit = this.initialProfit - Math.abs(randomChange);
            } else {
                // Increase the initial profit two times
                newProfit = this.initialProfit + Math.abs(randomChange);
            }

            this.changedProfits.unshift(newProfit);
            this.changedCount++;

            // Check if the sequence has completed (5 times) and reset counters
            if (this.changedCount === 5) {
                this.changedCount = 0;
                this.changedProfits = [];
            }

            this.currentProfit = newProfit;

            // Ensure profit is not negative
            if (this.currentProfit < 0) {
                this.currentProfit = 0;
            }
        },
        isProfitGreaterThanInitial() {
            return this.currentProfit > this.initialProfit;
        },
        isProfitLessThanInitial() {
            return this.currentProfit < this.initialProfit;
        },
    },
};
</script>

<style scoped>
.text-green {
    color: green;
}

.text-red {
    color: red;
}
</style>
