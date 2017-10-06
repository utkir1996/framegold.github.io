<?php
use rsr\yii2\ButtonDropdownSorter;
use kartik\rating\StarRating;
/*use kartik\widgets\StarRating;*/
?>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title"><?=$page_title?></h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?=\yii\helpers\Url::home()?>">Home</a></li>
                            <li><?=$page_subtitle?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<div id="page-content" class="page-wrapper">
    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-sm-12">
                    <div class="shop-content">
                        <!-- shop-option start -->
                        <div class="shop-option box-shadow mb-30 clearfix">
                            <!-- Nav tabs -->
                            <ul class="shop-tab f-left" role="tablist">
                                <li class="active">
                                    <a href="#grid-view" data-toggle="tab">
                                        <i class="zmdi zmdi-view-module"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#list-view" data-toggle="tab">
                                        <i class="zmdi zmdi-view-list-alt"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- short-by -->
                            <div class="short-by f-left text-center">
                                <span>Sort by :</span>
                                <select>
                                    <option value="volvo">Newest items</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <!-- showing -->
                            <div class="showing f-right text-right">
                                <span>Showing : 01-09 of 17.</span>
                            </div>
                        </div>
                        <!-- shop-option end -->
                        <!-- Tab Content start -->
                        <div class="tab-content">
                            <!-- grid-view -->
                            <?php if(!empty($products)):?>
                                <div role="tabpanel" class="tab-pane active" id="grid-view">
                                    <div class="row">
                                        <!-- product-item start -->

                                        <?php foreach ($products as $product):?>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="<?php \yii\helpers\Url::to(['products/view','id'=>$product->id])?>">
                                                            <?=\yii\helpers\Html::img("@web/img/product/{$product->img_src}",['alt'=>$product->name])?>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="<?=\yii\helpers\Url::to(['/products/view','id'=>$product->id])?>"><?=$product->name?></a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <?php $rating=$product->rating; $rating=$rating>5 ? 5:$rating;  ?>
                                                            <?php if($product->rating>0):?>
                                                                <?php for($i=1;$i<=$rating;$i++):?>
                                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <?php endfor;?>
                                                                <?php for($j=$i;$j<=5;$j++):?>
                                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                                <?php endfor;?>
                                                            <?else:?>
                                                                <?php for($i=1;$i<=5;$i++):?>
                                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                                <?php endfor;?>
                                                            <?php endif;?>
                                                        </div>
                                                        <h3 class="pro-price"><?=$product->new_price?> $</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li id="liModalGrid">
                                                                <a href="<?=\yii\helpers\Url::to(['products/modal','id'=>$product->id])?>" id="modalProductGrid" data-toggle="modal"  data-target="#productModal" data-id="<?=$product->id?>" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a></li>
                                                            <li><a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                        <!-- product-item end -->
                                    </div>
                                </div>
                                <!-- list-view -->
                                <div role="tabpanel" class="tab-pane" id="list-view">
                                    <div class="row">
                                        <!-- product-item start -->

                                        <?php foreach ($products as $product):?>
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="<?php \yii\helpers\Url::to(['products/single','id'=>$product->id])?>">
                                                            <?=\yii\helpers\Html::img("@web/img/product/{$product->img_src}",['alt'=>$product->name])?>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="<?php \yii\helpers\Url::to(['products/single','id'=>$product->id])?>"><?=$product->name?></a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <?php $rating=$product->rating; $rating=$rating>5 ? 5:$rating;  ?>
                                                                <?php if($product->rating>0):?>
                                                                    <?php for($i=1;$i<=$rating;$i++):?>
                                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                    <?php endfor;?>
                                                                <?else:?>
                                                                    <?php for($i=1;$i<=5;$i++):?>
                                                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                                    <?php endfor;?>
                                                                <?php endif;?>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">Brand Name</h6>
                                                        <h3 class="pro-price">$ <?=$product->new_price?></h3>
                                                        <p><?=$product->description?></p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li id="liModalList">
                                                                <a href="<?= \yii\helpers\Url::to(['products/modal','id'=>$product->id])?>" id="modalProductList" data-toggle="modal"  data-target="#productModal" data-id="<?=$product->id?>" title="<?=$feature->name?>"><i class="zmdi zmdi-zoom-in"></i></a></li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                        <!-- product-item end -->
                                        <!-- product-item end -->
                                    </div>
                                </div>
                            <?php else:?>
                                <?php echo '<h1>No products</h1>';?>
                            <?php endif;?>
                        </div>
                        <!-- Tab Content end -->
                        <!-- shop-pagination start -->
                        <?php if(isset($pages) && !empty($pages)):?>
                        <?php echo  \yii\widgets\LinkPager::widget([
                            'pagination'=>$pages,
                            'nextPageLabel' => '<i class="zmdi zmdi-chevron-right"></i>',
                            'prevPageLabel' => '<i class="zmdi zmdi-chevron-left"></i>',
                            'hideOnSinglePage' => true,
                            'options' => [
                                'class' => 'shop-pagination box-shadow text-center ptblr-10-30',
                            ],
                            'pageCssClass' => '',
                            'nextPageCssClass' => '',
                            'prevPageCssClass' => '',

                            'firstPageCssClass' => '',
                            'maxButtonCount' => 4,
//              'linkOptions' => [
//              'class' => 'active',
//        ],

                        ]);?>
                        <?php endif;?>
                        <!-- shop-pagination end -->
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9 col-sm-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form method="get" action="<?=\yii\helpers\Url::to(['products/search'])?>">
                            <input type="text" name="s" placeholder="Search here...">
                            <!--<button type="submit"><i class="zmdi zmdi-search"></i></button>-->
                        </form>
                    </aside>
                    <!-- widget-categories -->
                  
                                <?php echo \app\components\CategoryWidget::widget([
                                    'tpl'=>'ProductsLeftSidebar',
                                    
                                    'ModelName'=>'Categories',
                                    
                                    'a'=>['class'=>'','id'=>'','otherAttrbutes'=>''],
                                    
                                    'LiOpen'=>[ 'class'=>'open','id'=>'','otherAttrbutes'=>''],
                                    
                                    'LiClose'=>['class'=>'closed','id'=>'','otherAttrbutes'=>''],
                                    
                                    'BeforeLi'=>
                                     [
                                        [ 'name'=>'aside', 'class'=>'widget widget-categories box-shadow mb-30','id'=>'','otherAttrbutes'=>'','text'=>''],
                                         
                                        ['name'=>'h6','class'=>'widget-title border-left mb-20','id'=>'','otherAttrbutes'=>'','text'=>'Categories','close'=>true],
                                         
                                        ['name'=>'div','class'=>'product-cat','id'=>'cat-treeview','otherAttrbutes'=>'','text'=>''],
                                         
                                        ['name'=>'ul','class'=>'','id'=>'','otherAttrbutes'=>'','text'=>'']
                                         
                                    ],
                                ]); ?>
                    <!-- shop-filter -->
                    <aside class="widget shop-filter box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Price</h6>
                        <div class="price_filter">
                            <div class="price_slider_amount">
                                <input type="submit"  value="You range :"/>
                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </aside>
                    <!-- widget-color -->
                            <?php echo \app\components\ColorWidgets::widget([
                                'tpl'=>'color',
                            ]); ?>
                    <!--  end widget-color -->
                    <!-- operating-system -->
                    <aside class="widget operating-system box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">operating system</h6>
                        <form action="action_page.php">
                            <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>                            <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                        </form>
                    </aside>
                    <!-- widget-product -->
                    <aside class="widget widget-product box-shadow">
                        <h6 class="widget-title border-left mb-20">recent products</h6>
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/4.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>

                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/8.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/12.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->
</div>
<!-- End page content -->
<!-- START QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="ProductModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="ModalBodyProduct">
                    <!--ajax-->
                </div>
            </div>
            <!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->