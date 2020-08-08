<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /post-viewer-plugin
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: post-viewer-plugin.php	Saturday 8th of August 2020 10:20:08 PM	ayoola@ayoo.la $ 
*/
//	Page Include Content

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_0b9c0e6437dd7273794ca3938472eed5 = new Ayoola_Page_Editor_Text( array (
  'editable' => '{{{demo_video}}}',
  'preserved_content' => '{{{demo_video}}}<br>',
  'url_prefix' => '/repository',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
  ),
  'pagewidget_id' => '1591877936-0-19',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'content' => '{{{demo_video}}}',
) );

							}
							else
							{
								
$_0b9c0e6437dd7273794ca3938472eed5 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_6e309abbbab043156678e81f9dfaf608 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<h1>{{{article_title}}}</h1>

<div>&nbsp;</div>

<p>{{{article_content}}}</p>
',
  'preserved_content' => '<h1>{{{article_title}}}</h1>

<div>&nbsp;</div>

<p>{{{article_content}}}</p>
',
  'url_prefix' => '/repository',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
  ),
  'pagewidget_id' => '1591861892-0-12',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'wrapper_name' => 'white-well',
  'content' => '<h1>{{{article_title}}}</h1>

<div>&nbsp;</div>

<p>{{{article_content}}}</p>
',
) );

							}
							else
							{
								
$_6e309abbbab043156678e81f9dfaf608 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Application_Slideshow_View' ) )
							{
								
$_eeaf0a91e231ad6f8b9231774e3d037a = new Application_Slideshow_View( array (
  'slideshow_name' => 'pc_page_images',
  'template_name' => 'NivoSlider',
  'pagewidget_id' => '1591878009-0-20',
) );

							}
							else
							{
								
$_eeaf0a91e231ad6f8b9231774e3d037a = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_1c6f0df87a6b33328241b77810af5027 = new Ayoola_Page_Editor_Text( array (
  'codes' => '<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
  'preserved_content' => '',
  'url_prefix' => '/repository',
  'pagewidget_id' => '1591863556-0-18',
  'content' => '<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
) );

							}
							else
							{
								
$_1c6f0df87a6b33328241b77810af5027 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_b06a54aeb077e7bce84064c174b84afe = new Ayoola_Page_Editor_Text( array (
  'editable' => '<h3>Getting Started</h3>

<p>&nbsp;</p>

<p>{{{installation}}}</p>
',
  'preserved_content' => '<h3>Getting Started</h3>

<p>&nbsp;</p>

<p>{{{installation}}}</p>
',
  'url_prefix' => '/repository',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
  ),
  'pagewidget_id' => '1591861581-0-9',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'wrapper_name' => 'well',
  'content' => '<h3>Getting Started</h3>

<p>&nbsp;</p>

<p>{{{installation}}}</p>
',
) );

							}
							else
							{
								
$_b06a54aeb077e7bce84064c174b84afe = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_0854476896e13df7f2076202c06ae79e = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div><br></div><div><br></div>',
  'preserved_content' => '<div><br></div><div><br></div>',
  'url_prefix' => '/repository',
  'pagewidget_id' => '1591863408-0-15',
  'content' => '<div><br></div><div><br></div>',
) );

							}
							else
							{
								
$_0854476896e13df7f2076202c06ae79e = null;

							}
							
							if( Ayoola_Page::hasPriviledge( array (
  0 => '98',
  1 => '99',
), array( 'strict' => true ) ) )
							{
								if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
								{
									
$_e0cb34276a127ef73686a8a09f744ec4 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'preserved_content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'url_prefix' => '/repository',
  'pagewidget_id' => '1575534199-0-169',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => 'Application_Article_View',
    1 => 'pc_give_space_top_bottom',
  ),
  'object_access_level' => 
  array (
    0 => '98',
    1 => '99',
  ),
  'wrapper_name' => 'well',
  'object_class' => 'pc_give_space_top_bottom',
  'content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
) );

								}
								else
								{
									
$_e0cb34276a127ef73686a8a09f744ec4 = null;

								}
							}    
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_7cde4d3211c3f9be8a22b5d672f9aaba = new Ayoola_Page_Editor_Text( array (
  'codes' => '<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
  'preserved_content' => '',
  'url_prefix' => '/repository',
  'pagewidget_id' => '1591863556-0-18',
  'content' => '<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
) );

							}
							else
							{
								
$_7cde4d3211c3f9be8a22b5d672f9aaba = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_cf8a5633828a426eafa0bb06be41bac2 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<h3>Versioning</h3>

<div>&nbsp;</div>

<p><a href="{{{git_link}}}"><i class="fa fa-github pc_give_space"></i>Github</a></p>

<p>&nbsp;</p>
',
  'preserved_content' => '<h3>Versioning</h3>

<div>&nbsp;</div>

<p><a href="{{{git_link}}}"><i class="fa fa-github pc_give_space"></i>Github</a></p>

<p>&nbsp;</p>
',
  'url_prefix' => '/repository',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
  ),
  'pagewidget_id' => '1591861599-0-10',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'wrapper_name' => 'dark',
  'content' => '<h3>Versioning</h3>

