<?php session_start() ?>

<form action="" method="post">
	<p>Введите ваше имя<p>
		<label>
			<input type="text" name="name"/>
		</label>
	<p>Введите ваш возраст<p>
		<label>
			<input type="text" name="age"/>
		</label>
	<p>Введите вашу зарплату<p>
		<label>
			<input type="text" name="salary"/>
		</label>
	<p>Кем вы хотели стать в детстве?<p>
		<label>
			<input type="text" name="question"/>
		</label>
		<input type="submit" value="Отправить">
</form>

<a href="3_1.php">Перейти к просмотру результатов</a>

<?php
if (
	array_key_exists('name', $_POST)
	&& array_key_exists('age', $_POST)
	&& array_key_exists('salary', $_POST)
	&& array_key_exists('question', $_POST)
)
{
	$_SESSION['result'] = [
		'name' => $_POST['name'],
		'age' => $_POST['age'],
		'salary' => $_POST['salary'],
		'question' => $_POST['question']
	];
}