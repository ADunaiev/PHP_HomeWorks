<h1>HomeWork1</h1>
<h4>Завдання</h4>
<p>
Реалізувати маршрут /regexp : створити відповідні файли,
 налаштування серверу та диспетчера доступу. 
 Вбудувати у навігаційне меню, забезпечити його "підсвітку".
 У складі сторінки відзначити основи мови регулярних виразів:
 спецсимволи, групи, квантифікатори, якорі.
</p>
<h4>Виконання</h4>

<?php
    $anchors = [    
        '^' => 'Start of string, or start of line in multi-line pattern',
        '\A' => 'Start of string',
        '$' => 'End of string, or end of line in multi-line pattern',
        '\Z' => 'End of string',
        '\b' => 'Word boundary',
        '\B' => 'Not word boundary',
        '\<' => 'Start of word',
        '\>' => 'End of word'
    ] ;

    $quantifiers = [
        '*' => '0 or more',
        '{3}' => 'Exactly 3',
        '+' => '1 or more',
        '{3,}' => '3 or more',
        '?' => '0 or 1',
        '{3,5}' => '3, 4 or 5'
    ];

    $groups = [
        '.' => 'Any character except new line (\n)',
        '(a|b)' => 'a or b',
        '(...)' => 'Group',
        '(?:...)' => 'Passive (non-c­apt­uring) group',
        '[abc]' => 'Range (a or b or c)',
        '[^abc]' => 'Not (a or b or c)',
        '[a-q]' => 'Lower case letter from a to q',
        '[A-Q]' => 'Upper case letter from A to Q',
        '[0-7]' => 'Digit from 0 to 7',
        '\x' => 'Group/­sub­pattern number "­x"'
    ];

    $characters = [
        '\c' => 'Control character',
        '\s' => 'White space',
        '\S' => 'Not white space',
        '\d' => 'Digit',
        '\D' => 'Not digit',
        '\w' => 'Word',
        '\W' => 'Not word',
        '\x' => 'Hexade­cimal digit',
        '\O' => 'Octal digit'
    ];
?>

<div class="row">

    <div class="col s7">
        <h6><b>Anchors</b></h6>
        <table class="striped light-blue lighten-4">
            <tbody>
                <?php foreach($anchors as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="col s5">
        <h6><b>Quantifiers</b></h6>
        <table class="striped orange lighten-4">
            <tbody>
                <?php foreach($quantifiers as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="col s7">
        <h6><b>Groups and Ranges</b></h6>
        <table class="striped lime lighten-4">
            <tbody>
                <?php foreach($groups as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="col s5">
        <h6><b>Character Classes</b></h6>
        <table class="striped pink lighten-4">
            <tbody>
                <?php foreach($characters as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

