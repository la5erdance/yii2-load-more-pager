<?php

namespace la5erdance\loadmore;

use yii\web\AssetBundle;

class LoadMorePagerWidgetAsset extends AssetBundle {
	public $sourcePath = __DIR__ . '/assets';

	public $js = [
		'js/load-more-pager.js',
	];

	public $css = [
		'css/load-more-pager.css',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];
}
