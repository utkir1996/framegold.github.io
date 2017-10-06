<?php if(!isset($category['childs'])): ?>

    <li><a href="<?=\yii\helpers\Url::to([$category['link']])?>"><?= $category['name']?></a></li>
<?php endif;?>

<?php if(isset($category['childs'])): ?>

    <li><a href="<?=\yii\helpers\Url::to([$category['link']])?>"><?= $category['name']?></a>

        <ul class="dropdwn">
            <?= $this->getMenuHtml($category['childs']) ?>

        </ul>

    </li>

<?php endif;?>




