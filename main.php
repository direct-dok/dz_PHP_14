<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <div class="flex-container">

        <div class="header">
            <div class="header__wrapper">
                <div class="header__top-block">
                    <?php include 'template/logo.inc.php' ?>
                    <?php include 'template/menu.inc.php' ?>
                </div>
                <div class="header__content">
                    <div class="header__content-wrapper">
                        <h1>
                            <?php echo $caption ?>
                        </h1>
                        <p><?php echo $textHeader ?></p>
                    </div>
                </div>
            </div>
            <div class="header__transparent-block"></div>
        </div>

        <div class="about_me">
            <div class="about_me__wrapper">
                <h2> <?php echo $p ?> </h2>

                <div class="data">
                    <div class="myImg">
                        <?php
                        echo '<img src="img/programmer.jpg">';
                        ?>
                    </div>

                    <div class="fullname">
                        <ul>
                            <li>Меня зовут: <?php echo $name, ' ', $surname; ?></li>
                            <li><?php echo 'Город:', ' ', $city; ?></li>
                            <li>Мне: <?php echo $age; ?> лет</li>
                            <li>Мы научились создавать переменные</li>
                            <li>Изучили простые операции с ними</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="knowledge">
                <h2>Базовый синтаксис PHP</h2>
                <div class="knowledge__code-block">
                    <p>Давайте объявим переменную и сразу выведем ее на страницу:</p>
                    <code>
                        <p><span class="php_variable">$string</span> <span class="php_operator">=</span> <span class="php_string">'This is string'</span><span class="php_punctuation">;</span></p>
                        </p><span class="php_operator">echo</span> <span class="php_variable">$string</span><span class="php_punctuation">;</span></p>
                    </code>
                    <p>Результат вывода: <strong><?php
                                                    $string = 'This is string';
                                                    echo $string;
                                                    ?></strong>
                    </p>
                </div>

                <div class="knowledge__code-block">
                    <p>PHP умеет складывать и вычитать значение одной переменной из другой, а также умножать и делить:</p>
                    <code>
                        <p><span class="php_variable">$ten</span> <span class="php_operator">=</span> <span class="php_integer">10</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$fifteen</span> <span class="php_operator">=</span> <span class="php_integer">15</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_operator">echo</span> <span class="php_variable">$ten</span> <span class="php_operator">+</span> <span class="php_variable">$fifteen</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_operator">echo</span> <span class="php_string">'&#60;br /&#62;'</span> <span class="php_punctuation">;</span></p>
                        <p><span class="php_operator">echo</span> <span class="php_variable">$ten</span> <span class="php_operator">*</span> <span class="php_variable">$fifteen</span><span class="php_punctuation">;</span></p>
                    </code>
                    <p>Результат вывода: <strong><?php
                                                    $ten = 10;
                                                    $fifteen = 15;
                                                    echo $ten + $fifteen;
                                                    echo ', ';
                                                    echo $ten * $fifteen;
                                                    ?></strong>
                    </p>
                </div>

                <div class="knowledge__code-block">
                    <p>PHP умеет выполнять код в зависимости от условия. Это конструкция if else:</p>
                    <code>
                        <p><span class="php_variable">$twenty</span> <span class="php_operator">=</span> <span class="php_integer">20</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$twentyFive</span> <span class="php_operator">=</span> <span class="php_integer">25</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_construct">if</span> <span class="php_punctuation">(</span><span class="php_variable">$twenty</span> <span class="php_operator">
                                < </span> <span class="php_variable">$twentyFive</span><span class="php_punctuation">)</span> <span class="php_punctuation">{</span></p>
                        <p class="tab_one"><span class="php_operator">echo</span> <span class="php_string">'25 больше 20'</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_punctuation">}</span></p>
                    </code>
                    <p>Результат вывода: <strong><?php
                                                    $twenty = 20;
                                                    $twentyFive = 25;
                                                    if ($twenty < $twentyFive) {
                                                        echo '25 больше 20';
                                                    }
                                                    ?></strong>
                    </p>
                </div>

                <div class="knowledge__code-block">
                    <p>Довольно частп, при разработке на PHP, да и вообще на любом языке программирования, требуется выполнить одно и то же действие несколько раз. Повторять один и тот-же код, неэффективно, и для этого есть циклы. Мы рассмотрим один из популярных, но не самых часто используемых в PHP циклов, он называется <strong>"while"</strong>:</p>
                    <code>
                        <p><span class="php_variable">$i</span> <span class="php_operator">=</span> <span class="php_integer">1</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_construct">while</span> <span class="php_punctuation">(</span><span class="php_variable">$i</span> <span class="php_operator">
                                <= </span> <span class="php_integer">10</span><span class="php_punctuation">)</span> <span class="php_punctuation">{</span></p>
                        <p class="tab_one"><span class="php_operator">echo</span> <span class="php_variable">$i</span><span class="php_operator">++</span> <span class="php_punctuation">.</span> <span class="php_string">", "</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_punctuation">}</span></p>
                    </code>
                    <p>Результат вывода: <strong><?php
                                                    $i = 1;
                                                    while ($i <= 10) {
                                                        echo $i++ . ", ";
                                                    }
                                                    ?></strong>
                    </p>
                </div>

                <div class="knowledge__code-block">
                    <p>Мы можем подключать другие файлы, к нашей странице и выводить данный из подключенного файла на странице. Это удобно тем, что мы подключаем файл в одном месте, в файле может быть код навигации по сайту. Если бы мы копировали код навигации на каждую страницу, вставляли бы его стандартным способом в код HTML, то для того, чтобы изменить навигацию, нам нужно было бы внести изменения на 10, 100 или даже 1000 страниц, это крайне неудобно, долго и просто расточительно. Но при подключении навигации из файла, используя инструкцию <strong>include</strong>, код будет подключаться на все страницы сайта, а если мы захотим изменить навигацию, мы изменим ее в одном файле и изменения применятся на все страницы сайта. Это очень удобно. Конечно шаблоны на PHP сайтах работают сложнее, но принцип примерно тот же. Ниже мы продемонстрируем как подключить файл и выведем результат.</p>
                    <code>
                        <p><span class="php_operator">include</span> <span class="php_string">'template/knowledge.inc.php'</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_comment">// Ниже приведен код из файла 'knowledge.inc.php'. Этот файл подключен к нашей странице и ниже будут результаты его обработки. Кстати, двойной слэш, это комментарий в PHP. Эта строка не учитывается интерпретатором PHP и не будет обработана или выведена на экран, это просто комментарий. Данная строка ни на что не влияет. Зато данным способом, можно внедрять в код комментарий, например, чтобы не забыть, за что отвечает конкретная часть кода</span></p>
                        <p></p>
                        <p><span class="php_variable">$a</span> <span class="php_operator">=</span> <span class="php_string">'Мои знания на'</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$b</span> <span class="php_operator">=</span> <span class="php_integer">100</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$c</span> <span class="php_operator">=</span> <span class="php_string">'%'</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$price</span> <span class="php_operator">=</span> <span class="php_integer">15</span><span class="php_punctuation">;</span></p>

                        <p><span class="php_construct">if</span><span class="php_punctuation"> (</span><span class="php_variable">$price</span><span class="php_operator"> >=</span> <span class="php_integer">15</span> <span class="php_operator">&&</span> <span class="php_variable">$price</span>
                            <span class="php_operator">
                                <= </span> <span class="php_integer">20</span><span class="php_punctuation">)</span>
                        </p>
                        <p class="tab_one"><span class="php_variable">$d</span> <span class="php_operator">=</span> <span class="php_string">'Это число находится между 15 и 20'</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_comment">// Ниже представлен код, который выводит на экран, значения кода представленного выше</span></p>
                        <p><span class="php_operator">echo</span> <span class="php_variable">$a</span><span class="php_punctuation">,</span> <span class="php_string">' '</span><span class="php_punctuation">,</span> <span class="php_variable">$b</span><span class="php_punctuation">,</span> <span class="php_string">' '</span><span class="php_punctuation">,</span> <span class="php_variable">$c</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$a</span> <span class="php_operator">=</span> 10<span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$b</span> <span class="php_operator">=</span> 20<span class="php_punctuation">;</span></p>
                        <p><span class="php_variable">$c</span> <span class="php_operator">=</span> <span class="php_variable">$a</span> <span class="php_operator">+</span> <span class="php_variable">$b</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_operator">echo</span> <span class="php_variable">$c</span><span class="php_punctuation">;</span></p>
                        <p><span class="php_operator">echo</span> <span class="php_variable">$d</span><span class="php_punctuation">;</span></p>
                    </code>
                    <?php include 'template/knowledge.inc.php'; ?>
                    <p>Результат вывода: <strong>
                            <?php
                            echo $a, ' ', $b, ' ', $c;
                            ?>, </strong><strong>

                            <?php
                            $a = 10;
                            $b = 20;
                            $c = $a + $b;
                            echo $c;
                            ?> </strong>, <strong>
                            <?php
                            echo $d;
                            ?></strong></p>
                </div>
            </div>

            <div class="article">
                <h2>Мы изучили основы PHP!</h2>
                <p class="text">
                    Сторонники языка PHP в качестве основных его преимуществ называют широкую распространённость, востребованность PHP-разработчиков на рынке труда и простоту изучения. К достоинствам языка относится и его достаточно быстрая эволюция. В то же время язык часто критикуют за несогласованный синтаксис функций и неортогональность дизайна. Эту критику признают отчасти справедливой (хотя и гипертрофированной) и некоторые участники сообщества PHP-разработчиков.
                </p>
            </div>
        </div>

        <?php include 'template/footer.inc.php' ?>

    </div>

</body>

</html>