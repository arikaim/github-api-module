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
 * DownloadRepository api call
 */
class DownloadRepository extends AbstractApiFunction implements ApiFunctionInterface
{
    /**
     * Initialize api funciton
     *
     * @return void
     */
    public function init(): void
    {
        $this->addHeader('Accept: application/vnd.github.v3.raw');
        $this         
            ->method('GET')
            ->path('repos/{{owner}}/{{repo}}/zipball/{{version}}')
            ->paramsType('path');        
    }
}
