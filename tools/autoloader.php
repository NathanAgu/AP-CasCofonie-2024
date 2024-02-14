<?php
    function autoloader($class)
    {
        $result = substr($class, 0, 5);

        if (strcmp($result, 'contr') == 0)
        {
            include_once 'Controller/'.$class.'.php';
        }
        else
        {
            if (strcmp($result, 'acces') == 0)
            {
                include_once 'Tools/'.$class.'.php';
            }
            else
            {
                if (strcmp($result, 'conta') == 0)
                {
                    include_once 'Processing/Containers/'.$class.'.php';
                }
                else
                {
                    if (strcmp($result, 'action') == 0)
                    {
                        include_once 'Processing/Action/'.$class.'.php';
                    }
                    else
                    {
                        if (strcmp($result, 'views') == 0) // à revoir le nom
                        {
                            include_once 'Templates/Views/'.$class.'.php';
                        }
                    }
                }
            }
        }
    }
?>