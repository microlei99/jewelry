<?php
/**
 * This configuration file is used in development mode
 */
return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'),
    array(
        'import'=>array(
            'application.extensions.yiidebugtb.*'
        ),
        'modules' => array(
            'gii' => array(
                'class' => 'system.gii.GiiModule',
                'password' => '123456',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
                'ipFilters' => array('127.0.0.1', '172.16.0.11'),
            ),
        ),
        'components' => array(
            'fixture'=>array(
				'class' => 'system.test.CDbFixtureManager',
			),
            'db' => array(
                'schemaCachingDuration' => 0,
                'enableParamLogging' => true,
                'enableProfiling' => true,
                'schemaCacheID' => false,
                'queryCacheID' => false,
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    /* array(
                      'class'=>'CWebLogRoute',
                      'levels'=>'error, warning',
                      'showInFireBug'=>true,
                      ), */
                    /* array(
                      'class'=>'ext.firePHPLogRoute.ShikiFirePHPLogRoute',
                      'libPath'=>dirname(__FILE__).'/../vendors/FirePHPCore-0.3.2/lib',
                      'levels' => 'error, warning, trace, info',
                      ), */
                    array(// configuration for the toolbar
                        'class' => 'XWebDebugRouter',
                        'config' => 'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
                        'config' => 'alignLeft, opaque, runInDebug, fixedPos, yamlStyle',
                        'levels' => 'error, warning, trace, profile, info',
                        'allowedIPs' => array('127.0.0.1', '::1', '172.16.0.11'),
                    ),
                ),
            ),
        )
    )
);
?>
