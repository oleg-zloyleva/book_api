<template>
    <div class="overlayFormMember js-overlay">
        <div class="popup js-popup-campaign">
            <div class="btnClosse" @click="closeIframe"></div>
            <div class="wrappers">

                <payment-info

                ></payment-info>

                <div class="paymentContainer">
                    <form class="form" @submit.prevent="submitCardHandler">
                        <div class="wrapInput">
                            <div class="itemInput">
                                <label for="cardType" class="formLabel">Card type</label>
                                <div class="select">
                                    <select name="" id="cardType" disabled v-model="paymentData.cardType">
                                        <option value="">Card type</option>
                                        <option value="Visa">Visa</option>
                                        <option value="Visa Electron">Visa Electron</option>
                                        <option value="Maestro">Maestro</option>
                                        <option value="Mastercard">Mastercard</option>
                                        <option value="American Express">American Express</option>
                                        <option value="Discover Card">Discover Card</option>
                                    </select>
                                </div>
                                <img class="imgCard" id="imgCardType" src="" alt="">
                            </div>
                            <div class="itemInput">
                                <label for="card" class="formLabel">Card <br>number</label>
                                <input class="input card-number-mask" id="card" name="cardNumber"
                                       v-model="paymentData.cardNumber"
                                       @input="enterCardHandler"
                                       placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="itemInput">
                                <label for="cardExpiration" class="formLabel">Expiration <br>Date</label>
                                <input class="input exp-date-mask" id="cardExpiration" name="expirationDate" placeholder="00/00" v-model="paymentData.expirationDate">
                            </div>
                            <div class="itemInput">
                                <label for="nameCard" class="formLabel">Name</label>
                                <input class="input only-letters" id="nameCard" name="nameCard"  placeholder="Name" v-model="paymentData.nameCard">
                            </div>
                            <div class="itemInput">
                                <label for="cvvCode" class="formLabel">CVV</label>
                                <input class="input only-number" id="cvvCode" name="cvv" placeholder="000" maxlength="3" v-model="paymentData.cvvCode">
                            </div>
                            <div class="wrapBtn">
                                <div class="wrapSubmit">
                                    <button type="submit" class="btnSubmit">CONFIRM PAYMENT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="paymentContainer">
                    <div class="wrapRemember">
                        <p class="textRemember">Your order number is 5060037. Remember, your subscription is a subscription
                            service. If you do not unsubscribe before the expiry of the trial period, the subscription will
                            be renewed every 30 days in the amount of &euro; 29. This campaign complies with the
                            requirements of
                            the European Union.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    Vue.component('payment-info', require('./PaymentInfoComponent').default);

    export default {
        name: "CardComponent",
        data(){
            return {
                paymentData: {
                    cardType: "",
                    cardNumber: "",
                    expirationDate: "",
                    nameCard: "",
                    cvvCode: "",
                },
                paymentInfo: {},// Todo parse from query OR took in blade
                cards: {
                    37: {0: "American Express", 1: "", 2: "y", 3: 15, 4: "l"},
                    4: {0: "Visa", 1: "", 2: "y", 3: ""},
                    4026: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    417500: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    4405: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    4508: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    4844: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    4913: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    4917: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
                    5: {0: "Mastercard", 1: "", 2: "y", 3: 16, 4: "l"},
                    56: {0: "Maestro", 1: "", 2: "y", 3: ""},
                    63: {0: "Maestro", 1: "", 2: "y", 3: ""},
                    65: {0: "Discover Card", 1: "", 2: "y", 3: ""},
                    67: {0: "Maestro", 1: "", 2: "y", 3: 16, 4: "l"},
                }
            }
        },
        methods:{
            closeIframe(){
                window.parent.postMessage({status: "ok", action: "close"}, '*');
            },
            submitCardHandler(){
                console.log("submitCardHandler");

                //todo generate success/fail event
                window.parent.postMessage({status: "ok", action: "payment_success"}, '*');
            },
            enterCardHandler(){
                console.log("enterCardHandler");
            }
        }
    }
</script>

<style scoped>

</style>