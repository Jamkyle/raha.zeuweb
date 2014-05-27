<?php


namespace Raha\HomeBundle\Entity;


class Enquiry
{
    protected $name;

    protected $email;

    protected $subject;

    protected $Contenu;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->Contenu;
    }

    public function setBody($body)
    {
        $this->Contenu = $body;
    }

}