<?php
/**
* 基于 Google code prettify 的代码高亮插件
*
* @package CodePrettify
* @author HyanCat
* @version 0.0.1
* @link http://hyancat.com
*/
class CodePrettify_Plugin implements Typecho_Plugin_Interface
{
    /**
    * 激活插件方法,如果激活失败,直接抛出异常
    *
    * @access public
    * @return void
    * @throws Typecho_Plugin_Exception
    */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->header = array('CodePrettify_Plugin', 'addHeader');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('CodePrettify_Plugin', 'addFooter');
        return "插件启用成功，无需配置，代码自动高亮";
    }
    
    /**
    * 禁用插件方法,如果禁用失败,直接抛出异常
    *
    * @static
    * @access public
    * @return void
    * @throws Typecho_Plugin_Exception
    */
    public static function deactivate(){}
    
    /**
    * 获取插件配置面板
    *
    * @access public
    * @param Typecho_Widget_Helper_Form $form 配置面板
    * @return void
    */
    public static function config(Typecho_Widget_Helper_Form $form) {}
    
    /**
    * 个人用户的配置面板
    *
    * @access public
    * @param Typecho_Widget_Helper_Form $form
    * @return void
    */
    public static function personalConfig(Typecho_Widget_Helper_Form $form) {}
    
    /**
     * 引入css
     */
    public static function addHeader()
    {
        echo '<link rel="stylesheet" href="' . Helper::options()->pluginUrl . '/CodePrettify/lib/prettify.css"></script>' . "\n";
    }

    /**
     * 引入js
     */
    public static function addFooter()
    {
        echo '<script type="text/javascript" src="' . Helper::options()->pluginUrl . '/CodePrettify/lib/prettify.js"></script>' . "\n";
        echo '<script type="text/javascript" src="' . Helper::options()->pluginUrl . '/CodePrettify/js/code.js"></script>' . "\n";
    }

}