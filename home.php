<?php 

    $pageData = new StdClass();
    $pageData->title = 'Home';
    $pageData->content = "

   <div class='main-container' style='max-width:1300px'>
    <div class='cloud'>
        <div class='header'>
            <div class='header__bar'>
                <div class='lang-ar menu-button' style='display:none'></div>
                <div class='lang-en menu-button'>English</div>
            </div>
            <div class='header__moon'>
            </div>
            <div class='header__title'>HELLO MY FRIEND<br/>Welcome To My Side</div>
        </div>
        <div class='x3 cloud__front'></div>
        <div class='x2 cloud__back'></div>
        <div class='snake'></div>
        <div class='x1 cloud__main'></div>
    </div>
    <div>
        <div class='light-stripes'></div>
        <div class='space'></div>
        <div class='stars'></div>
        <div class='blue-shadow'></div>
        <div class='popup' style='display:none'>
            <div class='popup__inner'>
                <div class='dialog-1'>
                    <div class='popup__title'>Question 1 of 3</div>
                    <div class='popup__sub-title'>
                        What was the last thing you did before you went to sleep last night?
                    </div>
                    <div class='popup__divider'></div>
                    <div class='blue-button'>Surf the Net</div>
                    <div class='blue-button'>Watch TV</div>
                    <div class='blue-button'>Talk on the phone</div>
                </div>
            </div>
        </div>
    </div>
    <div class='ground'>
        <div class='first-part'>
            <div class='first-hill'></div>
            <div class='first-trees'></div>
            <div class='mountain'></div>
        </div>
        <div class='last-part'>
            <div class='last-hill'>
                <div class='house'>
                    <div class='larg-bubble'></div>
                    <div class='small-bubble'></div>
                </div>
                <div class='balloon'></div>
            </div>
            <div class='last-trees'></div>
            <div class='yellow-lighting'></div>
        </div>
        <div class='grace'></div>
    </div>
  </div>

    ";
    $page = require_once 'layouts/index.php';
    echo $page;

 ?>