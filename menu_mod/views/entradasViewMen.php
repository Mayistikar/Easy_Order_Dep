    <!-- main slider carousel -->
    <div class="container">
        <div class="row menu">
            <div class="col-md-12" id="slider">
                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                           
                           <?php for ($i=0; $i<count($nomProds); $i++){ ?>
                           
                            <div class="<?= $active ?> item" data-slide-number="<?= $data++ ?>">
                               <?= $active = ""?>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="top col-md-6 col-xs-12">
                                            <img src="/Easy_Order_Dev_ARC/menu_mod/views/img/EO_Construccion.png" class="img-responsive">
                                        </div>
                                        <div class="content col-md-6 col-xs-12">
                                            <h2> 
                                                <span class="label label-warning" id="prod00<?= $data ?>" value="<?= $nomProds[$i] ?>">
						<?= $nomProds[$i] ?> 
						</span>
                                            </h2>
                                            <input type="hidden" value="<?= $idProds[$i] ?>" name="idProd<?= $data ?>" id="idProd<?= $data ?>">
                                            
                                            <h3 id="prec00<?= $data ?>" value="<?= $precios[$i] ?>">$<?= $precios[$i] ?> c/u</h3>
                                            <p class="text-justify"><?= $desc[$i] ?>.</p>
                                            <div class="col-xs-1"></div>
                                            <div class="form-group col-xs-8 col-sm-8">
                                                <label for="cantidad">Cantidad:</label>
                                                <input type="number" class="form-control" name="cant000<?= $data ?>" id="cant000<?= $data ?>" min="0" value="0">
                                                <input type="hidden" value="<?= $mesa ?>" name="mesa<?= $data ?>" id="mesa<?= $data ?>">
                                                <br>
                                                <button id="000<?= $data ?>" onclick="guardarPedido(<?= $data ?>)" class="btn btn-success"><h4><span class="icon-comida-3"></span> <b>Ordenar</b></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/main slider carousel-->
    </div>