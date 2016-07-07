<?php

namespace RP\Px;

class Router
{
    protected $baseUrl = '';
    protected $urlMappings = array(
        'GET' => array(),
        'POST' => array(),
        'PUT' => array(),
        'DELETE' => array(),
        'HEAD' => array(),
        'OPTION' => array()
    );
    
    public function dispatch($url)
    {
        $fullBaseUrl = $this->getFullBaseUrl();
        $method = $this->getRequestMethod();
        
        //先匹配urlMapping
        foreach ($his->urlMappings[$method] as $urlMapping) {
            $pattern = $urlMapping['pattern'];
            $action = $urlMapping['action'];
            $params = $pattern->match();
        }
        
    }
    
    protected function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
 
    /**
     * 根据从当前routable开始一层层父级，获取将$baseUrl合并起来的结果
     */ 
    public function getFullBaseUrl()
    {
        $path = '';
        $cur = $this;
        do {
            $path = $cur->baseUrl . $path;
            
        } while($cur != null);
        return $path;
    }
}