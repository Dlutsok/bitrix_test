<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
		<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/styles.css">

	</head>
	<body>

		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

 <header class="header">
    <!-- Лого -->
    <img src="logo.png" alt="Лого" class="logo">

    <!-- Поле поиска -->
    <input type="text" placeholder="Поиск" class="search-field">

    <!-- Пункты меню -->
    <nav>
      <ul class="menu">
        <li><a href="#">Это тест</a></li>
        <li><a href="#">Мероприятия</a></li>
        <li><a href="#">Эксперты</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Вопросы</a></li>
      </ul>
    </nav>

    <!-- Иконки -->
    <div class="icons">
      <img src="icon1.png" alt="Иконка 1" class="icon">
      <img src="icon2.png" alt="Иконка 2" class="icon">
      <img src="icon3.png" alt="Иконка 3" class="icon">
      <img src="icon4.png" alt="Иконка 4" class="icon">
    </div>

    <!-- Кнопка "Личный кабинет" -->
    <button class="account-button">Личный кабинет</button>
  </header>

