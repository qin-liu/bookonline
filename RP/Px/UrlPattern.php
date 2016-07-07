<?php

namespace RP\Px;

use RP\util\StringUtil

class UrlPattern
{
    /**
     * ����ƥ��·����ģʽ
     * ģʽ�Ĺ����ǣ�����б����������ֻ������ĸ���»��߿�ͷ��ֻ������ĸ�����ֻ��»���
     * ����ǰ����ð�� :
     * ���� /post/:id (����ֻƥ�䲻��������/���ַ���)
     * TODO: ����һ������ǣ�����ָ������(int, string, path, boolean��)������ /site/<path:siteUrl>
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