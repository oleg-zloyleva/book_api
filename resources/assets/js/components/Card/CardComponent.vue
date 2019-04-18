<template>
    <div class="overlayFormMember js-overlay">
        <div class="popup js-popup-campaign">
            <div class="btnClosse" @click="closeIframe"></div>
            <div class="wrappers">

                <payment-info
                        :data="data"
                ></payment-info>

                <div class="paymentContainer">
                    <form class="form" @submit.prevent="submitCardHandler">
                        <div class="wrapInput">
                            <div class="itemInput">
                                <label class="formLabel">Card type</label>
                                <img
                                        class="imgCard"
                                        id="imgCardType"
                                        :src="'/img/creditCard/' + imgCardType + '.png'"
                                        :alt="imgCardType"
                                        :title="imgCardType"
                                >
                            </div>
                            <div class="itemInput">
                                <label for="card" class="formLabel">Card <br>number</label>
                                <cleave
                                        v-model="paymentData.cardNumber"
                                        :options="cardNum"
                                        class="input"
                                        name="cardNumber"
                                        id="card"
                                        placeholder="0000 0000 0000 0000"
                                ></cleave>
                            </div>
                            <div class="itemInput">
                                <label for="cardExpiration" class="formLabel">Expiration <br>Date</label>
                                <cleave
                                        v-model="paymentData.expirationDate"
                                        :options="{date: true, datePattern: ['m','y']}"
                                        class="input"
                                        name="expirationDate"
                                        id="cardExpiration"
                                        placeholder="00/00"
                                ></cleave>
                            </div>
                            <div class="itemInput">
                                <label for="nameUser" class="formLabel">Name</label>
                                <input
                                        v-model="paymentData.nameUser"
                                        class="input"
                                        name="nameUser"
                                        id="nameUser"
                                        @input="onlyLetters"
                                        placeholder="Name"
                                >
                            </div>
                            <div class="itemInput">
                                <label for="cvvCode" class="formLabel">CVV</label>
                                <cleave
                                        v-model="paymentData.cvvCode"
                                        :options="{creditCard: true}"
                                        class="input"
                                        name="cvv"
                                        id="cvvCode"
                                        :maxlength="maxLengthCvv"
                                        :placeholder="placeholderCvv"
                                ></cleave>
                            </div>
                        </div>

                        <div class="tariff-block">
                            <p>Your selected tariff is <span class="FirstLetter">{{ data.plan_name }}</span> at {{ data.plan_price }} €</p>
                            <p>Trial period of 5 days at 2.99 €. If a customer has not unsubscribed before the end of
                                the trial period, the Starter formula is automatically renewed at 29.90 € / month, the
                                Basic formula is renewed at 49.90 € / month and the Pro formula at 89.90 € / month.</p>
                            <p>A customer can unsubscribe at any time through the unsubscribe page or by contacting our
                                support team:support@astixlimited.com (astixlimited.com) or +359 2 437 4207</p>
                        </div>

                        <div class="agree-block">
                            <div class="agree-block__row">
                                <div class="agree-block__checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span></span>
                                        I confirm that I have read and accepted the
                                        <a class="agree-block__link" href="/privacy_policy">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="agree-block__row">
                                <div class="agree-block__checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span></span>
                                        I confirm that I have read and accepted
                                        <a class="agree-block__link" href="/terms_conditions">Terms of use</a>
                                        and the
                                        <a class="agree-block__link" href="/refund_policy">Refund Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="agree-block__row">
                                <div class="agree-block__checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span></span>
                                        I am aware that the automatic service renewal option is enabled
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="wrapBtn">
                            <button type="submit" class="btnSubmit">CONFIRM PAYMENT</button>
                        </div>
                    </form>
                </div>
                <div class="paymentContainer">
                    <div class="wrapRemember">
                        <p class="textRemember">Your order number is 5060037. Remember, your subscription is a
                            subscription
                            service. If you do not unsubscribe before the expiry of the trial period, the subscription
                            will
                            be renewed every 30 days in the amount of &euro; {{ data.plan_price }}. This campaign complies with the
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
        props: {
            data: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                data: {},
                paymentData: {
                    cardType: "",
                    cardNumber: "",
                    expirationDate: "",
                    nameUser: "",
                    cvvCode: ""
                },
                paymentInfo: {},// Todo parse from query OR took in blade
                imgCardType: 'unknown',
                maxLengthCvv: 3,
                placeholderCvv: '000',
                cardNum: {
                    creditCard: true,
                    onCreditCardTypeChanged: (type) => {
                        this.imgCardType = type;
                        let cvvCode = document.getElementById('cvvCode');
                        if (type === 'amex') {
                            this.maxLengthCvv = '4';
                            this.placeholderCvv = '0000';
                            this.paymentData.cvvCode = '';
                        } else {
                            this.maxLengthCvv = '3';
                            this.placeholderCvv = '000';
                            this.paymentData.cvvCode = '';
                        }
                    }
                }
            }
        },
        methods: {
            closeIframe() {
                window.parent.postMessage({status: "ok", action: "close"}, '*');
            },
            submitCardHandler() {
                console.log("submitCardHandler");

                //todo generate success/fail event
                window.parent.postMessage({status: "ok", action: "payment_success"}, '*');
            },
            onlyLetters(e) {
                // console.log(e.target.value);
            }
        }
    }
</script>

<style scoped>
    .FirstLetter{
        text-transform: capitalize;
    }
</style>