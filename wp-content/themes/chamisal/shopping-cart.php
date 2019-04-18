<?php
/*
Template Name: Shopping Template
*/

get_header();

?>
    <div class="hide-mail"></div>
    <div id="trigger-homepage"></div>
    <div id="trigger5"></div>

    
    <div class="shopping-main">
        <h1 class="shopping-cart-title"> shopping cart</h1>
        <br>
        <h3 class="shopping-cart-subtitle"> PLEASE REVIEW AND PROCEED TO CHECK OUT</h3>
    </div>
    <div class="table-responsive content2">
        <table class="table table-hover table__body">
            <thead>
                <tr class="table__title">
                    <th scope="col" colspan="2">item description</th>
                    <th scope="col">quantity</th>
                    <th scope="col">availability</th>
                    <th scope="col">price</th>
                    <th scope="col">total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table__quantity__column">
                    <th>
                        <img class="wine__image__cart col-md-4" src="/wp-content/uploads/2018/04/bottle-cart-1.png" alt="" srcset="">
                    </th>
                    <td class="table__description">
                        <h3 id="table__description__title">2016 stainless chardonnay</h3>
                        <button class="table__remove__button"> Remove</button>
                    </td>
                    <td>
                        <p class="table__quantity__number">1</p>
                        <button class="table__update__button">Update</button>
                    </td>
                    <td>In Stock</td>
                    <td>$18</td>
                    <td>
                        <b>$53</b>
                    </td>
                </tr>

                <tr class="table__quantity__column">
                    <th >
                        <img class="wine__image__cart col-md-4" src="/wp-content/uploads/2018/04/bottle-cart-1.png" alt="" srcset="">
                    </th>
                    <td class="table__description">
                        <h3 id="table__description__title">2015 estate chardonnay </h3>
                        <button class="table__remove__button"> Remove</button>
                    </td>
                    <td>
                        <p class="table__quantity__number">1</p>
                        <button class="table__update__button">Update</button>
                    </td>
                    <td>In Stock</td>
                    <td>$35</td>
                    <td>
                        <b>$53</b>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="table-responsive">
        <table class="table table__total">
            <tbody>
    
                <tr>
                <th>Subtotal</th>
                    <td><b>$18</b></td>
        
                </tr>
                <tr>
                <th>Shipping</th>
                    <td>---</td>
    
                </tr>
            <tr>
                <th>Total</th>
                    <td><b>$18.00</b></td>
    
                </tr>
            </tbody>
        </table>
    </div>






    <?php

get_footer();