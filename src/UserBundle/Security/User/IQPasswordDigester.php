<?php
/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 5/07/17
 * Time: 22:17
 */

namespace IQDate\UserBundle\Security\User;


use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class IQPasswordDigester extends MessageDigestPasswordEncoder
{
    public function isPasswordValid($encoded, $raw, $salt)
    {
        return password_verify($raw,$encoded);
    }

    public function encodePassword($raw, $salt)
    {
        return password_hash($raw,PASSWORD_DEFAULT);
    }


}