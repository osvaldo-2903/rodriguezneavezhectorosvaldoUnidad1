<?php
class SessionManager {
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function destroySession() {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }
}

// Uso de la clase para cerrar sesión
$sessionManager = new SessionManager();
$sessionManager->destroySession();

// Redirigir al usuario a la página de inicio o de login
header("Location: index.html");
exit();
?>