<div>&nbsp;</div>

<p><a href="{{{git_link}}}"><i class="fa fa-github pc_give_space"></i>Github</a></p>

<p>&nbsp;</p>
',
) );

							}
							else
							{
								
$_cf8a5633828a426eafa0bb06be41bac2 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_bdd8809b6375666f6b49eaac7ddbcf3a = new Ayoola_Page_Editor_Text( array (
  'editable' => '<a class="pc-btn" style="display:block;" href="/repository/widgets/Application_Article_Type_Download?article_url={{{article_url}}}">Download Plugin <i class="fa fa-download pc_give_space"></i></a>
',
  'preserved_content' => '<a class="pc-btn" style="display:block;" href="/repository/widgets/Application_Article_Type_Download?article_url={{{article_url}}}">Download Plugin <i class="fa fa-download pc_give_space"></i></a>
',
  'url_prefix' => '/repository',
  'pagewidget_id' => '1591898370-0-23',
  'content' => '<a class="pc-btn" style="display:block;" href="/widgets/Application_Article_Type_Download?article_url={{{article_url}}}">Download Plugin <i class="fa fa-download pc_give_space"></i></a>
',
) );

							}
							else
							{
								
$_bdd8809b6375666f6b49eaac7ddbcf3a = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_7524e2c4c388b59e4917a75cbdafe757 = new Ayoola_Page_Editor_Text( array (
  'codes' => '<h3>Plugin Categories<br>
&nbsp;</h3>
<!--{{{@0(Application_Article_Category)-->
<p><a href="{{{pc_url_prefix}}}{{{category_url}}}">{{{category_label}}}</a></p>
<!--(Application_Article_Category)@0}}}-->',
  'preserved_content' => '',
  'url_prefix' => '/repository',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
    2 => 'parameters',
  ),
  'pagewidget_id' => '1591861738-0-11',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_Category',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '1',
  ),
  'wrapper_name' => 'white-well',
  'show_only_post_categories[0]' => '1',
  'content' => '<h3>Plugin Categories<br>
&nbsp;</h3>
<!--{{{@0(Application_Article_Category)-->
<p><a href="{{{pc_url_prefix}}}{{{category_url}}}">{{{category_label}}}</a></p>
<!--(Application_Article_Category)@0}}}-->',
) );

							}
							else
							{
								
$_7524e2c4c388b59e4917a75cbdafe757 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_d8d2c9d7787da0a09a2d623f47cfd589 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="container">
<p>&nbsp;</p>

<h3>Similar Plugins</h3>

<p>&nbsp;</p>
</div>
',
  'preserved_content' => '<div class="container">
<p>&nbsp;</p>

<h3>Similar Plugins</h3>

<p>&nbsp;</p>
</div>
',
  'url_prefix' => '/repository',
  'pagewidget_id' => '1591861434-0-8',
  'content' => '<div class="container">
<p>&nbsp;</p>

<h3>Similar Plugins</h3>

<p>&nbsp;</p>
</div>
',
) );

							}
							else
							{
								
$_d8d2c9d7787da0a09a2d623f47cfd589 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Application_Article_ShowAll' ) )
							{
								
$_e05b93fdaf7282068c6974db3ef6c199 = new Application_Article_ShowAll( array (
  'option' => '3',
  'category_name' => '',
  'article_types' => '',
  'template_name' => 'ProductsandServicesList2',
  'widget_options' => 
  array (
    0 => 'parameters',
  ),
  'pagewidget_id' => '1591861306-0-6',
  'advanced_parameter_value' => 
  array (
    0 => 'container',
    1 => '1',
  ),
  'object_class' => 'container',
  'post_with_same_category' => '1',
) );

							}
							else
							{
								
$_e05b93fdaf7282068c6974db3ef6c199 = null;

							}
							