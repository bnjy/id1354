<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <meta name="description" content="A page with tasty recipes">
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/main_style.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/calendar.css"/>
  </head>
<body>
  <div class="bg-image">
    <header>
      <?php require 'resources/fragments/header.php' ?>
    </header>

<h1>Calendar</h1>

    <div class="cal_container">
    <div style="overflow-x:auto;">
    <table>
      <tr id="days">
        <td>S</td>
        <td>M</td>
        <td>T</td>
        <td>W</td>
        <td>Th</td>
        <td>F</td>
        <td>S</td>
      </tr>
      <tr>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td id="meatballs"><a href="meatballs.html">
          <img src="resources/images/meatballs_1.jpg" alt="Tasty meatballs"
           style="width:110px;height:110px;"></a></td>
        <td>5</td>
        <td>6</td>

      </tr>
      <tr>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
      </tr>
      <tr>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td id="pancakes"><a href="pancakes.html">
          <img src="resources/images/pancakes_1.jpg" alt="Tasty pancakes"
           style="width:110px;height:110px;"></a></td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
      </tr>
      <tr>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
        <td>27</td>
      </tr>
      <tr>
        <td>28</td>
        <td>29</td>
        <td>30</td>
        <td>31</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
    </div>
    </div>
  </body>
