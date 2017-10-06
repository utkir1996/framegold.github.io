<?php
/* @var $this yii\web\View */
use frontend\models\Blog;
use halumein\like\widgets\LikeButton;
use halumein\like\models;

?>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Blog Left Sidebar</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Left Sidebar</li>
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

    <!-- BLOG SECTION START -->
    <div class="blog-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-xs-12">
                    <div class="row">
                        <!-- blog-option start -->
                        <div class="col-md-12">
                            <div class="blog-option box-shadow mb-30  clearfix">
                                <!-- categories -->
                                <div class="dropdown f-left">
                                    <button class="option-btn">

                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-width mt-30">
                                        <aside class="widget widget-categories box-shadow">
                                            <h6 class="widget-title border-left mb-20">Categories</h6>
                                            <div id="cat-treeview-2" class="product-cat">
                                                <ul>
                                                    <li class="closed"><a href="#">Brand One</a>
                                                        <ul>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tab</a></li>
                                                            <li><a href="#">Watch</a></li>
                                                            <li><a href="#">Head Phone</a></li>
                                                            <li><a href="#">Memory</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="open"><a href="#">Brand Two</a>
                                                        <ul>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tab</a></li>
                                                            <li><a href="#">Watch</a></li>
                                                            <li><a href="#">Head Phone</a></li>
                                                            <li><a href="#">Memory</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="closed"><a href="#">Accessories</a>
                                                        <ul>
                                                            <li><a href="#">Footwear</a></li>
                                                            <li><a href="#">Sunglasses</a></li>
                                                            <li><a href="#">Watches</a></li>
                                                            <li><a href="#">Utilities</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="closed"><a href="#">Top Brands</a>
                                                        <ul>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tab</a></li>
                                                            <li><a href="#">Watch</a></li>
                                                            <li><a href="#">Head Phone</a></li>
                                                            <li><a href="#">Memory</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="closed"><a href="#">Jewelry</a>
                                                        <ul>
                                                            <li><a href="#">Footwear</a></li>
                                                            <li><a href="#">Sunglasses</a></li>
                                                            <li><a href="#">Watches</a></li>
                                                            <li><a href="#">Utilities</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                                <!-- recent-product -->
                                <div class="dropdown f-left">
                                    <button class="option-btn">
                                        Recent Post
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-width mt-30">
                                        <aside class="widget widget-product box-shadow">
                                            <h6 class="widget-title border-left mb-20">recent products</h6>
                                            <!-- product-item start -->
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img src="img/cart/4.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title multi-line mt-10">
                                                        <a href="single-product.html">Dummy Blog Name</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img src="img/cart/5.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title multi-line mt-10">
                                                        <a href="single-product.html">Dummy Blog Name</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img src="img/cart/6.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title multi-line mt-10">
                                                        <a href="single-product.html">Dummy Blog Name</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                        </aside>
                                    </div>
                                </div>
                                <!-- Tags -->
                                <div class="dropdown f-left">
                                    <button class="option-btn">
                                        Tags
                                        <i class="zmdi zmdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-width mt-30">
                                        <aside class="widget widget-tags box-shadow">
                                            <h6 class="widget-title border-left mb-20">Tags</h6>
                                            <ul class="widget-tags-list">
                                                <li><a href="#">Bleckgerry ios</a></li>
                                                <li><a href="#">Symban</a></li>
                                                <li><a href="#">IOS</a></li>
                                                <li><a href="#">Bleckgerry</a></li>
                                                <li><a href="#">Windows Phone</a></li>
                                                <li><a href="#">Windows Phone</a></li>
                                                <li><a href="#">Androids</a></li>
                                            </ul>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog-option end -->
                    </div>
                    <div class="row">
                        <?php foreach($posts as $post): ?>
                        <!-- blog-item start -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <?= \yii\helpers\Html::img("@web/img/product/{$post->image}",['alt'=>$post->title])?>
                                <div class="blog-desc">
                               <?php echo     '<h5 class="blog-title">'.$post->title.'</h5>';?>
                              <?php     echo '<p>'.$post->content .'</p>';?>
                                    <div class="read-more">
                                        <a href="<?=\yii\helpers\Url::to(['blog/single','id'=>$post->id])?>">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                  
                                        <li>
                                          <a href="#"><i class="zmdi zmdi-favorite"></i>
                                         <?=  LikeButton::widget(['model' => like]) ?></a>
                                        </li>
                                        <li>
                                         <?php echo   '<a href="#"><i class="zmdi zmdi-comments"></i></a>';?>
                                        </li>
                                        <li>
                                           <a  href="#myModal" data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-share">
                                           </i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                     <?php endforeach; ?>
                    </div>
                </div>
    <?php if(!empty($blogpages)): ?>
                <?php echo  \yii\widgets\LinkPager::widget([
                    'pagination'=>$blogpages,
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

                ]);?> <?php endif;?>
                <!-- sidebar -->
                <div class="col-md-3 col-md-pull-9 col-xs-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form method="get" action="<?=\yii\helpers\Url::to(['blog/search'])?>">
                            <input type="text" name="s" placeholder="Search here...">
                            <!--<button type="submit"><i class="zmdi zmdi-search"></i></button>-->
                        </form>
                    </aside>
                     <!-- widget-categories -->
                                 <?php echo \app\components\CategoryWidget::widget([
                                    'tpl'=>'BlogLeftSidebar',
                                    
                                    'ModelName'=>'BlogCategory',
                                    
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
    <!-- BLOG SECTION END -->
</div>


<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="margin-top:200px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Social Share</h4>
      </div>
      <div class="modal-body">
          <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,telegram"></div>
      </div>
    </div>
  </div>
</div>
<!-- End page content -->