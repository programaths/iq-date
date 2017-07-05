<?php

namespace IQDate\UserBundle\Security\User;

use IQDate\UserBundle\Entity\IQUser;
use IQDate\UserBundle\Repository\IQUserRepositoryInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;


/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 5/07/17
 * Time: 21:40
 */
class UserProvider implements UserProviderInterface
{

    /**
     * @var IQUserRepositoryInterface
     */
    private $repository;

    public function __construct(IQUserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        return $this->repository->findByNickname($username)->getOrThrow(new UsernameNotFoundException());
    }

    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @param \Symfony\Component\Security\Core\User\UserInterface $user
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        return $this->repository->findByNickname($user->getUsername())->getOrThrow(new UnsupportedUserException());
    }

    /**
     * Whether this provider supports the given user class.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        return IQUser::class === $class;
    }
}