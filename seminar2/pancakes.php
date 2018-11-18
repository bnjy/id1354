<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <meta name="description" content="A page with tasty recipes">
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/main_style.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/recipe_style.css"/>
  </head>

<body>
  <div class="bg-image">
    <header>
      <?php require 'resources/fragments/header.php' ?>
    </header>

<main>
  <h1>Pancakes</h1>
  <div class ="container">
        <div class="recipe-ingredients">
          <p>Ingredients:</p>
          <ul class="ingredients">
          <li><p>1 1/2 cups all-purpose flour</p></li>
          <li><p>2 tablespoons sugar</p></li>
          <li><p>2 teaspoons baking powder</p></li>
          <li><p>1 teaspoon baking soda</p></li>
          <li><p>1/2 teaspoon salt</p></li>
          <li><p>1 cup milk or buttermilk</p></li>
          <li><p>2 large eggs</p></li>
          <li><p>1/4 cup melted butter</p></li>
        </ul>
        <br>
        <p>Directions:</p>
        <ol class="directions">
          <li><p>In a large mixing bowl, sift together flour, sugar baking powder,
            baking soda, and salt.</p></li>
          <li><p>Whisk in milk, eggs, and melted butter just until combined.</p></li>
          <li><p>Preheat a flat griddle over medium-high heat.</p></li>
          <li><p>Scoop 1/4 cup of pancake batter onto griddle. Let pancakes cook
            until bubbles form before flipping.</p></li>
          <li><p>Cook other side until golden brown. Serve hot with syrup.</p></li>
        </ol>
      </div>
        <img src="resources/images/pancakes_1.jpg" alt="Tasty pancakes" style="width:250px;height:250px;">
        </div>

        <?php require 'resources/fragments/commentForm.php'?>
        <?php require 'resources/fragments/getComments.php'?>

      </main>
</div>
</body>
</html>
