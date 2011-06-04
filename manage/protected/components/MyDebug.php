<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDebug
{
    /*获取用户自己声明的类*/
    public static function getUserDefinedClass()
    {
        $classes = array();
        foreach(get_declared_classes() as $class)
        {
            $reflectionClass = new ReflectionClass($class);
            if($reflectionClass->isUserDefined())
            {
                 $classes[] = $class;
            }
        }
        return $classes;
    }

    /* 获得该类的方法*/
    public static function getClassMethod($class)
    {
        $methods = array();
        $classes = self::getUserDefinedClass();
        if(in_array($class,$classes))
        {
            $reflectionClass = new ReflectionClass($class);
            foreach($reflectionClass->getMethods() as $obj)
            {
                $methods[$obj->name] = $obj->class;
            }
        }
        return $methods;
    }
}
?>
