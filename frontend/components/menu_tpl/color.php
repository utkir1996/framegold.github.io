<li class="colorLi ColorLi-<?=$color['id']?>" name="color[<?=$color['id']?>]" data-color="<?=$color['color']?>">
    <a  name="c" href="<?=\yii\helpers\Url::to(['products/colorsearch','c'=>$color['color_name']])?>"><?=$color['color_name']?></a>
</li>

    <?php $this->colorStyle.='
    .widget-color ul li.ColorLi-'.$color[id].':before 
    {
        background-color: '.$color[color].';
    }';

    ?>

