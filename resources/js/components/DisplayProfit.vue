<template>
    <div>
        <span
            :class="{
                'text-green': isProfitGreaterThanInitial(),
                'text-red': isProfitLessThanInitial(),
            }"
        >
            <b>{{ getFormattedProfit }}</b>
        </span>

        <br />

        <div>
            <!-- Button trigger modal -->
            <button
                v-if="can_you_close == 1"
                type="button"
                class="btn btn-secondary btn-sm px-2 mt-2 mb-1"
                :class="{
                    'btn-success': isProfitGreaterThanInitial(),
                    'btn-danger': isProfitLessThanInitial(),
                }"
                style="font-size: 12px"
                @click="openModal"
            >
                CLOSE TRADE
            </button>
        </div>

        <!-- Modal -->
        <div
            class="modal fade"
            :id="'close_trade_' + tnx_id"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="p-4 modal-content">
                    <div class="modal-body">
                        <p class="text-dark" v-if="loading">
                            Loading, please don't close screen...
                        </p>
                        <p class="text-dark" v-else>
                            Are you sure you want to close the trade - #A{{
                                currentYear
                            }}{{ tnx_id }}? <br />

                            with a
                            <b
                                :class="{
                                    'text-green': isProfitGreaterThanInitial(),
                                    'text-red': isProfitLessThanInitial(),
                                }"
                                >{{
                                    isProfitGreaterThanInitial()
                                        ? "Profit"
                                        : "Loss"
                                }}</b
                            >
                            of
                            <span
                                :class="{
                                    'text-green': isProfitGreaterThanInitial(),
                                    'text-red': isProfitLessThanInitial(),
                                }"
                            >
                                <b>{{ getFormattedProfit }}</b>
                            </span>
                        </p>

                        <div class="row pt-4">
                            <div class="col-md-6">
                                <div class="d-grid gap-2">
                                    <button
                                        class="btn btn-success px-2"
                                        type="button"
                                        @click="handleYes"
                                    >
                                        <!-- Yes -->

                                        <!-- Loading spinner -->
                                        <div
                                            v-if="loading"
                                            class="spinner-border spinner-border-sm text-light"
                                            role="status"
                                        >
                                            <span class="visually-hidden"
                                                >Loading...</span
                                            >
                                        </div>
                                        <div v-else>Yes</div>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-grid gap-2">
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    >
                                        No
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: {
        currency: {
            type: String,
            default: "$",
        },
        test_profit: Number,
        tnx_id: Number,
        can_you_close: Number,
        select_user: String,
    },
    data() {
        return {
            initialProfit: this.test_profit,
            currentProfit: this.test_profit,
            changedProfits: [],
            changedCount: 0,
            currentYear: new Date().getFullYear(),
            loading: false,
        };
    },
    mounted() {
        this.scheduleUpdate();
    },
    methods: {
        scheduleUpdate() {
            let the_profit = this.initialProfit;
            if (the_profit.startsWith("+")) {
                setTimeout(() => {
                    this.updateProfitPlus();
                    this.scheduleUpdate();
                }, 1500);
            } else if (the_profit.startsWith("-")) {
                setTimeout(() => {
                    this.updateProfitMinus();
                    this.scheduleUpdate();
                }, 1500);
            } else {
                setTimeout(() => {
                    this.updateProfitRandom();
                    this.scheduleUpdate();
                }, 1500);
            }
        },
        updateProfitRandom() {
            const integerPart = Math.floor(this.initialProfit);
            const decimalPart = this.initialProfit % 1;

            const halfDecimalPart = decimalPart / 2;
            const doubleDecimalPart = decimalPart * 2;

            const randomDecimal = (
                Math.random() *
                    (doubleDecimalPart.toFixed(2) -
                        halfDecimalPart.toFixed(2)) +
                halfDecimalPart
            ).toFixed(2);

            // Convert the integer part to a number and add it to the random decimal
            const result = Number(integerPart) + Number(randomDecimal);

            this.currentProfit = result;

            // Determine the sign based on the original number
            const sign = this.currentProfit >= this.initialProfit ? "+" : "-";

            // Return the formatted profit
            return `${sign} ${this.currency}${this.currentProfit.toFixed(2)}`;
        },

        updateProfitMinus() {
            // Extract the decimal part of the initial profit
            const decimalPart = this.initialProfit % 1;

            // Generate a random decimal between 0 and the decimal part
            const randomDecimal = Math.random() * decimalPart;

            // Subtract the random decimal from the initial profit
            const result = (this.initialProfit - randomDecimal).toFixed(2);

            this.currentProfit = result;

            // Determine the sign based on the original number
            const sign = "-";

            // Return the formatted profit
            return `${sign} ${this.currency}${this.currentProfit}`;
        },

        updateProfitPlus() {
            // Extract the decimal part of the initial profit
            const decimalPart = parseFloat(this.initialProfit) % 1;

            // Generate a random decimal between 0 and the decimal part
            const randomDecimal = Math.random() * decimalPart;

            // Ensure the generated random decimal is positive
            const adjustedRandomDecimal = Math.max(randomDecimal, 0);

            // Check if parseFloat(this.initialProfit) is a valid number
            if (!isNaN(parseFloat(this.initialProfit))) {
                // Add the adjusted random decimal to the initial profit
                const result = (
                    parseFloat(this.initialProfit) + adjustedRandomDecimal
                ).toFixed(2);

                this.currentProfit = result;

                // Determine the sign based on the original number
                const sign = "+";

                // Return the formatted profit
                return `${sign} ${this.currency}${this.currentProfit}`;
            } else {
                // Handle the case where parseFloat(this.initialProfit) is not a valid number
                console.error("Invalid initialProfit value");
                return ""; // or handle it according to your needs
            }
        },

        isProfitGreaterThanInitial() {
            return this.currentProfit > this.initialProfit;
        },
        isProfitLessThanInitial() {
            return this.currentProfit < this.initialProfit;
        },
        openModal() {
            const modal = new bootstrap.Modal(
                document.getElementById("close_trade_" + this.tnx_id)
            );
            modal.show();
        },
        async handleYes() {
            try {
                this.loading = true; // Show the loading spinner

                const dataToSend = {
                    trans_id: this.tnx_id,
                    profit: this.getFormattedProfit,
                };

                const response = await axios.post(
                    this.select_user + "close-tradeN",
                    dataToSend
                );

                if (response.data) {
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                }
            } catch (error) {
                console.error("Error:", error);
            }
        },
    },
    computed: {
        getFormattedProfit() {
            const formattedProfit = Math.abs(this.currentProfit).toLocaleString(
                undefined,
                { minimumFractionDigits: 2, maximumFractionDigits: 2 }
            );
            const sign = this.currentProfit >= this.initialProfit ? "+" : "-";

            return `${sign} ${this.currency}${formattedProfit}`;
        },
    },
};
</script>

<style scoped>
.text-green {
    color: #82d617;
}

.text-red {
    color: #fd3041;
}
</style>
