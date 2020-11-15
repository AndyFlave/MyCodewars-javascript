<? include_once '../../header.php'; ?>

<main>
	<div class="container margin-top">


	</div>
</main>

<? include_once '../../scripts.php' ?>


<script>

	let theme1 = new CreateThemeBlock('Конструкторы, создание объектов через "new"', 'one');
	let task1_1 = new CreateTaskBlock('Тест', 'one', example, 'Ответ: 6');
	function example(a, b){
		c = a + b;
		return c
	}
	let task1_2 = new CreateTaskBlock('Теasdasdasст', 'one');
	let task1_3 = new CreateTaskBlock('Тест', 'one');
	

	let theme2 = new CreateThemeBlock('Конструкторы, создание объектов через "new"', 'two');
	let task2_1 = new CreateTaskBlock('Тест', 'two');
	let task2_2 = new CreateTaskBlock('Тест', 'two');
	let task2_3 = new CreateTaskBlock('Тест', 'two');
	let task2_4 = new CreateTaskBlock('Тест', 'two');

	let theme3 = new CreateThemeBlock('Конструкторы, создание объектов через "new"', 'three');
	let task3_1 = new CreateTaskBlock('Тест', 'three');

</script>

<? include_once '../../footer.php'; ?>