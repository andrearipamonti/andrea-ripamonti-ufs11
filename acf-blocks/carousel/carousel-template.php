<?php 

    $class_edit = '';

    $arrowsBool = get_field('acf_blocks_carousel_arrows_bool');

    if($arrowsBool == true) {
        $class_edit .= ' carousel-no-arrow';
    }

?>
<div class="carousel-wrapper">

    <div class="carousel js-carousel<?php echo $class_edit; ?>">
        
        <InnerBlocks />

    </div>

</div>