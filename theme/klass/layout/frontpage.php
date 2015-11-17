<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_klass
 * @copyright 2015 Nephzat Dev Team,nephzat.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_klass_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

$PAGE->requires->js('/theme/klass/javascript/bootstrap-carousel.js');
$PAGE->requires->js('/theme/klass/javascript/bootstrap-transition.js');
$courserenderer = $PAGE->get_renderer('core', 'course');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php  require_once(dirname(__FILE__) . '/includes/header.php');  ?>
<!--Custom theme header-->
<div class="container-fluid">
	 <?php
        $toggleslideshow = theme_klass_get_setting('toggleslideshow');
        if ($toggleslideshow == 1) {
            require_once(dirname(__FILE__) . '/includes/slideshow.php');
        } 
      ?>
</div>
<!--Custom theme slider-->
<div class="fp-site-customdesc">
	<div class="container-fluid">
    
    <?php
	$who_title = theme_klass_get_setting('whoweare_title');
    $who_desc = theme_klass_get_setting('whoweare_description');
?>
  	<h2><?php echo $who_title; ?></h2>
   <?php if ($who_desc){ ?>
      	<p><?php echo $who_desc; ?></p>
        <?php } ?>
  </div>
</div>
<!--Custom theme Who We Are block-->
<div id="page" class="container-fluid">
    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
    <div id="page-content" class="row-fluid">

        <div id="<?php echo $regionbsid ?>" class="span9">
					<?php
					 echo $courserenderer->new_courses();
						echo $OUTPUT->course_content_header();
						echo $OUTPUT->main_content();
						echo $OUTPUT->course_content_footer();
          ?>
        </div>
				<?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>

    </div>
</div>
<?php  require_once(dirname(__FILE__) . '/includes/footer.php');  ?>   
<!--Custom theme footer-->
<!--Iniciando sistemas de mensajería-->
<div id="mensajerias-educacion">
    <div class="box message" id="yui_3_17_2_2_1447725039141_219"><div class="contactselector mdl-align" id="yui_3_17_2_2_1447725039141_223"><div class="singleselect" id="yui_3_17_2_2_1447725039141_225"><form method="get" action="http://educacion.be/campus/message/index.php" id="single_select_f564a87deef9234"><div id="yui_3_17_2_2_1447725039141_224"><input type="hidden" name="user1" value="2"><input type="hidden" name="user2" value="10"><label for="single_select564a87deef9235" id="yui_3_17_2_2_1447723859808_552">Panel de mensajes:</label><select id="single_select564a87deef9235" class="select autosubmit singleselect" name="viewing"><option selected="selected" value="contacts">Contactos</option><option value="recentconversations">Conversaciones recientes</option><option value="recentnotifications">Notificaciones recientes</option><optgroup label="Cursos"><option value="course_3">APHOTOSHOP-B-CS5</option><option value="course_5">CORELDRAW-X5-B</option><option value="course_6">VISUAL ESTUDIO EXPRESS</option><option value="course_7">Microsoft Project 2013</option></optgroup></select><noscript class="inline">&amp;lt;div&amp;gt;&amp;lt;input type="submit" value="Ir" /&amp;gt;&amp;lt;/div&amp;gt;</noscript></div></form></div><div class="heading" id="yui_3_17_2_2_1447725039141_222">Lista de contactos vacía</div></div><div class="messagearea mdl-align" id="yui_3_17_2_2_1447725039141_218"><div class="mdl-left messagehistory" id="yui_3_17_2_2_1447725039141_217"><div id="message_user_pictures" class="box center"><div class="box user" id="yui_3_17_2_2_1447723859808_548"><div id="user1" class="box generalbox"><a href="http://educacion.be/campus/user/profile.php?id=2" id="yui_3_17_2_2_1447723859808_713"><img src="http://educacion.be/campus/pluginfile.php/5/user/icon/klass/f1?rev=40" alt="Imagen de Admin Hilario Guzman" title="Imagen de Admin Hilario Guzman" class="userpicture" width="100" height="100" id="yui_3_17_2_2_1447723859808_712"></a><div class="heading" id="yui_3_17_2_2_1447723859808_707">Admin Hilario Guzman</div></div></div><div class="box between" id="yui_3_17_2_2_1447723859808_547"><img src="http://educacion.be/campus/theme/image.php/klass/core/1447698955/i/twoway" alt="" width="16" height="16" id="yui_3_17_2_2_1447723859808_546"></div><div class="box user" id="yui_3_17_2_2_1447723859808_545"><div id="user2" class="box generalbox"><a href="http://educacion.be/campus/user/profile.php?id=10" id="yui_3_17_2_2_1447723859808_601"><img src="http://educacion.be/campus/pluginfile.php/58/user/icon/klass/f1?rev=103" alt="Imagen de Esther Paucar Sullca" title="Imagen de Esther Paucar Sullca" class="userpicture" width="100" height="100" id="yui_3_17_2_2_1447723859808_600"></a><div class="heading" id="yui_3_17_2_2_1447723859808_686">Esther Paucar Sullca</div><div class="useractionlinks" id="yui_3_17_2_2_1447723859808_604"><span class="addcontact" id="yui_3_17_2_2_1447723859808_685"><a href="http://educacion.be/campus/message/index.php?user1=2&amp;user2=10&amp;addcontact=10&amp;sesskey=SA8xawEetj" title="Añadir contacto" id="yui_3_17_2_2_1447723859808_684">Añadir contacto</a></span>&nbsp;|&nbsp;<span class="blockcontact" id="yui_3_17_2_2_1447723859808_683"><a href="http://educacion.be/campus/message/index.php?user1=2&amp;user2=10&amp;blockcontact=10&amp;sesskey=SA8xawEetj" title="Bloquear contacto" id="yui_3_17_2_2_1447723859808_682">Bloquear contacto</a></span></div></div></div></div><div class="mdl-align messagehistorytype" id="yui_3_17_2_2_1447723859808_550"><a class="visible" href="http://educacion.be/campus/message/index.php?user1=2&amp;user2=10&amp;history=1" id="yui_3_17_2_2_1447723859808_711">Todos los mensajes</a><span class="hiddenelement">Todos los mensajes</span>&nbsp;|&nbsp;<a class="visible" href="http://educacion.be/campus/message/index.php?user1=2&amp;user2=10&amp;history=0" id="yui_3_17_2_2_1447723859808_602">Mensajes recientes</a><span class="hiddenelement">Mensajes recientes</span>&nbsp;|&nbsp;<span id="yui_3_17_2_2_1447723859808_603">(1) nuevos mensajes</span></div><div class="mdl-left messagehistory" id="yui_3_17_2_2_1447723859808_679"><div class="mdl-align heading"><a name="20151116"></a></div><h4 class="mdl-align" id="yui_3_17_2_2_1447723859808_678"><a name="20151116" id="yui_3_17_2_2_1447723859808_677">lunes, 16 de noviembre de 2015</a></h4><div class="mdl-left right " id="yui_3_17_2_2_1447723859808_681"><div class="message other" id="yui_3_17_2_2_1447723859808_680"><a name="20151116">
    </a><a name="m50"></a>
    <span class="message-meta" id="yui_3_17_2_2_1447723859808_688"><span class="time" id="yui_3_17_2_2_1447723859808_687">20:50</span></span>: <span class="text" id="yui_3_17_2_2_1447723859808_734">Iniciando sistemas</span>
