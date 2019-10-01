<div class="main-wrapper">
<section class="products">
    <div class="products-inner">
        <?php
            foreach ($products as $product){ ?>
                <div class="card-product">
                    <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
                        <div class="card-title"><?php echo $product->h1;?></div>
                        <div class="card-content"><?php echo $product->sm_description;?></div>
                    </a>
                </div>
        <?php
            }
        ?>
        <!--
        <div class="card-product">
            <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
            <div class="card-title">Product 1</div>
            <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            </div>
            </a>
        </div>
        <div class="card-product">
            <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
            <div class="card-title">Product 2</div>
            <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            </div>
            </a>
        </div>
        <div class="card-product">
            <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
            <div class="card-title">Product 3</div>
            <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            </div>
            </a>
        </div>
        <div class="card-product">
            <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
            <div class="card-title">Product 4</div>
            <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            </div>
            </a>
        </div>
        <div class="card-product">
            <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
            <div class="card-title">Product 5</div>
            <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            </div>
            </a>
        </div>
        <div class="card-product">
            <a href="http://ra-stroh.de.itm-solutions.ru/imprint/">
            <div class="card-title">Product 6</div>
            <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            </div>
            </a>
        </div>
        -->
    </div>
</section>

<img src="/img/busines_card.png" class="cataway" alt="cataway">

<?php include ROOT.'/public/app/views/layout/areas/questionform.php' ?>
<!--
<section class="question">
    <div class="question-inner">
        <div class="form">
            <div class="form-head">
                <span>SEND YOUR QUESTION</span>
            </div>
            <div class="form-name">
                <span>Name</span>
                <input type="text">
            </div>
            <div class="form-name">
                <span>Phone</span>
                <input type="text">
            </div>
            <div class="form-name">
                <span>Email</span>
                <input type="text">
            </div>
            <div class="form-name">
                <span>Product</span>
                <input type="text">
            </div>
            <div class="form-question">
                <span>Question</span>
                <textarea type="text"></textarea>
            </div>
            <div class="send">
                <input type="submit" name="submit" value="SEND"">
            </div>
        </div>
    </div>
</section>
-->
</div>