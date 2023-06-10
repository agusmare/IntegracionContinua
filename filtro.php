<div class="col-xs-12 col-md-4 col-md-offset-4">
                    <a href="#filtrar" class="btn btn-primary btn-lg" data-toggle="modal">FILTRAR</a>

                  </div>
                </div>
              </div>
              <?php/* muestra los productos al seleccionar la categoria */?>
              <div class="modal" tabindex="-1" id="filtrar">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button tyle="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                      <h5 class="modal-title">Seleccione las opciones de busqueda </h5>                      
                    </div>
                    <div class="modal-body">
                      <?php
                      /* muestra los productos al seleccionar la categoria */
                        $checkAllCat=ejecutarSQL::consultar("SELECT * FROM categoria");
                        if(mysqli_num_rows($checkAllCat)>=1):
                      ?>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-xs-12 col-md-4">
                              <div class="dropdown">
                                <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  Seleccione una categoría &nbsp;
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="drpdowncategory">
                                  <?php 
                          while($cate=mysqli_fetch_array($checkAllCat, MYSQLI_ASSOC)){
                              echo '
                                <li><a href="?categ='.$cate['CodigoCat'].'">'.$cate['Nombre'].'</a></li>
                                <li role="separator" class="divider"></li>
                              ';
                          }endif
                        ?>
                      </ul>
                    </div>
                          
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                    </div>
                          
                    </div>
                    </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>









