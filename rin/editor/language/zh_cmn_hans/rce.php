<?php

/**
 *
 * Auto Groups. An extension for the phpBB Forum Software package.
 * Chinese translation by Yangzw
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// 编码格式：UTF-8

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

//Front的部分phpbb中国社区已经翻译了，如果你安装了中文支持包

$lang = array_merge($lang, array(
	// Front
	'RCE_RESTORE'					=> 'Restore',
	'RCE_MORE'						=> 'More',
	'RCE_INSERT_A_VIDEO'			=> 'Insert a video',
	'RCE_ENTER_URL'					=> 'Enter URL:',
	'RCE_ENTER_THE_IMAGE_URL'		=> 'Enter the image URL:',
	'RCE_DESCRIPTION_OPTIONAL'		=> 'Description (optional):',
	'RCE_INSERT'					=> 'Insert',
	'RCE_VIDEO_URL'					=> 'Video URL or ID:',
	'RCE_QUICK_QUOTE'				=> 'Quote Text',

	// ACP
	'ACP_RCE_TITLE'			=>	'Rin编辑器(Powerd by CKEditor)',
	'ACP_RCE_SETTING'		=>	'与该编辑器相关的设置',
	'RCE_CONFIG_UPDATE'		=>	'更改Rin编辑器的设置',
	'RCE_SETTING_SAVED'		=>	'成功更改设置！',
	'RCE_LANGUAGE_TITLE'	=>	'编辑器语言选择',
	'RCE_LANGUAGE_DESC'		=>	'在这里设置Rin Editor的语言。提示：如果要编辑器检测浏览器语言，请使用default。',
	'RCE_BBCODE_TITLE'		=>	'选择 BBCode',
	'RCE_BBCODE_DESC'		=>	'选择你想要更改组(权限)属性的BBCode',
	'RCE_PBBCODE_TITLE'		=>	'要更改组权限的BBCode：',
	'RCE_PBBCODE_DESC'		=>	'选择你要进行权限更改的组<br /><strong>提示：</strong>如果你不选择任何组，所有组都有权限使用该BBCode。',
	'RCE_MOBMS_TITLE'		=>	'移动设备是否加载该编辑器',
	'RCE_MOBMS_DESC'		=>	'如果你想要移动设备加载该编辑器，请选择是。',
	'RCE_ENBQUICK_TITLE'	=>	'快速回复和快速编辑模式',
	'RCE_ENBQUICK_DESC'		=>	'如果你希望Rin编辑器以 快速回复和快速编辑模式 加载，请选择是。',
	'RCE_SCSMILEY_TITLE'	=>	'SCEditor的Smile Box风格',
	'RCE_SCSMILEY_DESC'		=>	'如果你想要用SCEditor的Smile Box风格替换默认风格',
	'RCE_AUTOSAVE_TITLE'	=>	'自动保存设置',
	'RCE_AUTOSAVE_DESC'		=>	'如果你想要停用自动保存功能，请选择否。',
	'RCE_AUTOSAVEMSG_TITLE' =>	'自动保存通知',
	'RCE_AUTOSAVEMSG_DESC'	=>	'如果你希望显示自动保存通知，请选择是。',
	'RCE_QUICKQUOTE_TITLE'	=>	'快速引用功能',
	'RCE_QUICKQUOTE_DESC'	=>	'如果你不想启用快速引用功能，请选择否。',
	'RCE_SUPSMENT_TITLE'	=>	'启用对扩展Simple mentions的支持',
	'RCE_SUPSMENT_DESC'		=>	'<strong>提示：</strong> 在启用这个选项前，你需要安装Simple mentions扩展：<br /> https://www.phpbb.com/customise/db/extension/simple_mentions/',
	'RCE_HEIGHT_TITLE'		=>	'编辑器的高度设置',
	'RCE_HEIGHT_DESC'		=>	'设置编辑器高度(单位：px)',
	'RCE_MAX_HEIGHT_TITLE'	=>	'编辑器的最大高度设置',
	'RCE_MAX_HEIGHT_DESC'	=>	'设置编辑器最大高度(单位：px)',
	'RCE_SUPEXT_TITLE'		=>	'对外部扩展的主动支持',
	'RCE_SUPEXT_DESC'		=>	'如果你想要支持外部扩展，请选择是。<br /><strong>提示：</strong> 当你启用了快速回复和快速编辑模式，这个选项无效。',
	'RCE_DESNOPOP_TITLE'	=>	'不弹出自定义按钮的描述',
	'RCE_DESNOPOP_DESC'		=>	'如果你不想弹出自定义按钮的描述，请选择是。',
	'RCE_PARTIAL_TITLE'		=>	'只启用部分功能',
	'RCE_PARTIAL_DESC'		=>	'如果你想启用部分功能模式，请选择是。<br /><strong>提示：</strong> 此功能不会转换所见即所得风格的引用标签和代码标签。',
	'RCE_SELTXT_TITLE'		=>	'不替换所选文本',
	'RCE_SELTXT_DESC'		=>	'如果您不希望在按下按钮时替换所选文本<br /><strong>提示：</strong> 启用该功能可能会存在bug',
	'RCE_RMV_ACP_COLOR_TITLE'	=>	'删除ACP颜色选择器。',
	'RCE_RMV_ACP_COLOR_DESC'	=>	'如果你想去掉颜色选择器，请选择是。',
	'RCE_CACHE_TITLE'		=>	'缓存',
	'RCE_CACHE_DESC'		=>	'以秒为单位设置缓存时间。设置为0以禁用此功能。允许的最大值是86400。<br /><strong>提示：</strong> 配置完成后，强烈建议使用缓存来限制性能。',
	'RCE_IMGUR_TITLE'		=>	'Imgur',
	'RCE_IMGUR_DESC'		=>	'在这里设置imgur的API（客户端ID）。<br /><strong>提示：</strong> 您可以在 https://imgur.com/register/api_anon (oauth2 without callback)中获取客户端ID',
	'RCE_STYLE_TITLE'		=>	'样式(风格)选择',
	'RCE_STYLE_DESC'		=>	'选择你想要应用于该编辑器的风格',
	'RCE_SKIN_TITLE'		=>	'风格：',
	'RCE_SKIN_DESC'			=>	'选择皮肤的名称： <br /><strong>放置新皮肤的位置：</strong> root/ext/rin/editor/styles/all/template/js/skins/',
	'RCE_TXTA_TITLE'		=>	'的文本区域颜色',
	'RCE_TXTA_DESC'			=>	'如果要将文本区域颜色更改为黑色，请选择是。',
	'RCE_BUT_TITLE'			=>	'自定义的BBCode放置图标的位置',
	'RCE_BUT_DESC'			=>	'root/ext/rin/editor/styles/all/template/js/icons<br />(长宽： 16x16 px, 图标名字: 必须与对应的BBCode一致, 文件后缀: png)',
));
