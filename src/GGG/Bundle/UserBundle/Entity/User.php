<?php

namespace GGG\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="GGG\Bundle\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $username;


    /**
     * @var \Array
     * 
     * @ORM\Column(name="roles", type="text")
     */
    protected $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $password;


    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="date")
     */
    private $creation;





    public function eraseCredentials(){
    /*
        a definir si besoin, voire Symfony\Component\Security\Core\User\UserInterface
    */    
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get nusername
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt()
    {   
        $alphabet = "4+0854c vbnfSDERFTG7 Y  8H24565778fplrèfdq,44+7**fj&è_ç& è=&t=t  éCVBNt=&y&-yihkaplknazsdfgbnij$(uy  çaaqsdfghjkl zertyuio p^wxcvbn,;:&é(-è_çà)";
        
        $tailleSalt = rand(5,10);
        for( $i = 0 ; $i < $tailleSalt ; $i++ ){
            $salt.=$alphabet[rand(1,strlen($alphabet))];
        }
        $this->salt = $salt;
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password,PASSWORD_BCRYPT,$this->getSalt());

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get Roles
     *
     * @return \Array
     */
    public function getRoles(){
        return $this->roles;
    }

    /**
     * Set Roles
     *
     * @param string $role
     */
    public function setRoles($role){
        array_push($this->roles,$role);
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     * @return User
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime 
     */
    public function getCreation()
    {
        return $this->creation;
    }


}
