


<div id="connexion-form" class="w-25">
                     <?php
                         if(isset($erreur[])){ 
                      ?>
                        <small id="helpId" class="text-danger"><?=$erreur?></small>
                        <?php
                         }
                         ?>
            <div class="connexion-form-header">
                <h3 class="bgPrimary h5 p-3 m-0">Login form</h3>
            </div>

            <div class="connexion-form-body bgWhite p-3">
           
                <form class="py-2" method="post" action="security/Seconnecter">
                    <div class="form-group ">
                        <input type="email" placeholder="Login" name="login" class="form-control" id="email">
                        <?php 
                        if(isset($erreur['login'])){
                        ?>
                        <small id="helpId" class="text-danger"><?=$erreur['login']?></small>
                        <?php 
                        }
                        ?>
                    </div>

                    <div class="form-group py-2">
                        <input type="password" placeholder="Password" name="password" class="form-control">
                        <?php
                         if(isset($erreur['password'])){ 
                        ?>
                        <small id="helpId" class="text-danger"><?=$erreur['password']?></small>
                        <?php
                         }
                        ?>
                    </div>
                    


                    <button type="submit" class="btn btn-primary" name="btn_connexion">Submit</button>
                    <a href="security/loadViewInscription" class="text-secondary pl-5">S'inscrire pour jouer</a>
                </form>
            </div>

        </div>
        
 