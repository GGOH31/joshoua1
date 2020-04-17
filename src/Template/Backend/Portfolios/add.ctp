<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portfolio $portfolio
 */
?>
<div class="app-main__outer">
                    <div class="app-main__inner">

<div class="tab-content">
<?= $this->Flash->render() ?>
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title"> Votre Portfolio</h5>
                                            <?= $this->Form->create($portfolio,['enctype'=>"multipart/form-data"]) ?>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Titre </label><input name="title" id="exampleEmail" placeholder="sous titre" type="text" class="form-control"></div>
        

                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="image" id="exampleFile" type="file" class="form-control-file">
                                                       
                                                    </div>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title"></h5>
               
                                                    <div class="divider"></div>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Valide</label><input name="valide" id="exampleNumber" placeholder=" 1 pour le publier " type="number" class="form-control"></div>
        

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

