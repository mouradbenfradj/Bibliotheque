<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    /**
     * passwordHasher
     *
     * @var UserPasswordHasherInterface
     */
    private $passwordHasher;

    /**
     * __construct
     *
     * @param UserPasswordHasherInterface $passwordHasher
     */
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    /**
     * load
     *
     * @param ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail("bibliotheque.eric.mad@gmail.com");
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'mourad'
        ));
        $user->setIsVerified(true);

        $manager->persist($user);
        $user = new User();
        $user->setEmail("mourad.benfradj.atlas@gmail.com");
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'mourad'
        ));

        $user->setIsVerified(true);
        $manager->persist($user);

        $manager->flush();
    }

}
