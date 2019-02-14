<template>
    <div class="paymentContainer">
        <h3 class="titlePay">Payment security</h3>
        <div class="plan">
            <div class="item"><p class="titlePlan">Product</p>
                <p class="values valuesRegular"><span id="payment-plan">Amount</span></p></div>
            <div class="item"><p class="pricePlan">Subscription</p>
                <p class="values"><span id="payment-price">25</span> &euro;</p></div>
            <div class="item"><p class="pariodPlan">TVA</p>
                <p class="values"><span id="payment-tva">4.83</span> &euro;</p></div>
            <div class="item"><p class="workoutPlan">Total</p>
                <p class="values valuesBold"><span id="payment-total">25</span> &euro;</p></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PaymentInfoComponent"
    }
</script>

<style scoped>

</style>