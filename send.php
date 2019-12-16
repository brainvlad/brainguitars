<?

if(isset($_POST["name"]))
{
        if(isset($_POST["name"]))
        {
                $name = $_POST["name"];
        }
        if(isset($_POST["email"]))
        {
                $phone= $_POST["email"];
        }
        if(isset($_POST["massage"]))
        {
                $body = $_POST["massage"];
        }

        if($name=="" or $email=="" or $massage=="")
        { // Проверяем на заполненность всех полей.
                echo "Пожалуйста, заполните все поля";
        }
        else
        {
                $ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
                $brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
                $to = "wladiik@gmail.com"; // Ваш email адрес
                $subject = "Message from brainguitars.com"; // тема письма
                $headers .= "Content-Type: text/html;
                ";
                $headers .= "Sender: site visitor"; // Отправитель письма
                $message = "
                Имя: $name<br>
                Email's: $email<br>
                Текст: $message<br><br>

                IP Sender: $ip<br>
                Sender Browser: $brose<br>
                ";

                $send = mail($to, $subject, $message, $headers);
                if ($send == "true")
                {
                        echo "Your massage is send. We will reply shortly.";
                }
                else
                {
                        echo "Не удалось отправить, попробуйте снова!";
                }
        }
}

?>