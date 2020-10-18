<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to PayTabs Assignment With CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>

<body>
    <header>
        <div class="heroe">
            <h1>Welcome to PayTabs Assignment With CodeIgniter</h1>
        </div>
    </header>

    <section>

        <h1>Select a category from the list:</h1>
        <?php foreach($categories as $chunkedCategories): ?>
            <select>
                <option value=''>Please, Select a category</option>
                <?php foreach($chunkedCategories as $category): ?>
                    <option value="<?=$category['id']?>">
                        <?=$category['name']?>
                    </option>
                <?php endforeach ?>
            </select>
        <?php endforeach ?>

    </section>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	<div class="environment">
		<p>Page rendered in {elapsed_time} seconds</p>
	</div>

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
			open source licence.</p>

	</div>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

</body>
</html>