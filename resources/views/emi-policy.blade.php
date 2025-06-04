@extends('front.layouts.app')

@section('contents')

    <section class="emi_policy_sec_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_emi-policy">
                        <img src="assets/images/emi-lg.webp" alt="">
                        <div class="bankss">
                            <h5>Available Banks</h5>
                            <ul class="logo-list">
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/BRAC.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="BRAC Bank Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/CITY-AMEX.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="City Bank Amex Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/DBBL.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="DBBL Bank Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/EBL.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="EBL Bank Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/LANKA-BANGLA.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="LankaBangla Bank Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/MTB.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="MTB Bank Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/PRIME.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="Prime Bank Logo"></li>
                                <li>
                                    <img src="https://ik.imagekit.io/w13m3d3rhif/web/emi-bank-logo/SCB.png?tr=f-auto,w-450,h-auto,pr-true"
                                         alt="SCB Bank Logo"></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="emi_policy_sec_2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="emi_s">
                        <h4>Terms & Conditions</h4>
                        <ul>
                            <li>EMI is available on Flight, Hotel & Tour.</li>
                            <li>The payable amount must be equal to or greater than BDT 5,000 to avail the EMI facility.
                            </li>
                            <li>To avail the EMI facility, you must use eligible credit cards of the selected banks
                                only.
                            </li>
                            <li>You can get up to 12 months tenure depending on your card issuing bank.</li>
                            <li>It might take 3 to 5 working days to reflect the installment on your credit card
                                depending on your bank.
                            </li>
                            <li>Once you make the transaction, the full amount will be blocked until the installment
                                repayments have been completed.
                            </li>
                            <li>A minimal service fee named Convenience Fee may apply depending on the tenure, and it is
                                non-refundable.
                            </li>
                            <li>[Brand Name] will follow the Bank/ Payment service provider's policy to resolve any issue.
                            </li>
                        </ul>

                    </div>
                    <div class="faqss_sec">
                        <h4>FAQs</h4>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        What cards are eligible?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">Credit cards from selected issuing banks are eligible to
                                            purchase with EMI. In that case, transaction amount must be equal to or
                                            higher than BDT 5,000.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        Can I use debit card?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">No, debit card transactions cannot be converted into EMI as per
                                            bank policy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        Is there any additional Interest applicable for EMI?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">You can avail EMI without paying additional interest.But you
                                            might need to pay a small convenience fee depending on your tenure and
                                            issuer bank.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        What are the available monthly installment plans or tenures?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">You can choose from 3 to 12 months plan depending on the policy
                                            of your card issuing bank.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                        Is it required to submit anything physically to process the EMI?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">No. This is an online EMI facility so physical copy is not
                                            required.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                        Is early settlement possible? What will be the fee?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">Please communicate with your card issuing bank as it depends on
                                            the bank's policy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        Is it available for international credit cards as well?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">No. This facility is only available for credit cards issued in
                                            Bangladesh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                        What is the Convenience Fee?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">To avail EMI facility, a minimal service fee named Convenience
                                            Fee may apply depending on the tenure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                        What is the refund policy?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="line">The EMI charge will be deducted from the payable amount in case
                                            of refund.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
