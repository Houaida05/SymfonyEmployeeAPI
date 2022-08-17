<?php

namespace ContainerWkmxoUs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getConnection', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getMetadataFactory', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getExpressionBuilder', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'beginTransaction', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getCache', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'transactional', array('func' => $func), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'commit', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->commit();
    }

    public function rollback()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'rollback', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getClassMetadata', array('className' => $className), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'createQuery', array('dql' => $dql), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'createNamedQuery', array('name' => $name), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'createQueryBuilder', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'flush', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'clear', array('entityName' => $entityName), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->clear($entityName);
    }

    public function close()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'close', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->close();
    }

    public function persist($entity)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'persist', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'remove', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'refresh', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'detach', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'merge', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'contains', array('entity' => $entity), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getEventManager', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getConfiguration', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'isOpen', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getUnitOfWork', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getProxyFactory', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'initializeObject', array('obj' => $obj), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'getFilters', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'isFiltersStateClean', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, 'hasFilters', array(), $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        return $this->valueHolderbb3d9->hasFilters();
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

        $instance->initializerb036c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderbb3d9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbb3d9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbb3d9->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb036c && ($this->initializerb036c->__invoke($valueHolderbb3d9, $this, '__get', ['name' => $name], $this->initializerb036c) || 1) && $this->valueHolderbb3d9 = $valueHolderbb3d9;

        if (isset(self::$publicPropertiesa06f7[$name])) {
            return $this->valueHolderbb3d9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
