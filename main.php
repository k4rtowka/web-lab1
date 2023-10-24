<!-- Валидация на php -->
<!-- И таблицу -->
<!-- Инетрав на отрезок -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/target.jpeg" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="css/result.css">
    <title>Aim target</title>
  </head>
  <body>
    <!-- Шапка сайта -->
    <header>
      <span id="icon">
        <a href="https://vk.com/k4rtowka" id="vk">
          <img src="img/vk.png" alt="vk" />
        </a>
        <a
          href="https://instagram.com/d4ne.k?igshid=OGQ5ZDc2ODk2ZA=="
          id="inst"
        >
          <img src="img/instagram.png" alt="instagram" />
        </a>
        <a href="https://github.com/k4rtowka" id="git">
          <img src="img/github.png" alt="github" />
        </a>
      </span>
      <span id="lab">Лабораторная работа 1</span>
      <span id="info">
        Дубук Даниил
        <br />
        Группа: Р3219
        <br />
        Вариант 2984
      </span>
    </header>

    <!-- Основная часть -->
    <table class="main-table">
      <tr>
        <td><canvas id="graph"></canvas></td>
      </tr>
      <tr>
        <td>
          <form id="coordinates-form" action="php/check.php" method="get">
            <div class="x-radios">
              X:
              <label>
                -3
                <input class="x-radio" type="radio" name="x" value="-3" />
              </label>
              <label>
                -2
                <input class="x-radio" type="radio" name="x" value="-2" />
              </label>
              <label>
                -1
                <input class="x-radio" type="radio" name="x" value="-1" />
              </label>
              <label>
                0
                <input class="x-radio" type="radio" name="x" value="0" checked/>
              </label>
              <label>
                1
                <input class="x-radio" type="radio" name="x" value="1" />
              </label>
              <label>
                2
                <input class="x-radio" type="radio" name="x" value="2" />
              </label>
              <label>
                3
                <input class="x-radio" type="radio" name="x" value="3" />
              </label>
              <label>
                4
                <input class="x-radio" type="radio" name="x" value="4" />
              </label>
              <label>
                5
                <input class="x-radio" type="radio" name="x" value="5" />
              </label>
            </div>
            <div class="Y-text" id="Y">
              <label class="field">
                Y:
                <input
                  id="Y-text"
                  class="Y-text-input"
                  type="text"
                  name="y"
                  placeholder="(-5; 5)"
                  maxlength="14"
                  required
                />
              </label>
            </div>
            <div class="R-text" id="R">
              <label class="field">
                R:
                <input
                  id="R-text"
                  class="R-text-input"
                  type="text"
                  name="r"
                  placeholder="(1; 4)"
                  maxlength="14"
                  required
                />
              </label>
            </div>
            <button id="submit-button" type="submit">Отправить</button>
            <a href="php/clear.php" class="btn">Очистить таблицу</a>
          </form>
        </td>
      </tr>
    </table>

    <table id="check" class="table-check">
            <tr class="table-header">
                <th scope="col">X</th>
                <th scope="col">Y</th>
                <th scope="col">R</th>
                <th scope="col">Текущее время</th>
                <th scope="col">Время исполнения</th>
                <th scope="col">Результат попадания</th>
            </tr>
    </table>

    <script src="js/graphic.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
