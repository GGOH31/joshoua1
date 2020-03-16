<div class="app-main__outer">
                    <div class="app-main__inner">

<div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Controls Types</h5>
                                                <?= $this->Form->create($about) ?>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Soustitre 1</label><input name="subtext_title1" id="exampleEmail" placeholder="sous titre" type="text" class="form-control"></div>
        

                                                    <div class="position-relative form-group"><label for="exampleText" class="">Text Area</label><textarea name="subtext1" id="exampleText" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                    </div>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Sizing</h5>
               
                                                    <div class="divider"></div>
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Sous titre 2</label><input name="subtext_title2" id="exampleEmail" placeholder="Sous titre 2" type="text" class="form-control"></div>
        

                                                    <div class="position-relative form-group"><label for="exampleText" class="">Text Area</label><textarea name="subtext2" id="exampleText" class="form-control"></textarea></div>
                                                    
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Checkboxes &amp; Radios</h5>
                                              
                                                    <fieldset class="position-relative form-group">
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                                            one</label></div>
                                                        <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio1" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                                    </fieldset>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input"> Check me out</label></div>
                                                  
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

