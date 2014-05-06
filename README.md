# Yii wrapper for PHPThumb

By Alexey Samoylov (<alexey.samoylov@gmail.com>).

## Requirements

- **PHP 5.4**
- **Yii 1.x**

### Examples

Component configuration example:

```php
'components' => [
	'phpThumb' => [
	    'class' => 'vendor.lagman.yii-phpthumb.YiiPhpThumb',
	],
]
```
Usage example:

```php
$thumb = Yii::app()->phpThumb->create($path);
$thumb->adaptiveResize(100, 100)->show();
```

### Links

- <https://github.com/russianlagman/yii-phpthumb>
- <https://packagist.org/packages/lagman/yii-phpthumb>
