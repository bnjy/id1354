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

  <h1>Meatballs</h1>

  <div class ="container">
        <div class="recipe-ingredients">
          <p>Ingredients:</p>
          <ul class="ingredients">
            <li><p>1 small onion, chopped</p></li>
            <li><p>1 large egg</p></li>
            <li><p>1/4 cup seasoned bread crumbs</p></li>
            <li><p>2 tablespoons 2% milk</p></li>
            <li><p>1/2 teaspoon salt</p></li>
            <li><p>1/8 teaspoon pepper</p></li>
            <li><p>1 pound ground beef</p></li>
          </ul>

          <p>&nbsp;</p>
          <p>Directions:</p>
          <ol class="directions">
            <li><p>In a large bowl, combine the onion, egg, bread crumbs, milk,
              salt and pepper. Crumble beef over mixture and mix well. Shape
              into 1-in. meatballs, about 24.</p></li>
            <li><p>Place in a shallow 1-1/2-qt. microwave-safe dish. Cover and
              microwave on high until meat is no longer pink, 7-1/2 minutes;
              drain.</p></li>
            <li><p>Combine the soup, sour cream, milk, parsley and, if desired,
              nutmeg; pour over meatballs. Cover and cook on high until heated
              through, 5-6 minutes. Serve with noodles and, if desired, top
              with parsley.</p></li>
          </ol>
        </div>

        <img src="resources/images/meatballs_1.jpg" alt="Tasty meatballs" style="width:250px;height:250px;">

    </div>

    <?php require 'resources/fragments/commentForm.php'?>
    <?php require 'resources/includes/getComments.inc.php'?>

  </main>
  </div>
</body>
</html>
