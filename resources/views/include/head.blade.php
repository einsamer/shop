<?php
/**
 * Created by PhpStorm.
 * User: huck
 * Date: 19/02/2016
 * Time: 08:31
 */
?>

<div class="row">
    <div class="top-bar">
        <div class="logo top-logo">
            <p class = "page-title">E.V.SHOP</p>
            <div class="top-option">
                <form action="#" class="form-inline">
                    <input type="text" class = 'form-control search-input' placeholder = 'What do you want?'>
                    <input type = 'submit' class = 'btn btn-danger search-input'>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="slide-show">
            <img src="{{ URL::asset('assets/images/avatar.jpg') }}" alt="" />
            <div class="slide-background">
                <div class="page-link">
                    <p class = 'page-title'>E.V.SHOP</p>
                    <hr>
                    <p>Everything can be sold</p>
                </div>
            </div>
        </div>
    </div>
</div>
