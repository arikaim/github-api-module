<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\GithubApi\Functions;

use Arikaim\Modules\Api\AbstractApiFunction;
use Arikaim\Modules\Api\Interfaces\ApiFunctionInterface;

/**
 * ListTags api call
 */
class ListTags extends AbstractApiFunction implements ApiFunctionInterface
{
    /**
     * Initialize api funciton
     *
     * @return void
     */
    public function init(): void
    {
        $this
            ->method('GET')
            ->path('repos/{{owner}}/{{repo}}/tags')
            ->paramsType('path');    
    }
}
