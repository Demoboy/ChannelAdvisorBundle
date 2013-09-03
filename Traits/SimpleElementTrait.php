<?php

namespace KMJ\ChannelAdvisorBundle\Traits;

/**
 * Description of simpleElementTrait
 *
 * @author kaelinjacobson
 */
trait SimpleElementTrait {
    
    public function __construct($obj = null) {
        if ($obj != null) 
            $this->load($obj);
    }
    
    public function load($obj) {
        foreach ($obj as $key => $value) {
            $key = lcfirst($key);

            if (property_exists($this, $key)) {
                $this->$key = (string) $value;
            } else if (property_exists($this, ucfirst($key)))  {
                $key = ucfirst($key);
                $this->$key = (string) $value;
            } else {
                $class = get_class($this);
                //echo "no property: {$class} {$key}".PHP_EOL;
            }
        }
    }
}