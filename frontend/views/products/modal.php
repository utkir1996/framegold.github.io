<div class="modal-product clearfix">
    <div class="product-images">
        <div class="main-image images">
            <?=\yii\helpers\Html::img("@web/img/product/{$product->img_src}",['alt'=>$product->name]);?>
        </div>                        </div>
    <!-- .product-images -->
    <div class="product-info">
        <h1><?=$product->name?></h1>
        <div class="price-box-3">
            <div class="s-price-box">
                <span class="new-price"><?=$product->new_price?> $</span>
                <span class="old-price"><?=$product->old_price?> $</span>
            </div> </div>
        <a href="<?=\yii\helpers\Url::to(['/products/single','id'=>$product->id])?>" class="see-all">See all features</a>
        <div class="quick-add-to-cart">
            <form method="post" class="cart">
                <div class="numbers-row">
                    <input type="number" id="french-hens" value="3">
                </div>
                <button class="single_add_to_cart_button" type="submit">Add to cart</button>
            </form>
        </div>
        <div class="quick-desc">
            <?=$product->description?>
        </div>
        <div class="social-sharing">
            <div class="widget widget_socialsharing_widget">
                <h3 class="widget-title-modal">Share this product</h3>
                <ul class="social-icons clearfix">
                    <li>
                        <a class="facebook" href="#" target="_blank" title="Facebook">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="google-plus" href="#" target="_blank" title="Google +">
                            <i class="zmdi zmdi-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank" title="Twitter">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pinterest" href="#" target="_blank" title="Pinterest">
                            <i class="zmdi zmdi-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank" title="RSS">
                            <i class="zmdi zmdi-rss"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- .product-info -->
</div><!-- .modal-product -->
