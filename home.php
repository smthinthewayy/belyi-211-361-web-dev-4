<?php
include 'header.html';
?>

<section id="about" class="about">
    <div class="connection" id="connection">

        <!-- вывод информативного сообщения -->
        <?php
        echo '<p> Здравствуйте, ' . $_POST['login'] . '</p>';
        if ($_POST['category'] == '1') {
            echo '<p>Спасибо за ваше предложение:</p>';
            echo '<textarea>' . $_POST['message'] . '</textarea>';
        } else {
            echo '<p>Мы рассмотрим Вашу жалобу:</p>';
            echo '<textarea rows="10" cols = "100">' . $_POST['message'] . '</textarea>';
        }
        ?>

        <!-- вывод сообщения о прикрепленном файле -->
        <br>
        <?php
        $file;
        if (isset($_POST['file'])& $_POST['file'] != '')
            echo 'Вы приложили следующий файл: ' . $_POST['file'];
        ?>
        <br>

        <!-- заполнить снова -->
        <?php
        echo '<a 
                class="btn" href="/index.php?login=' . $_POST['login'] . '&email=' . $_POST['email'] . '&contact=' . $_POST['contact'] . '">Заполнить снова
                </a>';
        ?>

    </div>
</section>

<footer id="footer1" class="footer1">
    <div class="container">
        <li>
            <?php
            echo date('Сформировано d.m.Y в G:i:s', time() + 3600 * 3);
            ?>
        </li>
    </div>
</footer>
</body>

</html>