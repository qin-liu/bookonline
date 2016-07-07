<?php

namespace RP\Px;

use RP\util\StringUtil

class UrlPattern
{
    /**
     * 用来匹配路径的模式
     * 模式的规则是，如果有变量，则变量只能是字母或下划线开头，只包括字母或数字或下划线
     * 变量前冠以冒号 :
     * 比如 /post/:id (这种只匹配不包含带有/的字符串)
     * TODO: 另外一种情况是，可以指定类型(int, string, path, boolean等)，比如 /site/<path:siteUrl>
    */
    
    protected $pattern = null;
    
    
    public function __construct($pattern)
    {
        $this->sourcePattern = $pattern;
        $this->loadPattern($pattern);
    }
    
    protected function loadPattern($pattern)
    {
        $pattern = preg_replace('/(:[a-zA-Z_][a-zA-Z_0-9]*)/', '([^/]+)', $pattern);
        $this->pattern = $pattern;
    }
    
    public function match($baseUrl, $path)
    {
        $pattern = $baseUrl . ($this->pattern);
        
    }
}