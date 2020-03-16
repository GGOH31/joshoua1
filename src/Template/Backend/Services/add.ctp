<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="services form large-9 medium-8 columns content">
   
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            echo $this->Form->control('');
            echo $this->Form->control('');
            echo $this->Form->control('');
            echo $this->Form->control('valide');
            echo $this->Form->control('image_name');
            echo $this->Form->control('image_path');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->

<div class="app-main__outer">
                    <div class="app-main__inner">

<div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Controls Types</h5>
                                            <?= $this->Form->create($service) ?>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Titre</label><input name="title" id="exampleEmail" placeholder=" titre" type="text" class="form-control"></div>
        

                                                 
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                   
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Checkboxes &amp; Radios</h5>
                                              
                                                    <fieldset class="position-relative form-group">
                                                    <div class="row">
                                                        <div class="position-relative form-check "><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">   <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use handshake-o"></i>
                                                            <p>fa-handshake-o</p>
                                                        </div></label>
                                                        </div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">  <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use globe"></i>
                                                            <p>fa-globe</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">  <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use address-book"></i>
                                                            <p>fa-address-book</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">     <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use anchor"></i>
                                                            <p>fa-anchor</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">  <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use child"></i>
                                                            <p>fa-child</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">  <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use leaf"></i>
                                                            <p>fa-leaf</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3"> <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use sitemap"></i>
                                                            <p>fa-sitemap</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">   <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use music"></i>
                                                            <p>fa-music</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">      <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use group"></i>
                                                            <p></p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">    <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use home"></i>
                                                            <p>fa-home</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">    <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plane"></i>
                                                            <p>fa-plane</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">    <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use laptop"></i>
                                                            <p>fa-laptop</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">    <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use heart"></i>
                                                            <p>fa-heart</p>
                                                        </div></label></div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="icon" type="radio" class="form-check-input" value="3">  <div class="font-icon-wrapper"><i class="fa fa-fw" aria-hidden="true" title="Copy to use graduation-cap"></i>
                                                            <p>fa-graduation-cap</p>
                                                        </div></label></div>
                                                    </div>
                                                    </fieldset>
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>
<textarea class="form-control" id="summernote" name="description"></textarea>
<button class="mt-1 btn btn-primary">Submit</button>
<?= $this->Form->end() ?>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>

