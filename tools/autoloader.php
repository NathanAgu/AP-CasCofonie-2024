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
                    if (strcmp($result, 'job') == 0)
                    {
                        include_once 'Processing/Jobs/'.$class.'.php';
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
?>