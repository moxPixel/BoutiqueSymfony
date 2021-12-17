<?php

namespace ContainerTTq5HRL;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5fb13 = null;
    private $initializer568da = null;
    private static $publicProperties4e86a = [
        
    ];
    public function getConnection()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getConnection', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getMetadataFactory', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getExpressionBuilder', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'beginTransaction', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getCache', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getCache();
    }
    public function transactional($func)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'transactional', array('func' => $func), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'wrapInTransaction', array('func' => $func), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'commit', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->commit();
    }
    public function rollback()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'rollback', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getClassMetadata', array('className' => $className), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'createQuery', array('dql' => $dql), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'createNamedQuery', array('name' => $name), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'createQueryBuilder', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'flush', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'clear', array('entityName' => $entityName), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->clear($entityName);
    }
    public function close()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'close', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->close();
    }
    public function persist($entity)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'persist', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'remove', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'refresh', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'detach', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'merge', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getRepository', array('entityName' => $entityName), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'contains', array('entity' => $entity), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getEventManager', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getConfiguration', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'isOpen', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getUnitOfWork', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getProxyFactory', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'initializeObject', array('obj' => $obj), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'getFilters', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'isFiltersStateClean', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'hasFilters', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return $this->valueHolder5fb13->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer568da = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5fb13) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5fb13 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5fb13->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, '__get', ['name' => $name], $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        if (isset(self::$publicProperties4e86a[$name])) {
            return $this->valueHolder5fb13->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fb13;
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
        $targetObject = $this->valueHolder5fb13;
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
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fb13;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5fb13;
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
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, '__isset', array('name' => $name), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fb13;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5fb13;
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
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, '__unset', array('name' => $name), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fb13;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5fb13;
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
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, '__clone', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        $this->valueHolder5fb13 = clone $this->valueHolder5fb13;
    }
    public function __sleep()
    {
        $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, '__sleep', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
        return array('valueHolder5fb13');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer568da = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer568da;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer568da && ($this->initializer568da->__invoke($valueHolder5fb13, $this, 'initializeProxy', array(), $this->initializer568da) || 1) && $this->valueHolder5fb13 = $valueHolder5fb13;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5fb13;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5fb13;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
