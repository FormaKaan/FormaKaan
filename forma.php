<div class="form-wrap">
<style>
form{
background-color:#ADD8E6;
width:50%;
margin:0 auto;
padding:150px;
border-radius: 50px;
border-style: solid; 
border-color: #1E90FF
box-shadow: 20px -15px 10px 5px rgba(0, 0, 0, .5);
font-family: sans-serif;
letter-spacing: 1px;
}
</style>
      <form method="post" action="mail.php">
<fieldset>
<font size="4" Color=black>
<body>
<h1{ 
<padding: 2px;>
<font face="Arial" size = "12" Color="#ffffff" align = "Center">
<img src="logo-kan-6x6cm-rgb-01-2019.jpg"width="100" height="100"/><legend>Заявка на крепление объекта</legend>
</font>
</h1>
</fieldset>
<fieldset>
<h3>
<font face="Arial" size = "4" Color="#000000" align = "Center">
<p><label for="fio"> Введите ФИО:<em>*</em><br></p>
<p><input type="text" name="fio" required></input></label><br></p>
<p><label for="name"> Название компании подающей заявку (только дистрибьютеры):<em>*</em><br></p>
<p><input type="text" name="name" required></input></label><br><br></p>
<p><label for = "email"> Укажите email для обратной связи:<em>*</em><br><input type="email" name="Email" required></input></label><br>
<p><label for = "country"> Укажите город (регион):<em>*</em><br></p><p><input type="text"name="country" required></input></label><br><br></p>
<p><label for = "text">Текст сообщения:</label><br></p>
<p><label><textarea name="text"></textarea><label><br><br></p>
<p><label for="file">Загрузите файл с проектом или спецификацией :</label><br>
<label><input type="file"value="Выберите файл"><label> <br><br></p>
<h5><font face="Arial" size="2" color=black align = "Center"><p><label>Максимальное число файлов:10; Максимальный размер одного файла: 1GB; 
Разрешенные типы файлов: Word, Excel, PPT, PDF, Изображение, Видео, Звук</label><br><br></p></h5></font>
<h3>
<p><label for = "date">Укажите дату - <em>*</em><br><input type="date" name="date"><label><br><br></p>
<h2><label><button type="submit">Отправить</button> <button type="reset">Очистить</button></label></h2>
</font>
</h3>
</fieldset>
</form>
</div>