<?php

    $accordionName = uniqid();

    $type = 'checkbox';
    $accordionType = get_field('acf_blocks_accordion_type_bool');
    if($accordionType != true) {
        $type = 'radio';
    }

if(have_rows('acf_blocks_accordion_rp')): ?>

    <div class="accordion">

        <?php while( have_rows('acf_blocks_accordion_rp') ) : the_row(); 

            $index = get_row_index();
            $title = get_sub_field('acf_blocks_accordion_rp_title');
            $content = get_sub_field('acf_blocks_accordion_rp_content');

            $isChecked = '';
            if($index == 1) {
                $isChecked = 'checked';
            }
        ?>

            <div class="accordion-el">
                <input type="<?php echo $type ?>" name="<?php echo $accordionName ?>" id="<?php echo $accordionName ?>-<?php echo $index ?>" <?php echo $isChecked ?>>
                <label for="<?php echo $accordionName ?>-<?php echo $index ?>" class="accordion-label"><?php echo $title ?></label>
                <div class="accordion-content">
                    <?php echo $content ?>
                </div>
            </div>

        <?php endwhile; ?>

    </div>

<?php endif; ?>

