<?php
/* Smarty version 3.1.30, created on 2018-03-16 02:26:31
  from "C:\xampp\htdocs\MesProjets\Jeux_olympique\view\joueur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aab1d47f320b0_11696807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed95a7b73419848eb7890c5c90ce362b48e79aa1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MesProjets\\Jeux_olympique\\view\\joueur\\add.html',
      1 => 1521163069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aab1d47f320b0_11696807 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
        <title>Ajout de Joueur</title>
    </head>
    <body>
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Discipline/add">Ajout de Discipliner</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Discipline/liste">Liste des disciplines</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Joueur/add">Ajout de Joueur</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Joueur/liste">Liste des Joueurs/Entraineur</a></li>

            </ul>
        </div>
        <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Ajout de joueur
                </div>
                <div class="panel-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Joueur/add">
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom" placeholder="Veuillez entrer le nom"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Veuillez entrer le prenom "/>
                        </div>
                        <div class="form-group">
                         <!--   <label class="control-label">Entraineur ou Joueur</label>-->
                         <!--   <input class="form-control" type="text" name="idEntraineur" id="idEntraineur" placeholder="Veuillez laisser le champ vide, si c'est un entraineur"/>-->
                            <label class="control-label">Joueur    </label> <input type="radio" name="type" value="joueur" checked /><br>
                            <label class="control-label">Entraineur</label> <input type="radio" name="type" value="entraineur"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Discipline</label>
                            <?php if (isset($_smarty_tpl->tpl_vars['liste']->value)) {?>

                                <select class="form-control" name="idD">
                                    <option>Faite votre choix</option>
                                    <?php if ($_smarty_tpl->tpl_vars['liste']->value != null) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste']->value, 'discipline');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discipline']->value) {
?>

                                            <option  value="<?php echo $_smarty_tpl->tpl_vars['discipline']->value['idD'];?>
"><?php echo $_smarty_tpl->tpl_vars['discipline']->value['libD'];?>
</option>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <?php }?>
                                </select>

                            <?php }?>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="ajouter" id="ajouter" value="Ajouter"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
