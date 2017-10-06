
<?php if($category['parent']==0 && !isset($category['childs'])): ?>
<li>
    <?php
      $class=isset($this->a['class'])? $this->a['class']:'';
      $id=isset($this->a['id'])? $this->a['id']:'';
      $OAtr=isset($this->a['otherAttrbutes'])? $this->a['otherAttrbutes']:'';
      ?>
      <a class="<?=$class?>" id="<?=$id?>" <?=$OAtr?>  href="#"><?= $category['title']?></a>
</li>
<?php else:?>
    <?php if($category['parent']==0 && isset($category['childs'])): ?>
        <?php $this->count++;?>
        <?php if($this->count==1):?>
       
       <?php 
      $class=isset($this->LiOpen['class'])? $this->LiOpen['class']:'';
      $id=isset($this->LiOpen['id'])? $this->LiOpen['id']:'';
      $OAtr=isset($this->LiOpen['otherAttrbutes'])? $this->LiOpen['otherAttrbutes']:'';
      ?>
         <li class="<?=$class?>" id="<?=$id?>" <?=$OAtr?> >
          <a href="#"><?= $category['title']?></a>
         <ul>
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
        </li>
        <?php else:?>
   <?php 
      $class=isset($this->LiClose['class'])? $this->LiClose['class']:'';
      $id=isset($this->LiClose['id'])? $this->LiClose['id']:'';
      $OAtr=isset($this->LiClose['otherAttrbutes'])? $this->LiClose['otherAttrbutes']:'';
      ?>
         <li class="<?=$class?>" id="<?=$id?>" <?=$OAtr?> >
      <a href="#"><?= $category['title']?></a>
         <ul>
            <?= $this->getMenuHtml($category['childs']) ?>
         </ul>
    </li>
        <?php endif;?>
    <?php else:?>
    <li>
    <?php
      $class=isset($this->a['class'])? $this->a['class']:'';
      $id=isset($this->a['id'])? $this->a['id']:'';
      $OAtr=isset($this->a['otherAttrbutes'])? $this->a['otherAttrbutes']:'';
     ?>
      <a class="<?=$class?>" id="<?=$id?>" <?=$OAtr?>  href="<?=\yii\helpers\Url::to(['categories/view','id'=>$category['id']])?>"><?= $category['title']?></a>
    </li>
    
    <?php endif;?>
    <?php endif;?>

