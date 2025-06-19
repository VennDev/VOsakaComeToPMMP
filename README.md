# VOsakaComeToPMMP
- Custom designed core to run runtime on PocketMine-PMMP

# How to use?
```php
<?php

namespace yourname\yourplugin;

use pocketmine\plugin\PluginBase;
use vosaka\vosakactpmmp\VOsakaComeToPMMP;

final class Main extends PluginBase {

	protected function onLoad(): void {
		VOsakaComeToPMMP::init($this);
	}
}
```