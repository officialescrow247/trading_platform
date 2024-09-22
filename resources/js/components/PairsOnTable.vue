<template>
    <div class="table-container">
        <table class="table text-center">
            <thead>
                <tr>
                <th class="py-3" scope="col" style="border-top-left-radius: 10px;">Market <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col">Bid <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col">Ask <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col">Spread <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col" style="border-top-right-radius: 10px;">Trend <i class="fa fa-circle-info"></i></th>
                </tr>
            </thead>

            <tbody>
                <!-- <tr v-for="(pair, index) in marketData" :key="index" :class="index % 2 === 0 ? 'tB_c' : 'tB_c2'">
                    <th class="py-3" scope="row">{{ pair.market }}</th>
                    <td class="py-3">
                        <button class="btn rounded-pill btn-color px-4"><b>SELL {{ pair.bid }}</b></button>
                    </td>
                    <td class="py-3">
                        <button class="btn rounded-pill btn-color px-4"><b>BUY {{ pair.ask }}</b></button>
                    </td>
                    <td class="py-3">{{ pair.spread }}</td>
                    <td class="py-3">{{ pair.trend }}</td>
                </tr> -->
                <tr class="tB_c">
                    <th class="py-3" scope="row">AUD/USD</th>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>SELL 0.67045</b></button></td>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>BUY 0.67049</b></button></td>
                    <td class="py-3">0.4</td>
                    <td class="py-3"></td>
                </tr>

                <tr class="tB_c2">
                    <th class="py-3" scope="row">EUR/USD</th>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>SELL 1.10752</b></button></td>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>BUY 1.10755</b></button></td>
                    <td class="py-3">0.3</td>
                    <td class="py-3"></td>
                </tr>

                <tr class="tB_c">
                    <th class="py-3" scope="row">GBP/USD</th>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>SELL 1.31236</b></button></td>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>BUY 1.31243</b></button></td>
                    <td class="py-3">0.7</td>
                    <td class="py-3"></td>
                </tr>

                <tr class="tB_c2">
                    <th class="py-3" scope="row">USD/CAD</th>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>SELL 1.35871</b></button></td>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>BUY 1.35878</b></button></td>
                    <td class="py-3">0.7</td>
                    <td class="py-3"></td>
                </tr>

                <tr class="tB_c">
                    <th class="py-3" scope="row">USD/JPY</th>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>SELL 140.821</b></button></td>
                    <td class="py-3"><button class="btn rounded-pill btn-color px-4"><b>BUY 140.826</b></button></td>
                    <td class="py-3">0.5</td>
                    <td class="py-3"></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

</script>

<style scoped>
    
</style>
