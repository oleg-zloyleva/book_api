<template>
    <div class="paymentContainer">
        <h3 class="titlePay">Payment security</h3>
        <div class="plan">
            <div class="item"><p class="titlePlan">Product</p>
                <p class="values valuesRegular"><span id="payment-plan">{{ data.plan_name }}</span></p></div>
            <div class="item"><p class="pricePlan">Subscription</p>
                <p class="values"><span id="payment-price">{{ data.plan_price }}</span> &euro;</p></div>
            <div class="item"><p class="workoutPlan">Total</p>
                <p class="values valuesBold"><span id="payment-total">{{ data.plan_price }}</span> &euro;</p></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PaymentInfoComponent",
        props: {
            data:{
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>