<?php

namespace Container1WOKu10;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getConnection', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getMetadataFactory', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getExpressionBuilder', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'beginTransaction', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getCache', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'transactional', array('func' => $func), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'wrapInTransaction', array('func' => $func), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'commit', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->commit();
    }

    public function rollback()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'rollback', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getClassMetadata', array('className' => $className), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'createQuery', array('dql' => $dql), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'createNamedQuery', array('name' => $name), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'createQueryBuilder', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'flush', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'clear', array('entityName' => $entityName), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->clear($entityName);
    }

    public function close()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'close', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->close();
    }

    public function persist($entity)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'persist', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'remove', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'refresh', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'detach', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'merge', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'contains', array('entity' => $entity), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getEventManager', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getConfiguration', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'isOpen', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getUnitOfWork', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getProxyFactory', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'initializeObject', array('obj' => $obj), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'getFilters', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'isFiltersStateClean', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, 'hasFilters', array(), $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        return $this->valueHolder3ce77->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerba261 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3ce77) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3ce77 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3ce77->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerba261 && ($this->initializerba261->__invoke($valueHolder3ce77, $this, '__get', ['name' => $name], $this->initializerba261) || 1) && $this->valueHolder3ce77 = $valueHolder3ce77;

        if (isset(self::$publicPropertiesbee61[$name])) {
            return $this->valueHolder3ce77->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
