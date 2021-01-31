<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ComposerAutoloaderInit48822c97a5d56a3444e8e9b1424f3bf5' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit48822c97a5d56a3444e8e9b1424f3bf5' => $vendorDir . '/composer/autoload_static.php',
    'PasswordCheck\\App\\Application\\Actions\\Login_Action' => $baseDir . '/application/actions/class-login-action.php',
    'PasswordCheck\\App\\Application\\Init\\Password_Check' => $baseDir . '/application/init/class-password-check.php',
    'PasswordCheck\\App\\Application\\Init\\Password_Check_Activator' => $baseDir . '/application/init/class-password-check-activator.php',
    'PasswordCheck\\App\\Application\\Init\\Password_Check_Deactivator' => $baseDir . '/application/init/class-password-check-deactivator.php',
    'PasswordCheck\\App\\Application\\Init\\Password_Check_Loader' => $baseDir . '/application/init/class-password-check-loader.php',
    'PasswordCheck\\App\\Application\\Views\\Login_View' => $baseDir . '/application/views/class-login-view.php',
    'PasswordCheck\\App\\Domain\\Counts' => $baseDir . '/domain/class-counts.php',
    'PasswordCheck\\App\\Domain\\Email_Actions' => $baseDir . '/domain/class-email-actions.php',
    'PasswordCheck\\App\\Domain\\Parse_User_Params' => $baseDir . '/domain/class-parse-user-params.php',
    'PasswordCheck\\App\\Domain\\Password\\Password_Rules' => $baseDir . '/domain/password/class-password-rules.php',
    'PasswordCheck\\App\\Domain\\Password\\Password_Score' => $baseDir . '/domain/password/class-password-score.php',
    'PasswordCheck\\App\\Infrastructure\\Email\\Email_Template' => $baseDir . '/infrastructure/email/class-email-template.php',
    'PasswordCheck\\App\\Infrastructure\\Email\\Interface_Email' => $baseDir . '/infrastructure/email/interface-email.php',
    'PasswordCheck\\App\\Infrastructure\\Error_Messages' => $baseDir . '/infrastructure/class-error-messages.php',
    'PasswordCheck\\App\\Infrastructure\\Repositories\\Abstract_Wp_Connector' => $baseDir . '/infrastructure/repositories/abstract-class-wp-connector.php',
    'PasswordCheck\\App\\Infrastructure\\Repositories\\Interface_Password_Check_Repository' => $baseDir . '/infrastructure/repositories/interface-password-check-repository.php',
    'PasswordCheck\\App\\Infrastructure\\Repositories\\Interface_User_Repository' => $baseDir . '/infrastructure/repositories/interface-user-repository.php',
    'PasswordCheck\\App\\Infrastructure\\Repositories\\Password_Check_Repository' => $baseDir . '/infrastructure/repositories/class-password-check-repository.php',
    'PasswordCheck\\App\\Infrastructure\\Repositories\\Users_Repository' => $baseDir . '/infrastructure/repositories/class-users-repository.php',
);
