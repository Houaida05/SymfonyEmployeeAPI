<?php

namespace Container1WOKu10;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3ce77 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba261 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbee61 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        if ($this->valueHolder3ce77 === $returnValue = $this->valueHolder3ce77->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerba261 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3ce77) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3ce77 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__get', ['name' => $name], $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        if (isset(self::$publicPropertiesbee61[$name])) {
            return $this->valueHolder3ce77->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ce77;

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

        $targetObject = $this->valueHolder3ce77;
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
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ce77;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3ce77;
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
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__isset', array('name' => $name), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ce77;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3ce77;
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
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__unset', array('name' => $name), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3ce77;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3ce77;
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
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__clone', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        $this->valueHolder3ce77 = clone $this->valueHolder3ce77;
    }

    public function __sleep()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__sleep', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return array('valueHolder3ce77');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba261 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba261;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'initializeProxy', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3ce77;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3ce77;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
