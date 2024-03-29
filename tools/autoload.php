<?php
    function autoload($class)
    {
        $result = substr($class, 0, 4);

        if (strcmp($result, 'ctrl') == 0)
        {
            include_once 'Controller/'.$class.'.php';
        }
        else
        {
            if (strcmp($result, 'acce') == 0)
            {
                include_once 'Tools/'.$class.'.php';
            }
            else
            {
                if (strcmp($result, 'cont') == 0)
                {
                    include_once 'Processing/Containers/'.$class.'.php';
                }
                else
                {
                    if (strcmp($result, 'acti') == 0)
                    {
                        include_once 'Processing/Action/'.$class.'.php';
                    }
                    else
                    {
                        if (strcmp($result, 'view') == 0)
                        {
                            include_once 'Templates/Views/'.$class.'.php';
                        }
                    }
                }
            }
        }
    }
    spl_autoload_register('autoload');
?>