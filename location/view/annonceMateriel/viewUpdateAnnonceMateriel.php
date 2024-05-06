<article>
    <div class="formulaire">
        <br>
        <h3 class="titre1"> Modifier votre annonce </h3>
        <div class="bloc2"></div>
        <div class="col-md-5 offset-md-4">
            <?php $idMateriel = $up->getIdMateriel(); ?>
            <form name="inscri" method="POST"
                action="index.php?controller=annonceMateriel&action=updated&idMateriel=<?= $idMateriel ?>"
                enctype="multipart/form-data">
                <div class="form-group input-group-sm">
                    <br> <br>


                    <table>
                        <tr>
                            <td> <label for="nom">
                                    <p>Nom Matériel :</p>
                            </td>
                            <td> <input type="text" class="ch1" required id="nom" name="nom"
                                    value="<?php echo $up->getNomMateriel() ?>">
                                </label>
                            </td>
                        </tr>


                        <?php $ga = $up->getCategories() ?>
                        <tr>
                            <td> <label for="categorie">
                                    <p> Catégories </p>

                                </label> </td>

                            <td> <select class="ch2" required name="categorie" id="categorie">

                                    <?php if ($ga == "Villas")
                                        echo  '<option value="Villas" selected> Villas</option>';
                                    else  echo  '<option value="Villas"> Villass</option>'; ?>


                                    <?php if ($ga == "Appartements")
                                        echo  '<option value="Appartements" selected> Appartements</option>';
                                    else  echo  '<option value="Appartements"> Appartements</option>'; ?>


                                    <?php if ($ga == "Maisons de vacances")
                                        echo  '<option value="Maisons de vacances" selected> Maisons de vacances</option>';
                                    else  echo  '<option value="Maisons de vacances"> Maisons de vacances</option>'; ?>

                                    <?php if ($ga == "Maisons de ville")
                                        echo  '<option value="Maisons de ville" selected>Maisons de ville</option>';
                                    else  echo  '<option value="Maisons de ville"> Maisons de ville</option>'; ?>

                                    <?php if ($ga == "Bungalows")
                                        echo  '<option value="Bungalows" selected>Bungalows</option>';
                                    else  echo  '<option value="Bungalows"> Bungalows</option>'; ?>


                                    <?php if ($ga == "Maisons de campagne")
                                        echo  '<option value="Maisons de campagne" selected>Maisons de campagne</option>';
                                    else  echo  '<option value="Maisons de campagne"> Maisons de campagne</option>'; ?>

                                    <?php if ($ga == "sol")
                                        echo  '<option value="sol" selected>Outils de travail du sol</option>';
                                    else  echo  '<option value="sol"> Outils de travail du sol</option>'; ?>

                                    <?php if ($ga == "Lofts")
                                        echo  '<option value="Lofts" selected>Lofts</option>';
                                    else  echo  '<option value="Lofts"> Lofts</option>'; ?>


                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> <label for="description">
                                    <p>Description : </p>
                                </label></td>
                            <td> <textarea rows="4" cols="35" class="ch3" required id="description"
                                    name="description"><?php echo $up->getDescription() ?></textarea></td>
                        </tr>




                        <?php $v = $up->getAdresse() ?>


                        <tr>
                            <td> <label for="adresse">
                                    <p> Ville : </p>
                                </label> </td>
                            <td> <select class="ch2" required name="adresse" id="adresse">


                                    <?php if ($v == "tunis")
                                        echo  '<option value="tunis" selected> Tunis</option>';
                                    else  echo  '<option value="tunis"> Tunis</option>'; ?>

                                    <?php if ($v == "ariana")
                                        echo  '<option value="ariana" selected> Ariana</option>';
                                    else  echo  '<option value="ariana"> Ariana</option>'; ?>

                                    <?php if ($v == "beja")
                                        echo  '<option value="beja" selected> Béja</option>';
                                    else  echo  '<option value="beja">Béja</option>'; ?>


                                    <?php if ($v == "bizerte")
                                        echo  '<option value="bizerte" selected> Bizerte</option>';
                                    else  echo  '<option value="bizerte"> Bizerte</option>'; ?>


                                    <?php if ($v == "manouba")
                                        echo  '<option value="manouba" selected> Manouba </option>';
                                    else  echo  '<option value="manouba"> Manouba</option>'; ?>


                                    <?php if ($v == "gabes")
                                        echo  '<option value="gabes" selected> Gabes </option>';
                                    else  echo  '<option value="gabes"> Gabes</option>'; ?>

                                    <?php if ($v == "mahdia")
                                        echo  '<option value="mahdia" selected>Mahdia </option>';
                                    else  echo  '<option value="mahdia"> Mahdia</option>'; ?>

                                    <?php if ($v == "nabeul")
                                        echo  '<option value="nabeul" selected> Nabeul </option>';
                                    else  echo  '<option value="nabeul"> Nabeul</option>'; ?>

                                    <?php if ($v == "sfax")
                                        echo  '<option value="sfax" selected> Sfax </option>';
                                    else  echo  '<option value="sfax"> Sfax </option>'; ?>

                                    <?php if ($v == "siliana")
                                        echo  '<option value="siliana" selected> Siliana  </option>';
                                    else  echo  '<option value="sfax"> Sfax </option>'; ?>

                                    <?php if ($v == "kairouan")
                                        echo  '<option value="kairouan" selected> Kairouan </option>';
                                    else  echo  '<option value="kairouan"> Kairouan </option>'; ?>

                                    <?php if ($v == "kef")
                                        echo  '<option value="kef" selected> Kef </option>';
                                    else  echo  '<option value="kef"> Kef </option>'; ?>


                                    <?php if ($v == "jandouba")
                                        echo  '<option value="jandouba" selected> Jandouba </option>';
                                    else  echo  '<option value="jandouba"> Jandouba </option>'; ?>

                                    <?php if ($v == "sousse")
                                        echo  '<option value="sousse" selected> Sousse </option>';
                                    else  echo  '<option value="sousse"> Sousse </option>'; ?>


                                </select>
                            </td>
                        </tr>









                        <tr>
                            <td> <label for="prixHeure">
                                    <p> Prix par heure </p>
                            </td>
                            <td> <input type="text" class="ch1" required id="prixHeure" name="prixHeure"
                                    value="<?php echo $up->getPrixHeure() ?>">
                                </label> </td>
                        </tr>
                        <!-- if if value taswira jdida fera8 ye5o value mte3 taswira 9dima  -->

                        <tr>
                            <td>
                                <img src="./image/uploads/<?php echo $up->getPhoto(); ?>" height="100" width="150">
                            </td>
                            <td> <input type="file" name="photo" id="photo" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><button class="btnCreer" type="submit" class="bttn"> <i
                                        class='fa fa-edit'> </i> Modifier
                                </button></td>
                        </tr>


                    </table>


                </div>
            </form>
        </div>
    </div>
</article>