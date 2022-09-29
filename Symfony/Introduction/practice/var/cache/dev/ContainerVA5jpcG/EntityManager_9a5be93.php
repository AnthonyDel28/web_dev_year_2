<?php

namespace ContainerVA5jpcG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb72ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera9fc1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf76c8 = [
        
    ];

    public function getConnection()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getConnection', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getMetadataFactory', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getExpressionBuilder', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'beginTransaction', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getCache', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'transactional', array('func' => $func), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'wrapInTransaction', array('func' => $func), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'commit', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->commit();
    }

    public function rollback()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'rollback', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getClassMetadata', array('className' => $className), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'createQuery', array('dql' => $dql), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'createNamedQuery', array('name' => $name), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'createQueryBuilder', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'flush', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'clear', array('entityName' => $entityName), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->clear($entityName);
    }

    public function close()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'close', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->close();
    }

    public function persist($entity)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'persist', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'remove', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'refresh', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'detach', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'merge', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'contains', array('entity' => $entity), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getEventManager', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getConfiguration', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'isOpen', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getUnitOfWork', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getProxyFactory', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'initializeObject', array('obj' => $obj), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'getFilters', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'isFiltersStateClean', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'hasFilters', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return $this->valueHolderb72ff->hasFilters();
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

        $instance->initializera9fc1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb72ff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb72ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb72ff->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, '__get', ['name' => $name], $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        if (isset(self::$publicPropertiesf76c8[$name])) {
            return $this->valueHolderb72ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb72ff;

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

        $targetObject = $this->valueHolderb72ff;
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
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb72ff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb72ff;
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
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, '__isset', array('name' => $name), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb72ff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb72ff;
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
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, '__unset', array('name' => $name), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb72ff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb72ff;
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
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, '__clone', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        $this->valueHolderb72ff = clone $this->valueHolderb72ff;
    }

    public function __sleep()
    {
        $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, '__sleep', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;

        return array('valueHolderb72ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera9fc1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera9fc1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera9fc1 && ($this->initializera9fc1->__invoke($valueHolderb72ff, $this, 'initializeProxy', array(), $this->initializera9fc1) || 1) && $this->valueHolderb72ff = $valueHolderb72ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb72ff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb72ff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
