<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7728effec66ec6428d871050bb35c1bd
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Restful\\Api\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Restful\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller\\AnnouncementController' => __DIR__ . '/../..' . '/controller/AnnouncementController.php',
        'Controller\\CartController' => __DIR__ . '/../..' . '/controller/CartController.php',
        'Controller\\CategoryController' => __DIR__ . '/../..' . '/controller/CategoryController.php',
        'Controller\\ChatRecordController' => __DIR__ . '/../..' . '/controller/ChatRecordController.php',
        'Controller\\ChatRoomController' => __DIR__ . '/../..' . '/controller/ChatroomController.php',
        'Controller\\DealMessageController' => __DIR__ . '/../..' . '/controller/DealMessageController.php',
        'Controller\\DealRecordController' => __DIR__ . '/../..' . '/controller/DealRecordController.php',
        'Controller\\DealRevieweController' => __DIR__ . '/../..' . '/controller/DealReviewController.php',
        'Controller\\DepositController' => __DIR__ . '/../..' . '/controller/DepositController.php',
        'Controller\\DepositeController' => __DIR__ . '/../..' . '/controller/DepositeController.php',
        'Controller\\FunctionListController' => __DIR__ . '/../..' . '/controller/FunctionListController.php',
        'Controller\\ProblemListController' => __DIR__ . '/../..' . '/controller/ProblemListController.php',
        'Controller\\ProblemReplyController' => __DIR__ . '/../..' . '/controller/ProblemReplyController.php',
        'Controller\\ProductController' => __DIR__ . '/../..' . '/controller/ProductController.php',
        'Controller\\ProductImageController' => __DIR__ . '/../..' . '/controller/ProductImageController.php',
        'Controller\\ProductQuestionController' => __DIR__ . '/../..' . '/controller/ProductQuestionController.php',
        'Controller\\RoleController' => __DIR__ . '/../..' . '/controller/RoleController.php',
        'Controller\\RolePermissionController' => __DIR__ . '/../..' . '/controller/RolePermissionController.php',
        'Controller\\ShoppingListController' => __DIR__ . '/../..' . '/controller/ShoppingListController.php',
        'Controller\\TagListController' => __DIR__ . '/../..' . '/controller/TagListController.php',
        'Controller\\UserController' => __DIR__ . '/../..' . '/controller/UserController.php',
        'Controller\\UserRoleController' => __DIR__ . '/../..' . '/controller/UserRoleController.php',
        'Model\\Addresses' => __DIR__ . '/../..' . '/model/Addresses.php',
        'Model\\Announcement' => __DIR__ . '/../..' . '/model/Announcement.php',
        'Model\\Category' => __DIR__ . '/../..' . '/model/Category.php',
        'Model\\ChatRoom' => __DIR__ . '/../..' . '/model/ChatRoom.php',
        'Model\\DealMessage' => __DIR__ . '/../..' . '/model/DealMessage.php',
        'Model\\DealReview' => __DIR__ . '/../..' . '/model/DealReview.php',
        'Model\\Deposits' => __DIR__ . '/../..' . '/model/Deposits.php',
        'Model\\FunctionList' => __DIR__ . '/../..' . '/model/FunctionList.php',
        'Model\\Phones' => __DIR__ . '/../..' . '/model/Phones.php',
        'Model\\ProblemList' => __DIR__ . '/../..' . '/model/ProblemList.php',
        'Model\\ProblemReply' => __DIR__ . '/../..' . '/model/ProblemReply.php',
        'Model\\Product' => __DIR__ . '/../..' . '/model/Product.php',
        'Model\\ProductImage' => __DIR__ . '/../..' . '/model/ProductImage.php',
        'Model\\ProductQuestion' => __DIR__ . '/../..' . '/model/ProductQuestion.php',
        'Model\\RecordChat' => __DIR__ . '/../..' . '/model/RecordChat.php',
        'Model\\RecordDeal' => __DIR__ . '/../..' . '/model/RecordDeal.php',
        'Model\\Role' => __DIR__ . '/../..' . '/model/Role.php',
        'Model\\RolePermissions' => __DIR__ . '/../..' . '/model/RolePermissions.php',
        'Model\\ShoppingCart' => __DIR__ . '/../..' . '/model/ShoppingCart.php',
        'Model\\ShoppingList' => __DIR__ . '/../..' . '/model/ShoppingList.php',
        'Model\\TagList' => __DIR__ . '/../..' . '/model/TagList.php',
        'Model\\User' => __DIR__ . '/../..' . '/model/User.php',
        'Model\\UserRole' => __DIR__ . '/../..' . '/model/UserRole.php',
        'Model\\UserToken' => __DIR__ . '/../..' . '/model/UserToken.php',
        'Service\\AnnouncementService' => __DIR__ . '/../..' . '/service/AnnouncementService.php',
        'Service\\Authentication' => __DIR__ . '/../..' . '/service/Authentication.php',
        'Service\\CartService' => __DIR__ . '/../..' . '/service/CartService.php',
        'Service\\CategoryService' => __DIR__ . '/../..' . '/service/CategoryService.php',
        'Service\\ChatRecordService' => __DIR__ . '/../..' . '/service/ChatRecordService.php',
        'Service\\ChatRoomService' => __DIR__ . '/../..' . '/service/ChatroomService.php',
        'Service\\DealMessageService' => __DIR__ . '/../..' . '/service/DealMessageService.php',
        'Service\\DealRecordService' => __DIR__ . '/../..' . '/service/DealRecordService.php',
        'Service\\DealReviewService' => __DIR__ . '/../..' . '/service/DealReviewService.php',
        'Service\\DepositsService' => __DIR__ . '/../..' . '/service/DepositeService.php',
        'Service\\File' => __DIR__ . '/../..' . '/service/FileService.php',
        'Service\\FunctionListService' => __DIR__ . '/../..' . '/service/FunctionListService.php',
        'Service\\MailService' => __DIR__ . '/../..' . '/service/MailService.php',
        'Service\\ProblemListService' => __DIR__ . '/../..' . '/service/ProblemListService.php',
        'Service\\ProblemReplyService' => __DIR__ . '/../..' . '/service/ProblemReplyService.php',
        'Service\\ProductImageService' => __DIR__ . '/../..' . '/service/ProductImageService.php',
        'Service\\ProductQuestionService' => __DIR__ . '/../..' . '/service/ProductQuestionService.php',
        'Service\\ProductService' => __DIR__ . '/../..' . '/service/ProductService.php',
        'Service\\RolePermissionsService' => __DIR__ . '/../..' . '/service/RolePermissionsService.php',
        'Service\\RoleService' => __DIR__ . '/../..' . '/service/RoleService.php',
        'Service\\ShoppingListService' => __DIR__ . '/../..' . '/service/ShoppingListService.php',
        'Service\\TagListService' => __DIR__ . '/../..' . '/service/TagListService.php',
        'Service\\TokenService' => __DIR__ . '/../..' . '/service/TokenService.php',
        'Service\\UserRoleService' => __DIR__ . '/../..' . '/service/UserRoleService.php',
        'Service\\UserService' => __DIR__ . '/../..' . '/service/UserService.php',
        'Service\\Validator' => __DIR__ . '/../..' . '/service/Validator.php',
        'auth\\Jwt' => __DIR__ . '/../..' . '/auth/Jwt.php',
        'config\\http\\IRequest' => __DIR__ . '/../..' . '/config/http/IRequest.php',
        'config\\http\\Request' => __DIR__ . '/../..' . '/config/http/Request.php',
        'config\\http\\Router' => __DIR__ . '/../..' . '/config/http/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7728effec66ec6428d871050bb35c1bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7728effec66ec6428d871050bb35c1bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7728effec66ec6428d871050bb35c1bd::$classMap;

        }, null, ClassLoader::class);
    }
}
