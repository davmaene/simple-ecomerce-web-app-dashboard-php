<?php if (isset($_SESSION['_getmeinplzdv_'])) { ?>

<div class="row ">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Modification d'un produit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="dist/js/_phpSubmition.php" id="formAddProduct" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                <label for="exampleInputEmail1">nom du produit</label>
                <input type="text" class="form-control" name="exname" id="exname" placeholder="nom du produit">
                <span class="hdn" id="out_exname"><span class="fa fa-warning"></span>&nbsp;le nom ne peut etre inferieur à 3 caractères</span>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">marque</label>
                <input type="text" class="form-control" name="exmarque" id="exmarque" placeholder="marque">
                <span class="hdn" id="out_exmarque"><span class="fa fa-warning"></span>&nbsp;la marque ne peut etre inferieur à 3 caractères</span>
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Selectionner une image du produit</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="exfaceimg" id="exfaceimg">
                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text" id="fdty">Upload</span>
                    </div>
                </div>
                <span class="hdn" id="out_exfaceimg"><span class="fa fa-warning"></span>&nbsp;type de fichier non pris en charge</span>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Couleur</label>
                <input type="text" class="form-control" name="excolor" id="excolor" placeholder="couleur">
                <span class="hdn" id="out_excolor"><span class="fa fa-warning"></span>&nbsp;ce champ ne peut contenir que des lettres</span>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Entrer le prix &nbsp;<span class="badge badge-warning">en USD ($)</span></label>
                <input type="text" class="form-control" name="exprice" id="exprice" placeholder="prix du produit">
                <span class="hdn" id="out_exprice">
                    <span class="fa fa-warning"></span>&nbsp;ce champ ne peut contenir que des chiffres 
                    <span class="badge badge-danger">ex: 10000.34</span>
                </span>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Déscription du produit</label>
                <textarea class="form-control" name="exdesc" id="exdesc" placeholder="la description du prix ici ..."></textarea>
                    <span class="hdn" id="out_exdesc">
                        <span class="fa fa-warning"></span>&nbsp;ce champ ne peut contenir que des lettres 
                        <span class="badge badge-danger">Caracteres 5 au minimum</span>
                    </span>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Categorie</label>
                <div class="col-sm-8">
                      <!-- select -->
                      <div class="form-group">
                        <label>Sélectionner</label>
                        <select class="form-control" id="ex_chck_cat" name="mrq">
                          <option value="_none_">&nbsp;</option>
                          <option value="_lease_">A Louer</option>
                          <option value="_sales_">A vendre</option>
                        </select>
                      </div>
                      <span class="hdn" id="out_ex_chck_cat"><span class="fa fa-warning"></span>&nbsp;selectionnez la categorie</span>
                    </div>
                </div>
                <!-- facultatif content -->
                <div class="col-lg border-bottom pt-2 mb-3">
                    <label for="new input file">Ajouter des images de détail&nbsp;<span class="badge badge-primary">Nouveau</span></label>
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Selectionner une image de de l'interieur</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="exintceimg" id="exintceimg">
                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                    <!-- <span class="indic-form"><span class="fa fa-warning"></span>&nbsp;Selectionnez une image</span> -->
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text" id="fdl">Upload</span>
                    </div>
                </div>
                <span class="hdn" id="out_exintceimg"><span class="fa fa-warning"></span>&nbsp;type de fichier non pris en charge</span>
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Selectionner une image de droite | gauche</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="exlrimg" id="exlrimg">
                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text" id="fds">Upload</span>
                    </div>
                </div>
                <span class="hdn" id="out_exlrimg"><span class="fa fa-warning"></span>&nbsp;type de fichier non pris en charge</span>
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Selectionner une image du devant</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="exfrontimg" id="exfrontimg">
                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text" id="fdd">Upload</span>
                    </div>
                </div>
                <span class="hdn" id="out_exfrontimg"><span class="fa fa-warning"></span>&nbsp;type de fichier non pris en charge</span>
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Selectionner une image de derrière</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="exbackimg" id="exbackimg">
                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text" id="fdf">Upload</span>
                    </div>
                </div>
                </div>
                <span class="hdn" id="out_exbackimg"><span class="fa fa-warning"></span>&nbsp;type de fichier non pris en charge</span>
            </div>
            <!-- /.card-body -->
            <div class="card-footer ">
                <button type="button" class="btn btn-primary col-lg-12" id="btnEnreg">Enregistrer</button>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Previsualisation</h3>
                <span class="float-right text-danger" id="out_put"></span>
            </div>
            <div class="card-body" style="height:400px">
                <div class="col-lg-12 col-md-12 p-1" style="">
                  <div class="col-lg p-1" id="image-holder" title="image principale" style="width:200px;position:relative;margin:0 auto;"></div>
                </div>
                <div class="col-lg-6 col-md-6" style="position:absolute;margin:10px 20%;">
                    <div class="row">
                      <div class="col-lg-6 p-1" id="vz-1" style=""></div>
                      <div class="col-lg-6 p-1" id="vz-2" style=""></div>
                      <div class="col-lg-6 p-1" id="vz-3" style=""></div>
                      <div class="col-lg-6 p-1" id="vz-4" style=""></div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                &copy; david maene
            </div>
        </div>
    </div>
</div>

<script>
    (function(){
        var allowedTypes = ['jpg', 'jpeg', 'png','icon','gif','tiff'];
        var _TFILE_ = document.getElementById('exfaceimg');
        var _forCheck = [];

        function _getTooltip(element) {
            var issus = document.getElementById('out_'+element);
                element = document.getElementById(element);
            var tmp = issus.className.split(' ');
                if (tmp.indexOf('hdn') != -1) {
                    element.classList.add('error-border');
                    // document.getElementById('btnEnreg').disabled = true;
                    // _chechIfMarqueSelected();
                    return issus.classList;
                }else{
                    return false;
                }
        }
        function _desactivateTooltip(element) {
    
            _getTooltip(element).remove('indic-form');
            document.getElementById(element).classList.remove('error-border');
        }
        _forCheck['exname'] = function(ex){
            var element = document.getElementById('exname');
                if (element.value != '' && element.value.length > 3 ) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        _forCheck['exmarque'] = function(ex){
            var element = document.getElementById('exmarque');
            // var tool = element.nextSibling;
                if (element.value != '' && element.value.length > 3) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        function _checkDescription(){
            var element = document.getElementById('exdesc');
            // var tool = element.nextSibling;
                if (element.value != '' && element.value.length >= 5) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        _forCheck['exprice'] = function(ex){
            var element = document.getElementById('exprice');
            // var tool = element.nextSibling;
                if (element.value != '' && (/^[0-9.]+$/).test(element.value)) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        _forCheck['excolor'] = function(ex){
            var element = document.getElementById('excolor');
            // var tool = element.nextSibling;
                if (element.value != '') {
                   if ((/^[a-z]+$/).test(element.value)) {
                    _desactivateTooltip(element.id);
                    return true;
                   }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        function _chkAllowedFile(_input_){
            _input_ = document.getElementById(_input_);
            var files = _input_.files,
                filesLength = files.length,
                imgType;
			
		for (var i = 0 ; i < filesLength ; i++) {
				imgType = files[i].name.split('.');
				imgType = imgType[imgType.length - 1];
					if(allowedTypes.indexOf(imgType) != -1) { 
                        _desactivateTooltip(_input_.id);
						return true;
					}else{
                        _getTooltip(_input_.id).add('indic-form');
						return false;
				}
		    }
        }
        function _chkAllowedFileRequired(){
            // _input_ = document.getElementById(_input_);
            var files = _TFILE_.files,
                filesLength = files.length,
                imgType;
			
		for (var i = 0 ; i < filesLength ; i++) {
				imgType = files[i].name.split('.');
				imgType = imgType[imgType.length - 1];
					if(allowedTypes.indexOf(imgType) != -1) { 
                        _desactivateTooltip(_input_.id);
						return true;
					}else{
                        _getTooltip(_input_.id).add('indic-form');
						return false;
				}
		    }
        }
        function _chechIfMarqueSelected(){
            var _mrq_ = document.getElementById('ex_chck_cat');
                if(_mrq_.value != '_none_'){
                    document.getElementById('out_ex_chck_cat').classList.remove('indic-form');
                    return true;
                }
                else{
                   document.getElementById('out_ex_chck_cat').classList.add('indic-form');
                    return false;
                }
                // alert(_mrq_);
        };
        var imgC = document.getElementsByTagName('input');
            for (let index = 0; index < imgC.length; index++) {
                imgC[index].onkeyup = function(dvd){
                    if (imgC[index].type === 'text') {
                        _forCheck[this.id](this.id);
                    }
                };
            }
        var _FILES_ = document.getElementsByTagName('input');
        for (let index = 0; index < _FILES_.length; index++) {
            _FILES_[index].onchange = function(ex){
                if (_FILES_[index].type === 'file') {
                    _chkAllowedFile(this.id);
                }
            }
        }
        document.getElementById('btnEnreg').onclick = function(){
            var _req_ = true;
            for (const key in _forCheck) {
                if (_forCheck.hasOwnProperty(key)) {
                    _req_ = _forCheck[key](key) && _req_;
                }
            }
            if (_req_) {
                if (_checkDescription() && _chechIfMarqueSelected() && _chkAllowedFile(_TFILE_.id)) {
                    
                const _form_ = new FormData(document.getElementById('formAddProduct'));
                var xhr = new XMLHttpRequest();
                    xhr.open('POST','dist/js/_phpSubmitionEdit.php',true);
                    xhr.send(_form_);
                    xhr.onreadystatechange = function(){
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if(xhr.response.indexOf(xhr.status) != -1){
                            // commandSpinner(0);
                            alert('ajouter avec succes');
                        }else{
                            // commandSpinner(0);
                            console.log(xhr.response);
                        }
                console.log(xhr.response);
			 }
			
           }
        }
    }
    }
    })();
</script>
<?php }else{ header("location:?_trgPage_=_get_home"); } ?>