<?php
// Обработка формы регистрации
if (isset($_POST['register'])) {
    $errors = [];
    $success = false;
    
    // Валидация email
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Некорректный формат email";
    }
    
    // Валидация пароля
    if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
        $errors[] = "Пароль должен содержать минимум 6 символов";
    }
    
    // Проверка совпадения паролей
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $errors[] = "Пароли не совпадают";
    }
    
    // Проверка согласия с условиями
    if (empty($_POST['agree'])) {
        $errors[] = "Необходимо согласиться с условиями";
    }
    
    // Перенаправление с результатами
    if (empty($errors)) {
        $success = true;
        $message = "Регистрация успешна, " . htmlspecialchars($_POST['name']) . "!";
    } else {
        $message = implode("<br>", $errors);
    }
    
    header("Location: index.php?status=" . ($success ? 'success' : 'error') . 
           "&message=" . urlencode($message));
    exit;
}

// Обработка калькулятора
if (isset($_POST['operation'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = $_POST['operation'];
    $result = null;
    $error = false;
    
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            $operator = '+';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $operator = '−';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $operator = '×';
            break;
        case 'divide':
            if ($num2 == 0) {
                $error = true;
                $result = "Деление на ноль невозможно!";
            } else {
                $result = $num1 / $num2;
                $operator = '÷';
            }
            break;
        default:
            $error = true;
            $result = "Неизвестная операция";
    }
    
    // Перенаправление с результатом
    $redirect = "Location: index.php?result=" . urlencode(
        "{$num1} {$operator} {$num2} = " . (is_numeric($result) ? round($result, 4) : $result)
    );
    if ($error) $redirect .= "&error=1";
    
    header($redirect);
    exit;
}

// Если файл открыт напрямую
header("Location: index.php");
exit;
?>
