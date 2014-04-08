<?php

namespace Proxies\__CG__\Smartnode\TalkBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Chan extends \Smartnode\TalkBundle\Entity\Chan implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'ownerid', 'channame', 'chanpass', 'creationdate', 'backimage', 'actived', 'score');
        }

        return array('__isInitialized__', 'id', 'ownerid', 'channame', 'chanpass', 'creationdate', 'backimage', 'actived', 'score');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Chan $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnerid($ownerid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnerid', array($ownerid));

        return parent::setOwnerid($ownerid);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnerid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerid', array());

        return parent::getOwnerid();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanname($channame)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanname', array($channame));

        return parent::setChanname($channame);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanname', array());

        return parent::getChanname();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanpass($chanpass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanpass', array($chanpass));

        return parent::setChanpass($chanpass);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanpass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanpass', array());

        return parent::getChanpass();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationdate($creationdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationdate', array($creationdate));

        return parent::setCreationdate($creationdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationdate', array());

        return parent::getCreationdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackimage($backimage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackimage', array($backimage));

        return parent::setBackimage($backimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackimage', array());

        return parent::getBackimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setActived($actived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActived', array($actived));

        return parent::setActived($actived);
    }

    /**
     * {@inheritDoc}
     */
    public function getActived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActived', array());

        return parent::getActived();
    }

    /**
     * {@inheritDoc}
     */
    public function setScore($score)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', array($score));

        return parent::setScore($score);
    }

    /**
     * {@inheritDoc}
     */
    public function getScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', array());

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Smartnode\userBundle\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owner));

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', array());

        return parent::getOwner();
    }

}