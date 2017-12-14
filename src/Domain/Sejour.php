<?php
namespace stpaul\Domain;

class Sejour 
{
    private $SEJ_NO;
    private $SEJ_INTITULE;
    private $SEJ_MONTANT_MBI;
    private $SEJ_DTE_DEB;
    private $SEJ_DUREE;

    // public function __construct($SEJ_NO, $SEJI_NTITULE, $SEJ_MONTANT_MBI, $SEJ_DTE_DEB, $SEJ_DUREE) {
    //     $this->SEJ_NO = $SEJ_NO;
    //     $this->SEJI_NTITULE = $SEJI_NTITULE;
    //     $this->SEJ_MONTANT_MBI = $SEJ_MONTANT_MBI;
    //     $this->SEJ_DTE_DEB = $SEJ_DTE_DEB;
    //     $this->SEJ_DUREE = $SEJ_DUREE;
    // }

    public function getSEJ_NO()
    {
        return $this->_SEJ_NO;
    }
     public function getSEJ_INTITULE()
    {
        return $this->_SEJ_INTITULE;
    }
     public function getSEJ_MONTANT_MBI()
    {
        return $this->_SEJ_MONTANT_MBI;
    }
     public function getSEJ_DTE_DEB()
    {
        return $this->_SEJ_DTE_DEB;
    }
     public function getSEJ_DUREE()
    {
        return $this->_SEJ_DUREE;
    }

    public function setSEJ_NO($SEJ_NO)
  {
    $this->_SEJ_NO = $SEJ_NO;
    return $this;
  }
    public function setSEJ_INTITULE($SEJ_INTITULE)
  {
    $this->_SEJ_INTITULE = $SEJ_INTITULE;
    return $this;
  }
    public function setSEJ_MONTANT_MBI($SEJ_MONTANT_MBI)
  {
    $this->_SEJ_MONTANT_MBI = $SEJ_MONTANT_MBI;
    return $this;
  }
    public function setSEJ_DTE_DEB($SEJ_DTE_DEB)
  {
    $this->_SEJ_DTE_DEB = $SEJ_DTE_DEB;
    return $this;
  }
    public function setSEJ_DUREE($SEJ_DUREE)
  {
    $this->_SEJ_DUREE = $SEJ_DUREE;
    return $this;
  }

}

?>