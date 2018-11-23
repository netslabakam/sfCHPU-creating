<?php //use_stylesheets_for_form($form) ?>
<?php //use_javascripts_for_form($form) ?>

<div class="container justify-content-center align-items-center">
    <form action="<?php echo url_for('chpu/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
        <?php if (!$form->getObject()->isNew()): ?>
            <input type="hidden" name="sf_method" value="put" />
        <?php endif; ?>
        <table>
            <tfoot>
            <tr>
                <td colspan="2">
                    &nbsp;<a href="<?php echo url_for('chpu/index') ?>" class="btn btn-cyan" >Back to list</a>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Delete', 'chpu/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
                    <?php endif; ?>
                    <input type="submit" class="btn btn-blue-grey" value="Создать" />
                </td>
            </tr>
            </tfoot>
            <tbody>
            <?php echo $form ?>
            </tbody>
        </table>
    </form>
</div>
