<?php

$question = " В каком году произошла отмена крепостного права: 1903, 1861, 1855?\n";

$question_second = "Введите один из перечисленных вариантов.\n";

$answer = readline($question);

switch ($answer) {
    case '1861':
        echo("\nЭто корректный ответ");
        break;
    case '1903':
        echo("\nЭто некорректный ответ");
        break;
    case '1855':
        echo("\nЭто некорректный ответ");
        break;
    default:
        $answer = readline($question_second . $question);
        switch ($answer) {
            case '1861':
                echo("\nЭто корректный ответ");
                break;
            case '1903':
                echo("\nЭто некорректный ответ");
                break;
            case '1855':
                echo("\nЭто некорректный ответ");
                break;
            default:
                echo("\nВы не справились с заданием");
                break;
        }
}

