<?=$Landing_index['var1']?>

cuerpo

<?php echo "{$Landing_index['var2']}"?>

<br>
	Target: <?php var_dump($match['target']); ?>
<br>

	Params: <?php var_dump($match['params']); ?>
<br>

	Name: 	<?php var_dump($match['name']); ?>
<h1>AltoRouter</h1>

<h3>Current request: </h3>
<pre>
	Target: <?php var_dump($match['target']); ?>
	Params: <?php var_dump($match['params']); ?>
	Name: 	<?php var_dump($match['name']); ?>
</pre>

<h3>Try these requests: </h3>
<p>
	<a href="<?php echo $router->generate('landing'); ?>">
		GET <?php echo $router->generate('landing'); ?>
	</a>
</p>

<p>
	<a href="<?php echo $router->generate('users_show', array('id' => 5)); ?>">
		GET <?php echo $router->generate('users_show', array('id' => 5)); ?>
	</a>
</p>
<p>
	<form action="<?php echo $router->generate('users_do', array('id' => 10, 'action' => 'update')); ?>" method="post">
		<button type="submit">
			<?php echo $router->generate('users_do', array('id' => 10, 'action' => 'update')); ?>
		</button>
	</form>
</p>
<?php 

function sum(...$números) {
    $acc = 0;
    foreach ($números as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);


 ?>