</div></div></div></div><div class="mdl-align messagesend" id="yui_3_17_2_2_1447725039141_237">
<form autocomplete="off" action="http://educacion.be/campus/message/index.php" method="post" accept-charset="utf-8" id="mform2" class="mform">
    <div style="display: none;"><input type="password" value="">
<input name="id" type="hidden" value="10">
<input name="viewing" type="hidden" value="unread">
<input name="sesskey" type="hidden" value="SA8xawEetj">
<input name="_qf__send_form" type="hidden" value="1">
</div>


    <fieldset class="hidden" id="yui_3_17_2_2_1447725039141_236"><div id="yui_3_17_2_2_1447725039141_235">
        <div id="fitem_id_message" class="fitem fitem_ftextarea "><div class="fitemtitle" id="yui_3_17_2_2_1447723859808_708"><label for="id_message" id="yui_3_17_2_2_1447723859808_710">Mensaje </label></div><div class="felement ftextarea" id="yui_3_17_2_2_1447725039141_234"><textarea rows="4" cols="" placeholder="Escribe aquí tu mensaje..." class="messagesendbox" name="message" id="id_message"></textarea></div></div>
        </div></fieldset>
    <fieldset class="hidden" id="yui_3_17_2_2_1447723859808_536"><div id="yui_3_17_2_2_1447723859808_535">
        <div id="fitem_id_submitbutton" class="fitem fitem_actionbuttons fitem_fsubmit"><div class="felement fsubmit" id="yui_3_17_2_2_1447723859808_534"><input name="submitbutton" value="Enviar mensaje" type="submit" id="id_submitbutton"></div></div>
        </div></fieldset>
</form></div></div></div>
  </div>
  <!--finalizando sistema de mensajería-->
</body>
</html>
