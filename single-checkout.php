<?php 
/*
Template Name: Checkout
*/
?>
<?php get_header(); ?>
    <!-- ==========
        BODY     
     ===========-->
     <div class="section checkoutSection row">
         <!-- PAYMENT FORM -->
         <div class="col-lg-7 paymentForm">
             <div class="sectionSubHead">select payment method</div>
             <div class="bottomBorder"></div>
             <div class="paymentTypes row">
                <div class="col-md-4">
                    <input type="radio" id="inputType1" name="paymentType" value="creditCard" checked>
                        <label for="inputType1">
                            <div class="paymentType" >Credit Card</div>
                        </label>
                    </input>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="paymentType" value="creditCard" id="inputType2">
                        <label for="inputType2">
                            <div class="paymentType" >Bank Transfer</div>
                        </label>
                    </input>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="paymentType" value="creditCard" id="inputType3">
                        <label for="inputType3">
                            <div class="paymentType" >Paystack</div>
                        </label>
                    </input>
                </div>
            </div>
             <form class="paymentUserDetails">
                <div class="inputRow">
                    <div class="inputLabel sectionSubHead greyText" >name on card</div>
                    <input type="text" required />
                </div>
                <div class="inputRow">
                    <div class="inputLabel sectionSubHead greyText" >card number</div>
                    <input type="text" required />
                </div>
                <div class="inputRow row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="inputLabel sectionSubHead greyText" >month</div>
                        <input type="number" required />
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="inputLabel sectionSubHead greyText" >year</div>
                        <input type="number" required />
                    </div>
                    <div class="col-md-4">
                        <div class="inputLabel sectionSubHead greyText" >cvv</div>
                        <input type="number" required />
                    </div>
                </div>
             </form>
        </div>
        <!-- ORDER SUMMARY -->
        <div class="col-lg-5 mt-5 mt-lg-0 orderSummarySection row">
            <div class="orderSummaryContainer col-12">
                <div class="orderSummary">
                <div class="sectionSubHead">order summary</div>
                <div class="bottomBorder"></div>
                <div class="summaryPackageName">
                    <div class="sectionSubHead greyText">Graphics Lite</div>
                    <div class="sectionSubHead greyText">N50K</div>
                </div>
                <div class="summaryPackageDescription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam.
                </div>
                </div>
                <div class="orderSummaryDate">
                    <div class="sectionSubHead greyText">Tuesday</div>
                    <div class="greyText mt-2">April 28, 2020 | 2:00AM</div>
                </div>
            </div>
            <a href="#" class="purchaseBtn mainBtn col-12">
                purchase now
            </a>
        </div>
    </div>
<!-- ==========        
NEWS LETTER        
===========-->
<?php get_template_part('includes/section', 'newsletter');?>
<!-- ==========        
CONTACT SECTION        
===========-->
<?php get_template_part('includes/section', 'contact');?>
<!-- ==========
FOOTER   
===========-->
<?php get_footer(); ?>
