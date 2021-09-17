<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\GithubApi;

use Arikaim\Core\Extension\Module;

/**
 * Github Api client module class
 */
class GithubApi extends Module
{
    /**
     * Install module
     *
     * @return void
     */
    public function install()
    {
        $this->installDriver('Arikaim\\Modules\\GithubApi\\Drivers\\GithubApiDriver');
    }
}
