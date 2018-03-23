<?php
/* Smarty version 3.1.30, created on 2018-03-15 16:46:14
  from "C:\xampp\htdocs\MesProjets\Jeux_olympique\view\discipline\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aaa9546889a96_56227957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c2a4dd9da8bf9e9b65b4a1ef1e3a54dbcea6059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MesProjets\\Jeux_olympique\\view\\discipline\\update.html',
      1 => 1521128771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aaa9546889a96_56227957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
        <title>Ajout de discipline</title>
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
        <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top: 75px">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Formulaire d'ajout de discipline
                </div>
                <div class="panel-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Discipline/update">
                        <div class="form-group">
                            <label class="control-label">ID</label>
                            <input class="form-control" type="text" name="val1" id="val1"  value="<?php if (isset($_smarty_tpl->tpl_vars['discipline']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['discipline']->value['idD'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Libelle</label>
                            <input class="form-control" type="text" name="val2" id="val2" value="<?php if (isset($_smarty_tpl->tpl_vars['discipline']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['discipline']->value['libD'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="modifier" id="modifier" value="Modifier"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
