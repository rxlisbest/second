<?php

namespace Shandong\OperaAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsClasses
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NewsClasses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="n_classid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $nClassid;

    /**
     * @var string
     *
     * @ORM\Column(name="n_classname", type="string", length=20)
     */
    private $nClassname;

    /**
     * @var string
     *
     * @ORM\Column(name="n_classpath", type="string", length=15)
     */
    private $nClasspath;

    /**
     * @var integer
     *
     * @ORM\Column(name="p_order", type="integer")
     */
    private $pOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="s_order", type="integer")
     */
    private $sOrder;

    /**
     * Get nClassid
     *
     * @return integer 
     */
    public function getNClassid()
    {
        return $this->nClassid;
    }

    /**
     * Set nClassname
     *
     * @param string $nClassname
     * @return news_classes
     */
    public function setNClassname($nClassname)
    {
        $this->nClassname = $nClassname;
    
        return $this;
    }

    /**
     * Get nClassname
     *
     * @return string 
     */
    public function getNClassname()
    {
        return $this->nClassname;
    }

    /**
     * Set nClasspath
     *
     * @param string $nClasspath
     * @return news_classes
     */
    public function setNClasspath($nClasspath)
    {
        $this->nClasspath = $nClasspath;
    
        return $this;
    }

    /**
     * Get nClasspath
     *
     * @return string 
     */
    public function getNClasspath()
    {
        return $this->nClasspath;
    }

    /**
     * Set pOrder
     *
     * @param integer $pOrder
     * @return news_classes
     */
    public function setPOrder($pOrder)
    {
        $this->pOrder = $pOrder;
    
        return $this;
    }

    /**
     * Get pOrder
     *
     * @return integer 
     */
    public function getPOrder()
    {
        return $this->pOrder;
    }

    /**
     * Set sOrder
     *
     * @param integer $sOrder
     * @return news_classes
     */
    public function setSOrder($sOrder)
    {
        $this->sOrder = $sOrder;
    
        return $this;
    }

    /**
     * Get sOrder
     *
     * @return integer 
     */
    public function getSOrder()
    {
        return $this->sOrder;
    }
}
