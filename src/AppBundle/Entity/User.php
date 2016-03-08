<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use JMS\Serializer\Annotation\MaxDepth;


/**
 * FosUser
 *
 * @ORM\Table(name="fos_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_957A647992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A6479A0D96FBF", columns={"email_canonical"})})
 * @ORM\Entity
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  public function __construct()
  {
      parent::__construct();
  }
}
