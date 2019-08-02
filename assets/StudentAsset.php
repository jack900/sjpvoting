<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class StudentAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        '../web/bower_components/bootstrap/dist/css/bootstrap.min.css',
        '../web/vplugins/iCheck/all.css',
        '../web/bower_components/font-awesome/css/font-awesome.min.css',
        '../web/vdist/css/AdminLTE.min.css',
        '../web/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
        '../web/bower_components/bootstrap-daterangepicker/daterangepicker.css',
        '../web/vplugins/timepicker/bootstrap-timepicker.min.css',
        '../web/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        '../web/vdist/css/skins/_all-skins.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
         '../web/vdist/css/student.css',
    
        
    ];
    public $js = [
    
        '../web/bower_components/jquery/dist/jquery.min.js',
        '../web/bower_components/jquery-ui/jquery-ui.min.js',
        '../web/bower_components/bootstrap/dist/js/bootstrap.min.js',
        '../web/vplugins/iCheck/icheck.min.js',
        '../web/bower_components/moment/moment.js',
        '../web/bower_components/datatables.net/js/jquery.dataTables.min.js',
        '../web/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
        '../web/bower_components/chart.js/Chart.js',
        '../web/bower_components/chart.js/Chart.HorizontalBar.js',
        '../web/bower_components/moment/min/moment.min.js',
        '../web/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        '../web/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        '../web/vplugins/timepicker/bootstrap-timepicker.min.js',
        '../web/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        '../web/bower_components/fastclick/lib/fastclick.js',
        '../web/vdist/js/adminlte.min.js',
       


    ]; 
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
