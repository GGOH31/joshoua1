<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('service_id');
            echo $this->Form->control('name');
            echo $this->Form->control('image');
            echo $this->Form->control('url');
            echo $this->Form->control('description');
            echo $this->Form->control('lu');
            echo $this->Form->control('telecharger');
            echo $this->Form->control('modifier', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->




<div class="app-main__outer">
                    <div class="app-main__inner">

<div class="tab-content">
<?= $this->Flash->render() ?>
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title"> Votre Portfolio</h5>
                                            <?= $this->Form->create($article,['enctype'=>"multipart/form-data"]) ?>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Titre </label><input name="name" id="exampleEmail" placeholder="sous titre" type="text" class="form-control"></div>
        

                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="image" id="exampleFile" type="file" class="form-control-file">
                                                       
                                                    </div>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title"></h5>
               
                                                    <div class="divider"></div>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Url</label><input name="url" id="exampleNumber" placeholder=" 1 pour le publier " type="text" class="form-control"></div>
        

                                                    <div class="position-relative form-group"> <?php
            echo $this->Form->control('service_id', ['options' => $services]);
          
        ?></div>
                                                    
                                            </div>
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

