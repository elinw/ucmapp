<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;


// check modules
/*$showRightColumn        = ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom                        = ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft                        = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn==0 and $showleft==0) {
        $showno = 0;
}
*/
JHtml::_('behavior.framework', true);

// get params
/*$color              = $this->params->get('templatecolor');
$logo               = $this->params->get('logo');
$navposition        = $this->params->get('navposition');
$app                = JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams     = $app->getTemplate(true)->params;
*/
?>
		<script type="text/javascript" src="themes/beez2/javascript/md_stylechanger.js"></script>
<?php
			// I'm doing this in the template because I have my navigation hard coded into it.
			$factory  = JContentFactory::getInstance();

//$doc->addScript('themes/beez2/javascript/md_stylechanger.js', 'text/javascript', true);
			$topnav = $factory->getContent('Navigation')->load(1510);
			$sidenav = $factory->getContent('Navigation')->load(1518);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
        <head>

                <link rel="stylesheet" href="themes/system/css/system.css" type="text/css" />
                <link rel="stylesheet" href="themes/beez2/css/position.css" type="text/css" media="screen,projection" />
                <link rel="stylesheet" href="themes/beez2/css/layout.css" type="text/css" media="screen,projection" />
                <link rel="stylesheet" href="themes/beez2/css/print.css" type="text/css" media="print" />

			<?php
					$files = JHtml::_('stylesheet', 'themes/beez2/css/general.css', null, false, true);
					if ($files):
							if (!is_array($files)):
									$files = array($files);
							endif;
							foreach($files as $file):

									echo '<link rel="stylesheet" href="'. $file .'" type="text/css" />';

							 endforeach;
			?>
			<link rel="stylesheet" href="themes/beez2/css/personal.css" type="text/css" />
			<link rel="stylesheet" href="themes/beez2/css/personal.css" type="text/css" media="print" />
			<link rel="stylesheet" href="themes/beez2/css/extended.css" type="text/css" />

			<?php
					if (isset($content))
					{
							echo	'<title>'. $content->title. '</title>';
					}

					endif;
			?>
				<style type="text/css">
							#line
							{      width:98% ;
							}
							.logoheader
							{
									height:200px;

							}
							#header ul
							{
							display:block !important;
								  width:98.2% ;
							}
				</style>
							<script type="text/javascript" src="themes/beez2/javascript/hide.js"></script>

							<script type="text/javascript"></script>
               <script type="text/javascript">
                        var altopen='<?php echo JText::_('TPL_BEEZ2_ALTOPEN', true); ?>';
                        var altclose='<?php echo JText::_('TPL_BEEZ2_ALTCLOSE', true); ?>';
                        var bildauf='themes/<?php echo $this->get('theme'); ?>/images/plus.png';
                        var bildzu='themes/<?php echo $this->get('theme'); ?>/images/minus.png';
                        var rightopen='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTOPEN', true); ?>';
                        var rightclose='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE', true); ?>';
                        var fontSizeTitle='<?php echo JText::_('TPL_BEEZ2_FONTSIZE', true); ?>';
                        var bigger='<?php echo JText::_('TPL_BEEZ2_BIGGER', true); ?>';
                        var reset='<?php echo JText::_('TPL_BEEZ2_RESET', true); ?>';
                        var smaller='<?php echo JText::_('TPL_BEEZ2_SMALLER', true); ?>';
                        var biggerTitle='<?php echo JText::_('TPL_BEEZ2_INCREASE_SIZE', true); ?>';
                        var resetTitle='<?php echo JText::_('TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT', true); ?>';
                        var smallerTitle='<?php echo JText::_('TPL_BEEZ2_DECREASE_SIZE', true); ?>';
                </script>

		</head>

<body>
<div id="all">
        <div id="back">
                <div id="header"><span class="menu"></span> <?php echo $topnav->body ?> </span>
                                <div class="logoheader">
                                        <h1 id="logo">My Simple UCM App</h1>

<div id="line"> </div>

</div><!-- end logoheader -->

                                        <ul class="skiplinks">
                                                <li><a href="#main" class="u2"><?php echo JText::_('TPL_BEEZ2_SKIP_TO_CONTENT'); ?></a></li>
                                                <li><a href="#nav" class="u2"><?php echo JText::_('TPL_BEEZ2_JUMP_TO_NAV'); ?></a></li>
                                            <?php // if($showRightColumn ):?>
                                            <li><a href="#additional" class="u2"><?php echo JText::_('TPL_BEEZ2_JUMP_TO_INFO'); ?></a></li>
                                           <?php // endif; ?>
                                        </ul>
                                        <h2 class="unseen"><?php echo JText::_('TPL_BEEZ2_NAV_VIEW_SEARCH'); ?></h2>
                                        <h3 class="unseen"><?php echo JText::_('TPL_BEEZ2_NAVIGATION'); ?></h3>
                                        <jdoc:include type="modules" name="position-1" />
                                        <div id="line">
                                        <div id="fontsize"></div>
                                        <h3 class="unseen"><?php echo JText::_('TPL_BEEZ2_SEARCH'); ?></h3>
                                        <jdoc:include type="modules" name="position-0" />
                                        </div> <!-- end line -->


                        </div><!-- end header -->
</div><!-- end header -->
<?php $showRightColumn = 1 ?>
<div id="<?php echo $showRightColumn ? 'contentarea2' : 'contentarea'; ?>">


<div class="left1">

<?php echo $sidenav->body; ?>
</div>


			<div id="wrapper2">

			<div id="main">

				<jdoc:include type="message" />


					<!--  Next comes the rendered view.-->
					<?php echo $output;  ?>

				</div><!-- end main -->
				</div><!-- end wrapper -->
			</div>



			</div >
			</div ></div >
		</div><!-- back -->

	</div><!-- all -->

    </body>
</html>
