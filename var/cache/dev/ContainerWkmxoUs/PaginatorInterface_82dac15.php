<?php

namespace ContainerWkmxoUs;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbb3d9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb036c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa06f7 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        if ($this->valueHolderbb3d9 === $returnValue = $this->valueHolderbb3d9->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerb036c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderbb3d9) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderbb3d9 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__get', ['name' => $name], $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        if (isset(self::$publicPropertiesa06f7[$name])) {
            return $this->valueHolderbb3d9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb3d9;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbb3d9;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb3d9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbb3d9;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__isset', array('name' => $name), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb3d9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbb3d9;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__unset', array('name' => $name), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb3d9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbb3d9;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__clone', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        $this->valueHolderbb3d9 = clone $this->valueHolderbb3d9;
    }

    public function __sleep()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__sleep', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return array('valueHolderbb3d9');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb036c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb036c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'initializeProxy', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbb3d9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbb3d9;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
