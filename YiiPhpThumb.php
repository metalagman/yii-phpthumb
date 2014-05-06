<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

/**
 * Class YiiPhpThumb
 */
class YiiPhpThumb extends CApplicationComponent
{
    public $options = [];
    public $plugins = [];

    public function init()
    {
        spl_autoload_unregister(['YiiBase', 'autoload']);
        require_once dirname(__FILE__) . '/../../autoload.php';
        spl_autoload_register(['YiiBase', 'autoload'], true, true);
    }

    /**
     * @param string $path
     * @param array $options
     * @param array $plugins
     * @return \PHPThumb\GD
     */
    public function create($path, $options = [], $plugins = [])
    {
        return new PHPThumb\GD($path,
            CMap::mergeArray($this->options, $options),
            CMap::mergeArray($this->plugins, $plugins)
        );
    }
}