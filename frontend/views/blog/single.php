<?php
/* @var $this yii\web\View */
use frontent\models\Blog;
?>
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Single Blog</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Single Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- BLOG SECTION START -->
    <div class="blog-section mb-50">
        <div class="container">
            <div class="row">
                <?php if(!empty($singlepost)): ?>
                <div class="col-md-9 col-xs-12">
                    <div class="blog-details-area">
                        <!-- blog-details-photo -->

                        <div class="blog-details-photo bg-img-1 p-20 mb-30">
                           <?=\yii\helpers\Html::img("@web/img/product/{$singlepost->image}",['alt'=>$singlepost->title])?>
                            <div class="today-date bg-img-1">
                                <span class="meta-date"><?= Yii::$app->formatter->asDate($singlepost->publish_date, 'j') ?></span>
            
                                <span class="meta-month"> <?php switch(Yii::$app->formatter->asDate($singlepost->publish_date, 'M')){
                                case 1:  echo  'January' ;break; 
                                case 2:  echo  'February'; break;
                                case 3:  echo  'March'; break;
                                case 4:  echo  'April'; break;
                                case 5:  echo  ' May'; break;
                                case 6:  echo  'June'; break;
                                case 7:  echo  'Jule'; break;
                                case 8:  echo  'August'; break;
                                case 9:  echo  'September'; break;
                                case 10:  echo  'October'; break;
                                case 11:  echo  'November'; break;
                                case 12:  echo  'December'; break;
                                }
                                ?></span>
                            </div>
                        </div>
                        <!-- blog-like-share -->
                        <ul class="blog-like-share mb-20">
                            <li>
                                <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                            </li>
                            <li>
                               <a  href="#myModal" data-toggle="modal" data-target="#myModal" data-click="click"><i class="zmdi zmdi-share">
                                           </i> <?php ?>Share</a>
                            </li>
                        </ul>
                        <!-- blog-details-title -->
                        <h3 class="blog-details-title mb-30"><?php  echo $singlepost->title; ?></h3>
                        <!-- blog-description -->
                        <div class="blog-description mb-60">
                            <p><?php echo $singlepost->content;?></p>

                            <div class="quote-author pl-30">
                                <p class="quote-border pl-30">Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                            </div>

                            <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>

                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>
                        </div>
                        <!-- blog-share-tags -->
                        <div class="blog-share-tags box-shadow clearfix mb-60">
                            <div class="blog-share f-left">
                                <p class="share-tags-title f-left">share</p>
                                <ul class="footer-social f-left">
                                    <li>
                                        <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-tags f-right">
                                <p class="share-tags-title f-left">Tags</p>
                                <ul class="blog-tags-list f-left">
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">IOS</a></li>
                                    <li><a href="#">Windows</a></li>
                                    <li><a href="#">Tab</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- author-post -->
                        <div class="media author-post box-shadow mb-60">
                            <div class="media-left pr-20">
                                <a href="#">
                                    <img class="media-object" src="img/author/1.jpg" alt="#">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">
                                    <a href="#">Subash Chandra Das</a>
                                </h6>
                                <p class="mb-0">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursu pleasure rationally encounter conseques ences that are extremely painful.</p>
                            </div>
                        </div>
                        <!-- comments on t this post -->
                        <div class="post-comments mb-60">
                            <h4 class="blog-section-title border-left mb-30">comments on this product</h4>
                            <!-- single-comments -->
                            <div class="media mt-30">
                                <div class="media-left pr-30">
                                    <a href="#" ><img class="media-object" src="img/author/2.jpg" alt="#"></a>
                                </div>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="name-commenter f-left">
                                            <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                            <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                        </div>
                                        <ul class="reply-delate f-right">
                                            <li><a href="#">Reply</a></li>
                                            <li>/</li>
                                            <li><a href="#">Delate</a></li>
                                        </ul>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- single-comments -->
                            <div class="media mt-30">
                                <div class="media-left pr-30">
                                    <a href="#"><img class="media-object" src="img/author/3.jpg" alt="#"></a>
                                </div>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="name-commenter f-left">
                                            <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                            <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                        </div>
                                        <ul class="reply-delate f-right">
                                            <li><a href="#">Reply</a></li>
                                            <li>/</li>
                                            <li><a href="#">Delate</a></li>
                                        </ul>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                        </div>
                        <!-- leave your comment -->
                        <div class="leave-comment">
                            <h4 class="blog-section-title border-left mb-30">leave your comment</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Subash Chandra Das">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Email address here...">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" placeholder="Subject here...">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="custom-textarea" placeholder="Your comment here..."></textarea>
                                </div>
                            </div>
                            <button class="submit-btn-1 black-bg mt-30 btn-hover-2" type="submit">submit comment</button>
                        </div>
                        <!--  -->
                    </div>
                    <?php endif;?>
                </div>
                
                <div class="col-md-3 col-xs-12">
                      <form method="get" action="<?=\yii\helpers\Url::to(['blog/search'])?>">
                            <input type="text" name="s" placeholder="Search here...">
                            <!--<button type="submit"><i class="zmdi zmdi-search"></i></button>-->
                        </form>
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
                    <!-- widget-product -->
                    <aside class="widget widget-product box-shadow mb-30">
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
                    <!-- operating-system -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG SECTION END -->
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
</section>
<!-- End page content -->