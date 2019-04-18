<?php
/*
Template Name: Join Form Template
*/

get_header();

?>
 <div class="hide-mail"></div>


<!-- NavbarTrigger to fadeOut -->
<div id="navbar-trigger" class="spacer s0"></div>


<div class="join-now-body background-lines-join">
    <div class="shopping-main">
        <h1 class="shopping-cart-title"> shopping cart</h1>
        <br>
            <h3 class="shopping-cart-subtitle"> PLEASE REVIEW AND PROCEED TO CHECK OUT</h3>
    </div>

<section>
    <div class="join-now-form">
        <div class="container">
            <div class="row">
                <div class="col-75" id="book-selection">
                    <select id="select4" class="book-dropdown" name="ESTATE PATIO FLIGHT">
                        <option value="australia">ESTATE PATIO FLIGHT</option>
                        <option value="canada">CHAMISAL FLIGHT</option>
                        <option value="usa">PRIVATE TASTING & TOUR</option>
                    </select>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="join-title"> billing info</p>
                </div>
            </div>
            <div class="join-sub-content">
                <div class="row">
                    <div class="col-md-12">
                        <p class="join-subtitle"> Enter your billing information as shown on your credit card statement.</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-75" id="book-modal-left">
                        <input type="text" id="lname" name="firstname" placeholder="FIRST NAME">
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="LAST NAME">
                    </div>

                </div>
                <div class="row">

                    <div class="col-75" id="book-modal-left">
                        <input type="text" id="lname" name="firstname" placeholder="BIRTHDAY">
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="COMPANY">
                    </div>

                </div>
                
                <div class="row">

                    <div class="col-75" id="book-modal-left">
                        <input type="text" id="lname" name="firstname" placeholder="ADDRESS LINE 1">
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="ADDRESS LINE 2">
                    </div>

                </div>
                <div class="row">

                    <div class="col-75" id="book-modal-left">
                        <input type="text" id="lname" name="firstname" placeholder="CITY">
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="STATE">
                    </div>

                </div>
                <div class="row">

                    <div class="col-75" id="book-modal-left">
                        <input type="text" id="lname" name="firstname" placeholder="PHONE">
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="EMAIL">
                    </div>
                </div>
            </div>
           
            
        </div>
        <div class="container">
    
              <div class="row">
                <div class="col-md-12">
                    <p class="join-title"> shipping info</p>
                </div>
            </div>
            <div class="join-sub-content">
                <div class="row">
                    <div class="col-75" id="book-selection">
                        <select id="select4" class="book-dropdown" name="ESTATE PATIO FLIGHT">
                            <option value="australia">SAME AS BILLING</option>
                            <option value="canada">ADDRESS LINE 1</option>
                            <option value="usa">ADDRESS LINE 2</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">

              <div class="row">
                <div class="col-md-12">
                    <p class="join-title"> payment method</p>
                </div>
              </div>

              <div class="join-sub-content">
                <div class="row">
                    <div class="col-md-12">
                        <p class="join-subtitle"> Your password must be at least 6 characters long.</p>
                    </div>
                </div>
                    <div class="row">

                        <div class="col-75" id="book-modal-left">
                            <input type="text" id="lname" name="firstname" placeholder="USERNAME">
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="PASSWORD">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-75" id="book-modal-left">
                            <input type="text" id="lname" name="firstname" placeholder="CONFIRM PASSWORD">
                        </div>
        
                    </div>

              </div>
            

       </div>
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="join-title">payment method</div>
               </div>
           </div>
           <br>
           <br>
           <div class="join-sub-content">
           <div class="row">
               <div class="col-md-12">
                   <div class="join-subtitle"><strong> Secure Shopping</strong></div>
               </div>
               <div class="col-md-12">
                   <div class="join-subtitle">The security of your sensitive information is important to us. When you enter sensitive information such as credit card number on our order forms, we encrypt that information using secure socket layer technology</div>
                    <br>
                    <div class="join-subtitle">Enter your billing information as shown on your credit card statement.</div>
                </div>

           </div>
           <br>
           <br>

            <div class="row">

                <div class="col-75" id="book-modal-left">
                    <input type="text" id="lname" name="firstname" placeholder="ADD NEW CARD">
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder=" NAME ON CARD">
                </div>

            </div>
            <div class="row">

                <div class="col-75" id="book-modal-left">
                    <input type="text" id="lname" name="firstname" placeholder="CARD NUMBER">
                </div>
                <div class="col-75" id="book-modal-left">
                    <input type="text" id="lname" name="firstname" placeholder="EXPIRATION DATE">
                </div>
            </div>

           </div>
           
       </div>
<br>
<br>
        <div class="row">
            <div class="col-md-12">
                <div class="continue-review">
                <a class="continue-button"> CONTINUE & REVIEW</a>
                </div>


            </div>
        </div>

    </div>

    </div>
</section>

<?php

get_footer();
