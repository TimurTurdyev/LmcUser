<?php
return array(
    'EdpUser\Module'                            => __DIR__ . '/Module.php',
    'EdpUser\Service\User'                      => __DIR__ . '/src/EdpUser/Service/User.php',
    'EdpUser\Document\User'                     => __DIR__ . '/src/EdpUser/Document/User.php',
    'EdpUser\Model\UserInterface'               => __DIR__ . '/src/EdpUser/Model/UserInterface.php',
    'EdpUser\Model\User'                        => __DIR__ . '/src/EdpUser/Model/User.php',
    'EdpUser\Event\ResolveTargetEntityListener' => __DIR__ . '/src/EdpUser/Event/ResolveTargetEntityListener.php',
    'EdpUser\Util\Password'                     => __DIR__ . '/src/EdpUser/Util/Password.php',
    'EdpUser\Controller\UserController'         => __DIR__ . '/src/EdpUser/Controller/UserController.php',
    'EdpUser\Mapper\UserZendDb'                 => __DIR__ . '/src/EdpUser/Mapper/UserZendDb.php',
    'EdpUser\Mapper\UserInterface'              => __DIR__ . '/src/EdpUser/Mapper/UserInterface.php',
    'EdpUser\Mapper\UserDoctrine'               => __DIR__ . '/src/EdpUser/Mapper/UserDoctrine.php',
    'EdpUser\Entity\UserMappedSuperClass'       => __DIR__ . '/src/EdpUser/Entity/UserMappedSuperClass.php',
    'EdpUser\Entity\User'                       => __DIR__ . '/src/EdpUser/Entity/User.php',
    'EdpUser\View\Helper\EdpUser'               => __DIR__ . '/src/EdpUser/View/Helper/EdpUser.php',
    'EdpUser\View\Helper\EdpUserService'        => __DIR__ . '/src/EdpUser/View/Helper/EdpUserService.php',
    'EdpUser\Form\Login'                        => __DIR__ . '/src/EdpUser/Form/Login.php',
    'EdpUser\Form\Register'                     => __DIR__ . '/src/EdpUser/Form/Register.php',
    'EdpUser\Form\Base'                         => __DIR__ . '/src/EdpUser/Form/Base.php',
);