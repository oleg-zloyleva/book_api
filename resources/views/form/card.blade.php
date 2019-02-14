@extends('layouts.index')

@section('content')
    <div class="overlayFormMember js-overlay">
        <div class="popup js-popup-campaign">
            <div class="btnClosse"></div>
            <div class="wrappers">
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
                <div class="paymentContainer">
                    <form class="form">
                        <div class="wrapInput">
                            <div class="itemInput">
                                <label for="cardType" class="formLabel">Card type</label>
                                <div class="select">
                                    <select name="" id="cardType" disabled>
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
                                       placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="itemInput">
                                <label for="cardExpiration" class="formLabel">Expiration <br>Date</label>
                                <input class="input exp-date-mask" id="cardExpiration" name="expirationDate" placeholder="00/00">
                            </div>
                            <div class="itemInput">
                                <label for="nameCard" class="formLabel">Name</label>
                                <input class="input only-letters" id="nameCard" name="nameCard"  placeholder="Name">
                            </div>
                            <div class="itemInput">
                                <label for="cvvCode" class="formLabel">CVV</label>
                                <input class="input only-number" id="cvvCode" name="cvv" placeholder="000" maxlength="3">
                            </div>
                            <div class="wrapBtn">
                                <div class="wrapSubmit">
                                    <input type="submit" class="btnSubmit" value="CONFIRM PAYMENT">
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
@endsection