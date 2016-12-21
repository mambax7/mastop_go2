<?php
### =============================================================
### Mastop InfoDigital - Paixão por Internet
### =============================================================
### Arquivo de Configuração do Módulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital © 2003-2007
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
###
### =============================================================
include_once XOOPS_ROOT_PATH . '/modules/' . MGO_MOD_DIR . '/include/funcoes.inc.php';
// Dados do Módulo
$modversion['version']       = 1.04;
$modversion['module_status'] = 'Beta 1';
$modversion['release_date']  = '2016/12/21';
$modversion['name']          = MGO_MOD_NOME;
$modversion['author']        = 'Fernando Santos (aka topet05)';
$modversion['description']   = MGO_MOD_DESC;
$modversion['credits']       = 'Mastop InfoDigital - www.mastop.com.br';
$modversion['help']          = 'page=help';
$modversion['license']       = 'GNU GPL 2.0';
$modversion['license_url']   = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['official']      = 0; //1 indicates supported by XOOPS Dev Team, 0 means 3rd party supported
$modversion['image']         = 'assets/images/logoModule.png';
$modversion['dirname']       = basename(__DIR__);

$modversion['dirmoduleadmin'] = '/Frameworks/moduleclasses/moduleadmin';
$modversion['icons16']        = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32']        = '../../Frameworks/moduleclasses/icons/32';

//about
$modversion['module_website_url']  = 'www.xoops.org/';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.8';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = array('mysql' => '5.1');

// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Arquivo Sql (Deve conter o dump de todas as tabelas do módulo)
// Todas as tabelas devem estar sem o prefixo!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tabelas criadas pelo Arquivo sql (sem prefixo poha!)
$modversion['tables'][0] = MGO_MOD_TABELA0;
$modversion['tables'][1] = MGO_MOD_TABELA1;

// Itens da Administração
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

$modversion['blocks'][1]['file']        = MGO_MOD_BLOCO1_FILE;
$modversion['blocks'][1]['name']        = MGO_MOD_BLOCO1;
$modversion['blocks'][1]['description'] = MGO_MOD_BLOCO1_DESC;
$modversion['blocks'][1]['show_func']   = MGO_MOD_BLOCO1_SHOW;
$modversion['blocks'][1]['edit_func']   = MGO_MOD_BLOCO1_EDIT;
$modversion['blocks'][1]['options']     = '0|200|1|1|6|333333|FFFFFF|50';
$modversion['blocks'][1]['template']    = MGO_MOD_BLOCO1_TEMPLATE;

// ------------------- Help files ------------------- //
$modversion['helpsection'] = array(
    array('name' => MI_MGO_OVERVIEW, 'link' => 'page=help'),
    array('name' => MI_MGO_DISCLAIMER, 'link' => 'page=disclaimer'),
    array('name' => MI_MGO_LICENSE, 'link' => 'page=license'),
    array('name' => MI_MGO_SUPPORT, 'link' => 'page=support'),
);

// Menu
$modversion['hasMain'] = 1;

// Busca
$modversion['hasSearch'] = 0;

// Configurações (Para as preferências do módulo)
$imgcatHandler                          = xoops_getHandler('imagecategory');
$catlist                                = array_flip($imgcatHandler->getList(array(), 'imgcat_read', 1));
$modversion['config'][1]['name']        = 'mgo_des_img';
$modversion['config'][1]['title']       = 'MGO_MOD_DSTAC_IMG';
$modversion['config'][1]['description'] = 'MGO_MOD_DSTAC_IMG_DES';
$modversion['config'][1]['formtype']    = 'select_multi';
$modversion['config'][1]['valuetype']   = 'array';
$modversion['config'][1]['options']     = $catlist;
