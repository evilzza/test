<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Формы и Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Форма регистрации -->
        <section class="form-section">
            <h2>Регистрация пользователя</h2>
            <form action="action.php" method="post">
                <div class="form-group">
                    <label for="name">Имя *</label>
                    <input type="text" id="name" name="name" required placeholder="Введите ваше имя">
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required placeholder="example@mail.com">
                </div>
                
                <div class="form-group">
                    <label for="password">Пароль *</label>
                    <input type="password" id="password" name="password" required placeholder="Минимум 6 символов">
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Подтвердите пароль *</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                
                <div class="form-group">
                    <label for="gender">Пол</label>
                    <select id="gender" name="gender">
                        <option value="">Выберите пол</option>
                        <option value="male">Мужской</option>
                        <option value="female">Женский</option>
                        <option value="other">Другой</option>
                    </select>
                </div>
                
                <div class="form-group checkbox-group">
                    <label>
                        <input type="checkbox" name="agree" required>
                        Я согласен с условиями использования
                    </label>
                </div>
                
                <button type="submit" name="register">Зарегистрироваться</button>
            </form>
        </section>

        <!-- Калькулятор -->
        <section class="calculator-section">
            <h2>Калькулятор</h2>
            <form action="action.php" method="post">
                <div class="calc-group">
                    <input type="number" id="num1" name="num1" step="any" required placeholder="Первое число">
                </div>
                
                <div class="calc-group">
                    <input type="number" id="num2" name="num2" step="any" required placeholder="Второе число">
                </div>
                
                <div class="calc-buttons">
                    <button type="submit" name="operation" value="add">+</button>
                    <button type="submit" name="operation" value="subtract">−</button>
                    <button type="submit" name="operation" value="multiply">×</button>
                    <button type="submit" name="operation" value="divide">÷</button>
                </div>
            </form>
            
            <?php if (isset($_GET['result'])): ?>
                <div class="result <?php echo isset($_GET['error']) ? 'error' : 'success'; ?>">
                    <?php 
                    echo htmlspecialchars($_GET['result']); 
                    if (isset($_GET['error'])) echo '<br><small>Ошибка!</small>';
                    ?>
                </div>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>
