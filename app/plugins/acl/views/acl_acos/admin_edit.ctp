<div class="acl_acos form content-box">
    <div class="content-box-header">
        <h3><?php echo sprintf(__('Edit %s', true), __('Aco', true)); ?></h3>
    </div>
    <div class="content-box-content">
    <?php echo $form->create('AclAco', array('url' => array('action' => 'edit')));?>
        <fieldset>
        <?php
            echo $form->input('id');
            echo $form->input('parent_id');
            echo $form->input('model');
            echo $form->input('foreign_key');
            echo $form->input('alias');
        ?>
        </fieldset>
    <?php echo $form->end(array('name' => __('Submit', true), 'class' => 'button' ));?>
    </div>
</div>
