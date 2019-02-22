<?php

/*
 * This file is part of kvothe/spoiler-bbcode.
 *
 * Copyright (c) 2019 Kvothe.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Kvothe\SpoilerBBCode;

use Flarum\Extend;
use Flarum\Extend\Formatter;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/resources/less/forum.less'),
  	new Extend\Locales(__DIR__ . '/resources/locale'),
    (new Extend\Formatter)
		->configure(function (Configurator $config) {
			$config->BBcodes->addCustom(
	            '[SPOILER]{TEXT}[/SPOILER]',
	            '<div class="warning"><span>'.app('Flarum\Locale\Translator')->trans('kvothe-spoiler.forum.spoiler-warning').'</span></div><div class="spoiler">{TEXT}</div>'
	        );
   		}),
    
];
