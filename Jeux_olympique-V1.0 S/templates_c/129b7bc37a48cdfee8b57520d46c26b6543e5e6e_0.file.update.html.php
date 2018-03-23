<?php
/* Smarty version 3.1.30, created on 2018-03-16 01:06:51
  from "C:\xampp\htdocs\MesProjets\Jeux_olympique\view\joueur\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aab0a9b0d1db5_47547797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129b7bc37a48cdfee8b57520d46c26b6543e5e6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MesProjets\\Jeux_olympique\\view\\joueur\\update.html',
      1 => 1521158151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aab0a9b0d1db5_47547797 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top: 75px">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Ajout de joueur
                </div>
                <div class="panel-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Joueur/update">
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['listeJ']->value)) {
echo $_smarty_tpl->tpl_vars['listeJ']->value['nom'];
}?>"/>
                            <input class="form-control" type="hidden" name="id" id="id"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" id="prenom" value="<?php if (isset($_smarty_tpl->tpl_vars['listeJ']->value)) {
echo $_smarty_tpl->tpl_vars['listeJ']->value['prenom'];
}?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Entraineur ou Joueur</label>
                            <input class="form-control" type="text" name="idEntraineur" id="idEntraineur" value="<?php if (isset($_smarty_tpl->tpl_vars['listeJ']->value)) {
echo $_smarty_tpl->tpl_vars['listeJ']->value['idEntraineur'];
}?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Discipline</label>
                            <select>
                                <option>Faite votre choix</option>
                            </select>
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
